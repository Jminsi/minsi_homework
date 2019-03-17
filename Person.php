<?php

abstract class Person
{
    private $firstName;
    private $lastName;
    private $yearOfBirth;


    function __construct($firstName, $lastName, $yearOfBirth)
    {
        $this->firstName   = $firstName;
        $this->lastName    = $lastName;
        $this->yearOfBirth = $yearOfBirth;
    }


    public function setFirstName($value)
    {
        $this->firstName = $value;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setLastName($value)
    {
        $this->lastName = $value;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setYearOfBirth($value)
    {
        $this->yearOfBirth = $value;
    }

    public function getYearOfBirth()
    {
        return $this->yearOfBirth;
    }

    public function getAge()
    {
        return 2019 - $this->yearOfBirth;
    }

    public function printProperties()
    {
        echo '<b>First name:</b> '    . $this->getFirstName()   . '<br>';
        echo '<b>Last name:</b> '     . $this->getLastName()    . '<br>';
        echo '<b>Year of birth:</b> ' . $this->getYearOfBirth() . '<br>';
        echo '<b>Age:</b> '           . $this->getAge()         . '<br>';
    }

}

?>
