<?php

abstract class Destination
{
    private $id;
    private $location;
    private $price;
    private $tourOperatorId;
    

    function __construct($data)
    {
        $this->hydrate($data);
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

    }


    function getLocation()
    {

    }


    function getPrice()
    {

    }

    
    function getTourOperatorId()
    {

    }
    
}

