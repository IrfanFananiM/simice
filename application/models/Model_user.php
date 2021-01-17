<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{
    public function tampil()
    {
        $query = "SELECT * FROM user WHERE role_id != 1";
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

    public function getProfil($email)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where("email =", $email);
        $query = $this->db->get();   

        return $query->result_array();
    }

    public function updateProfil($hasil, $email)
    {
       $this->db->where("email", $email);
       $this->db->update("user", $hasil);
    }
}
