<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{
    public function tampil()
    {
        $query = "SELECT * FROM user WHERE role_id != 1";
        return $this->db->query($query)->result_array();
    }

    public function hapus($id)
    {
        return $this->db->delete('user', array("id" => $id));
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

    public function ubahProduk()
    {
        $data = array(
            'nama_barang' => $this->input->post('name'),
            'harga_beli' => $this->input->post('harga_beli'),
            'harga_jual' => $this->input->post('harga_jual'),
            'stok' => $this->input->post('stok'),
            'satuan' => $this->input->post('satuan'),
        );
        $status = $this->db->update('barang', $data);
        return $status;
    }
}
