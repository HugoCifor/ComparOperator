<?php

class Manager
{
    private $bdd;

    function __construct($data)
    {
        $this->db = new DataBase("comparoperator");

    }

    
    function getAllDestination()
    {
        $req=$this->db->getPDO()->prepare('SELECT * FROM destination');
        $req->execute([]);
        $AllDest=$req->fetchAll(); 
        return $AllDest;
    }

    function getDestinationNames()
    {
        $allNames=[];
        $AllDest= $this->getAllDestination();
        foreach ($AllDest as $value) {
            foreach ($value as $names => $name) {
               if ($names==='location')
                array_push($allNames,$name);
            }
            
            
        }
        return $allNames;
    }

    function getOperatorByDestination()
    {

    }


    function createReview()
    {

    }


    function getReviewByOperatorId()
    {

    }



    function getAllOperator()
    {

    }


    function updateOperatorToPremium()
    {

    }


    function createTourOperator()
    {

    }


    function createDestination()
    {

    }


}
