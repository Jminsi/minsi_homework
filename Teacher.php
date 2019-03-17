<?php

class Teacher extends Person
{
    private $teachingSubjects = array();
    private $department;


    function __construct($firstName, $lastName, $yearOfBirth, $teachingSubjects, $department)
    {
        parent::__construct($firstName, $lastName, $yearOfBirth);
        $this->teachingSubjects = $teachingSubjects;
        $this->department       = $department;
    }


    public function setTeachingSubjects($value)
    {
        array_push($this->teachingSubjects, $value);
    }

    public function getTeachingSubjects()
    {
        return $this->teachingSubjects;
    }

    public function setDepartment($value)
    {
        $this->department = $value;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function printProperties()
    {
        parent::printProperties();
        echo '<b>TeachingSubjects:</b> ';
        foreach($this->teachingSubjects as $subject)
        {
            echo $subject . ', ';
        }
        echo '<br>';
        echo '<b>Department:</b> '       . $this->getDepartment()       . '<br>';
    }

}

?>
