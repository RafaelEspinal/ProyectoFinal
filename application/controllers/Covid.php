<?php
defined('BASEPATH') OR exit('No direct script access allow');

class Covid extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        
    }

    function index(){
        $this->load->view('index');
    }

    
}