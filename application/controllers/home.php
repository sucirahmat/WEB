<?php
class Home extends CI_Controller{
    public function index()
    {
        echo 'web';
    }
    public function mahasiswa()
    {
        return $this->load->view('v_mahasiswa'); 
    }
}