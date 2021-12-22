<?php

Class Contact extends Controller {

    function index()
    {
        $data['page_title'] = "Contact Us";
        
        $this->view("kebab_template/contact" ,$data);
    }

    
}