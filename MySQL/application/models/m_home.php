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
        // $this->db->useDatabase("price");
        // $query =$this->couchdb->getAllDocs();
        // $result = array();
        // foreach ($query->rows as $item){
        //     $row = $this->couchdb->getDoc($item->id);
        //     $result[$row->name] = $row->price;
        // }
        // return $result;
    }

    public function add_in_fruit($doc){
    	return $this->db->insert('fruit', $doc);
    }

    public function add_in_price($doc){
    	$this->couchdb->useDatabase("price");
    	return $this->couchdb->storeDoc($doc);
    }

    public function delete_in_fruit($doc){
    	$this->couchdb->useDatabase("fruit");
    	return $this->couchdb->deleteDoc($doc);
    }

    public function delete_in_price(){
    	$this->couchdb->useDatabase("price");
    	return $this->couchdb->deleteDoc($doc);	
    }

}