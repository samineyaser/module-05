<?php
class Person {
    private $name;
    private $email;

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}


// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Retrieve the name and email from the form data
  $name = $_POST['name'];
  $email = $_POST['email'];

  // Create a new Person object
  $person = new Person();

  // Set the name and email properties
  $person->setName($name);
  $person->setEmail($email);

  // Display the properties on the webpage
  echo "Name: " . $person->getName() . "<br>";
  echo "Email: " . $person->getEmail() . "<br>";
}
