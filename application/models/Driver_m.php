<!-- Haifa Salsabila 1301160170 -->
<?php
	class Driver_m extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function getDriver($d)
	{
		$this->db->select('*');
		$this->db->from('Driver');
		$this->db->where('idDriver',$d);
		$data = $this->db->get();
		return $data->result();

	}
	
}
