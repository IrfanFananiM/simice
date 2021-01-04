<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
    public function tambah()
    {
        $data = [
            'id_barang' => $this->input->post('barang'),
            'jumlah' => $this->input->post('jumlah'),
        ];

        $this->db->insert('order', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Es berhasil dipesan!</div>');
        redirect('user/pesan');
    }
}
