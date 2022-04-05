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
        $this->hydrate($data);
    }

    function hydrate($data) {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ;
        $this->link = $data['link'] ;
        $this->gradeCount = $data['grade_count'] ;
        $this->gradeTotal = $data['grade_total'] ;
        $this->isPremium = $data['is_premium'] ;

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

        


    }

    function getGrade()
    {

    

        $grade = $this->gradeTotal / $this->gradeCount;
        return $grade;



    }

    function getPremium()
    {
        return $this->isPremium;
    }

    function AddNewTO()
    {
        $req = $this->db->getPDO()->prepare('INSERT INTO tour_operator (name,link,is_premium) VALUE (?,?,?)');
        $req->execute([
            $this->name,
            $this ->link,
            $this->isPremium
        ]);
    }




}


