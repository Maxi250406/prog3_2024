<?php
include("database.class.php")
class Student{

    private $idStudents= null;
    private $surname= null;
    private $name = null;
    private $birthdate= null;
    private $phone= null;
    private $adress= null;
    private $email= null;
    private $user= null;
    private $password= null;
    private $school= null;
    
    public function__construct ($dni, $surname, $name, $birthdate, $phone, $adress,$email, $school){
      $this->dni=$dni;
      $this->surname=$surname;
      $this->name=$name;
      $this->birthdate=$birthdate;
      $this->phone=$phone;
      $this->adress=$adress;
      $this->email=$email;
      $this->school=$school;



    }

    public function addStudent () {
      //crear consulta
      $sql="DELETE FROM students WHERE idStudent=".$this->idStudent;
        $this->conexion=new Database ();
        $result= $this-> conexion->query ($sql); 
        $this-> conexion->close ();

        return $result;


  }

    public function editStudent () {
      $sql="UPDATE students SET dni=".$this->dni.", surname='".$this->surname."', name='".$this->name"', birthdate='".$this->bithdate"', telephone='".$this->telephones"', adress='".$this->adress"', email='".$this->email"', password='".$this->pasword"', school='".$this->school"')
     WHERE idstudent=".$this->idstudent;

      $this->conexion=new Database ();
      $result= $this-> conexion->query ($sql); 
      $this-> conexion->close ();

      return $result;

      
    }

    public function deleteStudent () {
      $sql="INSERT INTO students (dni, surname, name, birthdate, telephone, adress, email, user, password, school) VALUES
      (".$this->dni.",'".$this->surname."','".$this->name"','".$this->bithdate"','".$this->telephones"','".$this->adress"','".$this->email"','".$this->pasword"','".$this->school"')";
       $this->conexion=new Database ();
       $result= $this-> conexion->query ($sql); 
       $this-> conexion->close ();
    }
    public function getStudent () {
      $sql="SELECT * FROM sdtudents WHERE idStudent=".$this->idStudent,"";
      (".$this->dni.",'".$this->surname."','".$this->name"','".$this->bithdate"','".$this->telephones"','".$this->adress"','".$this->email"','".$this->pasword"','".$this->school"');
      
      $this->conexion= new Database ();
       $result= $this-> conexion->query ($sql); 
       $this-> conexion->close ();
       if ($result){
        if($row=$result->fetch_assoc ()){
          $this->$dni=$row["dni"];
          $this-> $name=$row["name"];
          $this->$birthdate=$row["birthdate"];
          $this->$phone=$row["phone"];
          $this->$adress=$row["adress"];
          $this->$email=$row["email"];
          $this->$password=$row["pasword"];
          $this->$school=$row["school"];
          return true;
        }

       }
    }

    public function getALLSStudent () {
      
    }

    //Getter y Setter
    public function  getIdStudent (){
      return $this->idStudent;
    }
public function SetIdStudent($Idstudent){
  $this->idStudent=$idStudent;
}
 public function getDni(){
    return $this->dni;
 }
 public function setDni(){
  return $this->dni=$dni;
 }
public function getName(){
  return $this->name;
}
public function setName(){
  return $this=$name;
  }

public function getBirthday(){
 return $this->birthday;
}

public function setBirthday(){
return $this=$birthday;
}

public function getPhone(){
return $this->Phone;
}
public function setphone(){
 return $this=$phone;
} 
public function getAdress(){
 return $this->name;
 }
  public function setAdress(){
 return $this=$name;
 }
        
public function getEmail(){
return $this->Email;

}
 public function setEmail(){
return $this=$Email;
}
            
public function getPasword(){
   return $this->Pawsord;
}
   public function setPasword(){
  return $this=$Pasword;
}
                
  public function getSchool(){
  return $this->School;
}
                
  public function setSchool(){
  return $this=$School;
}
                    
?>