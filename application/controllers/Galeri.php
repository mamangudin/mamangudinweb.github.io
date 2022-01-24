<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        # code...
    }
    public function galeridetail()
    {
        $this->template->load('utama/template', 'utama/galeridetail');
    }
}

/* End of file: Galeri.php */
