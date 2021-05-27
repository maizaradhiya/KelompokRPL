<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function login_donatur()
    {
        $this->load->view('navbar/view_headerr');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template_landing/auth_header');
            $this->load->view('auth/view_login_donatur');
            // $this->load->view('template_landing/auth_footer');
        }
        else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->db->get_where('donatur', ['username' => $username])->row_array();

            //ada user
            if ($user) {
                //jika user aktif
                if ($user['role_id'] == 2) {
                    //cek password
                    if (password_verify($password, $user['password'])) {
                        //data ke session
                        $data = [
                            'id_donatur' => $user['id_donatur'],
                            'username' => $user['username'],
                            'nomor_ponsel' => $user['nomor_ponsel'],
                            'email' => $user['email'],
                            'role_id' => $user['role_id'],
                        ];
                        $this->session->set_userdata($data);
                        redirect('web/viewhome_donatur');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password.</div>');
                        redirect('Auth/login_donatur');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username has not activated.</div>');
                    redirect('Auth/login_donatur');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered.</div>');
                redirect('Auth/login_donatur');
            }
        }
    }

    public function login_admin()
    {
        $this->load->view('navbar/view_headerr');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template_landing/auth_header');
            $this->load->view('auth/view_login_admin');
            // $this->load->view('template_landing/auth_footer');
        }
        else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->db->get_where('admin', ['username' => $username])->row_array();

            //ada user
            if ($user) {
                //jika user aktif
                if ($user['role_id'] == 0) {
                    //cek password
                    if (password_verify($password, $user['password'])) {
                        //data ke session
                        $data = [
                            'id_admin' => $user['id_admin'],
                            'username' => $user['username'],
                            'role_id' => $user['role_id'],
                        ];
                        $this->session->set_userdata($data);
                        redirect('web/viewhome_admin');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password.</div>');
                        redirect('Auth/login_admin');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username has not activated.</div>');
                    redirect('Auth/login_admin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered.</div>');
                redirect('Auth/login_admin');
            }
        }
    }

    public function login_pd()
    {
        $this->load->view('navbar/view_headerr');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template_landing/auth_header');
            $this->load->view('auth/view_login_pd');
            // $this->load->view('template_landing/auth_footer');
        }
        else{
        $username = $this->input->post('username');
        $password = $this->input->post('password');

            $user = $this->db->get_where('penggalang_dana', ['username' => $username])->row_array();
        
            //ada user
            if ($user) {
                //jika user aktif
                if ($user['is_active']  == 1) {
                    //cek password
                    if (password_verify($password, $user['password'])) {
                        //data ke session
                        $data = [
                            'id_pd' => $user['id_pd'],
                            'username' => $user['username'],
                            'nama_lengkap' => $user['nama_lengkap'],
                            'nomor_ponsel' => $user['nomor_ponsel'],
                            'email' => $user['email'],
                            'nomor_ktp' => $user['nomor_ktp'],
                            'foto_ktp' => $user['foto_ktp'],
                            'role_id' => $user['role_id'],
                            'is_active' => $user['is_active'],
                        ];
                        $this->session->set_userdata($data);
                        redirect('web/viewhome_pd');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password.</div>');
                        redirect('Auth/login_pd');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda masih belum terverifikasi. Coba kembali dalam waktu sesaat.</div>');
                    redirect('Auth/login_pd');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered.</div>');
                redirect('Auth/login_pd');
            }
        }
    }


    public function regist_donatur()
    {
        $this->load->view('navbar/view_headerr');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('nomor_ponsel', 'Nomor_ponsel', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[donatur.email]', [
            'is_unique' => 'This email has already taken!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('template_landing/auth_header');
            $this->load->view('auth/view_regist_donatur');
            // $this->load->view('template_landing/auth_footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'nomor_ponsel' => htmlspecialchars($this->input->post('nomor_ponsel', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2
            ];

            $this->session->set_flashdata('success', $data['username']);

            $this->db->insert('donatur', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account has been created! Please Login.</div>');
            redirect('Auth/login_donatur');
        }
    }

    public function regist_pd()
    {
        $this->load->view('navbar/view_headerr');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('nama_lengkap', 'Nama_lengkap', 'required|trim');
        $this->form_validation->set_rules('nomor_ponsel', 'Nomor_ponsel', 'required|trim');
        $this->form_validation->set_rules('nomor_ktp', 'Nomor_ktp', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[penggalang_dana.email]', [
            'is_unique' => 'This email has already taken!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        $dataa['title'] = 'WeCan Register';
        if ($this->form_validation->run() == false) {
            $this->load->view('template_landing/auth_header', $dataa);
            $this->load->view('auth/view_regist_pd');
            // $this->load->view('template_landing/auth_footer');
        } else {
            $config['upload_path']          = './assets/img/fotoktp/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 0;
            $config['max_width']            = 0;
            $config['max_height']           = 0;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('foto_ktp');

            $file = $this->upload->data();
            $foto_ktp = $file['file_name'];

            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', true)),
                'nomor_ponsel' => htmlspecialchars($this->input->post('nomor_ponsel', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'nomor_ktp' => htmlspecialchars($this->input->post('nomor_ktp', true)),
                'foto_ktp' => $foto_ktp,
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 3,
                'is_active' => 0
            ];

            $this->session->set_flashdata('success', $data['username']);

            $this->db->insert('penggalang_dana', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Dalam kurun waktu 15 menit, admin akan memverifikasi akun anda, mohon coba kembali sesaat.</div>');
            redirect('Auth/login_pd');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('nomor_ponsel');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('nomor_ktp');
        $this->session->unset_userdata('foto_ktp');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('is_active');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out.</div>');
        redirect('web/pilih_login');
    }
}
