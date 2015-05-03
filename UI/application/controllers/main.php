<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->view('heading');
		// LOAD ALL MODALS THAT WILL BE USED
		$this->load->view('/modals/addFruitModal');
		$this->load->view('/modals/editFruitModal');
		$this->load->view('/modals/editPriceModal');
		$this->load->view('/modals/deleteFruitModal');
	}

	public function index(){
		$this->load->view('home');
	}

	// THIS IS JUST A DUMMY SUCCESS PAGE
	public function success(){
		$this->load->view('success');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */