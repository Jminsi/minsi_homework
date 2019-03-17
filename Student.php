<?php

class Student extends Person
{
    private $selectedCourses = array();
    private $greditPoints;


    function __construct($firstName, $lastName, $yearOfBirth, $selectedCourses, $greditPoints)
    {
        parent::__construct($firstName, $lastName, $yearOfBirth);
        $this->selectedCourses = $selectedCourses;
        $this->greditPoints    = $greditPoints;
    }


    public function setSelectedCourses($value)
    {
        $this->selectedCourses = $value;
    }

    public function getSelectedCourses()
    {
        return $this->selectedCourses;
    }

    public function setGreditPoints($value)
    {
        $this->greditPoints = $value;
    }

    public function getGreditPoints()
    {
        return $this->greditPoints;
    }

    public function printProperties()
    {
        parent::printProperties();
        echo '<b>Selected courses:</b> ';
        foreach($this->selectedCourses as $course)
        {
            echo $course . ', ';
        }
        echo '<br>';
        echo '<b>Gredit points:</b> '    . $this->getGreditPoints()    . '<br>';
    }
}

?>
