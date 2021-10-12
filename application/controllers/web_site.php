<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class web_site extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		 $this->load->model('football_model');
        
    }


    public function football(){
        $this->load->view('web_site/website_header');
        $this->load->view('web_site/home_site');
    }




}