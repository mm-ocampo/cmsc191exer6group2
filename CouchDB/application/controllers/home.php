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
		$query2 = $this->home_model->retrieve_all_prices();
		/*$data['prices'] = $query2;*/
		$counter = 0;
		$price = 0;
		foreach ($query as $item) {
			for ($i=0; $i < count($query2) ; $i++) { 
				if($item['id'] == $query2[$i]['fruitId']){
					$price = $query2[$i]['price'];
					break;
				}
			}
			$query[$counter++]['price'] = $price;
		}
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

			$doc = json_decode(json_encode($doc));
			// insert in fruit db
			$query = $this->home_model->add_in_fruit($doc);
			$doc2['fruitId'] = $query->id;
			$doc2['fruitRev'] = $query->rev;
			$doc2['name'] = $this->input->post('fruitName');
			$doc2['date'] = date('Y-m-d H:i:s');
			$doc2['price'] = (float) $this->input->post('price');
			$doc2 = json_decode(json_encode($doc2));
			$query2 = $this->home_model->add_in_price($doc2);

			if($query && $query2){
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
			$doc['fruitId'] = $this->input->post('fruitId');
			$doc['price'] = (float) $this->input->post('price');
			$doc = json_decode(json_encode($doc));
			$query = $this->home_model->add_in_price($doc);
			if($query){
				redirect('home/index', 'refresh');
			}
		}
	}
}