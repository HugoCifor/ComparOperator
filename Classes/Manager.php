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
    

    function getTOFromName($names)
    {
        $result = [];
        $req=$this->db->getPDO()->prepare('SELECT tour_operator_id FROM destination WHERE location = ? ' );
        $req -> execute([$names]);
        $operatorId = $req->fetchAll();
        // return $operatorId;

        foreach ($operatorId as $key => $value) {
            $req1=$this->db->getPDO()->prepare('SELECT * FROM tour_operator WHERE id = ?' );
            $req1 -> execute([$value[0]]);
            $name = $req1->fetch();
            array_push($result,$name);
        }
        return $result;
        

    }

    function getTOInfoByMethod($name,$methode){
        switch ($methode) {
            case 'dest':
                $result = [];
                $req=$this->db->getPDO()->prepare('SELECT tour_operator_id FROM destination WHERE location = ? ' );
                $req -> execute([$name]);
                $operatorId = $req->fetchAll();
                // return $operatorId;

                foreach ($operatorId as $key => $value) {
                    $req1=$this->db->getPDO()->prepare('SELECT * FROM tour_operator WHERE id = ?' );
                    $req1 -> execute([$value[0]]);
                    $name = $req1->fetch();
                    array_push($result,$name);
                }
                return $result;
             break;

            case 'TO':
                $req=$this->db->getPDO()->prepare('SELECT * FROM tour_operator WHERE name = ? ' );
                $req -> execute([$name]);
                $result=$req->fetch();
                return $result;
            break;
            default:
                # code...
                break;
        }
    }

    function getTOName($names)
    {
        $TO=$this->getTOInfoByMethod($names,'dest');
        $result = [];
        foreach ($TO as $key => $value) {
            array_push($result,$value['name']);
        }
        return $result;
    }

    function prepDataForTO($names)
    {
  
        $TO=$this->getTOInfoByMethod($names,'TO');
        $value=array(
            "id"=>$TO['id'],
            "name"=>$TO['name'],
            "link"=>$TO['link'],
            "grade_count"=>$TO['grade_count'],
            "grade_total"=>$TO['grade_total'],
            "is_premium"=>$TO['is_premium'],
        );
        return $value;

     
    }



}
