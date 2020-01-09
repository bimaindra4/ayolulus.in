<?php
class LoginModel extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
    }

    function Verification($user,$pass) {
        // Super Admin Query
        $this->db->select("tsa.id_sadmin_url AS id, tsa.sadmin_username AS username, tsa.sadmin_password AS password, tsa.sadmin_nama AS nama, '1' AS status");
        $this->db->from("tbl_super_admin tsa");
        $this->db->where("tsa.sadmin_username", $user);
        $this->db->where("tsa.sadmin_password", $pass);
        $tsa = $this->db->get_compiled_select();
        
        // Tentor Query
        $this->db->select("tmt.id_tentor_url AS id, tmt.tentor_username AS username, tmt.tentor_password AS password, tmt.tentor_nama AS nama, '2' AS status");
        $this->db->from("tbl_master_tentor tmt");
        $this->db->where("tmt.tentor_username", $user);
        $this->db->where("tmt.tentor_password", $pass);
        $tmt = $this->db->get_compiled_select();

        // Mahasiswa Query
        $this->db->select("tmm.id_mahasiswa_url AS id, tmm.mhs_username AS username, tmm.mhs_password AS password, tmm.mhs_nama AS nama, '3' AS status");
        $this->db->from("tbl_master_mahasiswa tmm");
        $this->db->where("tmm.mhs_username", $user);
        $this->db->where("tmm.mhs_password", $pass);
        $tmm = $this->db->get_compiled_select();

        $sql = $this->db->query($tsa.' UNION '.$tmt.' UNION '.$tmm);
        if($sql->num_rows() == 0) {
            return [];
        } else {
            foreach($sql->result() as $row) {
                if($row->id != NULL) {
                    $result = $row;
                    $user_db = $result->username;
                    $pass_db = $result->password;

                    break;
                } else {
                    $user_db = "";
                    $pass_db = "";
                }
            }

            if($user_db == $user && $pass_db == $pass) {
                return $result;
            } else {
                return [];
            }
        }
    }
}