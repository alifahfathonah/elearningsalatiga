<?php
// Header
$this->load->view('templates/v_HeaderPengajar');

// Menu
$this->load->view('templates/v_MenuPengajar');

// Left Content
$this->load->view('templates/v_MenuLeftPengajar');

// Content View
$this->load->view($view);

// Footer
$this->load->view('templates/v_FooterPengajar');
