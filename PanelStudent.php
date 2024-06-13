<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Student</title>
</head>
<body>
    <h1>Panel de Estudiantes</h1>
    <table>
        <thead>
                <tr>

                    <th> ID estudainte</th>
                    <th> Apellido</th>
                    <th>Nmbre</th>
                    <th>DNI</th>
                    <th>Fecha Nac.</th>
                    <th>acciones</th>
                </tr>
        </thead>
        <tbody>

            <?php
            include ("model/student.class.php");
            $student= new Student ();
            $allStudent=$student->getAllstudent():
            if(){($allStudent){
                foreach($allStudent as $data) {
                    print "<tr>";
                    print "<td>".$data["idStudent"]."</td>;
                    print "<td>".$data["surname"]."</td>;
                    print "<td>".$data["name"]."</td>;
                    print "<td>".$data["dni"]."</td>;
                    print "<td>".$data["birthday"]."</td>;
                    print "<td>".$data["idStudent"]."</td>;
                    print "</tr>";
                }
                
            }


            }else{
                print "no existen estudiantes cargados"
            }
            ?>

        </tbody>
    </table>
</body>
</html>