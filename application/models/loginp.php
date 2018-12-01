<!-- Karina Aulia Dini 1301164342 -->
<?php

class loginp extends CI_Model
{
    public function get_data()
    {
        // $param = array(
        //     "Nama"=>$data['Nama'],
        //     "Ponsel"=>$data['Ponsel'],
        //     "Email"=>$data['Email'],
        //     "Password"=>$data['Password']
        // );
        // $insert = $this->db->insert('akun', $param);
        // var_dump($insert);
        // if ($insert){
        //     return TRUE;
        // }else{
        //     return FALSE;
        // }
        $this->db->select('*');
        $this->db->from('akun');
        $query = $this->db->get();
        return $query->result();
    }

    public function login_akun($data){
        $this->db->where('email',$data['email']);
        $this->db->where('password',$data['password']);

        $result = $this->db->get('akun');
        if($result->num_rows()==1){
            return $result->row(0);
        }else{
            return false;
        }
    }
}