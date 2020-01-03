<?php

class Buku extends CI_Model {

	function get_buku_by_id($id){
		return $this->db->get_where('buku',array('id'=>$id))->row_array();
	}
	
	public function get_buku(){
		
		$this->db->join('kategori', 
			'buku.id_kategori = kategori.id_kategori', 
			'left');
		$query = $this->db->get('buku');
		$data = $query->result_array();
		
		return $data;
	}

	function get_all_kategori(){
		$query = $this->db->get('kategori');
	
		return $query;
	}
    
    public function add_buku($params){
        $data = $this->db->insert('buku',$params);
        return $data;
	}

	function edit_buku($id,$params){
		$this->db->where('id',$id);
        
        return $this->db->update('buku', $params);
	}
	
	function delete($id){

		return $this->db->delete('buku',array('id'=>$id));
	}

}