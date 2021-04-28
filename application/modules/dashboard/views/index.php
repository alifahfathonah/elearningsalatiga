<?php
// Header
$this->load->view('templates/v_HeaderAdmin');

// Menu
$this->load->view('templates/v_MenuAdmin');

// Content View
$this->load->view($view);

// Footer
$this->load->view('templates/v_FooterAdmin');
