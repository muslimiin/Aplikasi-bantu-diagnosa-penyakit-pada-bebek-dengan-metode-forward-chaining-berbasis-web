<?php

class Gejala_model extends CI_Model{

    public function getAllGejala(){
        return $this->db
        ->get('gejala')
        ->result_array();
    }
    
    public function addGejala($data){
        $this->db->insert("gejala",$data);
    }

    public function countGejala(){
        return $this->db->count_all_results("gejala");
    }
    
    public function getGejalaById($id){
        return $this->db->get_where('gejala',['id'=>$id])->row_array();
    }

    public function updateGejala($id,$data){
        $this->db->where('id', $id)
        ->update('gejala', $data);
    }

    public function deleteGejala($id){
        return $this->db->delete('gejala', ['id' => $id]);
    }

    public function addUser($data){
        $this->db->insert("user",$data);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
    }

    public function addGejalaUser($data){
        $this->db->insert("gejala_user",$data);
    }
}