<?php
class TentorModel extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
    }

    public function GetDataTentor($uid="") {
        $this->db->select("tmt.*, tmp.pt_nama AS pt, tjj.jafung_nama AS jafung");
        $this->db->join("tbl_jafung_jenis tjj", "tmt.id_jafung = tjj.id_jafung");
        $this->db->join("tbl_master_pt tmp", "tmt.id_pt = tmp.id_pt");
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

    }

    public function DataGelarTentor($uidt) {

    }

    public function DataJafungTentor($uidt) {

    }

    public function DataRiwayatBimbinganTentor($uidt) {

    }

    public function DetailDataTentor($uidt) {

    }

    public function TambahTentor($data) {
        $sql = $this->db->insert("tbl_master_tentor", $data);
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