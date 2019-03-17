<?php

class Staff extends Person
{
    private $vacancy;


    function __construct($firstName, $lastName, $yearOfBirth, $vacancy)
    {
        parent::__construct($firstName, $lastName, $yearOfBirth);
        $this->vacancy     = $vacancy;
    }


    public function setVacancy($value)
    {
        $this->vacancy = $value;
    }

    public function getVacancy()
    {
        return $this->vacancy;
    }

    public function printProperties()
    {
        parent::printProperties();
        echo '<b>Vacancy:</b> ' . $this->getVacancy() . '<br>';
    }

}

?>
