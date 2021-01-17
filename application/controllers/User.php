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

    public function editProfil()
    {
        $this->load->model('Model_user');
        $data['edit'] = $this->Model_user->getProfil($this->session->userdata('email'));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('user/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/editprofil', $data);
        $this->load->view('templates/footer');
    }

    public function hasilEdit()
    {
        $nama = $this->input->post("name");
        $email = $this->input->post("email");
        $alamat = $this->input->post("alamat");
        $this->load->model('Model_user');
        $data = array(
            'name' => $nama,
            'email' => $email,
            'alamat' => $alamat
        );
        $this->Model_user->updateProfil($data, $this->session->userdata('email'));
        $this->load->helper('url');
        redirect('/user');
        // index();
    }

    public function pesan()
    {
        $this->load->model('Model_user');

        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->Model_user->getJenisEs();
        $data['jumlah'] = 0;
        if(isset($_GET['jumlah'])){
            $data['jumlah'] = $_GET['jumlah'];
        }

        if(isset($_GET['id_barang'])){
            $data['id_barang'] = $_GET['id_barang'];
        }

        if(isset($_GET['nama_barang'])){
            $data['nama_barang'] = $_GET['nama_barang'];
        }

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
