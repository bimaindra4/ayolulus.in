<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tentor extends CI_Controller {
    protected $header;
    protected $footer;

	// session
	protected $sess;
	protected $sess_not_con;
	protected $sess_data;

    public function __construct() {
        parent::__construct();
        $this->load->model("AppModel");
        $this->load->model("SessionModel");
        $this->load->model("TentorModel");

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
            $data["tentor"] = $this->TentorModel->GetDataTentor();
            $data["jafung"] = $this->db->select("id_jafung, jafung_nama")->from("tbl_jafung_jenis")->get()->result();
            $data["pt"] = $this->db->select("id_pt, pt_nama")->from("tbl_master_pt")->get()->result();
            $this->load->view("sadmin/tentor", $data);
        }
    }

    function tambah_tentor() {
        if($this->sess['session_role'] == 1) {
            $data = [
                "id_tentor" => "",
                "id_tentor_url" => $this->AppModel->RandomString(20),
                "id_pt" => $this->input->post("pt"),
                "id_jafung" => $this->input->post("jafung"),
                "tentor_nama" => $this->input->post("nama"),
                "tentor_identitas" => $this->input->post("identitas"),
                "tentor_tempat_lahir" => $this->input->post("tempat_lahir"),
                "tentor_tanggal_lahir" => date("Y-m-d", strtotime($this->input->post("tanggal_lahir"))),
                "tentor_gelar_depan" => ($this->input->post("gd") == "" ? NULL : $this->input->post("gd")),
                "tentor_gelar_belakang" => $this->input->post("gb"),
                "tentor_pendidikan" => $this->input->post("pendidikan"),
                "tentor_status" => 0,
                "tentor_username" => $this->AppModel->RandomString(8),
                "tentor_password" => sha1("password"),
                "created_at" => $this->AppModel->DateTimeNow(),
                "status" => 1
            ];

            $proc = $this->TentorModel->TambahTentor($data);

            redirect("tentor");
        }
    }

    function hapus_tentor($uid) {
        if($this->sess['session_role'] == 1) {
            $proc = $this->TentorModel->HapusTentor($uid);

            redirect("tentor");
        }
    }

    function validasi() {
        $data["header"] = $this->header;
        $data["footer"] = $this->footer;

        if($this->sess['session_role'] == 1) {
            $this->load->view("sadmin/tentor_validasi", $data);
        }
    }

    function proses_validasi($jenis,$uid) {
        if($this->sess['session_role'] == 1) {
            $proc = $this->TentorModel->ValidasiPengalaman($jenis,$uid);
            redirect("tentor/validasi");
        }
    }

    function statistik() {
        $data["header"] = $this->header;
        $data["footer"] = $this->footer;

        if($this->sess['session_role'] == 1) {
            $this->load->view("sadmin/tentor_statistik", $data);
        }
    }

    function get_data_tentor_search($jenis,$keyword) {
        $result = "";
        $sql = $this->TentorModel->CariDataTentor($jenis,$keyword);

        $result .= '<ul class="list-unstyled">';
        foreach($sql as $row) {
            $result .= '
            <li class="my-1">
                <div class="card p-3 border-info">
                    <div class="">
                        <div class="float-right">
                            <input type="hidden" id="id_tentor" value="'.$row->id_tentor_url.'">
                            <button type="button" onclick="aturTentor(\''.$row->id_tentor_url.'\')" class="btn btn-sm btn-primary r-5">Detail</button>
                        </div>
                        <div class="image mr-3  float-left">
                            <img class="w-40px" src="'.base_url().'assets/img/dummy/u1.png" alt="User Image">
                        </div>
                        <div>
                            <div><strong>'.$row->tentor_nama.'</strong></div>
                            <small>'.$row->pt.'</small>
                        </div>
                    </div>
                </div>
            </li>';
        }
        $result .= '</ul>';

        $output = ["table" => $result];
        echo json_encode($output);
    }

    function data_diri($uidt) {
        $data["header"] = $this->header;
        $data["footer"] = $this->footer;

        if($this->sess['session_role'] == 2) {
            $data["jpublikasi"] = $this->db->select("id_jenis_publikasi AS _id, jenis_publikasi AS jenis")->get("tbl_publikasi_jenis")->result();
            $data["jgelar"] = $this->db->select("id_gelar AS _id, gelar_jenis AS jenis")->get("tbl_gelar_jenis")->result();
            $data["jafung"] = $this->db->select("id_jafung AS _id, jafung_nama AS jafung")->get("tbl_jafung_jenis")->result();
            $data["bidang"] = $this->db->select("id_bidang AS _id, bidang_nama AS bidang")->get("tbl_bidang_jenis")->result();
            $data["pt"] = $this->db->select("id_pt, pt_nama")->from("tbl_master_pt")->get()->result();
            $data["tentor"] = $this->TentorModel->GetDataTentor($uidt);
            $data["data_publikasi"] = $this->TentorModel->DataPublikasiTentor($uidt);
            $data["data_gelar"] = $this->TentorModel->DataGelarTentor($uidt);

            $this->load->view("tentor/tentor_datadiri", $data);
        }
    }

    function tambah_publikasi() {
        if($this->sess['session_role'] == 2) {
            $data = [
                "id_tentor_publikasi" => "",
                "id_tentor_publikasi_url" => $this->AppModel->RandomString(20),
                "id_tentor" => $this->AppModel->GetUIDFromID($this->sess['session_userid'], "id_tentor", "tbl_master_tentor"),
                "id_jenis_publikasi" => $this->input->post("publikasi"),
                "publikasi_judul" => $this->input->post("judul"),
                "publikasi_jurnal" => $this->input->post("jurnal"),
                "publikasi_volume" => $this->input->post("volume"),
                "publikasi_no" => $this->input->post("no"),
                "publikasi_halaman" => $this->input->post("halaman"),
                "created_at" => $this->AppModel->DateTimeNow(),
                "status" => 0
            ];

            $proc = $this->TentorModel->TambahPublikasi($data);
            redirect("tentor/data_diri/".$this->sess['session_userid']);
        }
    }

    function tambah_gelar() {
        if($this->sess['session_role'] == 2) {
            $data = [
                "id_tentor_gelar" => "",
                "id_tentor_gelar_url" => $this->AppModel->RandomString(20),
                "id_tentor" => $this->AppModel->GetUIDFromID($this->sess['session_userid'], "id_tentor", "tbl_master_tentor"),
                "id_gelar" => $this->input->post("jenis"),
                "no_ijazah" => $this->input->post("no_ijazah"),
                "institusi" => $this->input->post("nama_pt"),
                "deskripsi_gelar" => $this->input->post("deskripsi"),
                "created_at" => $this->AppModel->DateTimeNow(),
                "status" => 0
            ];

            $proc = $this->TentorModel->TambahGelar($data);
            redirect("tentor/data_diri/".$this->sess['session_userid']);
        }
    }
}