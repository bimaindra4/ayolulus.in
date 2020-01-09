<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("SessionModel");
    }

    function index() {
        $this->SessionModel->DestroySession();
        redirect("login");
    }
}