<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('user/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function pesan()
    {
        $this->load->model('Model_user');

        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->Model_user->getJenisEs();

        // var_dump($data['barang']);
        $this->load->view('templates/header', $data);
        $this->load->view('user/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/pesan', $data);
        $this->load->view('templates/footer');
    }

    public function pengiriman()
    {
        $this->load->model('Model_user');

        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->db->get('barang')->result_array();
        
        $this->load->model('Menu_model');
        $data['order'] = $this->Model_user->getPengiriman();

        $this->load->view('templates/header', $data);
        $this->load->view('user/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/pengiriman', $data);
        $this->load->view('templates/footer');
    }

    public function transaksi()
    {
        $this->load->model('Model_user');
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['order'] = $this->Model_user->getPengiriman();

        $this->load->view('templates/header', $data);
        $this->load->view('user/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/riwayat', $data);
        $this->load->view('templates/footer');
    }
}
