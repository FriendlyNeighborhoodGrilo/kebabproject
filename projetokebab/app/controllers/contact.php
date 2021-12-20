<?php

Class Contact extends Controller {

    function index()
    {
        $data['page_title'] = "Contact Us - King Kebab";
        
        $this->view("kebab_template/contact" ,$data);
    }

    
}