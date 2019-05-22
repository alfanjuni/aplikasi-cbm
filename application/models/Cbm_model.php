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

    public function tambahDataCbm()
    {
        $data = [
            "id_karyawan" => $this->input->post('id_karyawan', true),
            "tanggal" => $this->input->post('tanggal', true),
            "cbm" => $this->input->post('cbm', true)
        ];

        $this->db->insert('input_cbm', $data);
    }

    public function getCbmById($id)
    {
        $this->db->select('*');
        $this->db->from('input_cbm');
        $this->db->join('karyawan', 'karyawan.id_karyawan = input_cbm.id_karyawan');
        $this->db->where('id', $id);
        $cbm = $this->db->get()->row_array();
        return $cbm;
    }

    public function ubahDataCbm()
    {
        $data = [
            "id_karyawan" => $this->input->post('id_karyawan', true),
            "tanggal" => $this->input->post('tanggal', true),
            "cbm" => $this->input->post('cbm', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('input_cbm', $data);
    }

    public function hapusDataCbm($id)
    {
        // $this->db->where('id',$id);

        $this->db->delete('input_cbm', ['id' => $id]);
    }
}