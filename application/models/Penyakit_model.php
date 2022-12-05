<?php

class Penyakit_model extends CI_Model{
    public function getAllPenyakit(){
        return $this->db
        ->get('penyakit')
        ->result_array();
    }
    
    public function addPenyakit($data){
        $this->db->insert("penyakit",$data);
    }

    public function countPenyakit(){
        return $this->db->count_all_results("penyakit");
    }
    
    public function getPenyakitById($id){
        return $this->db->get_where('penyakit',['id'=>$id])->row_array();
    }

    public function updatePenyakit($id,$data){
        $this->db->where('id', $id)
        ->update('penyakit', $data);
    }

    public function deletePenyakit($id){
        return $this->db->delete('penyakit', ['id' => $id]);
    }
}