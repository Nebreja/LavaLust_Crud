<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Create_model extends Model {
	public function read(){
        return $this->db->table('hpn_users')->get_all();
    }
    
    public function create($hpn_last_name, $hpn_first_name, $hpn_email, $hpn_gender, $hpn_address){
        $data = array(
            'hpn_last_name' => $hpn_last_name,
            'hpn_first_name' => $hpn_first_name,
            'hpn_email' => $hpn_email,
            'hpn_gender' => $hpn_gender,
            'hpn_address' => $hpn_address
         ); 
        return $this->db->table('hpn_users')->insert($data);
    }
    public function get_one($id){
       return $this->db->table('hpn_users')->where('id', $id)->get();
    }
    public function update($hpn_last_name, $hpn_first_name, $hpn_email, $hpn_gender, $hpn_address,$id){
        $data = array(
            'hpn_last_name' => $hpn_last_name,
            'hpn_first_name' => $hpn_first_name,
            'hpn_email' => $hpn_email,
            'hpn_gender' => $hpn_gender,
            'hpn_address' => $hpn_address
         ); 
        return $this->db->table('hpn_users')->where('id', $id)->update($data);
    }
    public function delete($id){
        return $this->db->table('hpn_users')->where('id', $id)->delete();
    }
}
?>
