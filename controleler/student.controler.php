<?php
include("model/student.class.php");

$operacion = $_REQUEST["operacion"];

$student = new Student(); // creamos el objeto $student de tipo Student

if ($operacion == "add") {
    $student->setDni($_REQUEST["dni"]);
    $student->setName($_REQUEST["name"]);
    $student->setBirthday($_REQUEST["birthday"]);
    $student->setPhone($_REQUEST["phone"]);
    $student->setSurname($_REQUEST["surname"]);
    $student->setEmail($_REQUEST["email"]); // "Email" corregido a "email"
    $student->setAdress($_REQUEST["adress"]); // "Adress" corregido a "adress"
    $student->setSchool($_REQUEST["school"]); // "School" corregido a "school"
    $student->addStudent();
} else if ($operacion == "update") { // "udate" corregido a "update"
    // Aquí iría la lógica para actualizar un estudiante
} else if ($operacion == "delete") {
    // Aquí iría la lógica para eliminar un estudiante
}
?>
