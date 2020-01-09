<?php
class SessionModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	function GetSession() {
		$data['session_userid'] = $this->session->userdata('session_userid');
		$data['session_role'] = $this->session->userdata('session_role');
		$data['session_nama'] = $this->session->userdata('session_nama');
		
		return $data;
	}

	function StoreSession($userid,$role,$nama) {
		$this->session->set_userdata('session_userid', $userid);
		$this->session->set_userdata('session_role', $role);
		$this->session->set_userdata('session_nama', $nama);
	}

	function DestroySession() {
		$this->session->unset_userdata('session_userid');
		$this->session->unset_userdata('session_role');
		$this->session->unset_userdata('session_nama');
	}
}