<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->template->load('utama/template', 'utama/home');
    }
}

/* End of file: Home.php */
