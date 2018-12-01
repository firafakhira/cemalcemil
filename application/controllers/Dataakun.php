<!-- Haifa Salsabila 1301160170 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dataakun extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('dataakun_model');
    }
 
	function index(){
		$data = array(
            'title' => 'Data Makanan',
            'cemalcemilFood' => $this->dataakun_model->get_data()
        );
        $this->load->view('dataakun',$data);
	}

	public function add()
	{
		$data = $this->input->post(null,TRUE);
		$insert = $this->dataakun_model->save_data($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_insert');
            redirect('inputMenuC/index');
        }else{
            echo "<script>alert('Gagal Menambahkan Data');</script>";
        }

	}
	 public function edit()
    {
        $data = $this->input->post(null,TRUE);
        $edit = $this->dataakun_model->edit_data($data);
        if($edit){
            $this->session->set_flashdata('alert', 'sukses_edit');
            redirect(base_url('index.php/dataakun'));
        }else{
            echo "<script>alert('Gagal Edit Data');</script>";

        }
    }

    public function hapus()
    {
        $email = $this->input->post('email');
        $hapus = $this->dataakun_model->delete_data($email);
        
        if($hapus) {
            echo "<script>alert('Data telah dihapus');</script>";
            redirect(base_url('index.php/dataakun'));
        }
    }

}