<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $dil=$this->session->userdata('lang');
        if (!$dil)
        {
            $dil=$this->session->set_userdata('lang','tr');
            redirect('home');
        }


        $this->lang->load($dil,$dil);


    }


}