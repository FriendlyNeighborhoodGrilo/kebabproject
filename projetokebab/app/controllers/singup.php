<?php

Class Signup extends Controller{
    function index()
    {
        
        $data['page_title'] = "Singup";
        
        $this->view("kebab_template/singup" ,$data);
    }

    
}