<?php

class User_model extends CI_Model{
    public function getAllUser(){
        return $this->db        
        ->get('user')
        ->result_array();
    }
    
    public function addUser($data){
        $this->db->insert("user",$data);
    }

    public function countUser(){
        return $this->db->count_all_results("user");
    }
    
    public function getUserById($id){
        return $this->db->get_where('user',['id'=>$id])->row_array();
    }

    public function updateUser($id,$data){
        $this->db->where('id', $id)
        ->update('user', $data);
    }

    public function deleteUser($id){
        return $this->db->delete('user', ['id' => $id]);
    }
    public function deleteGejalaUser($id){
        return $this->db->delete('gejala_user', ['id_user' => $id]);
    }
    public function getUserPenyakit(){
        $this->db->select('*,user.id as id_user, user.nama as nama, penyakit.nama as nama_penyakit, date_format(tgldiagnosa, "%d - %m - %Y") as tgldiagnosa');
        $this->db->from('user');
        $this->db->join('penyakit', 'user.analisa = penyakit.id');
        $query = $this->db->get()->result_array();
        return $query;
    }
}