<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->view('heading');
		$this->load->model('m_home');

		// LOAD ALL MODALS THAT WILL BE USED
		$this->load->view('/modals/addFruitModal');
		$this->load->view('/modals/editFruitModal');
	}

	public function index(){
		$fruits = $this->m_home->retrieve_all();
		$data['fruits'] = $fruits;
		$this->load->view('home', $data);
	}

	// THIS IS JUST A DUMMY SUCCESS PAGE
	public function success(){
		$this->load->view('success');
	}

	public function addFruit(){
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */