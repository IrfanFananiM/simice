<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{
    public function tampil()
    {
        $query = "SELECT name, email, date_created FROM user WHERE role_id != 1";
        return $this->db->query($query)->result_array();
    }
}
