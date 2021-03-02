<?php
// Header
$this->load->view('templates/v_HeaderSiswaUjian');

// Menu
$this->load->view('templates/v_MenuSiswaUjian');

// Left Content
$this->load->view('templates/v_MenuLeftSiswaUjian');

// Content View
$this->load->view($view);

// Footer
$this->load->view('templates/v_FooterSiswaUjian');
