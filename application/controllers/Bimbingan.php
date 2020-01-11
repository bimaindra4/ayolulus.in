<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bimbingan extends CI_Controller {
    protected $header;
    protected $footer;
    
    public function __construct() {
        parent::__construct();
        $this->load->model("TopsisOperation", "Topsis");

        //$this->header = $this->load->view("template/mhs_header", '', TRUE);
        //$this->footer = $this->load->view("template/mhs_footer", '', TRUE);
    }

    function index() {
        // $data["header"] = $this->header;
        // $data["footer"] = $this->footer;

        // $this->load->view("mhs/bbg_index", $data);
        $data = $this->Topsis->_define_data();
        $bobot = $this->Topsis->_define_bobot();
        $xnorm = $this->Topsis->_x_normalization($data);
        $xmat = $this->Topsis->_matrix_normalization($data,$xnorm);
        $ymat = $this->Topsis->_y_normalization($xmat,$bobot);
        $isp = $this->Topsis->_ideal_solution_pos($ymat);
        $isn = $this->Topsis->_ideal_solution_neg($ymat);
        $dsp = $this->Topsis->_distance_solution_pos($ymat,$isp);
        $dsn = $this->Topsis->_distance_solution_neg($ymat,$isn);
        $pref = $this->Topsis->_preference_value($dsp,$dsn);
        var_dump($data, $xnorm, $xmat, $ymat, $isp, $isn, $dsp, $dsn, $pref);

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