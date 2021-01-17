<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_barang extends CI_Model
{
    public function tampilkan()
    {
        $query = "SELECT * FROM barang";
        return $this->db->query($query)->result_array();
    }
}
