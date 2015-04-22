<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}
	
	public function index(){
		$fruits = $this->home_model->retrieve_all();
		var_dump($fruits);
		$this->load->view('home');
	}

	// Add fruit record
	public function add_fruit(){
		// use json_encode then json_decode

		// insert in fruit db
		$query = $this->home_model->add_in_fruit($doc);

		// insert in price db
		$query2 = $this->home_model->add_in_price($doc2);
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