<?php
// Header
$this->load->view('templates/v_HeaderPengajar');

// Menu
$this->load->view('templates/v_MenuPengajar');

// Content View
$this->load->view($view);

// Footer
$this->load->view('templates/v_FooterPengajar');
