<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Dashboard/Dashboard_model', 'Dashboard', true);
        $this->load->library('datatables');
        $this->load->library('src/Toastr');
        $this->load->helper(array('url','download'));
        $this->load->library('pagination');
        set_zone();

        // Cek Session User
        if ($this->session->userdata('siswa')!=true) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap login untuk melanjutkan</div>');
            redirect('login');
        }
    }
    
    public function index()
    {
        $cekUser    = $this->Dashboard->viewWhere('siswa', 'id_siswa', $this->session->userdata('id_siswa'))->result_array();
        
        $join       = array(
            ['kelas','kelas_detail.kelas=kelas.id_kelas','LEFT'],
            ['pengajar','kelas_detail.wali_kelas=pengajar.id_pengajar','LEFT'],
            ['siswa','kelas_detail.ketua_kelas=siswa.id_siswa','LEFT']
        );
        $data 	        = [
            'titles'	    => 'Home Siswa',
            'user'          => $this->Dashboard->viewWhere('siswa', 'id_siswa', $this->session->userdata('id_siswa'))->result_array(),
            'kelas_det'     => $this->Dashboard->viewGlobalJoinWhere(
                'kelas_detail.id_kelas_detail AS id_kelas_detail,
                kelas_detail.kelas AS kelas,
                kelas.id_kelas AS id_kelas,
                kelas.keterangan AS nama_kelas,
                pengajar.nama_lengkap AS nama_guru,
                siswa.nama_lengkap AS nama_lengkap',
                'kelas_detail',
                ['kelas_detail.kelas'     => $cekUser[0]['id_kelas']],
                $join
            )->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Home Siswa',
            'view'		    => "v_Home"
        ];

            $this->load->view("index", $data);
    }

    // Profile Siswa
    public function profile($id=0)
    {
        if($id!=0){
            $data 	        = [
                'titles'	    => 'Home Siswa || Profile Siswa Pages',
                'user'          => $this->Dashboard->viewWhere('siswa', 'id_siswa', $this->session->userdata('id_siswa'))->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Profile Siswa',
                'view'		    => "v_EditProfile"
            ];
    
            $this->load->view("index", $data);
        }
    }
    
    // View Edit Password
    public function editPassword()
    {
        $data 	        = [
            'titles'	    => 'Home Siswa || Edit Password Pages',
            'user'          => $this->Dashboard->viewWhere('siswa', 'id_siswa', $this->session->userdata('id_siswa'))->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'Edit Password',
            'view'		    => "v_EditPassword"
        ];

        $this->load->view("index", $data);
    }

    // Action Edit Password
    public function actionEditPassword()
    {
        // Cek Data Siswa Berdasar ID
        $cekSiswa    = $this->Dashboard->viewWhere('siswa', 'id_siswa', $this->session->userdata('id_siswa'))->result_array();
        if ($this->input->post('password')=='') {
            $password   = $cekSiswa[0]['password_login'];
        } else {
            $password   = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
        }

        $update         = [
            'password_login'    => $password
        ];

        if ($this->Dashboard->update('siswa', 'id_siswa', $this->session->userdata('id_siswa'), $update)) {
    
                // Jika Sukses Insert
            $this->toastr->success('Sukses Mengubah Password !!!');
    
            redirect('home', 'refresh');
        }
    }

    // Json View Datatable Data Mata Pelajaran
    public function jsonKelasDet()
    {
        // Cek ID Kelas
        $cekKelas       = $this->Dashboard->viewWhere('siswa', 'id_siswa', $this->session->userdata('id_siswa'))->result_array();
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
                mengajar.id_kelas AS id_kelas,
                master_pelajaran.mapel AS mapel,
                kelas.keterangan AS keterangan,
                pengajar.nama_lengkap AS nama_lengkap,
                mengajar.deskripsi AS deskripsi
            ',
            'mengajar',
            ['mengajar.id_kelas'     => $cekKelas[0]['id_kelas']],
            $join1
        );
    }

    // View Materi
    public function viewMateri($id=0)
    {
        if ($id!=0) {
            //konfigurasi pagination
            $config['base_url'] = site_url('home/viewMateri/'.$id); //site url
            $config['total_rows'] = $this->db->count_all('file_materi'); //total row
            $config['per_page'] = 1;  //show record per halaman
            $config["uri_segment"] = 4;  // uri parameter
            $choice = $config["total_rows"] / $config["per_page"];
            $config["num_links"] = floor($choice);
            // Membuat Style pagination untuk BootStrap v4
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';

            $this->pagination->initialize($config);
            $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

            $data 	            = [
                'titles'	    => 'Dashboard Siswa || View File Materi Detail Pages',
                'user'          => $this->Dashboard->viewWhere('siswa', 'id_siswa', $this->session->userdata('id_siswa'))->result_array(),
                'viewMateri'    => $this->Dashboard->getPagi('*', 'file_materi', ['id_kelas'  =>$id], $config["per_page"], $data['page'])->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'pagination'    => $this->pagination->create_links(),
                'subbread'      => 'View File Materi Detail',
                'view'		    => "v_viewDetMateri"
            ];

            $this->load->view("index", $data);
        }
    }
    
    // Download Materi
    public function download($id=0)
    {
        if ($id!=0) {
            // Cek File Berdasar ID
            $cekFile    = $this->Dashboard->viewWhere('file_materi', 'id_materi', $id)->result_array();
            
            // Triger Tambah Hit Download Jika Sukses
            $hits   = [
                'hits'  => $cekFile[0]['hits']+1
            ];
            
            $this->Dashboard->update('file_materi', 'id_materi', $id, $hits);
            force_download('frontend/assets/materi/'.$cekFile[0]['nama_file'], null);
            $currentURL = current_url();
            redirect($currentURL);
        }
    }

    // View Materi
    public function materi()
    {
        $cekSiswa           = $this->Dashboard->viewWhere('siswa', 'id_siswa', $this->session->userdata('id_siswa'))->result_array();
        $data 	            = [
            'titles'	    => 'Dashboard Siswa || View Materi Pages',
            'user'          => $this->Dashboard->viewWhere('siswa', 'id_siswa', $this->session->userdata('id_siswa'))->result_array(),
            'viewMateri'    => $this->Dashboard->viewWhere('file_materi', 'id_kelas', $cekSiswa[0]['id_kelas'])->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'pagination'    => $this->pagination->create_links(),
            'subbread'      => 'View File Materi',
            'view'		    => "v_viewMateri"
        ];

        $this->load->view("index", $data);
    }

    // Quis
    public function quis()
    {
        $data 	            = [
            'titles'	    => 'Dashboard Siswa || View Quis Pages',
            'user'          => $this->Dashboard->viewWhere('siswa', 'id_siswa', $this->session->userdata('id_siswa'))->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'pagination'    => $this->pagination->create_links(),
            'subbread'      => 'View File Quis',
            'view'		    => "v_viewQuis"
        ];

        $this->load->view("index", $data);
    }

    // Json View Datatable Data Quis
    public function jsonQuis()
    {
        header('Content-Type: application/json');
        echo $this->Dashboard->json('*', 'topik_quiz');
    }

    // Quis Start View
    public function viewSoalQuis($id=0)
    {
        if ($id!=0) {
            $join   = array(
                ['kelas','topik_quiz.id_kelas=kelas.id_kelas','LEFT'],
                ['pengajar','topik_quiz.pembuat=pengajar.id_pengajar','LEFT'],
                ['master_pelajaran','topik_quiz.id_mata_pelajaran=master_pelajaran.id_mapel','LEFT']
            );
            $data 	        = [
                'titles'	    => 'Dashboard Siswa || View Soal Siswa Pages',
                'user'          => $this->Dashboard->viewWhere('siswa', 'id_siswa', $this->session->userdata('id_siswa'))->result_array(),
                'topik'         => $this->Dashboard->viewGlobalJoinWhere(
                    '
                    topik_quiz.id_tq AS id_tq,
                    topik_quiz.judul AS judul,
                    topik_quiz.id_kelas AS id_kelas,
                    kelas.keterangan AS nama_kelas,
                    master_pelajaran.mapel AS mapel,
                    topik_quiz.tgl_buat AS tgl_buat,
                    pengajar.nama_lengkap AS nama_lengkap,
                    topik_quiz.waktu_mengerjakan AS waktu_mengerjakan,
                    topik_quiz.info AS info,
                    topik_quiz.terbit AS terbit',
                    'topik_quiz',
                    [
                        'topik_quiz.id_tq'      => $id,
                        'topik_quiz.terbit'     => 'Ya'
                    ],
                    $join
                )->result_array(),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'View Soal Siswa'
                // 'view'		    => "v_viewSoalSiswa"
            ];

            if ($data['topik']==null) {
                $data['view']   = "v_viewSoalSiswaNull";
            } else {
                $data['view']   = "v_viewSoalSiswa";
            }

            $this->load->view("index", $data);
        }
    }

    // Mulai Mengerjakan TUgas
    public function mengerjakanQuiz($id=0)
    {
        if ($id!=0) {
            // Cek Apakah Di Tabel Nilai ada id_tq
            $cekId_tq   = $this->Dashboard->cekmaksAss('nilai', ['id_tq'  => $id,'id_siswa'   => $this->session->userdata('id_siswa')]);
            // Cek id Topik
            $cekTopik   = $this->Dashboard->viewWhere('topik_quiz', 'id_tq', $id)->result_array();
            if ($cekId_tq==0) {
                // Insert Ke Nilai
                $jam        = date("H:i:s");
                $jm1        = substr($jam, 0, 2);
                $mn1        = substr($jam, 3, 2);
                $dt1        = substr($jam, 6, 2);
                $waktu      = date($cekTopik[0]['waktu_mengerjakan']);
                $jm2        = substr($waktu, 0, 2);
                $mn2        = substr($waktu, 3, 2);
                $dt2        = substr($waktu, 6, 2);
                $jam12      = $jm2+$jm1;
                $menit      = $mn2 + $mn1 ;
                $detik      = $dt1;
                if ($menit>60) {
                    $hr = $jam12 + 1;
                    $mn = $menit -60;
                } else {
                    $hr = $jam12;
                    $mn = $menit;
                }

                $insert     = [
                    'id_siswa'      => $this->session->userdata('id_siswa'),
                    'id_tq'         => $id,
                    'jawaban'       => 0,
                    'sisa_waktu'    => $cekTopik[0]['waktu_mengerjakan'],
                    'waktu_selesai' => date("$hr:$mn:$detik"),
                    'jml_benar'     => 0,
                    'jml_kosong'    => 0,
                    'jml_salah'     => 0,
                    'nilai'         => 0
                ];

                // Insert Ke Tabel Nilai
                $this->Dashboard->insert('nilai', $insert);
            }

            // Cek Nilai Berdasar id tq dan id siswa
            $cekNilai   = $this->Dashboard->viewWhereAssosiative('*', 'nilai', ['id_siswa'    => $this->session->userdata('id_siswa'),'id_tq' => $id])->result_array();
            $jamSkg     = date("H:i:s");
            $jmSkg1     = substr($jamSkg, 0, 2);
            $mnSkg1     = substr($jamSkg, 3, 2);
            $dtSkg1     = substr($jamSkg, 6, 2);

            $selesai    = date($cekNilai[0]['waktu_selesai']);
            $jmSkg2     = substr($selesai, 0, 2);
            $mn2        = substr($selesai, 3, 2);
            $dt2        = substr($selesai, 6, 2);

            $mulaiAwal  = mktime($jmSkg1, $mnSkg1, $dtSkg1);
            $selesai    = mktime($jmSkg2, $mn2, $dt2);

            $lamaSkg    = $selesai - $mulaiAwal;

            $hrSisa     = (int) ($lamaSkg / 3600);
            $mnSisa     = (int) (($lamaSkg - ($hrSisa * 3600)) / 60);
            $sc         =  $lamaSkg - ($hrSisa * 3600) - ($mnSisa * 60) ;
    
            // Dengan ketentuan waktu mengerjakan dan waktu selesai mengerjakan
            $join   = array(
                ['kelas','topik_quiz.id_kelas=kelas.id_kelas','LEFT'],
                ['pengajar','topik_quiz.pembuat=pengajar.id_pengajar','LEFT'],
                ['master_pelajaran','topik_quiz.id_mata_pelajaran=master_pelajaran.id_mapel','LEFT']
            );
            $data 	        = [
                'titles'	    => 'Dashboard Siswa || Mengerjakan Quiz Pages',
                'user'          => $this->Dashboard->viewWhere('pengajar', 'id_pengajar', $this->session->userdata('id'))->result_array(),
                'topik'         => $this->Dashboard->viewGlobalJoinWhere(
                    '
                    topik_quiz.id_tq AS id_tq,
                    topik_quiz.judul AS judul,
                    topik_quiz.id_kelas AS id_kelas,
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
                'detNilai'      => $this->Dashboard->viewWhereAssosiative('*', 'nilai', ['id_siswa'   => $this->session->userdata('id_siswa'),'id_tq' => $id])->result_array(),
                'soal'          => $this->Dashboard->viewWhereAssosiative('*', 'soal', ['id_tq'  => $id])->result_array(),
                'soalEssay'     => $this->Dashboard->viewWhereAssosiative('*', 'soal_essay', ['id_tq'  => $id])->result_array(),
                'waktu_selesai' => date("$hrSisa:$mnSisa:$sc"),
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'subbread'      => 'Mengerjakan Quis',
                'view'		    => "v_viewStartQuis"
            ];

            $this->load->view("index1", $data);
        }
    }

    // Jika Waktu Habis
    public function actionSelesaiQuis($id=0)
    {
        if ($id!=0) {
            // Buat Perulangan Untuk Insert Ke Tabel Analisis
            $jmlh   = count($this->input->post('jmlh'))+1;
            for ($i = 2; $i <= $jmlh; $i++) {
                $insertSoal = [
                        'id_ujian'      => $id,
                        'id_soal'       => $this->input->post('soal_'.$i),
                        'id_siswa'      => $this->session->userdata('id_siswa'),
                        'jawaban'       => $this->input->post('pilihan_'.$i)
                    ];

                $updateNilai    = [
                    'sisa_waktu'       => "00:00:00"
                ];

                // Insert Ke Tabel Analisa
                $this->Dashboard->insert('analisis', $insertSoal);

                // Update Nilai
                $this->Dashboard->update('nilai', 'id_tq', $id, $updateNilai);
            }

            $insertEssay = [
                'id_ujian'      => $id,
                'id_soal_essay' => $this->input->post('id_essay'),
                'id_siswa'      => $this->session->userdata('id_siswa'),
                'jawaban'       => $this->input->post('isiEssay')
            ];
            
            $this->Dashboard->insert('analisis_essay', $insertEssay);

            redirect('home', 'refresh');
        }
    }

    // View Nilai
    public function nilai()
    {
        $nilai              = $this->Dashboard->viewWhere('nilai', 'id_siswa', $this->session->userdata('id_siswa'))->result_arraY();
        $join   = array(
                ['kelas','topik_quiz.id_kelas=kelas.id_kelas','LEFT'],
                ['pengajar','topik_quiz.pembuat=pengajar.id_pengajar','LEFT'],
                ['master_pelajaran','topik_quiz.id_mata_pelajaran=master_pelajaran.id_mapel','LEFT']
            );
        $join1   = array(
                ['topik_quiz','nilai.id_tq=topik_quiz.id_tq','LEFT']
            );
        $data 	            = [
            'titles'	    => 'Dashboard Siswa || View Nilai Pages',
            'user'          => $this->Dashboard->viewWhere('siswa', 'id_siswa', $this->session->userdata('id_siswa'))->result_array(),
            'nilai'         => $this->Dashboard->viewGlobalJoinWhere(
                'nilai.id_nilai AS id_nilai,
                nilai.id_tq AS id_tq,
                topik_quiz.judul AS judul,
                nilai.jml_benar AS jml_benar,
                nilai.jml_kosong AS jml_kosong,
                nilai.jml_salah AS jml_salah,
                nilai.nilai AS nilai',
                'nilai',
                ['nilai.id_tq'      => $nilai[0]['id_tq'],
                'nilai.id_siswa'    => $this->session->userdata('id_siswa')],
                $join1
            )->result_array(),
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
                ['topik_quiz.id_tq'     => $nilai[0]['id_tq']],
                $join
            )->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'View Nilai Quis',
            'view'		    => "v_viewNilai"
        ];
        
        $this->load->view("index", $data);
    }

    // Detail Nilai
    public function detNilai($id=0)
    {
        if ($id!=0) {
            $nilai              = $this->Dashboard->viewWhere('nilai', 'id_siswa', $this->session->userdata('id_siswa'))->result_arraY();
            $join   = array(
                ['kelas','topik_quiz.id_kelas=kelas.id_kelas','LEFT'],
                ['pengajar','topik_quiz.pembuat=pengajar.id_pengajar','LEFT'],
                ['master_pelajaran','topik_quiz.id_mata_pelajaran=master_pelajaran.id_mapel','LEFT']
            );
            $join1   = array(
                    ['topik_quiz','nilai.id_tq=topik_quiz.id_tq','LEFT']
                );
            $data 	            = [
            'titles'	    => 'Dashboard Siswa || View Nilai Pages',
            'user'          => $this->Dashboard->viewWhere('siswa', 'id_siswa', $this->session->userdata('id_siswa'))->result_array(),
            'nilai'         => $this->Dashboard->viewGlobalJoinWhere(
                'nilai.id_nilai AS id_nilai,
                nilai.id_tq AS id_tq,
                topik_quiz.judul AS judul,
                nilai.jml_benar AS jml_benar,
                nilai.jml_kosong AS jml_kosong,
                nilai.jml_salah AS jml_salah,
                nilai.nilai AS nilai',
                'nilai',
                ['nilai.id_nilai'     => $id],
                $join1
            )->result_array(),
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
                ['topik_quiz.id_tq'     => $nilai[0]['id_tq']],
                $join
            )->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'subbread'      => 'View Nilai Quis',
            'view'		    => "v_viewDetNilai"
        ];
        
            $this->load->view("index", $data);
        }
    }

    // View Testimoni
    public function testimoni()
    {
        $cekSiswa           = $this->Dashboard->viewWhere('siswa', 'id_siswa', $this->session->userdata('id_siswa'))->result_array();
        $data 	            = [
            'titles'	    => 'Dashboard Siswa || View Testimoni Pages',
            'user'          => $this->Dashboard->viewWhere('siswa', 'id_siswa', $this->session->userdata('id_siswa'))->result_array(),
            'iconbread'     => 'fa fa-home',
            'breadcumb'     => ucwords($this->uri->segment('1')),
            'pagination'    => $this->pagination->create_links(),
            'subbread'      => 'Add Testimoni',
            'view'		    => "v_addTesti"
        ];

        $this->load->view("index", $data);
    }

    // Action Add Testimoni
    public function actionAddTestimoni()
    {
        $this->form_validation->set_rules('testimoni', 'Testimoni', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="text-danger"><i class="fa fa-info-circle"></i> ', '</div>');

        // Validation
        if ($this->form_validation->run() == false) {
            $cekSiswa           = $this->Dashboard->viewWhere('siswa', 'id_siswa', $this->session->userdata('id_siswa'))->result_array();
            $data 	            = [
                'titles'	    => 'Dashboard Siswa || View Testimoni Pages',
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'pagination'    => $this->pagination->create_links(),
                'subbread'      => 'Add Testimoni',
                'view'		    => "v_addTesti"
            ];

            $this->load->view("index", $data);
        } else {
            $insertTesti = [
                'id_siswa'      => $this->session->userdata('id_siswa'),
                'judul'         => htmlentities($this->input->post('judul')),
                'konten'        => htmlentities($this->input->post('testimoni'))
            ];
            
            // Insert To Database
            if ($this->Dashboard->insert('testimoni', $insertTesti)) {
                // Jika Sukses Insert
                $this->toastr->success('Sukses Menyimpan Testimoni !!!');

                redirect('home/testimoni', 'refresh');
            } else {
                // Jika Gagal Insert
                $this->toastr->error('Data Tidak Valid !!!');

                redirect('home/testimoni', 'refresh');
            }
        }
    }

    // Download Sertifikat
    public function downloadSertifikat($id=0)
    {
        if($id!=0){
            // Cek Nilai Berdasar ID
            $join           = array(
                                ['siswa','nilai.id_siswa=siswa.id_siswa','LEFT']
                            );
            $data 	            = [
                'titles'	    => 'Sertifikat',
                'iconbread'     => 'fa fa-home',
                'breadcumb'     => ucwords($this->uri->segment('1')),
                'cekNilai'      => $this->Dashboard->viewGlobalJoinWhere(
                    '
                        nilai.id_nilai AS id_nilai,
                        siswa.nama_lengkap AS nama_lengkap,
                        siswa.alamat AS alamat,
                        siswa.nis AS nis,
                        nilai.nilai AS nilai
                    ',
                    'nilai',
                    ['id_nilai' => $id],
                    $join)->result_array(),
                'subbread'      => 'Add Testimoni'
                // 'view'		    => "v_viewSertif"
            ];

            // $this->load->view("index", $data);
            $this->load->view("v_viewSertif", $data);
        }
    }
}
