<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function retrieve_all(){
    	$this->couchdb->useDatabase("fruit");
        return $this->couchdb->getAllDocs();
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

}