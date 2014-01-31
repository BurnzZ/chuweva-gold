<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
*	All functions of this class is called via AJAX. Return data should be in
*	json_encode() format.
*/ 
class Favorites extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('favorites_model');
	}


	public function index() {
	}


	public function get_all($username) {

		$data['result'] = $this->favorites_model->get_all($username);
		echo json_encode($data);
	}


	public function add() {

		$info = $this->input->post('arr');

		$data = array (
					'username' => $info[0],
					'book_no' => $info[1],
					'date_added' => 'NOW()'
				);	

		$this->favorites_model->add($data);
	}


	public function remove() {

		$info = $this->input->post('arr');

		$data = array (
					'username' => $info[0],
					'book_no' => $info[1]
				);	

		$this->favorites_model->remove($data);
	}
}

?>