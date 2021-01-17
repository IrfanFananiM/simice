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
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Congratulation! Member has been added.</div>');
            redirect('admin');
        }
    }

    public function ubah($id)
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['id' => $id])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/ubah', $data);
        $this->load->view('templates/footer');
    }

    public function ubahMember()
    {
        $status = $this->model_user->ubahMember();
        if ($status == true) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Congratulation! Account has been updated.</div>');
            redirect(base_url('admin/index'));
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Failed! update.</div>');
            redirect(base_url('admin/index'));
        }
    }

    public function ubahMemberPass()
    {
        $this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont matches',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == true) {
            $status = $this->model_user->ubahPassword();
            if ($status == true) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Congratulation! Password has been updated.</div>');
                redirect(base_url('admin/index'));
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Failed! update.</div>');
                redirect(base_url('admin/index'));
            }
        } else {
            redirect(base_url('admin/index'));
        }
    }

    public function hapus($id)
    {
        $this->model_user->hapus($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">
        Congratulation! Member has been deleted.</div>');
        redirect(site_url('admin/index'));
    }

    public function atur_produk()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Model_barang', 'barangs');
        $data['list_barang'] = $this->barangs->tampilkan();

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
