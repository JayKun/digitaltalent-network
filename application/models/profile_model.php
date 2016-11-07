<?php

class Profile_model extends CI_Model
{
    function __construct() {
        parent::__construct();
       
    }
    
    function search($keyword, $property)
    {
        $this->db->like($property,$keyword); 
        $query = $this->db->get('profiles');
        return $query->result(); 
    }
}
