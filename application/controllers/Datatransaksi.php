<!-- Monica Dessy Amanda 1301164452 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datatransaksi extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('datatransaksi_model');
    }
 
	function index(){
		$data = array(
			'title' => 'Data Makanan',
			'cemalcemil' => $this->datatransaksi_model->get_data()
		);
		$this->load->view('datatransaksi',$data);
	}

}