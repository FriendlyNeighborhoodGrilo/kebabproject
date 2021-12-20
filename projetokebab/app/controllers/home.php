<?php

Class Home extends Controller{
    function index()
    {
        
        $data['page_title'] = "Home - King Kebab";
        
        $this->view("kebab_template/index" ,$data);
    }

    
}