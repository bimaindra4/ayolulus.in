<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    function data_diri() {
    	$data = [
			"header" => $this->load->view("template/mhs_header", '', TRUE),
			"footer" => $this->load->view("template/mhs_footer", '', TRUE)
		];

		$this->load->view("mhs/maj_data_diri", $data);
    }

    function edit_data_diri() {
        $data = [
            "header" => $this->load->view("template/mhs_header", '', TRUE),
            "footer" => $this->load->view("template/mhs_footer", '', TRUE)
        ];

        $this->load->view("mhs/maj_edit_data_diri", $data);
    }
}