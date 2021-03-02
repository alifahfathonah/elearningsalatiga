<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Login_model', 'Login', true);
        $this->load->library('src/Toastr');
    }

    // LOGIN SISWA
    
    public function index()
    {
        $data 	        = [
            'titles'	    => 'Login Siswa',
            'login'		    => 'Log In Siswa',
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'view'		    => "v_Login"
        ];

        // $this->load->view("index", $data);
        $this->load->view("v_Login.php", $data);
    }

    // Action Login Siswa
    public function action()
    {
        // Validasi Error
        $this->form_validation->set_rules("username", "Username", "trim|min_length[3]|required");
        $this->form_validation->set_rules("password", "password", "trim|required");

        if ($this->form_validation->run() == false) {
            $data 	        = [
                'titles'	    => 'Login Siswa',
                'login'		    => 'Log In Siswa',
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'view'		    => "v_Login"
            ];

            // $this->load->view("index", $data);
            $this->load->view("v_Login.php", $data);
        } else {
            // ambil post dari form login
            $username   = htmlspecialchars($this->input->post('username'));
            $password   = $this->input->post('password');

            // Cek username ada di database atau tidak
            $cekUser 	= $this->Login->Auth_user(['username_login'       => $username], 'siswa');
            if ($cekUser) {
                if (password_verify($password, $cekUser->password_login)) {
                    // Akun Siswa
                    if ($cekUser->blokir == 'Tidak') {
                        $data_session = array(
                            'id_siswa'      => $cekUser->id_siswa,
                            'nama'          => $cekUser->nama_lengkap,
                            'username'      => $username,
                            'photo'		    => $cekUser->foto,
                            'siswa'         => true
                        );
                        $this->session->set_userdata($data_session);
                        redirect('home', 'refresh');
                    } else {
                        $this->toastr->error('Akun Anda Di Blokir Silahkan Hubungi Sekolah !!!');
                        redirect('login', true);
                    }
                } else {
                    $this->toastr->error('Password Yang Anda Masukkan Salah !!!');
                    redirect('login', true);
                }
            } else {
                $this->toastr->error('Username Tidak Ada Dalam Database');
                redirect('login', true);
            }
        }
    }

    // LOGIN ADMINISTRATOR
    public function administrator()
    {
        $data 	        = [
            'titles'	    => 'Login Administrator',
            'login'		    => 'Log In Administrator',
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'view'		    => "v_LoginAdministrator"
        ];

        // $this->load->view("index", $data);
        $this->load->view("v_LoginAdministrator.php", $data);
    }

    // Action Login Administrator
    public function actionadmin()
    {
        // Validasi Error
        $this->form_validation->set_rules("username", "Username", "trim|min_length[3]|required");
        $this->form_validation->set_rules("password", "password", "trim|required");

        if ($this->form_validation->run() == false) {
            $data 	        = [
            'titles'	    => 'Login Administartor',
            'login'		    => 'Log In Administrator',
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'view'		    => "v_LoginAdministrator"
        ];

            // $this->load->view("index", $data);
            $this->load->view("v_LoginAdministrator.php", $data);
        } else {
            // ambil post dari form login
            $username   = htmlspecialchars($this->input->post('username'));
            $password   = $this->input->post('password');

            // Cek username ada di database atau tidak
            $cekUser 	= $this->Login->Auth_user(['username'       => $username], 'admin');
            if ($cekUser) {
                if (password_verify($password, $cekUser->password)) {
                    // Akun Administrator
                    if ($cekUser->blokir == 'Tidak') {
                        $data_session = array(
                            'id'            => $cekUser->id_admin,
                            'nama'          => $cekUser->nama_lengkap,
                            'username'      => $username,
                            'adminaktif'    => true
                        );
                        $this->session->set_userdata($data_session);
                        $this->toastr->success('Sukses Login Sebagai '.$username.' !!!');
                        redirect('dashboard', 'refresh');
                    } else {
                        $this->toastr->error('Akun Anda Di Blokir Silahkan Hubungi Sekolah !!!');
                        redirect('login/administrator', true);
                    }
                } else {
                    $this->toastr->error('Password Yang Anda Masukkan Salah !!!');
                    redirect('login/administrator', true);
                }
            } else {
                $this->toastr->error('Username Tidak Ada Dalam Database');
                redirect('login/administrator', true);
            }
        }
    }

    // LOGIN PENGAJAR
    public function pengajar()
    {
        $data 	        = [
            'titles'	    => 'Login Pengajar',
            'login'		    => 'Log In Pengajar',
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'view'		    => "v_LoginPengajar"
        ];

        // $this->load->view("index", $data);
        $this->load->view("v_LoginPengajar.php", $data);
    }

    // Action Login Pengajar
    public function actionpengajar()
    {
        // Validasi Error
        $this->form_validation->set_rules("username", "Username", "trim|min_length[3]|required");
        $this->form_validation->set_rules("password", "password", "trim|required");

        if ($this->form_validation->run() == false) {
            $data 	        = [
                'titles'	    => 'Login Pengajar',
                'login'		    => 'Log In Pengajar',
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'view'		    => "v_LoginPengajar"
            ];

            // $this->load->view("index", $data);
            $this->load->view("v_LoginPengajar.php", $data);
        } else {
            // ambil post dari form login
            $username   = htmlspecialchars($this->input->post('username'));
            $password   = $this->input->post('password');

            // Cek username ada di database atau tidak
            $cekUser 	= $this->Login->Auth_user(['username_login'       => $username], 'pengajar');
            if ($cekUser) {
                if (password_verify($password, $cekUser->password_login)) {
                    // Akun Pengajar
                    if ($cekUser->blokir == 'Tidak') {
                        $data_session = array(
                            'id'            => $cekUser->id_pengajar,
                            'nama'          => $cekUser->nama_lengkap,
                            'username'      => $username,
                            'photo'		    => $cekUser->foto,
                            'pengajaraktif' => true,
                            'aktif'         => true
                        );
                        $this->session->set_userdata($data_session);
                        redirect('pengajar', 'refresh');
                    } else {
                        $this->toastr->error('Akun Anda Di Blokir Silahkan Hubungi Administrator !!!');
                        redirect('login/pengajar', true);
                    }
                } else {
                    $this->toastr->error('Password Yang Anda Masukkan Salah !!!');
                    redirect('login/pengajar', true);
                }
            } else {
                $this->toastr->error('Username Tidak Ada Dalam Database');
                redirect('login/pengajar', true);
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login', true);
    }

    public function logoutadmin()
    {
        $this->session->sess_destroy();
        redirect('login/administrator', true);
    }
    
    public function logoutpengajar()
    {
        $this->session->sess_destroy();
        redirect('login/pengajar', true);
    }
}
