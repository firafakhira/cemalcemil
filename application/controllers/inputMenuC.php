<!-- Haifa Salsabila 1301160170 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inputMenuC extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('inputMenu_m');
    }
 
	function index(){
		$data = array(
            'title' => 'Data Makanan',
            'cemalcemilFood' => $this->inputMenu_m->get_data()
        );
        $this->load->view('inputMenu',$data);
	}

	public function add()
	{
		$data = $this->input->post(null,TRUE);
		$insert = $this->inputMenu_m->save_data($data);
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
        $edit = $this->inputMenu_m->edit_data($data);
        if($edit){
            $this->session->set_flashdata('alert', 'sukses_edit');
            redirect(base_url('index.php/inputMenuC'));
        }else{
            echo "<script>alert('Gagal Edit Data');</script>";

        }
    }

    public function hapus()
    {
        $namaFood = $this->input->post('namaFood');
        $hapus = $this->inputMenu_m->delete_data($namaFood);
        
        if($hapus) {
            echo "<script>alert('Data telah dihapus');</script>";
            redirect(base_url('index.php/inputMenuC'));
        }
    }

}