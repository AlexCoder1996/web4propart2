<?php

class PeopleCollection {

  private $employee = [];

  public function addEmployee($employee) {
    $this->employee [] = [
      'name' => $employee->getName(),
      'surname' => $employee->getSurname(),
      'email' => $employee->getEmail()
    ];
  }

  public function printEmployee() {
    echo '<pre>';
    print_r($this->employee);
    echo '</pre>';
  }

  public function getPeopleCollection() {
    return $this->employee;
  }

}




