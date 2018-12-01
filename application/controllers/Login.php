<!-- Karina Aulia Dini 1301164342 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('loginp');
        $this->load->helper('form');
        $this->load->helper('url');

    }
	public function index()
	{
        $data = array(
            'title' => 'Data Akun',
            'cemalcemil' => $this->loginp->get_data()
    );
		$this->load->view('login',$data);
	}

    public function daftar_view()
    {
        $this->load->view('login');
    }

    public function daftar_akun()
    {
//       1.  lanjutkan fungsi ini untuk menghubungkan ke model Akun_M
        $idAkun = null;
        $nama = $_POST['nama'];
        $nomor = $_POST['nomor'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = $this->db->query("INSERT INTO akun VALUES('$idAkun','$nama','$nomor','$email','$password')");
        if ($query) {
            redirect(base_url('index.php/login'));
        }

        // $insert = $this->loginp->daftar_akun($data);
        // if($insert){
        //     //1. isi dengan flash data disini
        //    $this->session->set_flashdata('login');
        //     redirect('Login/index');
        // }else{

        //     //1. echo javascript alert disini untuk penanda kalo gagal
        //     echo "cek kembali data yang anda masukkan";
        // }

    }

    public function cek_login()
    {
        $data = $this->input->post(null,TRUE);
            $cek = $this->loginp->login_akun($data);
            if($cek){
 
                $data_session = array(
                    'nama' => $cek->email,
                    'status' => "login"
                );
 
                $this->session->set_userdata($data_session);
                if($cek->email == 'hafikamon@gmail.com'){
                    redirect(base_url("index.php/inputMenuC"));
                }else{
                redirect(base_url("index.php/home"));
                 }   
            }else{
                echo "Username dan password salah !";
                redirect(base_url("index.php/login"));
            }
    }
    
    public function logout(){
       //10.lengkapi ini
        $this->db->delete('orderr', array('idTransaksi' => 1));
        $this->session->sess_destroy();
        redirect('Login/index');
    }
}