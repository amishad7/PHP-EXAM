<?php
class Config
{
        private $HOSTNAME = "localhost";
        private $USERNAME = "root";
        private $PASSWORD = "";
        private $DB_NAME = "exam";

        public $con = '';
        public $student = "student";
        public $subjects = "subjects";
        public $teacher = "teachers";

        public function __construct(){

          $this->connectDB();

        }

        public function connectDB()
        {
            $this->con = mysqli_connect($this->HOSTNAME,$this->USERNAME, $this->PASSWORD, $this->DB_NAME);
            return $this->con;
        } 

        public function insertSTUD($name,$age,$class){

          $query=" INSERT INTO $this->student(name,age,class) VALUES('$name',$age,'$class');";

          return mysqli_query($this->con,$query);

        }


        public function getData()
        {
            // $this->connect();
    
            $query = "SELECT * FROM $this->student;";
    
            $res = mysqli_query($this->con, $query);
    
            return $res;
        }
        public function deleteSTUD($id){

          $query = "DELETE FROM $this->student WHERE id='$id';";
          $res = mysqli_query($this->con,$query);
          return $res;

        }

        public function updateData($name,$age,$class,$id)
        {
             
        $fetch = $this->fetchSinlgeData($id);
        $result = mysqli_fetch_assoc($fetch);

        if ($result) {
            $query = "UPDATE $this->student SET name='$name',age=$age,class='$class' WHERE id='$id';";

            return mysqli_query($this->con,$query);
        } else {
            return false;
        }

        }


        public function fetchSinlgeData($id){

          $query= "SELECT * FROM $this->student WHERE id=$id";

          $res = mysqli_query($this->con,$query);

          return $res;

        }

        public function addSUB($name){

          $query="INSERT INTO $this->subjects (sub_name) VALUES('$name');";
        
          return mysqli_query($this->con,$query);
        
        }

        public function addTeach($name, $lastname, $id)
        {
         
            $query = "INSERT INTO $this->teacher (name,lastname,subid) values('$name','$lastname',$id);";
    
    
            $res = mysqli_query($this->con,$query);
    
            return $res;
        }
        
        public function getSubData()
        {
            // $this->connect();
    
            $query = "SELECT * FROM $this->subjects;";
    
            $res = mysqli_query($this->con, $query);
    
            return $res;
        }
     
        public function getTeachData()
        {
            // $this->connect();
    
            $query = "SELECT * FROM $this->teacher;";
    
            $res = mysqli_query($this->con, $query);
    
            return $res;
        }


}
?>