<?php
class AppModel extends CI_Model {
	public function __construct() {
		parent::__construct();
        $this->load->database();
    }

    // Date
	function DateTimeNow() {
		date_default_timezone_set("Asia/Jakarta");
		return date("Y-m-d H:i:s");
	}

	function DateNow() {
		date_default_timezone_set("Asia/Jakarta");
		return date("Y-m-d");
	}

	function YearNow() {
		date_default_timezone_set("Asia/Jakarta");
		return date("Y");
	}

	function MonthNow() {
		date_default_timezone_set("Asia/Jakarta");
		return date("m");
	}

	function DayNow() {
		date_default_timezone_set("Asia/Jakarta");
		return date("d");
	}

	function BulanIndo($val="") {
		if($val == "") {
			$month = [
				'-- Bulan --' => 0,
				'Januari' => 1,
				'Februari' => 2,
				'Maret' => 3,
				'April' => 4,
				'Mei' => 5,
				'Juni' => 6,
				'Juli' => 7,
				'Agustus' => 8,
				'September' => 9,
				'Oktober' => 10,
				"November" => 11,
				"Desember" => 12
			];

			return $month;
		} else {
			$month = [
				0 => '-- Bulan --',
				1 => 'Januari',
				2 => 'Februari',
				3 => 'Maret',
				4 => 'April',
				5 => 'Mei',
				6 => 'Juni',
				7 => 'Juli',
				8 => 'Agustus',
				9 => 'September',
				10 => 'Oktober',
				11 => 'November',
				12 => 'Desember'
			];

			return $month[$val];
		}
	}

	function HariIndo() {
		$hari = [
			'-- Hari --' => 0,
			'Senin' => 'senin',
			'Selasa' => 'selasa',
			'Rabu' => 'rabu',
			'Kamis' => 'kamis',
			'Jumat' => 'jumat',
			'Sabtu' => 'sabtu',
			'Minggu' => 'minggu'
		];

		return $hari;
	}

	function DateIndo($data) {
		if($data == NULL || $data == "") {
			return "";
		} else {
			$x_data = explode("-", $data);
			$bulan = $this->bulanIndo((int) $x_data[1]);
			$output = $x_data[2]." ".$bulan." ".$x_data[0];
			
			return $output;
		}
	}

	function DateTimeIndo($data) {
		$x_data = explode(" ", $data);
		$x2_data = explode(":", $x_data[1]);
		$date = $this->dateIndo($x_data[0]);
		$time = $x2_data[0].":".$x2_data[1];
		$output = $date." - ".$time;

		return $output;
    }
    
    // Misc
	function RandomString($length) {
		$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
		return substr(str_shuffle($str), 0, $length);
	}

    function GetUIDFromID($uid,$field,$table) {
        $f_url = $field."_url";
    
        $this->db->select($field);
        $this->db->where($f_url, $uid);
        $q = $this->db->get($table);
          
        if($q->num_rows() == 0) {
            return "";
        } else {
            $res = $q->row();
            return $res->$field;
        }	
    }
}