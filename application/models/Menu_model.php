<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                    ON  `user_sub_menu`.`menu_id` = `user_menu`.`id`
        ";
        return $this->db->query($query)->result_array();
    }

    public function getOrder(){
        $this->db->select('*');
        $this->db->from('ORDER');
        $this->db->join('BARANG', 'BARANG.ID = ORDER.ID_BARANG');
        $query = $this->db->get();

        return $query->result_array();
    }
}
