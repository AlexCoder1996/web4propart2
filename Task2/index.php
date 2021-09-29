<?php 

require_once 'Employee.php';
require_once 'PeopleCollection.php';
require_once 'PeopleExport.php';
require_once 'CsvPeopleExport.php';
require_once 'JsonPeopleExport.php';


$employee1 = new Employee('Dima', 'Alekseiev', 'test@mail.co');
$employee2 = new Employee('Ivan', 'Petrov', 'test2@mail.co');
$employee3 = new Employee('Misha', 'Ivanov', 'test3@mail.co');
$employee4 = new Employee('Kate', 'McCalvi', 'test4@mail.co');

$newCollection = new PeopleCollection();
$newCollection->addEmployee($employee1);
$newCollection->addEmployee($employee2);
$newCollection->addEmployee($employee3);
$newCollection->addEmployee($employee4);
$newCollection->printEmployee();

// Export to json
JsonPeopleExport::export($newCollection->getPeopleCollection(), 'PeopleExport');

// Export to csv
CsvPeopleExport::export($newCollection->getPeopleCollection(), 'PeopleExport');