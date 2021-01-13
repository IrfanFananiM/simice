<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Model_user', 'users');
        $data['list_user'] = $this->users->tampil();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_member()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $this->load->view('templates/header', $data);
        // $this->load->view('admin/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        // $this->load->view('admin/tambah_member', $data);
        // $this->load->view('templates/footer');

        //   Add member
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont matches',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambah_member', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation! Member has been added.</div>');
            redirect('admin');
        }
    }


    public function atur_produk()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/atur_produk', $data);
        $this->load->view('templates/footer');
    }

    public function riwayat()
    {
        $this->load->model('Menu_model');

        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['order'] = $this->Menu_model->getOrder();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/riwayat', $data);
        $this->load->view('templates/footer');
    }
}
