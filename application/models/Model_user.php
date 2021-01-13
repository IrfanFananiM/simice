<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{
    public function tampil()
    {
        $query = "SELECT * FROM user WHERE role_id != 1";
        return $this->db->query($query)->result_array();
    }

    public function getJenisEs()
    {
        $query = $this->db->get('barang');
        return $query->result_array();
    }

    public function getPengiriman()
    {
        $this->db->select('*');
        $this->db->from('order');
        $this->db->join('barang', 'barang.id = order.id_barang');
        $this->db->where("status !=", 3);
        $query = $this->db->get();

        return $query->result_array();
        return $query->result_array();
    }
    public function ubahMember()
    {
        $data = array(
            'email' => $this->input->post('email'),
            'name' => $this->input->post('name'),
        );
        $status = $this->db->update('user', $data, ['id' => $this->input->post('id')]);
        return $status;
    }

    public function ubahPassword()
    {
        $data = array(
            'password' => password_hash($this->input->post('password2'), PASSWORD_DEFAULT)
        );
        $status = $this->db->update('user', $data, ['id' => $this->input->post('id')]);
        return $status;
    }
}
