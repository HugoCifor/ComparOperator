<?php

class TourOperator
{

    private $id;
    private $name;
    private $link;
    private $gradeCount;
    private $gradeTotal;
    private $isPremium;


    function __construct($data)
    {
        $this->db = new DataBase("comparoperator");
    }

}

function getId(){
    return $id;
}
// getName();
// getLink();
// getGradeCount();
// getGradeTotal();
// getGrade();
// getPremium();