<!-- Monica Dessy Amanda 1301164452-->
<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Datadriver_model extends CI_Model
{

    public function get_data()
	{
		$this->db->select('*');
		$this->db->from('driver');
		$query = $this->db->get();
		return $query->result();
	}

	// function update_data_driver() {
	// 	$this->db->select('*');
	// 	$this->db->from('driver_detail as tsd');
	// 	$this->db->join('transaksi as ts','ts.idTransaksi = tsd.idTransaksi');
	// 	$this->db->join('driver as dv','dv.idDriver = tsd.idDriver');
	// 	$this->db->join('akun as ac','ac.idAkun = tsd.idAkun');
	// 	$data = $this->db->get();
	// 	return $data->result();
 // 	   }

// Haifa Salsabila 1301160170
	function update_data_driver($data) {
		// $this->db->where('idDriver', $id);
		// $this->db->update('rating', $rating);
		// $this->db->from('driver');
		// $hasil = $this->db->get();
		// return $hasil->result();

        $param = array(
					"rating"=>$data['rating']
		);
		$this->db->where('idDriver', $data['iddriver']);
        $update = $this->db->update('driver',$param);//5.lengkapi ini dengan memanggil fungsi UPDATE 
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
	 }
}

?>