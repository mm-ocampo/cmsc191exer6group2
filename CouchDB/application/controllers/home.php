<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}
	
	public function index(){
		$query = $this->home_model->retrieve_all();
		var_dump($query);
		$this->load->view('home');
	}

}