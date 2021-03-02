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
        $data 	        = [
            'titles'	    => 'Homepage',
            'iconbread'     => 'fa fa-home',
            // 'breadcumb'     => ucwords($this->uri->segment('1')),
            // 'subbread'      => 'test',
            'view'		    => "v_Front"
        ];
        $this->load->view("index", $data);
    }

    // QUICK LINK START //

    
    // QUICK LINK END   //
}
