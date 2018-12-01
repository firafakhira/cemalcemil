<!-- Haifa Salsabila 1301160170 dan Monica Dessy Amanda 1301164452 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ratingcem extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Datadriver_model');

    }

	public function index($datadriver)
	{
		$data['iddriver'] = $datadriver ;
		$this->load->view('ratingcem',$data);
	}
	
	public function ratingdrver()
	{

		// $id = redirect('ratingcem/getId');
		$data = $this->input->post(null,TRUE);
		$edit = $this->Datadriver_model->update_data_driver($data);
		if($edit){
			redirect('home/index');
		}
	}

}
