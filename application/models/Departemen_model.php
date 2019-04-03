<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Departemen_model extends CI_model
{
    public function getAllDepartemen()
    {
        return $this->db->get('departemen')->result_array();
    }

    public function cariDataDepartemen()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_departemen', $keyword);
        $this->db->or_like('nama_departemen', $keyword);
        $this->db->or_like('kode_departemen', $keyword);
        return $this->db->get('departemen')->result_array();
    }

    public function tambahDataDepartemen()
    {
        $data = [
            "nama_departemen" => $this->input->post('nama_departemen', true),
            "kode_departemen" => $this->input->post('kode', true),
        ];

        $this->db->insert('departemen', $data);
    }

    public function getDepartemenById($id)
    {
        return $this->db->get_where('departemen', ['id_departemen' => $id])->row_array();
    }


    public function hapusDataDepartemen($id)
    {
        // $this->db->where('id',$id);

        $this->db->delete('departemen', ['id_departemen' => $id]);
    }

    public function ubahDataDepartemen()
    {
        $data = [
            "nama_departemen" => $this->input->post('nama_departemen', true),
            "kode_departemen" => $this->input->post('kode', true)
        ];
        $this->db->where('id_departemen', $this->input->post('id'));
        $this->db->update('departemen', $data);
    }
}
