<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    protected $header;
    protected $footer;

	// session
	protected $sess;
	protected $sess_not_con;
	protected $sess_data;

    public function __construct() {
        parent::__construct();
        $this->load->model("SessionModel");

        $this->sess = $this->SessionModel->GetSession();
		$this->sess_not_con = !$this->sess['session_userid'] && !$this->sess['session_role'];
        $this->sess_data = [
			"userid" => $this->sess['session_userid'],
			"userrole" => $this->sess['session_role'],
			"usernama" => $this->sess['session_nama'],
			"menu" => $this->sess['session_role']
		];

        if($this->sess_not_con) {
            redirect("login");
        } else {
            $this->header = $this->load->view("template/layout_header", $this->sess_data, TRUE);
            $this->footer = $this->load->view("template/layout_footer", $this->sess_data, TRUE);
        }
    }

    function index() {
        $data["header"] = $this->header;
        $data["footer"] = $this->footer;

        if($this->sess['session_role'] == 1) {
            $this->load->view("sadmin/index", $data);
        } else if($this->sess['session_role'] == 2) {
            $this->load->view("tentor/index", $data);
        } else if($this->sess['session_role'] == 3) {
            $this->load->view("mhs/index", $data);
        }
    }
}