<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
		parent::__construct();
		$this->load->model("LoginModel");
		$this->load->model("SessionModel");
    }

    function index() {
        $this->load->view("login");
    }

    function auth() {
        $user = $this->input->post("username");
		$pass = sha1($this->input->post("password"));

		$result = $this->LoginModel->Verification($user,$pass);
		if($result != []) {
			$iduser = $result->id;
			$nama = $result->nama;
			$role = $result->status;

			$this->SessionModel->StoreSession($iduser,$role,$nama);
			redirect("dashboard");
		} else {
			redirect("login");
		}
    }
}