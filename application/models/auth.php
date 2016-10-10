<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auth extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert($tablename,$data)
	{
		$this->db->insert($tablename, $data);
	}
	public function check_login($condition)
	{
		$this->db->where($condition);
		$query = $this->db->get('user');
		return $query->result();
	}
}

/* End of file auth.php */
/* Location: ./application/models/auth.php */