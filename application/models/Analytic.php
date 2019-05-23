<?php
defined('BASEPATH') OR exit(':D');

/**
 * Description of Analytic
 *
 * @author Amir <amirsanni@gmail.com>
 * @date 12-Aug-2016
 */
class Analytic extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }

    public function topDemanded(){
        $q = "SELECT karyawan.nama_karyawan, ROUND(SUM(input_cbm.cbm), 2) as 'totCbm' FROM karyawan 
                INNER JOIN input_cbm ON karyawan.id_karyawan=input_cbm.id_karyawan GROUP BY karyawan.id_karyawan ORDER BY totCbm DESC LIMIT 5";

        $run_q = $this->db->query($q);

        if($run_q->num_rows() > 0){
            return $run_q->result();
        }

        else{
            return FALSE;
        }
    }

}