<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends CI_model
{
    public function tambahRole()
    {
        $data = [
            "role" => $this->input->post('role', true)
        ];

        $this->db->insert('user_role', $data);
    }

    public function getRoleById($id)
    {
        return $this->db->get_where('user_role', ['id' => $id])->row_array();
    }

    public function ubahDataRole()
    {
        $data = [
            "role" => $this->input->post('role', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_role', $data);
    }

    public function hapusRole($id)
    {
        // $this->db->where('id',$id);

        $this->db->delete('user_role', ['id' => $id]);
    }
}
