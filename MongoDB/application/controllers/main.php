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
		$dateArr = array();
		$oneDate = array();
		$oneDate["date"] = date("m/d/Y");
		$oneDate["price"] = $this->input->get('price');
		$dateArr[] = $oneDate;
		$data = array(
			'name' => $this->input->get('fruitName'),
			'qty' => $this->input->get('quantity'),
			'dist' => $this->input->get('distributor'),
			'price' => $dateArr
		);
		$this->mongo_db->insert('fruit', $data);

		redirect(base_url());
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */