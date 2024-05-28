<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="controller /student.controller.php" method="POST" name="formAddstudent">
    <input type="hidden" name="operation" value="add">
<label for="">DNI:</label><input type="text" name="dni"><br>
<label for="">nombre:</label><input type="text" name="nombre"><br>
<label for="">Telefono</label><input type="text" name="telefono"><br>
<label for="">E-mail</label><input type="text" name="E-mail"><br>
<label for="">Contraseña</label><input type="text" name="contraseña"><br>
<label for="">Colegio</label><input type="text" name="colegio"><br>
<button type="submit" name="aceptar">Aceptar</button>
<button type="submit" name="cancelar">cancelar</button>


</form> 
</body>
</html