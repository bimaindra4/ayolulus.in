<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen extends CI_Controller {
    protected $header;
    protected $footer;

    public function __construct() {
        parent::__construct();

        $this->header = $this->load->view("template/mhs_header", '', TRUE);
        $this->footer = $this->load->view("template/mhs_footer", '', TRUE);
    }

    function data_diri() {
        $data["header"] = $this->header;
        $data["footer"] = $this->footer;

		$this->load->view("mhs/maj_data_diri", $data);
    }

    function edit_data_diri() {
        $data["header"] = $this->header;
        $data["footer"] = $this->footer;

        $this->load->view("mhs/maj_edit_data_diri", $data);
    }
}