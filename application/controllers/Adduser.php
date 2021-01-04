<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
    public function tambah()
    {
        $data['user'] = $this->db->get('user')->result_array();
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'date_created' => $this->input->post('date_created')
        ];
    }
    
    
}
