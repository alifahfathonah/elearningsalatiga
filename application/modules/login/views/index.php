<?php
// Header
$this->load->view('templates/v_Header');

// Sidebar
$this->load->view('templates/v_Sidebar');

// Content View
$this->load->view($view);

// Footer
$this->load->view('templates/v_Footer');
