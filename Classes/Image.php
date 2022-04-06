<?php

use LDAP\Result;

class Image{

    private $location;
    

    function __construct($data)
    {
        $this->db = new DataBase("comparoperator");
        $this->location = $data;
    }

    function getImage(){
        $img=$this->db->getPDO()->prepare('SELECT img FROM image WHERE location = ? ');
        $img->execute([$this->location]);
        $result=$img->fetch();
        return $result;
    }


}