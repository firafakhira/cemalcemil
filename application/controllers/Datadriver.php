<!-- Monica Dessy Amanda 1301164452 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datadriver extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('datadriver_model');
    }
 
	function index(){
		$data = array(
			'title' => 'Data Makanan',
			'cemalcemil' => $this->datadriver_model->get_data()
		);
		$this->load->view('datadriver',$data);
	}

}