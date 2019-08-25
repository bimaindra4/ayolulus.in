<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bimbingan extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    function index() {
        $data = [
            "header" => $this->load->view("template/mhs_header", '', TRUE),
            "footer" => $this->load->view("template/mhs_footer", '', TRUE)
        ];

        $this->load->view("mhs/bbg_index", $data);
    }

    function atur() {
    	$data = [
			"header" => $this->load->view("template/mhs_header", '', TRUE),
			"footer" => $this->load->view("template/mhs_footer", '', TRUE)
		];

		$this->load->view("mhs/bbg_atur", $data);
    }

    function proses() {
        $data = [
            "header" => $this->load->view("template/mhs_header", '', TRUE),
            "footer" => $this->load->view("template/mhs_footer", '', TRUE)
        ];

        $this->load->view("mhs/bbg_proses", $data);
    }
}