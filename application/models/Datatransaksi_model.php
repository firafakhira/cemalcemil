<!-- Monica Dessy Amanda 1301164452 -->
<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class Datatransaksi_model extends CI_Model
{

    public function get_data()
	{
		$this->db->select('*');
		$this->db->from('transaksii');
		$query = $this->db->get();
		return $query->result();
	}

	// function view_detail_transaksi() {
	// 	$this->db->select('*');
	// 	$this->db->from('transaksi_detail as tsd');
	// 	$this->db->join('transaksi_tampil as tst','tst.idTransaksi = tsd.idTransaksi');
	// 	$this->db->join('driver as dv','dv.idDriver = tsd.idDriver');
	// 	$this->db->join('akun as ac','ac.idAkun = tsd.idAkun');
	// 	$data = $this->db->get();
	// 	return $data->result();
 //    }

	function update_nama_driver($data) {
		// $this->db->select('namaDriver');
		// $this->db->from('Driver');
		// $this->db->where('idDriver',$d);
		// $data = $this->db->get();
		// $update=$this->db->query("UPDATE transaksi_tampil SET namaDriver='$data'");
  //       if ($update){
  //           return TRUE;
  //       }else{
  //           return FALSE;
  //       }
        $param = array(
					"namaDriver"=>$data['namaDriver']
		);
		// $this->db->where('idDriver', $data['iddriver']);
        $update = $this->db->update('driver',$param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
	 }

}

?>