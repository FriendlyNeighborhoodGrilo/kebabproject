<?php

Class Home extends Controller{
    function index()
    {
        
        $data['page_title'] = "Home";
        
        $this->view("kebab_template/index" ,$data);
    }

    
}