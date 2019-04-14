<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cbm_model extends CI_model
{
    public function getAllCbm()
    {
        $query = "SELECT * FROM `input_cbm`
                    JOIN `karyawan` ON `input_cbm`.`id_karyawan`=`karyawan`.`id_karyawan`
                    ORDER BY `input_cbm`.`tanggal`
                 ";

        $cbm = $this->db->query($query)->result_array();
        return $cbm;
    }
}