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
}
