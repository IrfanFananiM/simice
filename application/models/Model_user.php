<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{
    public function tampil()
    {
        $query = "SELECT name, email, date_created FROM user WHERE role_id != 1";
        return $this->db->query($query)->result_array();
    }

    public function getJenisEs(){
        $query = $this->db->get('BARANG');
        return $query->result_array();
    }

    public function getPengiriman(){
        $this->db->select('*');
        $this->db->from('ORDER');
        $this->db->join('BARANG', 'BARANG.ID = ORDER.ID_BARANG');
        $this->db->where("STATUS !=", 3);
        $query = $this->db->get();

        return $query->result_array();
        return $query->result_array();
    }
}
