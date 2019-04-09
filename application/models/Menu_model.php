<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu` 
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                 ";

        $submenu = $this->db->query($query)->result_array();
        return $submenu;
    }

    public function getMenu()
    {
        $query = "SELECT `user_menu`.*
                  FROM `user_menu` 
                  ORDER BY `user_menu`.`menu_order` ASC
                 ";

        $menu = $this->db->query($query)->result_array();
        return $menu;
    }

    public function deleteMenu($id)
    {
        // $this->db->where('id',$id);

        $this->db->delete('user_menu', ['id' => $id]);
    }

    public function deleteSubmenu($id)
    {
        // $this->db->where('id',$id);

        $this->db->delete('user_sub_menu', ['id' => $id]);
    }

    public function getMenuById($id)
    {
        return $this->db->get_where('user_menu', ['id' => $id])->row_array();
    }

    public function getSubmenuById($id)
    {
        return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
    }


    public function ubahMenu()
    {
        $data = [
            "menu" => $this->input->post('menu', true),
            "menu_order" => $this->input->post('menu_order', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_menu', $data);
    }

    public function ubahSubmenu()
    {
        $data = [
            "title" => $this->input->post('title', true),
            "url" => $this->input->post('url', true),
            "icon" => $this->input->post('icon', true),
            "is_active" => $this->input->post('is_active', true),
            "menu_id" => $this->input->post('menu_id', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_sub_menu', $data);
    }
}
