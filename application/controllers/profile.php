<?php
class Profile Extends CI_Controller
{
    function __construct() {
        parent::__construct();
         $this->load->model('profile_model'); 
    }
    
    function index($name)
    {   
        $results =  $this->profile_model->search($name, "name"); 
        $results= $results[0]; 
        $data = array( 
            'name' => $results->name, 
            'year' => $results->year, 
            'skills' => $results->skills,
            'img_url' => $results->img_url,
            'resume_url'=>$results->resume_url 
            ); 
        $this->load->view("templates/header");  
        $this->load->view('templates/profile', $data); 
        $this->load->view('templates/footer'); 
    }
    
    function skills()
    {
        $this->load->view('header'); 
        $this->load->view('default_skills'); 
        $this->load->view('footer'); 
    }
    
    function year()
    {
        $this->load->view('header'); 
        $this->load->view('default_year'); 
        $this->load->view('footer'); 
    }
}

?>