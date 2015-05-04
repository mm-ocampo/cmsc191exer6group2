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
		$this->load->view('/modals/editPriceModal');
		$this->load->view('/modals/deleteFruitModal');
	}

	public function index(){
		$fruits = $this->m_home->retrieve_all();
		$data['fruits'] = $fruits;
		$query2 = $this->m_home->retrieve_all_prices();
		$data['prices'] = $query2;
		$this->load->view('home', $data);
	}


	public function add_fruit(){
		// use json_encode then json_decode
		if($this->input->post()){
			$doc['name'] = $this->input->post('fruitName');
			$doc['qty'] = $this->input->post('quantity');
			$doc['dist'] = $this->input->post('distributor');
			$doc2['price'] = (float) $this->input->post('price');


			$doc = json_decode(json_encode($doc));
			// insert in fruit db
			$query = $this->m_home->add_in_fruit($doc);
			$fruit_id = $this->m_home->get_fruit_id($this->input->post('fruitName'),$this->input->post('distributor'));

			$doc2['fruit_id'] = $fruit_id;
			$doc2['date'] = date('Y-m-d H:i:s');
			$doc2 = json_decode(json_encode($doc2));
			$query2 = $this->m_home->add_in_price($doc2);

			if($query && $query2){
				redirect('main/index', 'refresh');
			}
			// insert in price db
			//$query2 = $this->home_model->add_in_price($doc2);
		}
	}

	public function delete_fruit(){

			$id = (string) $this->input->get('id');
			
			// var_dump($doc);
			$query = $this->m_home->delete_in_fruit($id);
			if($query){
				redirect('main/index', 'refresh');
			}
		
	}

	public function edit_price(){
		if($this->input->post()){
			$doc['fruit_id'] = $this->input->post('fruitId');
			$doc['price'] = (float) $this->input->post('price');
			$doc = json_decode(json_encode($doc));
			$query = $this->m_home->add_in_price($doc);
			if($query){
				redirect('main/index', 'refresh');
			}
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */