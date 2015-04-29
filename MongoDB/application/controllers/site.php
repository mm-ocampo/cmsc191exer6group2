<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //loading  the mongodb library
        $this->load->library('mongo_db');
    }

}
