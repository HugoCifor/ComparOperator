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
        $this->gradeCount = $data['grade_count'] ?? null;
        $this->gradeTotal = $data['grade_total'] ?? null ;
        $this->isPremium = $data['is_premium'];

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


    
        if ($this->gradeCount>0) {
            $grade = $this->gradeTotal / $this->gradeCount;
            return $grade;
        }else{
            return 0;
        }

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

    function updatePremium()
    {
        $upd = $this->db->getPDO()->prepare('UPDATE tour_operator SET is_premium = ? WHERE id ='.$this->id);
        $upd->execute([$this->isPremium]);
    }



}


