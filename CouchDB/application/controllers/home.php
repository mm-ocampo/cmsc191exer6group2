<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->view('heading');
		$this->load->view('/modals/addFruitModal');
		$this->load->view('/modals/editFruitModal');
		$this->load->view('/modals/editPriceModal');
		$this->load->view('/modals/deleteFruitModal');
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
			$doc['qty'] = (float) $this->input->post('quantity');
			$doc['dist'] = $this->input->post('distributor');
			$doc['prices'] = array();
			$temp['price'] = (float) $this->input->post('price');
			$temp['date'] = date('Y-m-d H:i:s');
			array_push($doc['prices'], $temp);
			$doc = json_decode(json_encode($doc));
			
			// insert in fruit db
			$query = $this->home_model->add_in_fruit($doc);

			if($query){
				redirect('home/index', 'refresh');
			}
		}
	}

	public function edit_fruit(){
		if($this->input->post()){
			$doc['_id'] = $this->input->post('_id');
			$doc['_rev'] = $this->input->post('_rev');
			$doc['name'] = $this->input->post('fruitName');
			$doc['qty'] = (float) $this->input->post('quantity');
			$doc['dist'] = $this->input->post('distributor');
			$query2 = $this->home_model->get_fields($doc['_id']);
			$doc['prices'] = $query2->prices;
			$doc = json_decode(json_encode($doc));
			$query = $this->home_model->edit_in_fruit($doc);
			if($query){
				redirect('home/index', 'refresh');
			}
		}
	}

	// Delete fruit record
	public function delete_fruit(){
		if($this->input->post()){
			$doc['_id'] = (string) $this->input->post('_id');
			$doc['_rev'] = (string) $this->input->post('_rev');
			$doc = json_decode(json_encode($doc));
			$query = $this->home_model->delete_in_fruit($doc);
			if($query){
				redirect('home/index', 'refresh');
			}
		}
	}
	
	public function edit_price(){
		if($this->input->post()){
			$doc2['_id'] = $this->input->post('fruitId');
			$doc2['_rev'] = $this->input->post('fruitRev');
			$query2 = $this->home_model->get_fields($doc2['_id']);
			$temp['date'] = date('Y-m-d H:i:s');
			$temp['price'] = (float) $this->input->post('price');
			array_push($query2->prices, $temp);
			$doc2['prices'] = $query2->prices;
			$doc2['name'] = $query2->name;
			$doc2['qty'] = $query2->qty;
			$doc2['dist'] = $query2->dist;
			
			$doc2 = json_decode(json_encode($doc2));
			$query3 = $this->home_model->edit_in_fruit($doc2);
			
			if($query3){
				redirect('home/index', 'refresh');
			}
		}
	}
}