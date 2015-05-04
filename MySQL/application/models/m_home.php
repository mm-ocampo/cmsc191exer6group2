<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_home extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function retrieve_all(){
        $fruits = $this->db->query("SELECT * FROM fruit");
        return $fruits->result_array();
    }

    public function retrieve_all_prices(){
        $query = $this->db->get('price');
        $result = array();

        foreach ($query->result_array() as $item){
            $row = $this->db->get_where('fruit', array('id' => $item['fruit_id']));
            $result[$row->result_array()[0]['name']] = $item['price'];
        }
        return $result;


    }

    public function add_in_fruit($doc){
    	return $this->db->insert('fruit', $doc);
    }

    public function add_in_price($doc){
    	return $this->db->insert('price', $doc);
    }

    public function delete_in_fruit($doc){
    	$this->couchdb->useDatabase("fruit");
    	return $this->couchdb->deleteDoc($doc);
    }

    public function delete_in_price(){
    	$this->couchdb->useDatabase("price");
    	return $this->couchdb->deleteDoc($doc);	
    }

    public function get_fruit_id($name, $dist){
        $this->db->select('id');
        $this->db->where('name', $name);
        $this->db->where('dist', $dist);
        $query = $this->db->get('fruit');
        return $query->result_array()[0]['id'];
    }

}