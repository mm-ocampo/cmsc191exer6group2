<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->view('heading');
		$this->load->view('/modals/addFruitModal');
		$this->load->view('/modals/editFruitModal');
		$this->load->model('home_model');
	}
	
	public function index(){
		$query = $this->home_model->retrieve_all();
		$data['fruits'] = $query;
		$this->load->view('home', $data);
	}

	// Add fruit record
	public function add_fruit(){
		// use json_encode then json_decode
		if($this->input->post()){
			$doc['name'] = $this->input->post('fruitName');
			$doc['qty'] = $this->input->post('quantity');
			$doc['dist'] = $this->input->post('distributor');

			$doc = json_decode(json_encode($doc));
			// insert in fruit db
			$query = $this->home_model->add_in_fruit($doc);
			if($query){
				$this->index();
			}

			// insert in price db
			//$query2 = $this->home_model->add_in_price($doc2);
		}
	}

	// Delete fruit record
	public function delete_fruit(){
		// use json_encode and json_decode
		// must contain _id and _rev to delete
		
		// delete in fruit 
		$query = $this->home_model->delete_in_fruit($doc);

		$query2 = $this->home_model->delete_in_price($doc2);
	}

}