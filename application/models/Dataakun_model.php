<!-- Haifa Salsabila 1301160170 -->
<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class dataakun_model extends CI_Model
{
	public function get_data()
	{
		$query = $this->db->get('akun');
		return $query->result();
	}

	public function save_data($data)
	{
		$param = array(
					"email"=>$data['email'],
					"nama"=>$data['nama'],
                    "ponsel"=>$data['ponsel'],
		);
		$insert = $this->db->insert('akun', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
	}

	 public function edit_data($data){
	    $table = 'akun';
        $param = array(
					"email"=>$data['email'],
                    "nama"=>$data['nama'],
                    "ponsel"=>$data['ponsel'],
		);
        $this->db->where('email', $data['email']);
        $update = $this->db->update($table, $param);//5.lengkapi ini dengan memanggil fungsi UPDATE 
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }

    }


    public function delete_data($email){
        $table = 'akun';
        $this->db->where('email', $email);
        $delete = $this->db->delete($table);//6.lengkapi ini dengan memanggil fungsi DELETE

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }

    }
}