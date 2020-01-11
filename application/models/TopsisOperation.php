<?php
class TopsisOperation extends CI_Model {
	public function __construct() {
		parent::__construct();
    }

    function _define_data() {
        $data = [
            [85, 30, 5, 3, 3],
            [90, 20, 5, 2.3, 4],
            [20, 20, 10, 5, 3],
            [35, 5, 10, 4.5, 4],
            [60, 15, 10, 4, 3],
            [105, 45, 20, 5, 3],
            [90, 20, 15, 3.5, 2],
            [90, 5, 5, 4.7, 1],
            [45, 20, 10, 4.8, 2],
            [25, 5, 5, 4.2, 1]
        ];

        return $data;
    }

    function _define_bobot() {
        $bobot = [0.3, 0.25, 0.1, 0.2, 0.3];
        return $bobot;
    }

    function _x_normalization($data) {
        for($i=0; $i<count($data[0]); $i++) {
            $x = 0;
            for($j=0; $j<count($data); $j++) {
                $x += $data[$j][$i] ^ 2; 
            }

            $result[] = sqrt($x);
        }
        
        return $result;
    }

    function _matrix_normalization($data,$x) {
        for($i=0; $i<count($data); $i++) {
            for($j=0; $j<count($data[0]); $j++) {
                $res[$i][$j] = $data[$i][$j] / $x[$j];
            }
        }

        return $res;
    }

    function _y_normalization($data,$bobot) {
        for($i=0; $i<count($data); $i++) {
            for($j=0; $j<count($data[0]); $j++) {
                $res[$i][$j] = $data[$i][$j] * $bobot[$j];
            }
        }

        return $res;
    }

    function _ideal_solution_pos($data) {
        for($i=0; $i<count($data[0]); $i++) {
            $pos = [];
            for($j=0; $j<count($data); $j++) {
                $pos[] = $data[$j][$i]; 
            }

            $res[] = max($pos);
        }

        return $res;
    }

    function _ideal_solution_neg($data) {
        for($i=0; $i<count($data[0]); $i++) {
            $pos = [];
            for($j=0; $j<count($data); $j++) {
                $pos[] = $data[$j][$i]; 
            }

            $res[] = min($pos);
        }

        return $res;
    }

    function _distance_solution_pos($data,$isp) {
        for($i=0; $i<count($data); $i++) {
            $dsp = 0;
            for($j=0; $j<count($data[0]); $j++) {
                $dsp += ($isp[$j] - $data[$i][$j]) ^ 2;
            }

            $res[] = sqrt($dsp);
        }

        return $res;
    }

    function _distance_solution_neg($data,$isn) {
        for($i=0; $i<count($data); $i++) {
            $dsn = 0;
            for($j=0; $j<count($data[0]); $j++) {
                $dsn += ($data[$i][$j] - $isn[$j]) ^ 2;
            }

            $res[] = sqrt($dsn);
        }

        return $res;
    }

    function _preference_value($isp,$isn) {
        for($i=0; $i<count($isp); $i++) {
            $res[] = $isn[$i] / ($isn[$i] + $isp[$i]);
        }

        return $res;
    }
}