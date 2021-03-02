<?php
// Header
$this->load->view('templates/v_HeaderSiswa');

// Menu
$this->load->view('templates/v_MenuSiswa');

// Left Content
$this->load->view('templates/v_MenuLeftSiswa');

// Content View
$this->load->view($view);

// Footer
$this->load->view('templates/v_FooterSiswa');
