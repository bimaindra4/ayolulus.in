<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bimbingan extends CI_Controller {
    protected $header;
    protected $footer;
    
    public function __construct() {
        parent::__construct();

        $this->header = $this->load->view("template/mhs_header", '', TRUE);
        $this->footer = $this->load->view("template/mhs_footer", '', TRUE);
    }

    function index() {
        $data["header"] = $this->header;
        $data["footer"] = $this->footer;

        $this->load->view("mhs/bbg_index", $data);
    }

    function atur() {
        $data["header"] = $this->header;
        $data["footer"] = $this->footer;

		$this->load->view("mhs/bbg_atur", $data);
    }

    function proses() {
        $data["header"] = $this->header;
        $data["footer"] = $this->footer;

        $this->load->view("mhs/bbg_proses", $data);
    }
}