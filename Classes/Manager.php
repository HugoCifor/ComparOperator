<?php

class Manager
{
    private $bdd;

    function __construct()
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
               if ($names==='location' && !in_array($name,$allNames))
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
    

    function getTOFromName($names){
        $result = [];
        $req=$this->db->getPDO()->prepare('SELECT tour_operator_id FROM destination WHERE location = ? ' );
        $req -> execute([$names]);
        $operatorId = $req->fetchAll();

        foreach ($operatorId as $key => $value) {
            var_dump($value);
            $req1=$this->db->getPDO()->prepare('SELECT * FROM tour_operator WHERE id = ?' );
            $req1 -> execute([$value[0]]);
            $name = $req1->fetch();
            array_push($result,$name);
        }
        return $result;
        

    }

    function getTOName($names){
        $TO=$this->getTOFromName($names);
        $result = [];
        foreach ($TO as $key => $value) {
            array_push($result,$value['name']);
        }
        return $result;
    }



}
