<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_barang extends CI_Model
{
    public function tampilkan()
    {
        $query = "SELECT * FROM barang";
        return $this->db->query($query)->result_array();
    }

    public function ubahProduk()
    {
        $data = array(
            'kode_barang' => $this->input->post('kode'),
            'nama_barang' => $this->input->post('nama'),
            'harga_beli' => $this->input->post('harga_beli'),
            'harga_jual' => $this->input->post('harga_jual'),
            'stok' => $this->input->post('stok'),
            'satuan' => $this->input->post('satuan'),
        );
        $status = $this->db->update('barang', $data, ['id' => $this->input->post('id')]);

        return $status;
    }

    public function hapusProduk($id)
    {
        return $this->db->delete('barang', array("id" => $id));
    }
}
