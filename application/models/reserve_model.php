<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reserve_Model extends CI_Model {

	function dequeue($data) {
		
		$this->db->where($data);
		$q = $this->db->get('reserves');
	
		if ($q->num_rows() == 1) {
			$this->db->where($data);
			$this->db->delete('reserves');
			
			return $q;			
		}
		else return false;
	}

}

?>