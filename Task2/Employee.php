<?php 

class Employee {

  private $name;
  private $surname;
  private $email;

  public function __construct($name, $surname, $email) {
    $this->name = $name;
    $this->surname = $surname;
    $this->email = $email;
  }

  public function getName() {
    return $this->name;
  } 

  public function getSurname() {
    return $this->surname;
  }

  public function getEmail() {
    return $this->email;
  }

}