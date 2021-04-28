<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Dashboard/Dashboard_model', 'Dashboard', true);
        $this->load->library('datatables');
        $this->load->library('src/Toastr');
        set_zone();

        // Cek Session User
        if ($this->session->userdata('pengajaraktif')!=true) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap login untuk melanjutkan</div>');
            redirect('login/pengajar');
        }
    }
    
    public function index()
    {
        $join   = array(
            ['agama','pengajar.agama=agama.id_agama','LEFT'],
        );

        $data 	        = [
            'titles'	    => 'Dashboard Pengajar || Dashboard Pages',
            'user'          => $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $this->session->userdata('id'))->result_array(),
            'pengajar'      => $this->Dashboard->viewGlobalJoinWhere(
                'pengajar.id_pengajar AS id_pengajar,
                pengajar.nip AS nip,
                pengajar.nama_lengkap AS nama_lengkap,
                pengajar.username_login AS username_login,
                pengajar.password_login AS password_login,
                pengajar.alamat AS alamat,
                pengajar.tempat_lahir AS tempat_lahir,
                pengajar.tgl_lahir AS tgl_lahir,
                pengajar.jenis_kelamin AS jenis_kelamin,
                agama.keterangan AS keterangan,
                pengajar.no_telp AS no_telp,
                pengajar.email AS email,
                pengajar.foto AS foto,
                pengajar.blokir AS blokir',
                'pengajar',
                ['id_pengajar'      => $this->session->userdata('id')],
                $join
            )->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Pengajar',
            'view'		    => "v_Pengajar"
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
        echo $this->Dashboard->jsonGlobalJoinWhereAsso(
            '
                kelas_detail.id_kelas_detail AS id_kelas_detail,
                kelas.id_kelas AS id_kelas,
                kelas.keterangan AS nama_kelas,
                pengajar.nama_lengkap AS nama_guru,
                siswa.nama_lengkap AS nama_lengkap
            ',
            'kelas_detail',
            ['kelas_detail.wali_kelas'     => $this->session->userdata('id')],
            $join
        );
    }

    // Json View Datatable Data Mata Pelajaran
    public function jsonMapel()
    {
        header('Content-Type: application/json');
        $join1   = array(
            ['master_pelajaran','mengajar.nama=master_pelajaran.id_mapel','LEFT'],
            ['pengajar','mengajar.id_pengajar=pengajar.id_pengajar','LEFT'],
            ['kelas','mengajar.id_kelas=kelas.id_kelas','LEFT']
        );
        echo $this->Dashboard->jsonGlobalJoinWhereAsso(
            '
                mengajar.id_mengajar AS id_mengajar,
                mengajar.id_pengajar AS id_pengajar,
                master_pelajaran.mapel AS mapel,
                kelas.keterangan AS keterangan,
                pengajar.nama_lengkap AS nama_lengkap,
                mengajar.deskripsi AS deskripsi
            ',
            'mengajar',
            ['mengajar.id_pengajar'     => $this->session->userdata('id')],
            $join1
        );
    }

    // Data Kelas Start //
    public function editProfilePengajar()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Pengajar || Edit Profile Pengajar Pages',
            'user'          => $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $this->session->userdata('id'))->result_array(),
            'agama'         => $this->Dashboard->viewAll('*', 'agama')->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Kelas Pengajar',
            'view'		    => "v_editProfile"
        ];

        $this->load->view("index", $data);
    }

    // Action Edit Pengajar
    public function actionEditPengajar($id=0)
    {
        if($id!=0){
            $pisahTanggal   = explode(" ", htmlentities($this->input->post('tgl_lahir')));
            $tgl_lahir      = $pisahTanggal[2].'-'.getConvertBulan($pisahTanggal[1]).'-'.$pisahTanggal[0];
                
            // Cek Data Pengajar Berdasar ID
            $cekPengajar    = $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $this->session->userdata('id'))->result_array();
            if ($this->input->post('password')=='') {
                $password   = $cekPengajar[0]['password_login'];
            } else {
                $password   = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
            }

            $foto 	  = $_FILES['images'];
            if ($foto['name'] === '') {
                // Update Hanya Data Saja
                $updatePengajar    = [
                    'nama_lengkap'      => htmlentities($this->input->post('nama_lengkap')),
                    'password_login'    => $password,
                    'alamat'            => htmlentities($this->input->post('alamat')),
                    'tempat_lahir'      => htmlentities($this->input->post('tempat_lahir')),
                    'tgl_lahir'         => $tgl_lahir,
                    'jenis_kelamin'     => htmlentities($this->input->post('jenkel')),
                    'agama'             => htmlentities($this->input->post('agama')),
                    'email'             => htmlentities($this->input->post('email')),
                    'no_telp'           => htmlentities($this->input->post('no_telp'))
                ];
            }else{
                $config['upload_path'] 		= './frontend/assets/images/users/pengajar/';
                $config['allowed_types'] 	= 'jpg|png|jpeg';
                $config['max_size'] 		= 2048;
                $config['file_name'] 		= 'Pengajar-'.htmlentities($this->input->post('nama_lengkap')).'-' . date('Y-m-d H_m_s');
                $this->upload->initialize($config);
                $this->load->library('upload', $config);
        
                if (!$this->upload->do_upload('images')) {
                    $this->toastr->success('Upload Foto Gagal, Pastikan file dibawah 2Mb dan Berformat jpg,png,img. !!!');
                } else {
                    $updatePengajar    = [
                        'nama_lengkap'      => htmlentities($this->input->post('nama_lengkap')),
                        'password_login'    => $password,
                        'alamat'            => htmlentities($this->input->post('alamat')),
                        'tempat_lahir'      => htmlentities($this->input->post('tempat_lahir')),
                        'tgl_lahir'         => $tgl_lahir,
                        'jenis_kelamin'     => htmlentities($this->input->post('jenkel')),
                        'agama'             => htmlentities($this->input->post('agama')),
                        'email'             => htmlentities($this->input->post('email')),
                        'no_telp'           => htmlentities($this->input->post('no_telp')),
                        'foto'              => $this->upload->data('file_name')
                    ];
                }
            }
            // Action Update To Database
            if ($this->Dashboard->update('pengajar', 'id_pengajar', $this->session->userdata('id'), $updatePengajar)) {
                // Jika Sukses Insert
                $this->toastr->success('Sukses Mengubah Data Pengajar !!!');
    
                redirect('pengajar', 'refresh');
            } else {
                // Jika Gagal Insert
                $this->toastr->error('Ada Data Yang Belum Lengkap !!!');
    
                redirect('pengajar/editProfilePengajar/'.$this->session->userdata('id'), 'refresh');
            }
        }
    }

    // Data Kelas Start //
    public function kelas()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Pengajar || View Kelas Pages',
            'user'          => $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $this->session->userdata('id'))->result_array(),
            'kelas'         => $this->Dashboard->viewWhere('kelas_detail', 'wali_kelas', $this->session->userdata('id'))->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Kelas Pengajar',
            'view'		    => "v_Kelas"
        ];

        $this->load->view("index", $data);
    }

    // View Data Detail Kelas Where You Teach
    public function viewDetailDataKelas()
    {
        $join   = array(
            ['kelas','kelas_detail.kelas=kelas.id_kelas','LEFT'],
            ['pengajar','kelas_detail.wali_kelas=pengajar.id_pengajar','LEFT'],
            ['siswa','kelas_detail.ketua_kelas=siswa.id_siswa','LEFT']
        );
        $join1   = array(
            ['kelas','kelas_detail.kelas=kelas.id_kelas','LEFT'],
            ['pengajar','kelas_detail.wali_kelas=pengajar.id_pengajar','LEFT'],
            ['siswa','kelas_detail.ketua_kelas=siswa.id_siswa','LEFT']
        );
        $kelas          = $this->Dashboard->viewWhere('kelas_detail', 'wali_kelas', $this->session->userdata('id'))->result_array() ;
        $data 	        = [
            'titles'	    => 'Dashboard Pengajar || View Kelas Detail Pages',
            'user'          => $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $this->session->userdata('id'))->result_array(),
            'pengajar'      => $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $this->session->userdata('id'))->result_array(),
            'siswaDet'      => $this->Dashboard->viewWhere('siswa', 'id_kelas', $kelas[0]['wali_kelas'])->result_array(),
            'kelasDet'      => $this->Dashboard->viewGlobalJoinWhere('kelas_detail.*,kelas.keterangan AS nama_kelas', 'kelas_detail', [ 'wali_kelas' => $this->session->userdata('id')], $join)->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Kelas Pengajar',
            'view'		    => "v_KelasDet"
        ];

        $this->load->view("index", $data);
    }

    // Json View Datatable Data Siswa
    public function jsonSiswa($id=0)
    {
        $id     = $this->uri->segment('3');
        header('Content-Type: application/json');
        $join   = array(
                    ['kelas','siswa.id_kelas=kelas.id_kelas','LEFT'],
                    ['agama','siswa.agama=agama.id_agama','LEFT']
                );
        echo $this->Dashboard->jsonGlobalJoinWhere(
            '
                siswa.id_siswa AS id_siswa,
                siswa.nis AS nis,
                siswa.nama_lengkap AS nama_lengkap,
                kelas.keterangan AS keterangan,
                siswa.alamat AS alamat,
                siswa.tempat_lahir AS tempat_lahir,
                siswa.tgl_lahir AS tgl_lahir,
                siswa.id_kelas AS id_kelas,
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
            'siswa.id_kelas',
            $id,
            $join
        );
    }

    // View Detail Siswa
    public function viewDetailDataSiswa($id=0)
    {
        $id     = $this->uri->segment('3');
        if ($id!=0) {
            $join           = array(['agama','siswa.agama=agama.id_agama','LEFT']);
            $data 	        = [
                'titles'	    => 'Dashboard Pengajar || View Detail Siswa Pages',
                'user'          => $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $this->session->userdata('id'))->result_array(),
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

    // Data Kelas End   //
    
    // Data Mata Pelajaran Start //

    // View Mata Pelajaran
    public function mapel()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Pengajar || Viwe Mata Pelajaran Pages',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'agama'         => $this->Dashboard->viewAll('*', 'agama')->result_array(),
            'kelas'         => $this->Dashboard->viewAll('*', 'kelas')->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'View MAta Pelajaran',
            'view'		    => "v_viewMapel"
        ];

        $this->load->view("index", $data);
    }

    // Data Mata Pelajaran End   //

    // Data Materi Start //
    
    // View Materi Pengajar
    public function materi()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Pengajar || View Materi Pengajar Pages',
            'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
            'agama'         => $this->Dashboard->viewAll('*', 'agama')->result_array(),
            'kelas'         => $this->Dashboard->viewAll('*', 'kelas')->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Materi Pengajar',
            'view'		    => "v_viewMateri"
        ];

        $this->load->view("index", $data);
    }

    // Json View Materi
    public function jsonMateri()
    {
        header('Content-Type: application/json');
        $join   = array(
            ['kelas','file_materi.id_kelas=kelas.id_kelas','LEFT'],
            ['master_pelajaran','file_materi.id_mata_pelajaran=master_pelajaran.id_mapel','LEFT'],
            ['pengajar','file_materi.pembuat=pengajar.id_pengajar','LEFT'],
        );
        echo $this->Dashboard->jsonGlobalJoinWhereAsso(
            '
                file_materi.id_materi AS id_materi,
                file_materi.judul AS judul,
                kelas.keterangan AS nama_kelas,
                master_pelajaran.mapel AS mapel,
                file_materi.nama_file AS nama_file,
                file_materi.tgl_posting AS tgl_posting,
                pengajar.nama_lengkap AS nama_guru,
                file_materi.hits AS hits
            ',
            'file_materi',
            ['file_materi.pembuat'  => $this->session->userdata('id')],
            $join
        );
    }

    // Add Materi
    public function addMateri()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Pengajar || Add Materi Pages',
            'user'          => $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $this->session->userdata('id'))->result_array(),
            'kelas'         => $this->Dashboard->viewAll('*', 'kelas')->result_array(),
            'mapel'         => $this->Dashboard->viewAll('*', 'master_pelajaran')->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Add Materi',
            'view'		    => "v_addMateri"
        ];

        $this->load->view("index", $data);
    }

    // Action Add Materi
    public function actionAddMateri(Type $var = null)
    {
        $config['upload_path'] 		= './frontend/assets/materi/';
        $config['allowed_types'] 	= 'pdf';
        $config['max_size'] 		= 2048;
        $config['file_name'] 		= 'document-'.htmlentities($this->input->post('kelas')).'-' . date('Y-m-d H_m_s');
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('document')) {
            $this->toastr->error('Upload File Gagal, Pastikan file dibawah 2Mb dan Berformat pdf. !!!');
        } else {
            $insertMateri   = [
                'judul'                 => htmlentities($this->input->post('judul')),
                'id_kelas'              => htmlentities($this->input->post('kelas')),
                'id_mata_pelajaran'     => htmlentities($this->input->post('mapel')),
                'nama_file'             => $this->upload->data('file_name'),
                'tgl_posting'           => date('Y-m-d'),
                'pembuat'               => $this->session->userdata('id')
            ];

            // Insert To Database
            if ($this->Dashboard->insert('file_materi', $insertMateri)) {
                // Jika Sukses Insert
                $this->toastr->success('Sukses Mengupload File Materi !!!');

                redirect('pengajar/materi', 'refresh');
            }
        }
    }

    // Edit Materi Pengajar
    public function editDataMateri($id=0)
    {
        if ($id!=0) {
            $data 	        = [
                'titles'	    => 'Dashboard Pengajar || Edit Pengajar Pages',
                'user'          => $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $this->session->userdata('id'))->result_array(),
                'materi'        => $this->Dashboard->viewWhere('file_materi', 'id_materi', $id)->result_array(),
                'kelas'         => $this->Dashboard->viewAll('*', 'kelas')->result_array(),
                'mapel'         => $this->Dashboard->viewAll('*', 'master_pelajaran')->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Edit Materi',
                'view'		    => "v_editMateri"
            ];

            $this->load->view("index", $data);
        }
    }

    // Action Edit Materi
    public function actionEditMateri($id=0)
    {
        if ($id!=0) {
            // Jika Dokumen Kosong
            $dokumen    = $_FILES['document'];
            if ($dokumen='') {
                $updateMateri   = [
                    'judul'                 => htmlentities($this->input->post('judul')),
                    'id_kelas'              => htmlentities($this->input->post('kelas')),
                    'id_mata_pelajaran'     => htmlentities($this->input->post('mapel')),
                    'tgl_posting'           => date('Y-m-d'),
                    'pembuat'               => $this->session->userdata('id')
                ];
            } else {
                $updateMateri   = [
                    'judul'                 => htmlentities($this->input->post('judul')),
                    'id_kelas'              => htmlentities($this->input->post('kelas')),
                    'id_mata_pelajaran'     => htmlentities($this->input->post('mapel')),
                    'nama_file'             => $this->upload->data('file_name'),
                    'tgl_posting'           => date('Y-m-d'),
                    'pembuat'               => $this->session->userdata('id')
                ];
            }
            
            // Update Materi Ke Database
            if ($this->Dashboard->update('file_materi', 'id_materi', $id, $updateMateri)) {
                // Jika Sukses Insert
                $this->toastr->success('Sukses Mengupdate Data Materi !!!');

                redirect('Pengajar/materi', 'refresh');
            }
        }
    }

    // Delete Data Materi
    public function deleteDataMateri($id=0)
    {
        if ($id!=0) {
            if ($this->Dashboard->delete('id_materi', 'file_materi', $id)) {
                $this->toastr->success('Sukses Menghapus Data Materi !!!');
                redirect('pengajar/materi', 'refresh');
            }
        }
    }

    // Data Materi End   //

    // Data Quis Start //
    // View Quis
    public function quis()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Pengajar || View Quiz Pages',
            'user'          => $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $this->session->userdata('id'))->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'View Quiz',
            'view'		    => "v_viewQuis"
        ];

        $this->load->view("index", $data);
    }

    // Json View Datatable Data Quiz
    public function jsonQuiz()
    {
        header('Content-Type: application/json');
        $join   = array(
            ['kelas','topik_quiz.id_kelas=kelas.id_kelas','LEFT'],
            ['pengajar','topik_quiz.pembuat=pengajar.id_pengajar','LEFT'],
            ['master_pelajaran','topik_quiz.id_mata_pelajaran=master_pelajaran.id_mapel','LEFT']
        );
        echo $this->Dashboard->jsonGlobalJoinWhereAsso(
            '
            topik_quiz.id_tq AS id_tq,
            topik_quiz.judul AS judul,
            kelas.keterangan AS nama_kelas,
            kelas.id_kelas AS id_kelas,
            master_pelajaran.mapel AS mapel,
            topik_quiz.tgl_buat AS tgl_buat,
            pengajar.nama_lengkap AS nama_lengkap,
            topik_quiz.waktu_mengerjakan AS waktu_mengerjakan,
            topik_quiz.info AS info,
            topik_quiz.terbit AS terbit,
            ',
            'topik_quiz',
            ['topik_quiz.pembuat'     => $this->session->userdata('id')],
            $join
        );
    }
    
    // View Add Topik
    public function addTopik()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Pengajar || Add Topik Quiz',
            'user'          => $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $this->session->userdata('id'))->result_array(),
            'mapel'         => $this->Dashboard->viewAll('*', 'master_pelajaran')->result_array(),
            'kelas'         => $this->Dashboard->viewAll('*', 'kelas')->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Add Topik',
            'view'		    => "v_addTopik"
        ];

        $this->load->view("index", $data);
    }

    // Action Add Topik
    public function actionAddTopik()
    {
        $this->form_validation->set_rules('judul', 'Judul Topik Quis', 'trim|required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
        $this->form_validation->set_rules('mapel', 'Mata Pelajaran', 'trim|required');
        $this->form_validation->set_rules('jam', 'Jam', 'trim|numeric|required');
        $this->form_validation->set_rules('menit', 'Menit', 'trim|numeric|required');
        $this->form_validation->set_rules('info', 'Info', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="text-danger"><i class="fa fa-info-circle"></i> ', '</div>');

        if ($this->form_validation->run() == false) {
            $data 	        = [
                'titles'	    => 'Dashboard Pengajar || Add Topik Quiz',
                'user'          => $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $this->session->userdata('id'))->result_array(),
                'mapel'         => $this->Dashboard->viewAll('*', 'master_pelajaran')->result_array(),
                'kelas'         => $this->Dashboard->viewAll('*', 'kelas')->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Add Topik',
                'view'		    => "v_addTopik"
            ];

            $this->load->view("index", $data);
        } else {
            $getJam         = $this->input->post('jam');
            $getMenit       = $this->input->post('menit');
            $getDetik       = '00';
            $waktu          = $getJam.":".$getMenit.":".$getDetik;
            if (htmlentities($this->input->post('terbit'))=='on') {
                $terbit             = 'Ya';
            } else {
                $terbit             = 'Tidak';
            }

            $insertTopik    = [
                'judul'                 => htmlentities($this->input->post('judul')),
                'id_kelas'              => htmlentities($this->input->post('kelas')),
                'id_mata_pelajaran'     => htmlentities($this->input->post('mapel')),
                'tgl_buat'              => date('Y-m-d'),
                'pembuat'               => $this->session->userdata('id'),
                'waktu_mengerjakan'     => $waktu,
                'info'                  => htmlentities($this->input->post('info')),
                'terbit'                => $terbit
            ];
            
            // Insert to Database
            if ($this->Dashboard->insert('topik_quiz', $insertTopik)) {
                // Jika Sukses Insert
                $this->toastr->success('Sukses Menambahkan Topik !!!');

                redirect('Pengajar/quis', 'refresh');
            }
        }
    }

    // Edit Topik Pengajar
    public function editDataTopik($id=0)
    {
        if ($id!=0) {
            $data 	        = [
                'titles'	    => 'Dashboard Pengajar || Edit Data Topik Pages',
                'user'          => $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $this->session->userdata('id'))->result_array(),
                'mapel'         => $this->Dashboard->viewAll('*', 'master_pelajaran')->result_array(),
                'kelas'         => $this->Dashboard->viewAll('*', 'kelas')->result_array(),
                'matopiq'       => $this->Dashboard->viewWhere('topik_quiz', 'id_tq', $id)->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Data Topik',
                'view'		    => "v_editTopik"
            ];

            $this->load->view("index", $data);
        }
    }

    // Action Add Topik
    public function actionEditTopik($id=0)
    {
        if ($id!=0) {
            if (htmlentities($this->input->post('terbit'))=='on') {
                $terbit             = 'Ya';
            } else {
                $terbit             = 'Tidak';
            }
            
            $getJam         = $this->input->post('jam');
            $getMenit       = $this->input->post('menit');
            $getDetik       = '00';
            $waktu          = $getJam.":".$getMenit.":".$getDetik;

            $updateTopik    = [
                'judul'                 => htmlentities($this->input->post('judul')),
                'id_kelas'              => htmlentities($this->input->post('kelas')),
                'id_mata_pelajaran'     => htmlentities($this->input->post('mapel')),
                'tgl_buat'              => date('Y-m-d'),
                'pembuat'               => $this->session->userdata('id'),
                'waktu_mengerjakan'     => $waktu,
                'info'                  => htmlentities($this->input->post('info')),
                'terbit'                => $terbit
            ];
            
            // Update Data
            if ($this->Dashboard->update('topik_quiz', 'id_tq', $id, $updateTopik)) {
                // Jika Sukses Update
                $this->toastr->success('Sukses Mengubah Data Topik !!!');
    
                redirect('pengajar/quis', 'refresh');
            }
        }
    }

    // Delete Data Topiq
    public function deleteDataTopik($id=0)
    {
        if ($id!=0) {
            if ($this->Dashboard->delete('id_tq', 'topik_quiz', $id)) {
                $this->toastr->success('Sukses Menghapus Data Topik !!!');
                redirect('pengajar/quis', 'refresh');
            }
        }
    }

    // Soal Quiz
    public function addQuisSoal($id=0)
    {
        if ($id!=0) {
            $data 	        = [
                'titles'	    => 'Dashboard Pengajar || View Data Add Quiz',
                'user'          => $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $this->session->userdata('id'))->result_array(),
                'topik'         => $this->Dashboard->viewWhere('topik_quiz', 'id_tq', $id)->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'View Data Add Quiz',
                'view'		    => "v_addQuizSoal"
            ];

            $this->load->view("index", $data);
        }
    }

    // Add Soal Quis
    public function addQuis()
    {
        $id     = $this->uri->segment('3');
        $judul  = count($this->input->post('judul'));
        $soal   = $this->input->post('judul');
        for ($i = 0; $i < $judul; $i++) {
            $insertSoal = [
                        'id_tq'         => $id,
                        'soal'          => $this->input->post('judul')[$i],
                        'pilihan_1'     => $this->input->post('jawabana')[$i],
                        'pilihan_2'     => $this->input->post('jawabanb')[$i],
                        'pilihan_3'     => $this->input->post('jawabanc')[$i],
                        'pilihan_4'     => $this->input->post('jawaband')[$i],
                        'pilihan_5'     => $this->input->post('jawabane')[$i],
                        'jawaban'       => $this->input->post('kunciJawaban')[$i]
                    ];
            // Insert Soal Ke Database
            $this->Dashboard->insert('soal', $insertSoal);
        }
        // Essay
        $insertEssay = [
            'id_tq'         => $id,
            'isi_soal'      => $this->input->post('soalEssay')
        ];
        $this->Dashboard->insert('soal_essay', $insertEssay);
        
        redirect('pengajar/quis', 'refresh');
    }

    // List Soal Quis
    public function viewQuisSoalList($id=0)
    {
        if ($id!=0) {
            $join   = array(
                ['kelas','topik_quiz.id_kelas=kelas.id_kelas','LEFT'],
                ['pengajar','topik_quiz.pembuat=pengajar.id_pengajar','LEFT'],
                ['master_pelajaran','topik_quiz.id_mata_pelajaran=master_pelajaran.id_mapel','LEFT']
            );
            $data 	        = [
                'titles'	    => 'Dashboard Pengajar || View Soal Quiz List Pages',
                'user'          => $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $this->session->userdata('id'))->result_array(),
                'topik'         => $this->Dashboard->viewGlobalJoinWhere(
                    'topik_quiz.id_tq AS id_tq,
                    topik_quiz.judul AS judul,
                    kelas.keterangan AS nama_kelas,
                    master_pelajaran.mapel AS mapel,
                    topik_quiz.tgl_buat AS tgl_buat,
                    pengajar.nama_lengkap AS nama_lengkap,
                    topik_quiz.waktu_mengerjakan AS waktu_mengerjakan,
                    topik_quiz.info AS info,
                    topik_quiz.terbit AS terbit',
                    'topik_quiz',
                    ['topik_quiz.id_tq'     => $id],
                    $join
                )->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'View Soal Quiz List',
                'view'		    => "v_viewQuisList"
            ];

            $this->load->view("index", $data);
        }
    }

    // View Datatables Json Quis List
    public function jsonQuisList($id=0)
    {
        if ($id!=0) {
            header('Content-Type: application/json');
            // echo $this->Dashboard->json('*', 'soal');
            echo $this->Dashboard->jsonWhereAsso(
                '
                soal.id_soal AS id_soal,
                soal.id_tq AS id_tq,
                soal.soal AS soal,
                soal.pilihan_1 AS pilihan_1,
                soal.pilihan_2 AS pilihan_2,
                soal.pilihan_3 AS pilihan_3,
                soal.pilihan_4 AS pilihan_4,
                soal.pilihan_5 AS pilihan_5,
                soal.jawaban AS jawaban,
                ',
                'soal',
                ['soal.id_tq'=>$id]
            );
        }
    }

    // Koreksi
    public function viewQuisKoreksiSoal($id=0)
    {
        if ($id!=0) {
            $data 	        = [
                'titles'	    => 'Dashboard Pengajar || View Koreksi Soal',
                'nilai'         => $this->Dashboard->viewWhere('topik_quiz', 'id_tq', $id)->result_array(),
                'user'          => $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $this->session->userdata('id'))->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Koreksi Soal',
                'view'		    => "v_viewCorrectSoal"
            ];

            $this->load->view("index", $data);
        }
    }

    // Json View Datatable Data Quiz
    public function jsonKoreksi()
    {
        $id     = $this->uri->segment('3');
        if ($id!=0) {
            $cekTq  = $this->Dashboard->viewWhere('topik_quiz', 'id_tq', $id)->result_array();
            header('Content-Type: application/json');
            $join   = array(
                ['siswa','nilai.id_siswa=siswa.id_siswa','LEFT'],
                ['topik_quiz','nilai.id_tq=topik_quiz.id_tq','LEFT'],
                ['master_pelajaran','topik_quiz.id_mata_pelajaran=master_pelajaran.id_mapel','LEFT']
            );
            echo $this->Dashboard->jsonGlobalJoinAssWhere(
                '
                    nilai.id_nilai AS id_nilai,
                    nilai.id_siswa AS id_siswa,
                    topik_quiz.id_kelas AS id_kelas,
                    siswa.nama_lengkap AS nama_lengkap,
                    nilai.id_tq AS id_tq,
                ',
                'nilai',
                [
                    'nilai.id_tq'               => $id,
                    'topik_quiz.id_kelas'       => $cekTq[0]['id_kelas']],
                $join
            );
        }
    }

    // Koreksi Soal
    public function koreksiSoalSiswa($id=0)
    {
        // $id = id_tq, id_siswa=uri 4
        // ID tq
        if ($id!=0) {
            $id_siswa       = $this->uri->segment('4');

            // Tampilkan Soal Berdasar id_tq
            $analisis       = $this->Dashboard->viewWhereAssosiative('*', 'analisis', ['id_ujian' => $id,'id_siswa'   => $id_siswa])->result_array();
            $join           = array(
                                    ['topik_quiz','analisis.id_ujian=topik_quiz.id_tq','LEFT'],
                                    ['soal','analisis.id_soal=soal.id_soal','LEFT']
                                );
            $join1           = array(
                                    ['topik_quiz','analisis_essay.id_ujian=topik_quiz.id_tq','LEFT'],
                                    ['soal_essay','analisis_essay.id_soal_essay=soal_essay.id_soal_essay','LEFT']
                                );
            $data 	        = [
                'titles'	    => 'Dashboard Pengajar || Edit Soal Pengajar Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'soal'          => $this->Dashboard->viewWhereAssosiative('*', 'soal', ['id_tq'  => $id, 'id_soal'       => $analisis[0]['id_soal']])->result_array(),
                'nilai'         => $this->Dashboard->viewWhereAssosiative('*', 'nilai', ['id_tq'  => $id,'id_siswa'   => $id_siswa])->result_array(),
                'analisis'      => $this->Dashboard->viewGlobalJoinWhere(
                    '
                                        analisis.id_analis AS id_analis,
                                        topik_quiz.judul AS judul,
                                        soal.soal AS nama_soal,
                                        analisis.jawaban AS jawaban
                                    ',
                    'analisis',
                    [
                                        'id_ujian'      => $id,
                                        'id_siswa'      => $id_siswa
                                    ],
                    $join
                )->result_array(),
                'analisis_essay'    => $this->Dashboard->viewGlobalJoinWhere(
                    '
                                        analisis_essay.id_analisis_essay AS id_analisis_essay,
                                        topik_quiz.judul AS judul,
                                        soal_essay.isi_soal AS nama_soal_essay,
                                        analisis_essay.jawaban AS jawaban_essay
                                    ',
                    'analisis_essay',
                    [
                                        'id_ujian'      => $id,
                                        'id_siswa'      => $id_siswa
                                    ],
                    $join1
                )->result_array(),
                'siswa'         => $this->Dashboard->viewWhere('siswa', 'id_siswa', $id_siswa)->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Edit Soal Pengajar',
                'view'		    => "v_soalKerjakan"
            ];

            $this->load->view("index", $data);
            // Tampilkan jawaban pada analisis berdasar id soal dan id_ujian(id_tq)
        }
    }

    // Proses Nilai
    public function prosesNilai($id)
    {
        if ($id!=0) {
            $idsoal     = $id;
            $id_siswa   = $this->uri->segment('4');

            $jmlhBenar  = $this->input->post('benar');
            $jmlSalah   = $this->input->post('salah');
            $totalSoal  = $jmlhBenar+$jmlSalah;
            
            // inputNilai Essay
            $essay      = $this->input->post('essay');
            if ($essay>100) {
                $essay      = 100;
            } else {
                $essay      = $this->input->post('essay');
            }
            $hitNilai       = (($jmlhBenar/$totalSoal)*100+$essay)/2;

            // Perhitungan Nilai
            
            $update   = [
                'jml_benar'     => $jmlhBenar,
                'jml_salah'     => $jmlSalah,
                'nilai'         => $hitNilai
            ];
            
            // Update Ke Nilai
            if ($this->Dashboard->updateAss('nilai', ['id_siswa'     => $id_siswa,'id_tq'    => $id], $update)) {
                $this->toastr->success('Sukses Memproses Data Nilai Siswa !!!');
                redirect('pengajar/quis', 'refresh');
            }
        }
    }

    // Cetak Nilai
    public function printNilai($id=0)
    {
        if ($id!=0) {
            $id_kelas   = $this->uri->segment('4');
            // Cek Nilai Berdasar id_topik_quiz
            // $cekTopik   = $this->Dashboard->viewWhere('nilai', 'id_tq', $id)->result_array();
            $join   = array(
                ['siswa','nilai.id_siswa=siswa.id_siswa','LEFT'],
                ['topik_quiz','nilai.id_tq=topik_quiz.id_tq','LEFT'],
                ['master_pelajaran','topik_quiz.id_mata_pelajaran=master_pelajaran.id_mapel','LEFT']
            );
            $data 	        = [
                'titles'	    => 'Dashboard Pengajar || View Quiz Pages',
                'user'          => $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $this->session->userdata('id'))->result_array(),
                'cekTopik'      => $this->Dashboard->viewGlobalJoinWhere(
                    '   nilai.id_nilai AS id_nilai,
                        nilai.id_siswa AS id_siswa,
                        topik_quiz.id_kelas AS id_kelas,
                        topik_quiz.judul AS judul,
                        siswa.nama_lengkap AS nama_lengkap,
                        nilai.id_tq AS id_tq,
                        nilai.jml_benar AS jml_benar,
                        nilai.jml_salah AS jml_salah,
                        nilai.nilai AS nilai
                        ',
                    'nilai',
                    ['nilai.id_tq'    =>  $id],
                    $join
                )->result_array()
            ];

            $this->load->view("cetakNilai", $data);
        }
    }

    // Edit Soal Topik
    public function editDataSoal($id=0)
    {
        if ($id!=0) {
            $data 	        = [
                'titles'	    => 'Dashboard Pengajar || Edit Soal Pengajar Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'soal'          => $this->Dashboard->viewWhere('soal', 'id_soal', $id)->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Edit Soal Pengajar',
                'view'		    => "v_editSoal"
            ];

            $this->load->view("index", $data);
        }
    }

    // Action Edit Soal
    public function actionEditSoal($id=0)
    {
        if ($id!=0) {
            // Jika Jawaban Tidak Di Isi Maka Tidak Update Jawabab
            if ($this->input->post('kunciJawaban')=='') {
                $updateSoal     = [
                    'soal'          => $this->input->post('soal'),
                    'pilihan_1'     => $this->input->post('jawabana'),
                    'pilihan_2'     => $this->input->post('jawabanb'),
                    'pilihan_3'     => $this->input->post('jawabanc'),
                    'pilihan_4'     => $this->input->post('jawaband'),
                    'pilihan_5'     => $this->input->post('jawabane')
                ];
            } else {
                $updateSoal     = [
                    'soal'          => $this->input->post('soal'),
                    'pilihan_1'     => $this->input->post('jawabana'),
                    'pilihan_2'     => $this->input->post('jawabanb'),
                    'pilihan_3'     => $this->input->post('jawabanc'),
                    'pilihan_4'     => $this->input->post('jawaband'),
                    'pilihan_5'     => $this->input->post('jawabane'),
                    'jawaban'       => $this->input->post('kunciJawaban')
                ];
            }

            if ($this->Dashboard->update('soal', 'id_soal', $id, $updateSoal)) {
                // Jika Sukses Insert
                $this->toastr->success('Sukses Mengupdate Data Soal !!!');

                redirect('pengajar/quis', 'refresh');
            }
        }
    }

    // Delete Data Soal
    public function deleteDataSoal($id=0)
    {
        if ($id!=0) {
            if ($this->Dashboard->delete('id_soal', 'soal', $id)) {
                $this->toastr->success('Sukses Menghapus Data Soal !!!');
                redirect('pengajar/quis', 'refresh');
            }
        }
    }

    // Data Quis End   //

    // Data Nilai Start //
    public function laporan()
    {
        $data 	        = [
            'titles'	    => 'Dashboard Pengajar || View Laporan Nilai Pages',
            'user'          => $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $this->session->userdata('id'))->result_array(),
            'topik'         => $this->Dashboard->viewAll('*', 'topik_quiz')->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Laporan Nilai',
            'view'		    => "v_viewNilai"
        ];

        $this->load->view("index", $data);
    }

    // Action View Nilai
    public function actionViewNilai()
    {
        $id_tq  = $this->input->post('topik');
        echo $id_tq;
        // Cek Data Topik
        $join   = array(
                ['siswa','nilai.id_siswa=siswa.id_siswa','LEFT'],
                ['topik_quiz','nilai.id_tq=topik_quiz.id_tq','LEFT'],
                ['master_pelajaran','topik_quiz.id_mata_pelajaran=master_pelajaran.id_mapel','LEFT']
            );
        $data 	        = [
                'titles'	    => 'Dashboard Pengajar || View Nilai Pengajar Pages',
                'user'          => $this->Dashboard->viewWhere('admin', 'id_admin', $this->session->userdata('id'))->result_array(),
                'cekTopik'  => $this->Dashboard->viewGlobalJoinWhere(
                    '   nilai.id_nilai AS id_nilai,
                        nilai.id_siswa AS id_siswa,
                        topik_quiz.id_kelas AS id_kelas,
                        topik_quiz.judul AS judul,
                        siswa.nama_lengkap AS nama_lengkap,
                        nilai.id_tq AS id_tq,
                        nilai.jml_benar AS jml_benar,
                        nilai.jml_salah AS jml_salah,
                        nilai.nilai AS nilai
                        ',
                    'nilai',
                    ['nilai.id_tq'    =>  $id_tq],
                    $join
                )->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'View Nilai Pengajar',
                'view'		    => "v_viewNilaiTopik"
            ];

        $this->load->view("index", $data);
    }
    // Data Nilai End   //
}
