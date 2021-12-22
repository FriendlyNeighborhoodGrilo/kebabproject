<?php

Class About extends Controller {

    function index()
    {
        $data['page_title'] = "About Us";
        
        $this->view("kebab_template/about-us" ,$data);
    }

    
}