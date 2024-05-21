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
      $sql="INSERT INTO students (dni, surname, name, birthdate, telephone, adress, email, user, password, school) VALUES
       (".$this->dni.",'".$this->surname."','".$this->name"','".$this->bithdate"','".$this->telephones"','".$this->adress"','".$this->email"','".$this->pasword"','".$this->school"');
        $this->conexion=new Database ();
        $result= $this-> conexion->query ($sql); 
        $this-> conexion->close ();

        return $result;


  }

    public function editteStudent () {
      
    }

    public function deleteStudent () {
      
    }
    public function getStudent () {
      
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

  }
?>