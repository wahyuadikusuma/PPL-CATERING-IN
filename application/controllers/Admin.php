<?php

class Admin extends CI_Controller
{
    public function index()
    {
        if (!$this->session->userdata('login')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Silakan login terlebih dahulu! </div>');
            redirect('auth');
        } //kalo member mencoba masuk
        else if (($this->session->userdata('role_id')) != 1) {
            redirect('admin/forcelogout');
        }

        $data['title'] = 'Home';
        $data['name'] = $this->session->userdata('name');

        $this->load->view('templates/header', $data);
        //nanti di ganti yaa.. ini biar enak diliat aja
        $this->load->view('member/index', $data);
        $this->load->view('templates/footer');
    }

    //mencegah member masuk
    public function forcelogout()
    {
        // $this->session->sess_destroy();
        //kalo pake destroy nanti ga ada pesan kalo logout
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('login');

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Hanya admin yang diizinkan masuk! </div>');
        redirect('auth');
    }
}
