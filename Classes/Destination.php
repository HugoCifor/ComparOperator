<?php

class Destination
{
    private $id;
    private $location;
    private $price;
    private $tourOperatorId;
    

    function __construct($data)
    {
        $this->db = new DataBase("comparoperator");

        // $this->hydrate($data);
    }

    // private function hydrate($data)
    // {
    //     $this->id = $data['id'] ?? null;
    //     $this->location = $data['location'] ;
    //     $this->price = $data['price'];
    //     $this->tourOperatorId = $data['tour_operator_id'];
    // }

    // public function toSql() {
    //     return array(
    //         'id' => $this->id,
    //         'location' => $this->location,
    //         'price' => $this->price,
    //         'tour_operator_id' => $this->tourOperatorId
            
    //     );
    // }

    function getId()
    {
        return $this->id;
    }


    function getLocation()
    {
        return $this->location;
    }


    function getPrice()
    {
        return $this->price;

    }


    function getTourOperatorId()
    {
        return $this->tourOperatorId;

    }

    function getAllFromDestination()
    {
        $req=$this->db->getPDO()->prepare('SELECT * FROM destination');
        $req->execute([]);
        $AllDest=$req->fetchAll();
        return $AllDest;
    }

    function getDestinationNames()
    {
        $allNames=[];
        $AllDest= $this->getAllFromDestination();
        foreach ($AllDest as $key => $value) {
            foreach ($value as $names => $nom) {
               if ($names==='location')
                array_push($allNames,$nom);
            }
            
            
        }
        return $allNames;
    }
    
}

