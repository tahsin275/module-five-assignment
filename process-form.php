<?php

class Person
{
    private $name;
    private $email;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Create a new instance of the Person class
    $person = new Person();

    // Set the name and email properties using the setName() and setEmail() methods
    $person->setName($name);
    $person->setEmail($email);

    // Display the name and email properties using the getName() and getEmail() methods
    echo "Name: " . $person->getName() . "<br>";
    echo "Email: " . $person->getEmail();
}
