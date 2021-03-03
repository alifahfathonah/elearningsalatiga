<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Front_model', 'Front', true);
        $this->load->library('datatables');
        $this->load->library('src/Toastr');
        set_zone();
    }
    
    public function index()
    {
        $join           = array(
                            ['siswa','testimoni.id_siswa=siswa.id_siswa','LEFT']
                        );
        $data 	        = [
            'titles'	    => 'SMK Muhammadiyah 1 Purbalingga',
            'iconbread'     => 'fa fa-home',
            'srapra'        => $this->Front->viewAll('*','sarana_prasarana')->result_array(),
            'siswa'         => $this->Front->viewAll('*','siswa')->result_array(),
            'pengajar'      => $this->Front->viewAll('*','pengajar')->result_array(),
            'mitra'         => $this->Front->viewAlllIMIT('*', 'mitrabkk','id_mitra','DESC',6)->result_array(),
            'eskul'         => $this->Front->viewAll('*','ekstrakul')->result_array(),
            'testi'         => $this->Front->viewGlobalJoin(
                '
                testimoni.id_testi AS id_testi,
                siswa.nama_lengkap AS nama_lengkap,
                testimoni.judul AS judul,
                testimoni.konten AS konten,
                ',
                'testimoni',
                $join
            )->result_array(),
            // 'breadcumb'     => ucwords($this->uri->segment('1')),
            // 'subbread'      => 'test',
            'view'		    => "v_Front"
        ];

        $this->load->view("index", $data);
    }
    // QUICK LINK START //

    // View Detail Estra Kulikuler
    public function cekEskul($id=1)
    {
        if($id!=0){
            $data 	        = [
                'titles'	    => 'SMK Muhammadiyah 1 Purbalingga',
                'iconbread'     => 'fa fa-home',
                'eskul'         => $this->Front->viewWhere('ekstrakul','id_eskul',$id)->result_array(),
                'view'		    => "v_detailEskul"
            ];
    
            $this->load->view("index", $data);
        }
    }

    // View Keunggulan
    public function keunggulan()
    {
        $data 	        = [
            'titles'	    => 'SMK Muhammadiyah 1 Purbalingga',
            'iconbread'     => 'fa fa-home',
            'view'		    => "v_Keunggulan"
        ];

        $this->load->view("index", $data);
    }

    // View Prestasi
    public function prestasi()
    {
        $data 	        = [
            'titles'	    => 'SMK Muhammadiyah 1 Purbalingga',
            'iconbread'     => 'fa fa-home',
            'view'		    => "v_Prestasi"
        ];

        $this->load->view("index", $data);
    }

    // QUICK LINK END   //
}
