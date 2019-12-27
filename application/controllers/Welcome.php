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
		$buku = $this->Buku->get_buku();
		$output['buku'] = $buku;
		
		$this->load->view('buku_view', $output);
	}
	
	function add()
    {   
       
        $this->load->helper('form');
        $this->load->library('form_validation');
        $config['upload_path'] = './images';
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
                'image' => $photo,
            );
            $this->Buku->add_buku($params);
            redirect("");
        }  else
        {
            
            $this->load->view('add');
        }
       
    }
  
	
	public function edit($id){
		echo 'edit buku id='.$id;
	}
	
	public function del($id){
		echo 'delete buku id='.$id;
	}
}
