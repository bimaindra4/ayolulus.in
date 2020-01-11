<?php
class TentorModel extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
    }

    public function GetDataTentor($uid="") {
        $this->db->select("tmt.*, tmp.pt_nama AS pt, tjj.jafung_nama AS jafung, 
                           GROUP_CONCAT(tbj.id_bidang) AS _idbidang,
                           GROUP_CONCAT(tbj.bidang_nama) AS bidang");
        $this->db->join("tbl_jafung_jenis tjj", "tmt.id_jafung = tjj.id_jafung");
        $this->db->join("tbl_master_pt tmp", "tmt.id_pt = tmp.id_pt");
        $this->db->join("tbl_tentor_bidang ttb", "tmt.id_tentor = ttb.id_tentor");
        $this->db->join("tbl_bidang_jenis tbj", "ttb.id_bidang = tbj.id_bidang");
        ($uid == "" ? "" : $this->db->where("tmt.id_tentor_url", $uid));
        $sql = $this->db->get("tbl_master_tentor tmt");

        if($sql->num_rows() == 0) {
            return [];
        } else {
            if($uid == "") {
                return $sql->result();
            } else {
                return $sql->row();
            }
        }
    }

    public function CariDataTentor($jenis,$keyword) {
        $this->db->select("tmt.*, tmp.pt_nama AS pt, tjj.jafung_nama AS jafung");
        $this->db->join("tbl_jafung_jenis tjj", "tmt.id_jafung = tjj.id_jafung");
        $this->db->join("tbl_master_pt tmp", "tmt.id_pt = tmp.id_pt");

        if($jenis == "nama") {
            $this->db->where("tentor_nama", $keyword);
        } else if($jenis == "identitas") {
            $this->db->where("tentor_identitas", $keyword);
        }

        $sql = $this->db->get("tbl_master_tentor tmt");

        if($sql->num_rows() == 0) {
            return [];
        } else {
            return $sql->result();
        }
    }

    public function DataPublikasiTentor($uidt) {
        $this->db->select("ttp.publikasi_judul, tpj.jenis_publikasi, ttp.status");
        $this->db->join("tbl_publikasi_jenis tpj", "ttp.id_jenis_publikasi = tpj.id_jenis_publikasi");
        $this->db->join("tbl_master_tentor tmt", "ttp.id_tentor = tmt.id_tentor");
        $this->db->where("tmt.id_tentor_url", $uidt);
        $sql = $this->db->get("tbl_tentor_publikasi ttp");
        
        return ($sql->num_rows() == 0 ? [] : $sql->result());
    }

    public function DataGelarTentor($uidt) {
        $this->db->select("tgj.gelar_jenis, ttg.no_ijazah, ttg.status");
        $this->db->join("tbl_gelar_jenis tgj", "ttg.id_gelar = tgj.id_gelar");
        $this->db->join("tbl_master_tentor tmt", "ttg.id_tentor = tmt.id_tentor");
        $this->db->where("tmt.id_tentor_url", $uidt);
        $sql = $this->db->get("tbl_tentor_gelar ttg");
        
        return ($sql->num_rows() == 0 ? [] : $sql->result());
    }

    public function DataRiwayatBimbinganTentor($uidt) {

    }

    public function StatistikTentor() {
        $this->db->select("tmt.tentor_identitas,
                           tmt.tentor_nama,
                           IFNULL(SUM(tpj.poin_publikasi),0) AS publikasi,
                           IFNULL(SUM(tgj.gelar_poin),0) AS gelar,
                           IFNULL(tjj.jafung_poin,0) AS jafung,
                           IFNULL(AVG(ttr.rating),0) AS riwayat");
        $this->db->join("tbl_tentor_publikasi ttp", "tmt.id_tentor = ttp.id_tentor", "LEFT");
        $this->db->join("tbl_publikasi_jenis tpj", "ttp.id_jenis_publikasi = tpj.id_jenis_publikasi");
        $this->db->join("tbl_tentor_gelar ttg", "tmt.id_tentor = ttg.id_tentor", "LEFT");
        $this->db->join("tbl_gelar_jenis tgj", "ttg.id_gelar = tgj.id_gelar", "LEFT");
        $this->db->join("tbl_jafung_jenis tjj", "tmt.id_jafung = tjj.id_jafung", "LEFT");
        $this->db->join("tbl_ta_rating ttr", "tmt.id_tentor = ttr.id_tentor", "LEFT");
        $this->db->group_by("tmt.id_tentor");
        $sql = $this->db->get("tbl_master_tentor tmt");
        
        return ($sql->num_rows() == 0 ? [] : $sql->result());
    }

    public function DetailDataTentor($uidt) {

    }

    public function TambahTentor($data) {
        $sql = $this->db->insert("tbl_master_tentor", $data);
        return $sql;
    }

    public function TambahPublikasi($data) {
        $sql = $this->db->insert("tbl_tentor_publikasi", $data);
        return $sql;
    }

    public function TambahGelar($data) {
        $sql = $this->db->insert("tbl_tentor_gelar", $data);
        return $sql;
    }

    public function EditTentor($data,$uidt) {
        $sql = $this->db->update("tbl_master_tentor", $data, ["id_tentor_url" => $uidt]);
        return $sql;
    }

    public function HapusTentor($uidt) {
        $sql = $this->db->delete("tbl_master_tentor", ["id_tentor_url" => $uidt]);
        return $sql;
    }

    public function ValidasiTentor($uidt) {
        $data = [ 
            "tentor_status" => 2,
            "modified_at" => $this->AppModel->DateTimeNow()
        ];

        $sql = $this->EditTentor($data,$uidt);
        return $sql;
    }

    public function ValidasiPengalaman($jenis,$uidp) {
        $data = [
            "status" => 1,
            "modified_at" => $this->AppModel->DateTimeNow()
        ];

        if($jenis == "data_diri") {
            $sql = $this->ValidasiTentor($uidp);
        } else if($jenis == "publikasi") {
            $sql = $this->db->update("tbl_tentor_publikasi", $data, ["id_tentor_publikasi_url" => $uidp]);
        } else if($jenis == "gelar") {
            $sql = $this->db->update("tbl_tentor_gelar", $data, ["id_tentor_gelar_url" => $uidp]);
        } else if($jenis == "jafung") {
            $sql = $this->db->update("tbl_jafung_jenis", $data, ["id_jafung_url" => $uidp]);
        }

        return $sql;
    }
}