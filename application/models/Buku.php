<?php

class Buku extends CI_Model {
	
	public function get_buku(){
		
		$this->db->join('kategori', 
			'buku.id_kategori = kategori.id_kategori', 
			'left');
		$query = $this->db->get('buku');
		$data = $query->result_array();
		
		return $data;
	}
    
    public function add_buku($param){
        $data = $this->db->insert('buku',$param);
        return $data;
    }

}