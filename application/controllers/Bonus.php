<!-- Monica Dessy Amanda 130116452 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bonus extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->helper('form');
		// $this->load->view('bonus');
    }
 
	function index(){
		$this->load->view('bonus');
	}

}