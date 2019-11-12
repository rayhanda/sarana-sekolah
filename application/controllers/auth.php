<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Masuk';
            $this->load->view('master/header', $data);
            $this->load->view('login');
            $this->load->view('master/footer');
        } else {
            $this->proses_login();
        }
    }
    public function proses_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $pass = $password;
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //jika user ada
        if ($user) {
            //jika user aktif
            if ($user['is_active'] == 1) {
                if ($pass == $user['password']) {
                    $data = [
                        'email' => $user['email'],
                        'nama' => $user['nama'],
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($this->session->userdata('role_id') == 1) {
                        redirect('Main/index');
                    } else {
                        redirect('Main/index');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                    Password Anda Salah!
                    </div>');
                    redirect('Auth/index');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Email anda sudah tidak aktif!
                </div>');
                redirect('Auth/index');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Email anda tidak terdaftar!
                </div>');
            redirect('Auth/index');
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('Auth/index');
    }
    function blocked()
    {
        $data['title'] = 'Access Blocked';
        $this->load->view('master/header', $data);
        $this->load->view('access_blocked');
        $this->load->view('master/footer');
    }
    function lyemail()
    {
        $this->load->view('layout-email');
    }
}
