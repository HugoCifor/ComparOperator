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
        
        return $this-> id = $data ['id'];
    }

    function getId()
    {
        return $this-> id;

    }

    function getName()
    {
        return $this-> name;

    }

    function getLink()
    {
        return $this-> link;

    }

    function getGradeCount()
    {
        return $this-> gradeCount;

    }

    function getGradeTotal()
    {

        return $this-> gradeTotal;

        
        return $this-> gradeTotal;


    }

    function getGrade()
    {

        return $this-> grade;

        $grade = $this->gradeTotal / $this->gradeCount;
        return $grade;



    }

    function getPremium()
    {
        return $this-> isPremium;



    }


}


