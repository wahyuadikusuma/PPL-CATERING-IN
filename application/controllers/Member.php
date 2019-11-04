<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function index()
    {
        if (!$this->session->userdata('login')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Silakan login terlebih dahulu! </div>');
            redirect('auth');
        }

        $data['title'] = 'Home';
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $user = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        // $data['name'] = $user['name'];
        $data['name'] = $this->session->userdata('name');
        $this->load->view('templates/header', $data);
        $this->load->view('member/index', $data);
        $this->load->view('templates/footer');
    }
}
