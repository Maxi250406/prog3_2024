<?php
include("Model/student.class.php");

$id = $_REQUEST["idStudent"];

$student = new Student();
$student->setStudent($id);
$student->getStudent();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la página</title>
</head>
<body>
  <form name="editStudent" method="POST" action="">
    <input type="hidden" name="operation" value="edit"/>
    <label>DNI:</label> <input type="text" name="dni" value="<?=$student->getDNI();?>"><br>
    <label>Nombre:</label> <input type="text" name="name" value="<?=$student->getName();?>"><br>
    <label>Apellido:</label> <input type="text" name="surname" value="<?=$student->getSurname();?>"><br>
    <label>Direccion:</label> <input type="text" name="adress" value="<?=$student->getAdress();?>"><br>
    <label>Telefono:</label> <input type="text" name="phone" value="<?=$student->getPhone();?>"><br>
    <label>E-mail:</label> <input type="text" name="email" value="<?=$student->getEmail();?>"><br>
    <label>Fecha de nacimiento:</label> <input type="text" name="birthday" value="<?=$student->getBirthday();?>"><br>
    <button type="submit" name="aceptar">aceptar</button>
    <button type="reset" name="Cancelar">cancelar</button>
  </form>
</body>
</html>
