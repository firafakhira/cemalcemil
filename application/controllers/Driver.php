<!-- Haifa Salsabila 1301160170 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver extends CI_Controller {

 public function __construct()
    {
        parent::__construct();
        $this->load->model('Driver_m');
        $this->load->model('Datatransaksi_model');
    }

public function index() {
    $this->load->view('driver');
}

 public function getD()
 {
  // int random_int (1,10);
  // echo "$d = Math.floor((Math.random() * 10) + 1)";
  // $driver = $this->Driver_m->getDriver($d);
  // $data = array(
  //  'title' => 'Driver Anda',
  //  'driver' => $this->Driver_m->getDriver()
  // );
  // $this->load->view('Driver',$data);

  $temp = random_int(1, 10);
  $driv = $this->Driver_m->getDriver($temp);
  $data = array(
   'title' => 'Driver Anda',
   'driver' => $driv
  );
  $this->load->view('driver', $data); 
 }

 public function getId()
  {
    $data = $this->input->post(null,TRUE);
    // return $data;
    redirect('ratingcem/ratingdrver($data)');
  }
  public function nama()
  {
    $data = $this->input->post(null,TRUE);
    $this->Datatransaksi_model->update_nama_driver($data);
  }
}