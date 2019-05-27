<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Userlist_model extends CI_model
{
    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function hapusDataUser($id)
    {
        // $this->db->where('id',$id);

        $this->db->delete('user', ['id' => $id]);
    }



}
