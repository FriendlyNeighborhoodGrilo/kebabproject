<?php

Class Upload extends Controller{
    function index()
    {
        
        $data['page_title'] = "Upload";
        
        $this->view("kebab_template/upload" ,$data);
    }
    
    function image()
    {
        
        $data['page_title'] = "Upload";
        
        $this->view("kebab_template/upload" ,$data);
    }
    
}