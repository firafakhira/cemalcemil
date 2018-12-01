<!-- Haifa Salsabila 1301160170 -->
<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class inputMenu_m extends CI_Model
{
	public function get_data()
	{
		$query = $this->db->get('malmil');
		return $query->result();
	}

	public function save_data($data)
	{
		$param = array(
					"namaFood"=>$data['namaFood'],
					"harga"=>$data['harga'],
                    "jenis"=>$data['jenis'],
		);
		$insert = $this->db->insert('malmil', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
	}

	 public function edit_data($data){
	    $table = 'malmil';
        $param = array(
					"namaFood"=>$data['namaFood'],
					"harga"=>$data['harga'],
                    "jenis"=>$data['jenis'],
		);
        $this->db->where('namaFood', $data['namaFood']);
        $update = $this->db->update($table, $param);//5.lengkapi ini dengan memanggil fungsi UPDATE 
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }

    }


    public function delete_data($namaFood){
        $table = 'malmil';
        $this->db->where('namaFood', $namaFood);
        $delete = $this->db->delete($table);//6.lengkapi ini dengan memanggil fungsi DELETE

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }

    }
}