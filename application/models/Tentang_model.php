<?php

class Tentang_model extends CI_Model{
    public function getAllTentang(){
        return $this->db
        ->get('saran_keluhan')
        ->result_array();
    }
    
    public function addTentang($data){
        $this->db->insert("saran_keluhan",$data);
    }

    public function countTentang(){
        return $this->db->count_all_results("saran_keluhan");
    }

    public function deleteTentang($id){
        return $this->db->delete('saran_keluhan', ['id' => $id]);
    }


    public function getAllBerita(){
        return $this->db
        ->get('berita')
        ->result_array();
    }
    
    public function addBerita($data){
        $this->db->insert("berita",$data);
    }

    public function updateBerita($id,$data){
        $this->db->where('id', $id)
        ->update('berita', $data);
    }

    public function countBerita(){
        return $this->db->count_all_results("berita");
    }

    public function deleteBerita($id){
        return $this->db->delete('berita', ['id' => $id]);
    }
    
    public function getBeritaById($id){
        return $this->db->get_where('berita', ['id' => $id])->row_array();
    }
}