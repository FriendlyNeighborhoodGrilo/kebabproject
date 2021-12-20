<?php

Class About extends Controller {

    function index()
    {
        $data['page_title'] = "About Us - King Kebab";
        
        $this->view("kebab_template/about-us" ,$data);
    }

    
}