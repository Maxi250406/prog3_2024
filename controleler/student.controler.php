<?php
include("model/student.class.php");
$operacion=$_REQUEST["operacion"];

$student=new Student (); // creamos el objeto $student de tipo Student



$operation=$_REQUEST["operation"]


if ($operacion=="add"){
    $student->setDni($_REQUEST["dni"])
    $student->setName($_REQUEST["name"])
    $student->setBirthday($_REQUEST["birthday"])
    $student->setPhone($_REQUEST["phone"])
    $student->setSurname($_REQUEST["surname"])
    $student->setEmail($_REQUEST["Email"])
    $student->setAdress($_REQUEST["Adress"])
    $student->setSchool($_REQUEST["School"])
    $student->addStudent();

}else if($operacion=="udate"){


}else if($operacion=="delete")



?>