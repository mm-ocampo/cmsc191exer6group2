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
            $temp['prices'] = $row->prices;
            array_push($result, $temp);
        }
        return $result;
    }

    public function retrieve_all_prices(){
        $this->couchdb->useDatabase("price");
        $query =$this->couchdb->getAllDocs();
        $result = [];
        foreach ($query->rows as $item){
            $row = $this->couchdb->getDoc($item->id);
            $temp = array();
            $temp['price'] = $row->price;
            $temp['fruitId'] = $row->fruitId;
            $temp['id'] = $row->_id;
            $temp['rev'] = $row->_rev;
            $temp[$row->fruitId] = $row->price;
            array_push($result, $temp);
        }
        return $result;
    }

    public function add_in_fruit($doc){
    	$this->couchdb->useDatabase("fruit");
    	return $this->couchdb->storeDoc($doc);
    }


    public function delete_in_fruit($doc){
    	$this->couchdb->useDatabase("fruit");
    	return $this->couchdb->deleteDoc($doc);
    }


    public function edit_in_fruit($doc){
        $this->couchdb->useDatabase("fruit");
        return $this->couchdb->storeDoc($doc);
    }

    public function get_fields($id){
        $this->couchdb->useDatabase("fruit");
        return $this->couchdb->getDoc($id);
    }

}