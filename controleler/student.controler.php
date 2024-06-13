<?php
include("model/student.class.php");

$operacion = $_REQUEST["operacion"];

$student = new Student(); // Creamos el objeto $student de tipo Student

if ($operacion == "add") {
    $student->setDni($_REQUEST["dni"]);
    $student->setName($_REQUEST["name"]);
    $student->setBirthday($_REQUEST["birthday"]);
    $student->setPhone($_REQUEST["phone"]);
    $student->setSurname($_REQUEST["surname"]);
    $student->setEmail($_REQUEST["email"]); 
    $student->setAdress($_REQUEST["adress"]); 
    $student->setSchool($_REQUEST["school"]); 
    $student->addStudent();

} else if ($operacion == "update") { 
    $student->setIdStudent($_REQUEST["idStudent"]);
    $student->setName($_REQUEST["name"]);
    $student->setBirthday($_REQUEST["birthday"]);
    $student->setPhone($_REQUEST["phone"]);
    $student->setSurname($_REQUEST["surname"]);
    $student->setEmail($_REQUEST["email"]); 
    $student->setAdress($_REQUEST["adress"]); 
    $student->setSchool($_REQUEST["school"]); 
    $student->setPassword($_REQUEST["password"]);
    $student->editStudent();

} else if ($operacion == "delete") {
    $idStudent = $_REQUEST["idStudent"];
    $student->deleteStudent($idStudent);
}
?>
