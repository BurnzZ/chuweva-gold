<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
*	All functions of this class is called via AJAX. Return data should be in
*	json_encode() format.
*/ 
class Reserve extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('reserve_model');
	}

	function reserve_dequeue($data) {
	
		$data = array (
			'username' => $_POST['username'],
			'book_no' => $_POST['book_no'],
			'email' => $_POST['email']
		);
		
		$q = $this->Reserve_Model->dequeue($data);
		return true;	
	}

}

?>