<?php
class Search Extends CI_Controller
{
    function __construct() {
        parent::__construct();
         $this->load->model('profile_model'); 
    }
    
    function search_keyword()
    {
        $keyword = $this->input->post('keyword'); 
        $data['results']=  $this->profile_model->search($keyword, "skills"); 
        if($data['results'])
        {
        $this->load->view('templates/header');   
        $this->load->view('pages/result_view', $data); 
        $this->load->view('templates/footer');
        //redirect("profile/index/".$data["name"]); 
        }
        else 
        {
            $this->load->view('templates/header');
            $this->load->view('pages/notfound');
            $this->load->view('templates/footer');
        }
        
    }
}