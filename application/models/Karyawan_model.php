<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan_model extends CI_model
{
    public function getAllKaryawan()
    {
        /*
        $queryKaryawan = "SELECT *
                        FROM `karyawan` JOIN `departemen` 
                        ON `karyawan`.`dep_karyawan` = `departemen`.`id_departemen`
                    ";

        $karyawan = $this->db->query($queryKaryawan)->result_array();
        */
        /* Mengambil data dari table karyawan*/
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->join('departemen', 'id_departemen = dep_karyawan');
        $karyawan = $this->db->get()->result_array();

        return $karyawan;
    }

    public function getKaryawanById($id)
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->join('departemen', 'id_departemen = dep_karyawan');
        $this->db->where('id_karyawan', $id);
        $karyawan = $this->db->get()->row_array();
        return $karyawan;
    }

    public function tambahDataKaryawan()
    {
        $data = [
            "nama_karyawan" => $this->input->post('nama_karyawan', true),
            "kota" => $this->input->post('kota', true),
            "dep_karyawan" => $this->input->post('dep_karyawan', true),
            "tgl_masuk" => $this->input->post('tgl_masuk', true)
        ];

        $this->db->insert('karyawan', $data);
    }

    public function hapusDataKaryawan($id)
    {
        // $this->db->where('id',$id);

        $this->db->delete('karyawan', ['id_karyawan' => $id]);
    }
    public function ubahDataKaryawan()
    {
        $data = [
            "nama_karyawan" => $this->input->post('nama_karyawan', true),
            "kota" => $this->input->post('kota', true),
            "dep_karyawan" => $this->input->post('dep_karyawan', true),
            "tgl_masuk" => $this->input->post('tgl_masuk', true)
        ];
        $this->db->where('id_karyawan', $this->input->post('id_karyawan'));
        $this->db->update('karyawan', $data);
    }
}
