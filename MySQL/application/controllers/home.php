<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$fruits = "hahahahaha";
		$data['fruits'] = $fruits;
		$this->load->view('home', $data);
	}

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

	// THIS IS JUST A DUMMY SUCCESS PAGE
	public function success(){
		$this->load->view('success');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */