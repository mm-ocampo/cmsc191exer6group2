<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function retrieve_all(){
    	$this->couchdb->useDatabase("fruit");
        $query = $this->couchdb->getAllDocs();
        $result = [];
        foreach ($query->rows as $item){
            $row = $this->couchdb->getDoc($item->id);
            $temp = array();
            $temp['id'] = $row->_id;
            $temp['rev'] = $row->_rev;
            $temp['name'] = $row->name;
            $temp['qty'] = $row->qty;
            $temp['dist'] = $row->dist;
            array_push($result, $temp);
        }
        return $result;
    }

    public function retrieve_all_prices(){
        $this->couchdb->useDatabase("price");
        $query =$this->couchdb->getAllDocs();
        $result = array();
        foreach ($query->rows as $item){
            $row = $this->couchdb->getDoc($item->id);
            $result[$row->name] = $row->price;
        }
        return $result;
    }

    public function add_in_fruit($doc){
    	$this->couchdb->useDatabase("fruit");
    	return $this->couchdb->storeDoc($doc);
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

    public function edit_in_fruit($doc){
        $this->couchdb->useDatabase("fruit");
        return $this->couchdb->storeDoc($doc);
    }

}