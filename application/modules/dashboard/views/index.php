<?php
// Header
$this->load->view('templates/v_HeaderAdmin');

// Menu
$this->load->view('templates/v_MenuAdmin');

// Left Content
$this->load->view('templates/v_MenuLeftAdmin');

// Content View
$this->load->view($view);

// Footer
$this->load->view('templates/v_FooterAdmin');
