<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->view('heading');
		$this->load->view('/modals/addFruitModal');
		$this->load->view('/modals/editFruitModal');
		$this->load->view('/modals/editPriceModal');
		$this->load->model('home_model');
	}
	
	public function index(){
		$query = $this->home_model->retrieve_all();
		$data['fruits'] = $query;
		$query2 = $this->home_model->retrieve_all_prices();
		$data['prices'] = $query2;
		$this->load->view('home', $data);
	}

	// Add fruit record
	public function add_fruit(){
		// use json_encode then json_decode
		if($this->input->post()){
			$doc['name'] = $this->input->post('fruitName');
			$doc['qty'] = (float) $this->input->post('quantity');
			$doc['dist'] = $this->input->post('distributor');

			$doc = json_decode(json_encode($doc));
			// insert in fruit db
			$query = $this->home_model->add_in_fruit($doc);

			$doc2['name'] = $this->input->post('fruitName');
			$doc2['date'] = date('Y-m-d H:i:s');
			$doc2['price'] = (float) $this->input->post('price');
			$doc2 = json_decode(json_encode($doc2));
			$query2 = $this->home_model->add_in_price($doc2);

			if($query && $query2){
				$this->index();
			}

			// insert in price db
			//$query2 = $this->home_model->add_in_price($doc2);
		}
	}

	// Delete fruit record
	public function delete_fruit(){
		if($this->input->post()){
			$doc['_id'] = (string) $this->input->post('_id');
			$doc['_rev'] = (string) $this->input->post('_rev');
			$doc = json_decode(json_encode($doc));
			$query = $this->home_model->delete_in_fruit($doc);
			echo $query;
		}
		// use json_encode and json_decode
		// must contain _id and _rev to delete
		/*if ($this->input->post()) {
			$doc = $this->input->post();
			$query = $this->home_model->delete_in_fruit($doc);
			if($query)
				echo $query;
		}*/
		// delete in fruit 
		/*$query = $this->home_model->delete_in_fruit($doc);

		$query2 = $this->home_model->delete_in_price($doc2);*/
	}

	public function edit_fruit(){
		if($this->input->post()){
			$doc['name'] = $this->input->post('fruitName');
			$doc['qty'] = (float) $this->input->post('quantity');
			$doc['dist'] = $this->input->post('distributor');

			$doc = json_decode(json_encode($doc));
			// insert in fruit db
			$query = $this->home_model->add_in_fruit($doc);

			$doc2['name'] = $this->input->post('fruitName');
			$doc2['date'] = date('Y-m-d H:i:s');
			$doc2['price'] = (float) $this->input->post('price');
			$doc2 = json_decode(json_encode($doc2));
			$query2 = $this->home_model->add_in_price($doc2);

			if($query && $query2){
				$this->index();
			}

			// insert in price db
			//$query2 = $this->home_model->add_in_price($doc2);
		}
	}

}