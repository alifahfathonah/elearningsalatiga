<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Dashboard_model', 'Dashboard', true);
        $this->load->library('datatables');
        $this->load->library('src/Toastr');
        set_zone();

        // Cek Session User
        if ($this->session->userdata('adminaktif')!=true) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap login untuk melanjutkan</div>');
            redirect('login/administrator');
        }
    }
    
    public function index()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || Dashboard Pages',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'test',
            'view'		    => "v_Dashboard"
        ];
        $this->load->view("index", $data);
    }

    // QUICK LINK START //

    // CRUD Admin
    public function administrator()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || View Administrator Pages',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Administrator',
            'view'		    => "v_Administrator"
        ];

        $this->load->view("index", $data);
    }

    // Json View Datatable Data jsonAdministrator
    public function jsonAdministrator()
    {
        header('Content-Type: application/json');
        echo $this->Dashboard->json(
            '*',
            'admin'
        );
    }

    // Tambah Data Administrator
    public function addAdministrator()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || Add Administrator Pages',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'agama'         => $this->Dashboard->viewAll('*', 'agama')->result_array(),
            'kelas'         => $this->Dashboard->viewAll('*', 'kelas')->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Add Administrator',
            'view'		    => "v_addAdministrator"
        ];

        $this->load->view("index", $data);
    }

    // Cetak Data Administrator
    public function cetakAdministrator()
    {
        $join       = array(
                            ['agama','siswa.agama=agama.id_agama','LEFT'],
                            ['kelas','siswa.id_kelas=kelas.id_kelas','LEFT']
                        );
        $data       = [
            'admin'     => $this->Dashboard->viewAll('*', 'admin')->result_array()
        ];

        $this->load->view('cetakAdministrator', $data);
    }

    // Action Add Administrator
    public function actionAddAdministrator()
    {
        $this->form_validation->set_rules('username', 'Username Login Siswa', 'trim|is_unique[admin.username]|required');
        $this->form_validation->set_rules('password', 'Password Login Siswa', 'trim|required');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap Siswa', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat Siswa', 'trim|required');
        $this->form_validation->set_rules('no_telp', 'Nomor Telephone', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="text-danger"><i class="fa fa-info-circle"></i> ', '</div>');

        if ($this->form_validation->run() == false) {
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || Add Administrator Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'agama'         => $this->Dashboard->viewAll('*', 'agama')->result_array(),
                'kelas'         => $this->Dashboard->viewAll('*', 'kelas')->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Add Administrator',
                'view'		    => "v_addAdministrator"
            ];

            $this->load->view("index", $data);
        } else {
            if (htmlentities($this->input->post('blokir'))=='on') {
                $blokir             = 'Ya';
            } else {
                $blokir             = 'Tidak';
            }

            $insertAdministrator            = [
                'nama_lengkap'      => htmlentities($this->input->post('nama_lengkap')),
                'username'          => htmlentities($this->input->post('username')),
                'password'          => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'alamat'            => htmlentities($this->input->post('alamat')),
                'email'             => htmlentities($this->input->post('email')),
                'no_telp'           => htmlentities($this->input->post('no_telp')),
                'blokir'            => $blokir
            ];

            // Action Insert To Database
            if ($this->Dashboard->insert('admin', $insertAdministrator)) {
                // Jika Sukses Insert
                $this->toastr->success('Sukses Menyimpan Data Administrator !!!');

                redirect('dashboard/administrator', 'refresh');
            } else {
                // Jika Gagal Insert
                $this->toastr->error('Ada Data Yang Belum Lengkap !!!');

                redirect('dashboard/addadministrator', 'refresh');
            }
        }
    }

    // Edit Data Administrator
    public function editDataAdministrator($id=0)
    {
        if ($id!=0) {
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || View Detail Administrator Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'viewAdmin'     => $this->Dashboard->viewWhere('admin', 'id_admin', $id)->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'View Detail Administrator',
                'view'		    => "v_editAdministrator"
            ];

            $this->load->view("index", $data);
        }
    }

    // Action Edit Administrator
    public function actionEditAdministrator($id=0)
    {
        if (htmlentities($this->input->post('blokir'))=='on') {
            $blokir             = 'Ya';
        } else {
            $blokir             = 'Tidak';
        }

        // Cek Data Administrator Berdasar ID
        $cekAdmin       = $this->Dashboard->viewWhere('admin', 'id_admin', $id)->result_array();

        if ($this->input->post('password')=='') {
            $password   = $cekAdmin[0]['password'];
        } else {
            $password   = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
        }

        $updateAdministrator = [
            'nama_lengkap'      => htmlentities($this->input->post('nama_lengkap')),
            'username'          => htmlentities($this->input->post('username')),
            'password'          => $password,
            'alamat'            => htmlentities($this->input->post('alamat')),
            'email'             => htmlentities($this->input->post('email')),
            'no_telp'           => htmlentities($this->input->post('no_telp')),
            'blokir'            => $blokir
        ];

        // Action Update To Database
        if ($this->Dashboard->update('admin', 'id_admin', $id, $updateAdministrator)) {
            // Jika Sukses Insert
            $this->toastr->success('Sukses Mengubah Data Administrator !!!');

            redirect('dashboard/administrator', 'refresh');
        } else {
            // Jika Gagal Insert
            $this->toastr->error('Ada Data Yang Belum Lengkap !!!');

            redirect('dashboard/editDataAdministrator/'.$id, 'refresh');
        }
    }

    // View Detail Administrator
    public function viewDetailDataAdministrator($id=0)
    {
        $id     = $this->uri->segment('3');
        if ($id!=0) {
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || View Detail Administrator Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'viewAdmin'     => $this->Dashboard->viewWhere('admin', 'id_admin', $id)->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'View Detail Administrator',
                'view'		    => "v_detailAdministrator"
            ];

            $this->load->view("index", $data);
        }
    }

    // CRUD Pengajar
    public function pengajar()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || View Pengajar Pages',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Pengajar',
            'view'		    => "v_Pengajar"
        ];

        $this->load->view("index", $data);
    }

    // Json View Datatable Data Pengajar
    public function jsonPengajar()
    {
        header('Content-Type: application/json');
        $join   = array(
            ['agama','pengajar.agama=agama.id_agama','LEFT'],
        );
        echo $this->Dashboard->jsonGlobalJoin(
            '
                pengajar.id_pengajar AS id_pengajar,
                pengajar.nip AS nip,
                pengajar.nama_lengkap AS nama_lengkap,
                pengajar.username_login AS username_login,
                pengajar.password_login AS password_login,
                pengajar.alamat AS alamat,
                pengajar.tempat_lahir AS tempat_lahir,
                pengajar.tgl_lahir AS tgl_lahir,
                pengajar.jenis_kelamin AS jenis_kelamin,
                pengajar.agama AS agama,
                pengajar.no_telp AS no_telp,
                pengajar.email AS email,
                pengajar.foto AS foto,
                pengajar.blokir AS blokir
            ',
            'pengajar',
            $join
        );
    }

    // Tambah Data Pengajar
    public function addPengajar()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || Add Pengajar Pages',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'agama'         => $this->Dashboard->viewAll('*', 'agama')->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Add Pengajar',
            'view'		    => "v_addPengajar"
        ];

        $this->load->view("index", $data);
    }

    // Action Add Pengajar
    public function actionAddPengajar()
    {
        $this->form_validation->set_rules('nip', 'Nomor Induk Pegawai', 'trim|numeric|required');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap Pengajar', 'trim|required');
        $this->form_validation->set_rules('username', 'Username Login Pengajar', 'trim|required');
        $this->form_validation->set_rules('password', 'Password Login Pengajar', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat Pengajar', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir Pengajar', 'trim|required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir Pengajar', 'trim|required');
        $this->form_validation->set_rules('jenkel', 'Jenis Kelamin Pengajar', 'trim|required');
        $this->form_validation->set_rules('agama', 'Agama Pengajar', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="text-danger"><i class="fa fa-info-circle"></i> ', '</div>');

        if ($this->form_validation->run() == false) {
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || Add Pengajar Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'agama'         => $this->Dashboard->viewAll('*', 'agama')->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Add Pengajar',
                'view'		    => "v_addPengajar"
            ];

            $this->load->view("index", $data);
        } else {
            $foto 	  = $_FILES['images'];
            if ($foto = '') {
                $this->toastr->success('Foto Tidak Ditemukan !!!');
                redirect('dashboard/addPengajar', 'refresh');
            } else {
                $config['upload_path'] 		= './frontend/assets/images/users/pengajar/';
                $config['allowed_types'] 	= 'jpg|png|jpeg';
                $config['max_size'] 		= 2048;
                $config['file_name'] 		= 'pengajar-'.htmlentities($this->input->post('nama_lengkap')).'-' . date('Y-m-d H_m_s');
                $this->upload->initialize($config);
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('images')) {
                    $this->toastr->success('Upload Foto Gagal, Pastikan file dibawah 2Mb dan Berformat jpg,png,img. !!!');
                } else {
                    if (htmlentities($this->input->post('blokir'))=='on') {
                        $blokir             = 'Ya';
                    } else {
                        $blokir             = 'Tidak';
                    }

                    $pisahTanggal   = explode(" ", htmlentities($this->input->post('tgl_lahir')));
                    $tgl_lahir      = $pisahTanggal[2].'-'.getConvertBulan($pisahTanggal[1]).'-'.$pisahTanggal[0];

                    $insertSiswa            = [
                        'nip'               => htmlentities($this->input->post('nip')),
                        'nama_lengkap'      => htmlentities($this->input->post('nama_lengkap')),
                        'username_login'    => htmlentities($this->input->post('username')),
                        'password_login'    => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                        'alamat'            => htmlentities($this->input->post('alamat')),
                        'tempat_lahir'      => htmlentities($this->input->post('tempat_lahir')),
                        'tgl_lahir'         => $tgl_lahir,
                        'jenis_kelamin'     => htmlentities($this->input->post('jenkel')),
                        'agama'             => htmlentities($this->input->post('agama')),
                        'no_telp'           => htmlentities($this->input->post('no_telp')),
                        'email'             => htmlentities($this->input->post('email')),
                        'foto'              => $this->upload->data('file_name'),
                        'blokir'            => $blokir
                    ];

                    // Action Insert To Database
                    if ($this->Dashboard->insert('pengajar', $insertSiswa)) {
                        // Jika Sukses Insert
                        $this->toastr->success('Sukses Menyimpan Data Pengajar !!!');

                        redirect('dashboard/pengajar', 'refresh');
                    } else {
                        // Jika Gagal Insert
                        $this->toastr->error('Ada Data Yang Belum Lengkap !!!');
                        redirect('dashboard/addPengajar', 'refresh');
                    }
                }
            }
        }
    }

    // Edit Data pengajar
    public function editDataPengajar($id=0)
    {
        if ($id!=0) {
            $join           = array(
                                    ['agama','pengajar.agama=agama.id_agama','LEFT']
                                );
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || View Detail Pengajar Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'viewPengajar'  => $this->Dashboard->viewGlobalJoinWhere('pengajar.*,agama.keterangan AS keterangan', 'pengajar', ['pengajar.id_pengajar' => $id], $join)->result_array(),
                'agama'         => $this->Dashboard->viewAll('*', 'agama')->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'View Detail Pengajar',
                'view'		    => "v_editPengajar"
            ];

            $this->load->view("index", $data);
        }
    }

    // Action Edit Pengajar
    public function actionEditPengajar($id=0)
    {
        // Jika Foto Kosong Update Hanya Data Saja
        $foto 	  = $_FILES['images'];

        if (htmlentities($this->input->post('blokir'))=='on') {
            $blokir             = 'Ya';
        } else {
            $blokir             = 'Tidak';
        }

        $pisahTanggal   = explode(" ", htmlentities($this->input->post('tgl_lahir')));
        $tgl_lahir      = $pisahTanggal[2].'-'.getConvertBulan($pisahTanggal[1]).'-'.$pisahTanggal[0];
        
        // Cek Data Pengajar Berdasar ID
        $cekPengajar    = $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $id)->result_array();
        if ($this->input->post('password')=='') {
            $password   = $cekPengajar[0]['password_login'];
        } else {
            $password   = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
        }

        if ($foto = '') {
            // Update Hanya Data Saja
            $updateSiswa    = [
                'nama_lengkap'      => htmlentities($this->input->post('nama_lengkap')),
                'username_login'    => htmlentities($this->input->post('username')),
                'password_login'    => $password,
                'alamat'            => htmlentities($this->input->post('alamat')),
                'tempat_lahir'      => htmlentities($this->input->post('tempat_lahir')),
                'tgl_lahir'         => $tgl_lahir,
                'jenis_kelamin'     => htmlentities($this->input->post('jenkel')),
                'agama'             => htmlentities($this->input->post('agama')),
                'email'             => htmlentities($this->input->post('email')),
                'no_telp'           => htmlentities($this->input->post('no_telp')),
                'blokir'            => $blokir
            ];
        } else {
            $updateSiswa    = [
                'nama_lengkap'      => htmlentities($this->input->post('nama_lengkap')),
                'username_login'    => htmlentities($this->input->post('username')),
                'password_login'    => $password,
                'alamat'            => htmlentities($this->input->post('alamat')),
                'tempat_lahir'      => htmlentities($this->input->post('tempat_lahir')),
                'tgl_lahir'         => $tgl_lahir,
                'jenis_kelamin'     => htmlentities($this->input->post('jenkel')),
                'agama'             => htmlentities($this->input->post('agama')),
                'email'             => htmlentities($this->input->post('email')),
                'no_telp'           => htmlentities($this->input->post('no_telp')),
                'blokir'            => $blokir
            ];
        }
        
        // Action Update To Database
        if ($this->Dashboard->update('pengajar', 'id_pengajar', $id, $updateSiswa)) {
            // Jika Sukses Insert
            $this->toastr->success('Sukses Mengubah Data Pengajar !!!');

            redirect('dashboard/pengajar', 'refresh');
        } else {
            // Jika Gagal Insert
            $this->toastr->error('Ada Data Yang Belum Lengkap !!!');

            redirect('dashboard/editDataPengajar/'.$id, 'refresh');
        }
    }

    // View Detail Pengajar
    public function viewDetailDataPengajar($id=0)
    {
        $id     = $this->uri->segment('3');
        if ($id!=0) {
            $join           = array(['agama','pengajar.agama=agama.id_agama','LEFT']);
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || View Detail Pengajar Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'viewPengajar'  => $this->Dashboard->viewGlobalJoinWhere('pengajar.*,agama.keterangan AS keterangan', 'pengajar', ['pengajar.id_pengajar' => $id], $join)->result_array(),
                'agama'         => $this->Dashboard->viewAll('*', 'agama')->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'View Detail Pengajar',
                'view'		    => "v_detailPengajar"
            ];

            $this->load->view("index", $data);
        }
    }

    // Cetak Data Pengajar
    public function cetakPengajar()
    {
        $join       = array(
                            ['agama','pengajar.agama=agama.id_agama','LEFT']
                        );
        $data       = [
            'siswa'     => $this->Dashboard->viewGlobalJoin('pengajar.*,agama.keterangan AS keterangan', 'pengajar', $join)->result_array()
        ];

        $this->load->view('cetakPengajar', $data);
    }

    // CRUD Siswa
    public function siswa()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || View Siswa Pages',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Siswa',
            'view'		    => "v_Siswa"
        ];

        $this->load->view("index", $data);
    }

    // Json View Datatable Data Siswa
    public function jsonSiswa()
    {
        header('Content-Type: application/json');
        $join   = array(['kelas','siswa.id_kelas=kelas.id_kelas','LEFT']);
        echo $this->Dashboard->jsonGlobalJoin(
            '
                siswa.id_siswa AS id_siswa,
                siswa.nis AS nis,
                siswa.nama_lengkap AS nama_lengkap,
                kelas.keterangan AS keterangan,
                siswa.jenis_kelamin AS jenis_kelamin,
                siswa.blokir AS blokir
            ',
            'siswa',
            $join
        );
    }

    // Tambah Data Siswa
    public function addSiswa()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || Add Siswa Pages',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'agama'         => $this->Dashboard->viewAll('*', 'agama')->result_array(),
            'kelas'         => $this->Dashboard->viewAll('*', 'kelas')->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Add Siswa',
            'view'		    => "v_addSiswa"
        ];

        $this->load->view("index", $data);
    }

    // Action Add Siswa
    public function actionAddSiswa()
    {
        $this->form_validation->set_rules('nis', 'Nomor Induk Siswa', 'trim|numeric|required');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap Siswa', 'trim|required');
        $this->form_validation->set_rules('username', 'Username Login Siswa', 'trim|required');
        $this->form_validation->set_rules('password', 'Password Login Siswa', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat Siswa', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir Siswa', 'trim|required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir Siswa', 'trim|required');
        $this->form_validation->set_rules('jenkel', 'Jenis Kelamin Siswa', 'trim|required');
        $this->form_validation->set_rules('agama', 'Agama Siswa', 'trim|required');
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah Siswa', 'trim|required');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu Siswa', 'trim|required');
        $this->form_validation->set_rules('thn_masuk', 'Tahun Masuk Siswa', 'trim|max_length[4]|required');
        $this->form_validation->set_error_delimiters('<div class="text-danger"><i class="fa fa-info-circle"></i> ', '</div>');

        if ($this->form_validation->run() == false) {
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || Add Siswa Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'agama'         => $this->Dashboard->viewAll('*', 'agama')->result_array(),
                'kelas'         => $this->Dashboard->viewAll('*', 'kelas')->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Add Siswa',
                'view'		    => "v_addSiswa"
            ];

            $this->load->view("index", $data);
        } else {
            $foto 	  = $_FILES['images'];
            if ($foto = '') {
                $this->toastr->success('Foto Tidak Ditemukan !!!');
                redirect('dashboard/addSiswa', 'refresh');
            } else {
                $config['upload_path'] 		= './frontend/assets/images/users/siswa/';
                $config['allowed_types'] 	= 'jpg|png|jpeg';
                $config['max_size'] 		= 2048;
                $config['file_name'] 		= 'siswa-'.htmlentities($this->input->post('nama_lengkap')).'-' . date('Y-m-d H_m_s');
                $this->upload->initialize($config);
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('images')) {
                    $this->toastr->success('Upload Foto Gagal, Pastikan file dibawah 2Mb dan Berformat jpg,png,img. !!!');
                } else {
                    if (htmlentities($this->input->post('blokir'))=='on') {
                        $blokir             = 'Ya';
                    } else {
                        $blokir             = 'Tidak';
                    }

                    $pisahTanggal   = explode(" ", htmlentities($this->input->post('tgl_lahir')));
                    $tgl_lahir      = $pisahTanggal[2].'-'.getConvertBulan($pisahTanggal[1]).'-'.$pisahTanggal[0];

                    $insertSiswa            = [
                        'nis'               => htmlentities($this->input->post('nis')),
                        'nama_lengkap'      => htmlentities($this->input->post('nama_lengkap')),
                        'username_login'    => htmlentities($this->input->post('username')),
                        'password_login'    => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                        'id_kelas'          => htmlentities($this->input->post('kelas')),
                        'alamat'            => htmlentities($this->input->post('alamat')),
                        'tempat_lahir'      => htmlentities($this->input->post('tempat_lahir')),
                        'tgl_lahir'         => $tgl_lahir,
                        'jenis_kelamin'     => htmlentities($this->input->post('jenkel')),
                        'agama'             => htmlentities($this->input->post('agama')),
                        'nama_ayah'         => htmlentities($this->input->post('nama_ayah')),
                        'nama_ibu'          => htmlentities($this->input->post('nama_ibu')),
                        'th_masuk'          => htmlentities($this->input->post('thn_masuk')),
                        'email'             => htmlentities($this->input->post('email')),
                        'no_telp'           => htmlentities($this->input->post('no_telp')),
                        'foto'              => $this->upload->data('file_name'),
                        'blokir'            => $blokir
                    ];

                    // Action Insert To Database
                    if ($this->Dashboard->insert('siswa', $insertSiswa)) {
                        // Jika Sukses Insert
                        $this->toastr->success('Sukses Menyimpan Data Siswa !!!');

                        redirect('dashboard/siswa', 'refresh');
                    } else {
                        // Jika Gagal Insert
                        $this->toastr->error('Ada Data Yang Belum Lengkap !!!');

                        redirect('dashboard/addSiswa', 'refresh');
                    }
                }
            }
        }
    }

    // Edit Data Siswa
    public function editDataSiswa($id=0)
    {
        if ($id!=0) {
            $join           = array(
                                    ['agama','siswa.agama=agama.id_agama','LEFT'],
                                    ['kelas','siswa.id_kelas=kelas.id_kelas','LEFT']
                                );
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || View Detail Siswa Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'viewSiswa'     => $this->Dashboard->viewGlobalJoinWhere('siswa.*,agama.keterangan AS keterangan, kelas.id_kelas AS id_kelas, kelas.keterangan AS kelasKeterangan', 'siswa', ['siswa.id_siswa' => $id], $join)->result_array(),
                'agama'         => $this->Dashboard->viewAll('*', 'agama')->result_array(),
                'kelas'         => $this->Dashboard->viewAll('*', 'kelas')->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'View Detail Siswa',
                'view'		    => "v_editSiswa"
            ];

            $this->load->view("index", $data);
        }
    }

    // Action Edit Siswa
    public function actionEditiswa($id=0)
    {
        // Jika Foto Kosong Update Hanya Data Saja
        $foto 	  = $_FILES['images'];

        if (htmlentities($this->input->post('blokir'))=='on') {
            $blokir             = 'Ya';
        } else {
            $blokir             = 'Tidak';
        }

        $pisahTanggal   = explode(" ", htmlentities($this->input->post('tgl_lahir')));
        $tgl_lahir      = $pisahTanggal[2].'-'.getConvertBulan($pisahTanggal[1]).'-'.$pisahTanggal[0];
        
        // Cek Data Siswa Berdasar ID
        $cekSiswa       = $this->Dashboard->viewWhere('siswa', 'id_siswa', $id)->result_array();
        if ($this->input->post('password')=='') {
            $password   = $cekSiswa[0]['password_login'];
        } else {
            $password   = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
        }

        if ($foto = '') {
            // Update Hanya Data Saja
            $updateSiswa    = [
                'nama_lengkap'      => htmlentities($this->input->post('nama_lengkap')),
                'username_login'    => htmlentities($this->input->post('username')),
                'password_login'    => $password,
                'id_kelas'          => htmlentities($this->input->post('kelas')),
                'alamat'            => htmlentities($this->input->post('alamat')),
                'tempat_lahir'      => htmlentities($this->input->post('tempat_lahir')),
                'tgl_lahir'         => $tgl_lahir,
                'jenis_kelamin'     => htmlentities($this->input->post('jenkel')),
                'agama'             => htmlentities($this->input->post('agama')),
                'nama_ayah'         => htmlentities($this->input->post('nama_ayah')),
                'nama_ibu'          => htmlentities($this->input->post('nama_ibu')),
                'th_masuk'          => htmlentities($this->input->post('thn_masuk')),
                'email'             => htmlentities($this->input->post('email')),
                'no_telp'           => htmlentities($this->input->post('no_telp')),
                'blokir'            => $blokir
            ];
        } else {
            $updateSiswa    = [
                'nama_lengkap'      => htmlentities($this->input->post('nama_lengkap')),
                'username_login'    => htmlentities($this->input->post('username')),
                'password_login'    => $password,
                'id_kelas'          => htmlentities($this->input->post('kelas')),
                'alamat'            => htmlentities($this->input->post('alamat')),
                'tempat_lahir'      => htmlentities($this->input->post('tempat_lahir')),
                'tgl_lahir'         => $tgl_lahir,
                'jenis_kelamin'     => htmlentities($this->input->post('jenkel')),
                'agama'             => htmlentities($this->input->post('agama')),
                'nama_ayah'         => htmlentities($this->input->post('nama_ayah')),
                'nama_ibu'          => htmlentities($this->input->post('nama_ibu')),
                'th_masuk'          => htmlentities($this->input->post('thn_masuk')),
                'email'             => htmlentities($this->input->post('email')),
                'no_telp'           => htmlentities($this->input->post('no_telp')),
                'blokir'            => $blokir
            ];
        }
        
        // Action Update To Database
        if ($this->Dashboard->update('siswa', 'id_siswa', $id, $updateSiswa)) {
            // Jika Sukses Insert
            $this->toastr->success('Sukses Mengubah Data Siswa !!!');

            redirect('dashboard/siswa', 'refresh');
        } else {
            // Jika Gagal Insert
            $this->toastr->error('Ada Data Yang Belum Lengkap !!!');

            redirect('dashboard/editDataSiswa/'.$id, 'refresh');
        }
    }

    // View Detail Siswa
    public function viewDetailDataSiswa($id=0)
    {
        $id     = $this->uri->segment('3');
        if ($id!=0) {
            $join           = array(['agama','siswa.agama=agama.id_agama','LEFT']);
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || View Detail Siswa Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'viewSiswa'     => $this->Dashboard->viewGlobalJoinWhere('siswa.*,agama.keterangan AS keterangan', 'siswa', ['siswa.id_siswa' => $id], $join)->result_array(),
                'agama'         => $this->Dashboard->viewAll('*', 'agama')->result_array(),
                'kelas'         => $this->Dashboard->viewAll('*', 'kelas')->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'View Detail Siswa',
                'view'		    => "v_detailSiswa"
            ];

            $this->load->view("index", $data);
        }
    }

    // Cetak Data Siswa
    public function cetakSiswa()
    {
        $join       = array(
                            ['agama','siswa.agama=agama.id_agama','LEFT'],
                            ['kelas','siswa.id_kelas=kelas.id_kelas','LEFT']
                        );
        $data       = [
            'siswa'     => $this->Dashboard->viewGlobalJoin('siswa.*,agama.keterangan AS keterangan, kelas.id_kelas AS id_kelas, kelas.keterangan AS kelasKeterangan', 'siswa', $join)->result_array()
        ];

        $this->load->view('cetakSiswa', $data);
    }

    // CRUD Kelas
    public function kelas()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || View Kelas Pages',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Kelas',
            'view'		    => "v_Kelas"
        ];

        $this->load->view("index", $data);
    }

    // Json View Datatable Data Siswa
    public function jsonKelasDet()
    {
        header('Content-Type: application/json');
        $join   = array(
            ['kelas','kelas_detail.kelas=kelas.id_kelas','LEFT'],
            ['pengajar','kelas_detail.wali_kelas=pengajar.id_pengajar','LEFT'],
            ['siswa','kelas_detail.ketua_kelas=siswa.id_siswa','LEFT']
        );
        echo $this->Dashboard->jsonGlobalJoin(
            '
                kelas_detail.id_kelas_detail AS id_kelas_detail,
                kelas.id_kelas AS id_kelas,
                kelas.keterangan AS nama_kelas,
                pengajar.nama_lengkap AS nama_guru,
                siswa.nama_lengkap AS nama_lengkap
            ',
            'kelas_detail',
            $join
        );
    }

    // Add Kelas Detail
    public function addKelas()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || View Kelas Pages',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'kelas'         => $this->Dashboard->viewAll('*', 'kelas')->result_array(),
            'pengajar'      => $this->Dashboard->viewAll('*', 'pengajar')->result_array(),
            'siswa'         => $this->Dashboard->viewAll('*', 'siswa')->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Kelas',
            'view'		    => "v_addKelas"
        ];

        $this->load->view("index", $data);
    }

    // Action Add Kelas
    public function actionAddKelas()
    {
        $this->form_validation->set_rules('kelas', 'Kelas Siswa', 'trim|required');
        $this->form_validation->set_rules('pengajar', 'Pengajar Siswa', 'trim|is_unique[kelas_detail.wali_kelas]|required');
        // $this->form_validation->set_rules('siswa', 'Siswa', 'trim|is_unique[siswa.id_siswa]|required');
        $this->form_validation->set_error_delimiters('<div class="text-danger"><i class="fa fa-info-circle"></i> ', '</div>');

        // Validation
        if ($this->form_validation->run() == false) {
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || View Kelas Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'kelas'         => $this->Dashboard->viewAll('*', 'kelas')->result_array(),
                'pengajar'      => $this->Dashboard->viewAll('*', 'pengajar')->result_array(),
                'siswa'         => $this->Dashboard->viewAll('*', 'siswa')->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Kelas',
                'view'		    => "v_addKelas"
            ];

            $this->load->view("index", $data);
        } else {
            $insertManajemenKelas = [
                'kelas'         => htmlentities($this->input->post('kelas')),
                'wali_kelas'    => htmlentities($this->input->post('pengajar')),
                'ketua_kelas'   => htmlentities($this->input->post('siswa'))
            ];
            
            // Insert To Database
            if ($this->Dashboard->insert('kelas_detail', $insertManajemenKelas)) {
                // Jika Sukses Insert
                $this->toastr->success('Sukses Menyimpan Data Kelas Detail !!!');

                redirect('dashboard/kelas', 'refresh');
            } else {
                // Jika Gagal Insert
                $this->toastr->error('Data Tidak Valid !!!');

                redirect('dashboard/addKelas', 'refresh');
            }
        }
    }

    // Edit Data Kelas Detail
    public function editDataDetailKelas($id=0)
    {
        if ($id!=0) {
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || Edit Detail Siswa Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'viewKelasDet'  => $this->Dashboard->viewWhere('kelas_detail', 'id_kelas_detail', $id)->result_array(),
                'kelas'         => $this->Dashboard->viewAll('*', 'kelas')->result_array(),
                'pengajar'      => $this->Dashboard->viewAll('*', 'pengajar')->result_array(),
                'siswa'         => $this->Dashboard->viewAll('*', 'siswa')->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Edit Detail Siswa',
                'view'		    => "v_editKelasDet"
            ];

            $this->load->view("index", $data);
        }
    }

    // Edit Administrator
    public function actionEditKelas($id=0)
    {
        if ($id!=0) {
            $updateAdministrator    = [
                'kelas'         => htmlentities($this->input->post('kelas')),
                'wali_kelas'    => htmlentities($this->input->post('pengajar')),
                'ketua_kelas'   => htmlentities($this->input->post('siswa'))
            ];

            // Update Data To Database
            // Action Update To Database
            if ($this->Dashboard->update('kelas_detail', 'id_kelas_detail', $id, $updateAdministrator)) {
                // Jika Sukses Insert
                $this->toastr->success('Sukses Mengubah Data Siswa !!!');

                redirect('dashboard/kelas', 'refresh');
            }
        }
    }

    // Hapus Data Kelas Detail
    public function DeleteDetailDataKelas($id=0)
    {
        if ($id!=0) {
            if ($this->Dashboard->delete('id_kelas_detail', 'kelas_detail', $id)) {
                $this->toastr->success('Sukses Menghapus Detail Data Kelas !!!');

                redirect('dashboard/kelas', 'refresh');
            }
        }
    }

    // View Data Kelas
    public function viewDetailDataKelas()
    {
        $join       = array(
                        ['agama','siswa.agama=agama.id_agama','LEFT'],
                        ['kelas','siswa.id_kelas=kelas.id_kelas','LEFT']
                    );
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || Edit Detail Siswa Kelas Pages',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            // 'siswa'         => $this->Dashboard->viewAllOrderBy('*', 'siswa', ['kelas'    => 'DESC'])->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Edit Detail Siswa',
            'view'		    => "v_viewKelasDetSiswa"
        ];

        $this->load->view("index", $data);
    }

    // Json View Datatable Data Siswa
    public function jsonKelasDetSiswa()
    {
        header('Content-Type: application/json');
        $join   = array(
                    ['kelas','siswa.id_kelas=kelas.id_kelas','LEFT'],
                    ['agama','siswa.agama=agama.id_agama','LEFT']
                );
        echo $this->Dashboard->jsonGlobalJoin(
            '
                siswa.id_siswa AS id_siswa,
                siswa.nis AS nis,
                siswa.nama_lengkap AS nama_lengkap,
                kelas.keterangan AS keterangan,
                siswa.alamat AS alamat,
                siswa.tempat_lahir AS tempat_lahir,
                siswa.tgl_lahir AS tgl_lahir,
                siswa.jenis_kelamin AS jenis_kelamin,
                agama.keterangan AS nama_agama,
                siswa.nama_ayah AS nama_ayah,
                siswa.nama_ibu AS nama_ibu,
                siswa.email AS email,
                siswa.th_masuk AS th_masuk,
                siswa.no_telp AS no_telp,
                siswa.foto AS foto,
                siswa.blokir AS blokir
            ',
            'siswa',
            $join
        );
    }

    // Cetak Data Kelas Detail
    public function cetakKelasDetail()
    {
        $join   = array(
            ['kelas','kelas_detail.kelas=kelas.id_kelas','LEFT'],
            ['pengajar','kelas_detail.wali_kelas=pengajar.id_pengajar','LEFT'],
            ['siswa','kelas_detail.ketua_kelas=siswa.id_siswa','LEFT']
        );

        $data   = [
            'kelasDet'      => $this->Dashboard->viewGlobalJoin(
                '
                kelas_detail.id_kelas_detail AS id_kelas_detail,
                kelas.id_kelas AS id_kelas,
                kelas.keterangan AS nama_kelas,
                pengajar.nama_lengkap AS nama_guru,
                siswa.nama_lengkap AS nama_lengkap
            ',
                'kelas_detail',
                $join
            )->result_array()
        ];
        $this->load->view('cetakKelasDet', $data);
    }

    // Cetak Data Kelas
    public function printDataKelas($id=0)
    {
        $join       = array(
                            ['agama','siswa.agama=agama.id_agama','LEFT'],
                            ['kelas','siswa.id_kelas=kelas.id_kelas','LEFT']
                        );
        if ($id!=0) {
            $data       = [
                'siswaDet'     => $this->Dashboard->viewGlobalJoinWhere('siswa.*,agama.keterangan AS keterangan, kelas.id_kelas AS id_kelas, kelas.keterangan AS kelasKeterangan', 'siswa', ['siswa.id_kelas'  => $id], $join)->result_array()
            ];
    
            $this->load->view('cetakKelas', $data);
        }
    }

    // CRUD Mapel
    public function mapel()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || View Mata Pelajaran Pages',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Mata Pelajaran',
            'view'		    => "v_MataPelajaran"
        ];

        $this->load->view("index", $data);
    }

    // Json View Datatable Data Mata Pelajaran
    public function jsonMapel()
    {
        header('Content-Type: application/json');
        $join   = array(
            ['master_pelajaran','mengajar.nama=master_pelajaran.id_mapel','LEFT'],
            ['pengajar','mengajar.id_pengajar=pengajar.id_pengajar','LEFT'],
            ['kelas','mengajar.id_kelas=kelas.id_kelas','LEFT']
        );
        echo $this->Dashboard->jsonGlobalJoin(
            '
                mengajar.id_mengajar AS id_mengajar,
                master_pelajaran.mapel AS mapel,
                kelas.keterangan AS keterangan,
                pengajar.nama_lengkap AS nama_lengkap,
                mengajar.deskripsi AS deskripsi
            ',
            'mengajar',
            $join
        );
    }

    // Add Mengajar
    public function addMengajar()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || Add Mata Pelajaran Pages',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'kelas'         => $this->Dashboard->viewAll('*', 'kelas')->result_array(),
            'pengajar'      => $this->Dashboard->viewAll('*', 'pengajar')->result_array(),
            'mapel'         => $this->Dashboard->viewAll('*', 'master_pelajaran')->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Kelas',
            'view'		    => "v_addMapel"
        ];

        $this->load->view("index", $data);
    }

    // Action Add Mata Pelajaran
    public function actionAddMapel()
    {
        $this->form_validation->set_rules('mapel', 'Mata Pelajaran', 'trim|required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
        $this->form_validation->set_rules('pengajar', 'Pengajar Mata Pelajaran', 'trim|required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Mata Pelajaran', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="text-danger"><i class="fa fa-info-circle"></i> ', '</div>');

        // Validation
        if ($this->form_validation->run() == false) {
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || Add Mata Pelajaran Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'kelas'         => $this->Dashboard->viewAll('*', 'kelas')->result_array(),
                'pengajar'      => $this->Dashboard->viewAll('*', 'pengajar')->result_array(),
                'mapel'         => $this->Dashboard->viewAll('*', 'master_pelajaran')->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Kelas',
                'view'		    => "v_addMapel"
            ];

            $this->load->view("index", $data);
        } else {
            $insertManajemenKelas = [
                'nama'          => htmlentities($this->input->post('mapel')),
                'id_pengajar'   => htmlentities($this->input->post('pengajar')),
                'id_kelas'      => htmlentities($this->input->post('kelas')),
                'deskripsi'     => htmlentities($this->input->post('deskripsi'))
            ];
            
            // Insert To Database
            if ($this->Dashboard->insert('mengajar', $insertManajemenKelas)) {
                // Jika Sukses Insert
                $this->toastr->success('Sukses Menyimpan Data Kelas Detail !!!');

                redirect('dashboard/mapel', 'refresh');
            } else {
                // Jika Gagal Insert
                $this->toastr->error('Data Tidak Valid !!!');

                redirect('dashboard/addMengajar', 'refresh');
            }
        }
    }

    // Cetak Data Mata Pelajaran
    public function cetakMengajar()
    {
        $join   = array(
            ['master_pelajaran','mengajar.nama=master_pelajaran.id_mapel','LEFT'],
            ['pengajar','mengajar.id_pengajar=pengajar.id_pengajar','LEFT'],
            ['kelas','mengajar.id_kelas=kelas.id_kelas','LEFT']
        );


        $data   = [
            'mapelDet'      => $this->Dashboard->viewGlobalJoin(
                '
                mengajar.id_mengajar AS id_mengajar,
                master_pelajaran.mapel AS mapel,
                kelas.keterangan AS keterangan,
                pengajar.nama_lengkap AS nama_lengkap,
                mengajar.deskripsi AS deskripsi
            ',
                'mengajar',
                $join
            )->result_array()
        ];
        $this->load->view('cetakMapelDet', $data);
    }

    // Edit Data Kelas Mata Pelajaran
    public function editDataMapel($id=0)
    {
        if ($id!=0) {
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || Edit Mata Pelajaran Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'viewMapelDet'  => $this->Dashboard->viewWhere('mengajar', 'id_mengajar', $id)->result_array(),
                'kelas'         => $this->Dashboard->viewAll('*', 'kelas')->result_array(),
                'pengajar'      => $this->Dashboard->viewAll('*', 'pengajar')->result_array(),
                'mapel'         => $this->Dashboard->viewAll('*', 'master_pelajaran')->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Edit Data Mata Pelajaran',
                'view'		    => "v_editMapelDet"
            ];

            $this->load->view("index", $data);
        }
    }

    // Action Edit Mata Pelajaran
    public function actionEditMapel($id=0)
    {
        // Cek Data Administrator Berdasar ID
        $cekAdmin       = $this->Dashboard->viewWhere('admin', 'id_admin', $id)->result_array();

        if ($this->input->post('password')=='') {
            $password   = $cekAdmin[0]['password'];
        } else {
            $password   = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
        }

        $updateAdministrator = [
            'nama'          => htmlentities($this->input->post('mapel')),
            'id_pengajar'   => htmlentities($this->input->post('pengajar')),
            'id_kelas'      => htmlentities($this->input->post('kelas')),
            'deskripsi'     => htmlentities($this->input->post('deskripsi'))
        ];

        // Action Update To Database
        if ($this->Dashboard->update('mengajar', 'id_mengajar', $id, $updateAdministrator)) {
            // Jika Sukses Insert
            $this->toastr->success('Sukses Mengubah Data Mata Pelajaran !!!');

            redirect('dashboard/mapel', 'refresh');
        } else {
            // Jika Gagal Insert
            $this->toastr->error('Ada Data Yang Belum Lengkap !!!');

            redirect('dashboard/editDataMapel/'.$id, 'refresh');
        }
    }

    // Hapus Data Mata Pelajaran
    public function deleteDataMapel($id=0)
    {
        if ($id!=0) {
            if ($this->Dashboard->delete('id_mengajar', 'mengajar', $id)) {
                $this->toastr->success('Sukses Menghapus Data Mengajar !!!');

                redirect('dashboard/mapel', 'refresh');
            }
        }
    }

    // Sarana Prasarana
    public function sarpra()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || View Sarana Prasarana',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Sarana Prasarana',
            'view'		    => "v_Prasara"
        ];

        $this->load->view("index", $data);
    }

    // Json View Datatable Data jsonAdministrator
    public function jsonPrasarana()
    {
        header('Content-Type: application/json');
        echo $this->Dashboard->json(
            '*',
            'sarana_prasarana'
        );
    }

    public function addSrapra()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || Add Sarana Prasarana Pages',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Srana Prasarana',
            'view'		    => "v_addSarpra"
        ];

        $this->load->view("index", $data);
    }

    // Action Add Sarana Prasarana
    public function actionAddSarpra()
    {
        $this->form_validation->set_rules('keterangan', 'Keterangan Sarapa Prasarana', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="text-danger"><i class="fa fa-info-circle"></i> ', '</div>');

        // Validation
        if ($this->form_validation->run() == false) {
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || Add Sarana Prasarana Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'srapra'        => $this->Dashboard->viewAll('*','sarana_prasarana')->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Edit Data Sarana Prasarana',
                'view'		    => "v_editSrapra"
            ];

            $this->load->view("index", $data);
        } else {
            $insertSapra = [
                'keterangan'     => htmlentities($this->input->post('keterangan'))
            ];
            
            // Insert To Database
            if ($this->Dashboard->insert('sarana_prasarana', $insertSapra)) {
                // Jika Sukses Insert
                $this->toastr->success('Sukses Menyimpan Data Sarana Prasarana !!!');

                redirect('dashboard/addSrapra', 'refresh');
            } else {
                // Jika Gagal Insert
                $this->toastr->error('Data Tidak Valid !!!');

                redirect('dashboard/sarpra', 'refresh');
            }
        }
    }

    // Edit Data Kelas Mata Pelajaran
    public function editDataSrapra($id=0)
    {
        if ($id!=0) {
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || Edit Sarana Prasarana Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'srapra'        => $this->Dashboard->viewAll('*','sarana_prasarana')->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Edit Data Sarana Prasarana',
                'view'		    => "v_editSrapra"
            ];

            $this->load->view("index", $data);
        }
    }

    // Action Edit Administrator
    public function actionEditSrapa($id=0)
    {
        $updateAdministrator = [
            'keterangan'        => htmlentities($this->input->post('keterangan'))
        ];

        // Action Update To Database
        if ($this->Dashboard->update('sarana_prasarana', 'id_prasara', $id, $updateAdministrator)) {
            // Jika Sukses Insert
            $this->toastr->success('Sukses Mengubah Data Sarana Prasarana !!!');
        }
        redirect('dashboard/sarpra','refresh');
    }

    // Hapus Data Sarana Prasarana
    public function deleteDataSrapra($id=0)
    {
        if ($id!=0) {
            if ($this->Dashboard->delete('id_prasara', 'sarana_prasarana', $id)) {
                $this->toastr->success('Sukses Menghapus Data Sarana Prasarana !!!');

                redirect('dashboard/sarpra', 'refresh');
            }
        }
    }

    // Cetak Data Sarana Prasarana
    public function cetakSrapraDetail()
    {
        $data       = [
            'sarpra'     => $this->Dashboard->viewAll('*', 'sarana_prasarana')->result_array()
        ];

        $this->load->view('cetakSaranaPrasarana', $data);
    }

    // Sarana Ekstrakulikuler
    public function eksul()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || View Ekstra Kulikuler',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Ekstra Kulikuler',
            'view'		    => "v_Eskul"
        ];

        $this->load->view("index", $data);
    }

    // Json View Datatable Data jsonAdministrator
    public function jsonEskul()
    {
        header('Content-Type: application/json');
        echo $this->Dashboard->json(
            '*',
            'ekstrakul'
        );
    }

    public function addEskul()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || Add Ekstra Kulikuler Pages',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Ekstra Kulikuler',
            'view'		    => "v_addEskul"
        ];

        $this->load->view("index", $data);
    }

    // Action Add Action Ekstra Kulikuler
    public function actionAddEskul()
    {
        $this->form_validation->set_rules('keterangan', 'Keterangan Sarapa Prasarana', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="text-danger"><i class="fa fa-info-circle"></i> ', '</div>');

        // Validation
        if ($this->form_validation->run() == false) {
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || View Ekstra Kulikuler',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Ekstra Kulikuler',
                'view'		    => "v_Eskul"
            ];
    
            $this->load->view("index", $data);
        } else {
            $images         = $_FILES['images'];

            if($images['name']==''){
                $insertEskul    = [
                    'keterangan'     => htmlentities($this->input->post('keterangan'))
                ];
                // Insert To Database
                if ($this->Dashboard->insert('ekstrakul', $insertEskul)) {
                    // Jika Sukses Insert
                    $this->toastr->success('Sukses Menyimpan Data Ekstra Kulikuler !!!');

                    redirect('dashboard/eksul', 'refresh');
                } else {
                    // Jika Gagal Insert
                    $this->toastr->error('Data Tidak Valid !!!');
                    redirect('dashboard/addEskul', 'refresh');
                }
            }else{
                $config['upload_path'] 		= './frontend/assets/images/eskul/';
                $config['allowed_types'] 	= 'jpg|png|jpeg';
                $config['max_size'] 		= 2048;
                $config['file_name'] 		= 'eskul-'. date('Y-m-d H_m_s');
                $this->upload->initialize($config);
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('images')) {
                    $this->toastr->error('Upload Foto Gagal, Pastikan file dibawah 2Mb dan Berformat jpg,png,img. !!!');
                } else {
                    $insertEskul    = [
                        'keterangan'        => htmlentities($this->input->post('keterangan')),
                        'file'              => $this->upload->data('file_name'),
                    ];
                    // Insert To Database
                    if ($this->Dashboard->insert('ekstrakul', $insertEskul)) {
                        // Jika Sukses Insert
                        $this->toastr->success('Sukses Menyimpan Data Ekstra Kulikuler !!!');
    
                        redirect('dashboard/eksul', 'refresh');
                    } else {
                        // Jika Gagal Insert
                        $this->toastr->error('Data Tidak Valid !!!');
                        redirect('dashboard/addEskul', 'refresh');
                    }
                }
            }
        }
    }

    // Edit Data Ekstra Kulikuler
    public function editDataEskul($id=0)
    {
        if ($id!=0) {
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || Edit Ekstra Kulikuler Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'eskul'         => $this->Dashboard->viewWhere('ekstrakul','id_eskul',$id)->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Edit Data Ekstra Kulikuler',
                'view'		    => "v_editEskul"
            ];

            $this->load->view("index", $data);
        }
    }

    // Action Edit Ekstra Kulikuler
    public function actionEditEskul($id=0)
    {
        if($id!=0){
            $images         = $_FILES['images'];
    
            if($images['name']==''){
                $updateEskul    = [
                    'keterangan'     => htmlentities($this->input->post('keterangan'))
                ];
                // Action Update To Database
                if ($this->Dashboard->update('ekstrakul', 'id_eskul', $id, $updateEskul)) {
                    // Jika Sukses Insert
                    $this->toastr->success('Sukses Mengubah Data Ekstra Kulikuler !!!');
                }
                redirect('dashboard/eksul','refresh');
            }else{
                $config['upload_path'] 		= './frontend/assets/images/eskul/';
                $config['allowed_types'] 	= 'jpg|png|jpeg';
                $config['max_size'] 		= 2048;
                $config['file_name'] 		= 'eskul-'. date('Y-m-d H_m_s');
                $this->upload->initialize($config);
                $this->load->library('upload', $config);
    
                if (!$this->upload->do_upload('images')) {
                    $this->toastr->error('Upload Foto Gagal, Pastikan file dibawah 2Mb dan Berformat jpg,png,img. !!!');
                } else {
                    $updateEskul    = [
                        'keterangan'        => htmlentities($this->input->post('keterangan')),
                        'file'              => $this->upload->data('file_name'),
                    ];
    
                     // Action Update To Database
                    if ($this->Dashboard->update('ekstrakul', 'id_eskul', $id, $updateEskul)) {
                        // Jika Sukses Insert
                        $this->toastr->success('Sukses Mengubah Data Ekstra Kulikuler !!!');
                    }
                }
                redirect('dashboard/eksul','refresh');
            }
        }
    }

    // Hapus Data Ekstra Kulikuler
    public function deleteDataEskul($id=0)
    {
        if ($id!=0) {
            if ($this->Dashboard->delete('id_eskul', 'ekstrakul', $id)) {
                $this->toastr->success('Sukses Menghapus Data Ekstra Kulikuler !!!');

                redirect('dashboard/eksul', 'refresh');
            }
        }
    }

    // Cetak Data Ekstra Kulikuler
    public function cetakEskulDetail()
    {
        $data       = [
            'eskul'     => $this->Dashboard->viewAll('*', 'ekstrakul')->result_array()
        ];

        $this->load->view('cetakEskul', $data);
    }

    // Bursa Kerja
    public function bursa()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || View Bursa Kerja',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Bursa Kerja',
            'view'		    => "v_Bursa"
        ];

        $this->load->view("index", $data);
    }

    // Json View Datatable Data jsonBursaKerja
    public function jsonBursa()
    {
        header('Content-Type: application/json');
        echo $this->Dashboard->json(
            '*',
            'bursa'
        );
    }

    // Edit Data Bursa Kerja
    public function editDataBursa($id=0)
    {
        if ($id!=0) {
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || Edit Bursa Kerja Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'bursa'         => $this->Dashboard->viewWhere('bursa','id_bursa',$id)->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Edit Data Bursa Kerja',
                'view'		    => "v_editBursa"
            ];

            $this->load->view("index", $data);
        }
    }

    // Action Edit Bursa Kerja
    public function actionEditBursa($id=0)
    {
        $updateEskul    = [
            'keterangan'     => htmlentities($this->input->post('keterangan'))
        ];
        // Action Update To Database
        if ($this->Dashboard->update('bursa', 'id_bursa', $id, $updateEskul)) {
            // Jika Sukses Insert
            $this->toastr->success('Sukses Mengubah Data Bursa Kerja !!!');
        }
        redirect('dashboard/bursa','refresh');
    }

    // Bursa Kerja Picture Detail Picture Detail
    public function viewBursaPic()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || View Bursa Kerja Picture Detail',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Bursa Kerja Picture Detail',
            'view'		    => "v_BursaPicture"
        ];

        $this->load->view("index", $data);
    }

    // Json View Datatable Data jsonBursaKerja Picture Detail
    public function jsonBursaPic()
    {
        header('Content-Type: application/json');
        echo $this->Dashboard->json(
            '*',
            'bursa_pic'
        );
    }

    // Edit Data Bursa Kerja Picture
    public function editDataBursaPic($id=0)
    {
        if ($id!=0) {
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || Edit Bursa Kerja Picture Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'bursaPic'      => $this->Dashboard->viewWhere('bursa_pic','id_bursa_pic',$id)->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Edit Data Bursa Kerja Picture',
                'view'		    => "v_editBursaPicture"
            ];

            $this->load->view("index", $data);
        }
    }

    // Action Edit Ekstra Kulikuler Picture
    public function actionEditBursaPic($id=0)
    {
        if($id!=0){
            $images         = $_FILES['imagesEdit'];
    
            if($images['name']==''){
                $updateBursa    = [
                    'keterangan'     => htmlentities($this->input->post('keterangan'))
                ];
                // Action Update To Database
                if ($this->Dashboard->update('bursa_pic', 'id_bursa_pic', $id, $updateBursa)) {
                    // Jika Sukses Insert
                    $this->toastr->success('Sukses Mengubah Data Bursa Kerja Picture !!!');
                }
                redirect('dashboard/viewBursaPic/1','refresh');
            }else{
                $config['upload_path'] 		= './frontend/assets/images/bursa/';
                $config['allowed_types'] 	= 'jpg|png|jpeg';
                $config['max_size'] 		= 2048;
                $config['file_name'] 		= 'eskul-'. date('Y-m-d H_m_s');
                $this->upload->initialize($config);
                $this->load->library('upload', $config);
    
                if (!$this->upload->do_upload('imagesEdit')) {
                    $this->toastr->error('Upload Foto Gagal, Pastikan file dibawah 2Mb dan Berformat jpg,png,img. !!!');
                } else {
                    $updateBursa    = [
                        'keterangan'        => htmlentities($this->input->post('keterangan')),
                        'file'              => $this->upload->data('file_name'),
                    ];
    
                     // Action Update To Database
                    if ($this->Dashboard->update('bursa_pic', 'id_bursa_pic', $id, $updateBursa)) {
                        // Jika Sukses Insert
                        $this->toastr->success('Sukses Mengubah Data Bursa Kerja Picture !!!');
                    }
                }
                redirect('dashboard/viewBursaPic/1','refresh');
            }
        }
    }

    // Mitra Bursa Kerja
    public function mitrabkk()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || View Mitra Bursa Kerja',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Mitra Bursa Kerja',
            'view'		    => "v_MitraBursa"
        ];

        $this->load->view("index", $data);
    }

    // Json View Datatable Data jsonBursaKerja
    public function jsonMitraBursa()
    {
        header('Content-Type: application/json');
        echo $this->Dashboard->json(
            '*',
            'mitrabkk'
        );
    }

    // Tambah Data Mitra Bursa Kerja
    public function addMitraBkk()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Administrator || Add Mitra BKK Pages',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Add Mitra BKK',
            'view'		    => "v_addMitraBKK"
        ];

        $this->load->view("index", $data);
    }

    // Action Add Administrator
    public function actionAddMitraBKK()
    {
        $this->form_validation->set_rules('nama_mitra', 'Nama Mitra', 'trim|is_unique[admin.username]|required');
        $this->form_validation->set_error_delimiters('<div class="text-danger"><i class="fa fa-info-circle"></i> ', '</div>');

        if ($this->form_validation->run() == false) {
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || View Mitra Bursa Kerja',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Mitra Bursa Kerja',
                'view'		    => "v_MitraBursa"
            ];
    
            $this->load->view("index", $data);
        } else {
            $insertMitraBKK            = [
                'nama_mitra'        => htmlentities($this->input->post('nama_mitra'))
            ];

            // Action Insert To Database
            if ($this->Dashboard->insert('mitrabkk', $insertMitraBKK)) {
                // Jika Sukses Insert
                $this->toastr->success('Sukses Menyimpan Data Mitra BKK !!!');

                redirect('dashboard/mitrabkk', 'refresh');
            } else {
                // Jika Gagal Insert
                $this->toastr->error('Ada Data Yang Belum Lengkap !!!');

                redirect('dashboard/addMitraBkk', 'refresh');
            }
        }
    }

    // Edit Data Mitra BKK
    public function editDataMitraBKK($id=0)
    {
        if ($id!=0) {
            $data 	        = [
                'titles'	    => 'Dashboard Administrator || View Detail Mitra Bursa Kerja Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'mitra'         => $this->Dashboard->viewWhere('mitrabkk', 'id_mitra', $id)->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'View Detail Mitra Bursa Kerja',
                'view'		    => "v_editMitraBKK"
            ];

            $this->load->view("index", $data);
        }
    }

    // Action Edit Administrator
    public function actionEditMitra($id=0)
    {
        $updateMitra = [
            'nama_mitra'        => htmlentities($this->input->post('nama_mitraEdit'))
        ];

        // Action Update To Database
        if ($this->Dashboard->update('mitrabkk', 'id_mitra', $id, $updateMitra)) {
            $this->toastr->success('Sukses Mengubah Data Mitra BKK !!!');
            redirect('dashboard/mitrabkk', 'refresh');
        }
    }

    // Hapus Data Mitra BKK Detail
    public function deleteDataMitraBKK($id=0)
    {
        if ($id!=0) {
            if ($this->Dashboard->delete('id_mitra', 'mitrabkk', $id)) {
                $this->toastr->success('Sukses Menghapus Detail Data Mitra BKK !!!');

                redirect('dashboard/mitrabkk', 'refresh');
            }
        }
    }

    // QUICK LINK END   //
}
