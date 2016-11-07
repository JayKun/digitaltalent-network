<?php
class Pages extends CI_Controller
{
    public function index($page='home')
    {
        if(!file_exists('application/views/pages/'.$page.'.php'))
        {
            show_404(); 
        }
        
        $data['title']=  ucfirst($page); // capitalize the first letter
        $this->load->helper('url');
        $this->load->view('templates/header', $data); 
        $this->load->view("pages/".$page, $data); 
        $this->load->view('templates/footer', $data);
        

    }
}
?>


