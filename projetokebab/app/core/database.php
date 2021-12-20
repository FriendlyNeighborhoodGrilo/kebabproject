<?php

Class Database
{
    public function db_connect()
    {

        try{

            $string = DB_TYPE . ":host=".DB_HOST.";dbname=".DB_NAME.";";
            return $DB = new PDO($string,DB_USER,DB_PASS);
           
        }catch(PDOExecption $e){

            die($e->getMessage());
        }
    }

    public function read($query,$data = [])
    {

        $DB = $this->db_connect();
        
        $stm = $DB->prepare($query);
        if(count($data) == 0)
        {
            $stm = $DB->query($query);
            $check = 0;
            if($stm){
                $check = 1;
            }
        }else{
            
            $check = $stm->execute($data);
        }
        if($check)
        {
            $data = $stm->fetchAll(PDO::FETCH_OBJ);
            show($DB);}
        else {
            return false;
        }
    }

    public function write()
    {
        $DB = $this->db_connect();
        $stm = $DB->prepare($query);
        if(count($data) == 0)
        {
            $stm = $DB->query($query);
            $check = 0;
            if($stm){
                $check = 1;
            }
        }else{
            
            $check = $stm->execute($data);
        }
        if($check)
        {
            return true;
        }else {
            return false;
        }
    }
}