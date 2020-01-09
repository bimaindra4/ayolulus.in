<?php
class MahasiswaModel extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
    }

    public function GetDataMahasiswa($uid="") {
        $this->db->select("tmm.*, tmp.pt_nama AS pt, tpj.jurusan_nama AS jurusan");
        $this->db->join("tbl_pt_jurusan tpj", "tmm.id_jurusan = tpj.id_jurusan_pt");
        $this->db->join("tbl_master_pt tmp", "tmm.id_pt = tmp.id_pt");
        ($uid == "" ? "" : $this->db->where("tmm.id_mahasiswa_url", $uid));
        $sql = $this->db->get("tbl_master_mahasiswa tmm");

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
}