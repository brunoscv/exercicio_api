<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends MY_Controller {
	public $data;	
	function __construct(){
		parent::__construct();
	}
	public function index(){ 
		$url = "http://gateway.marvel.com/v1/public/comics?ts=1&apikey=1234&hash=ffd275c5130566a2916217b101f26150";
		header('Content-type: application/json');
		$config = array();
		$config = json_decode(file_get_contents(FCPATH . '/public/events.json'), true);
		
		$events = array();
		  foreach ( $config["body"] as $json ){
		    $events = $json;
			}	
		
		$data['events'] = $this->getEvents();
	}
  
  }
