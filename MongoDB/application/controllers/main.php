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
		$this->load->view('home', $data);
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

	public function editFruit(){
		echo $this->input->get('idContainer');
		echo $this->input->get('fruitName');
		echo $this->input->get('quantity');
		echo $this->input->get('distributor');
		$data = array(
			'name' => $this->input->get('fruitName'),
			'qty' => $this->input->get('quantity'),
			'dist' => $this->input->get('distributor')
		);
		$var = $this->input->get('idContainer');
		//echo $var;
		$this->mongo_db->where(array("_id" => $var))->get('fruit');
		//$this->mongo_db->select('name, qty');
		//$query = $this->mongo_db->get('fruit');
		//var_dump($query);
		$this->mongo_db->set($data)->update('fruit');
		//$this->mongo_db->where(array('_id'=>$var))->set($data)->update('fruit');
		redirect(base_url());
	}

	public function deleteFruit(){
		$this->mongo_db->where('name', $this->input->get('name'));
		$this->mongo_db->delete('fruit');
		redirect(base_url());
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */