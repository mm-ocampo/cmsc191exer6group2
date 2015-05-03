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
	}

	public function index(){
		$query = $this->mongo_db->get('fruit');
		$data['query'] = $query;
		//TODO PRICE CHECKER
		$this->load->view('home', $data);
	}

	// THIS IS JUST A DUMMY SUCCESS PAGE
	public function success(){
		$this->load->view('success');
	}

	public function addFruit(){
		$data = array(
			'name' => $this->input->post('fruitName'),
			'qty' => $this->input->post('quantity'),
			'dist' => $this->input->post('distributor'),
			'price' => $this->input->post('price')
		);
		$this->mongo_db->insert('fruit', $data);

		redirect(base_url()."index");
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */