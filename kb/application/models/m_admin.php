<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_admin extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	
	}

	public function insertData($table,$data)
	{
		return $this->db->insert($table, $data);
	}

	public function getLogin($table, $data)
	{
		return $this->db->get_where($table, $data);
	}

	
	public function view($table)
	{
		return $this->db->get($table);
	}


}

/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */