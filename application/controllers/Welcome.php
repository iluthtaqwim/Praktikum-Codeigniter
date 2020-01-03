<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
     function __construct()
    {
        parent::__construct();
        $this->load->model('Buku');
        $this->load->helper(array('form', 'url'));
    } 

	public function index()
	{
		$this->load->model('Buku');

		$test = array(
            'buku'=>$this->Buku->get_buku(),
            'kategori'=>$this->Buku->get_all_kategori()->result()
        );
		$this->load->view('buku_view', $test);
	}
    
    function get_all_kategori(){
        $kategori= $this->Buku->get_all_kategori();
        
    }

	function add()
    {   
       
        $this->load->helper('form');
        $this->load->library('form_validation');
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if(isset($_POST) && count($_POST) > 0)     
        {   
            if(!$this->upload->do_upload('image')){
                $photo="";
            }else{
                $photo=$this->upload->file_name;
            }
            $params = array(
                'judul' => $this->input->post('title'),
				'pengarang' => $this->input->post('authors'),
                'th_terbit' => $this->input->post('th_terbit'),
                'id_kategori' => $this->input->post('cats'),
                'image' => $photo,
            );
            $this->Buku->add_buku($params);
            redirect("");
        }  else
        {
            
            $this->load->view('add');
        }
       
    }
  
	
	public function update($id){

        $data['edits'] = $this->Buku->get_buku_by_id($id);

        $this->load->helper('form');
        $this->load->library('form_validation');
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if(isset($_POST) && count($_POST) > 0)     
        {   
            if(!$this->upload->do_upload('image')){
                $photo="";
            }else{
                $photo=$this->upload->file_name;
            }
            $params = array(
                'judul' => $this->input->post('title'),
				'pengarang' => $this->input->post('authors'),
                'th_terbit' => $this->input->post('th_terbit'),
                'id_kategori' => $this->input->post('cats'),
                'image' => $photo,
            );
        $this->Buku->edit_buku($id,$params);
        redirect('');
        }else{
            $this->load->view('edit');
        }
    }

	
	public function del($id){
        $buku = $this->Buku->get_buku_by_id($id);
        
        if(isset($buku['id'])){
            $this->Buku->delete($id);
            redirect('');
        }else{
           echo('ada yang salah');
        }
	}
}
