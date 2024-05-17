<?php
class Config
{
        private $HOSTNAME = "localhost";
        private $USERNAME = "root";
        private $PASSWORD = "";
        private $DB_NAME = "exam";

        public $con = '';
        public $student = "student";

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


        public function deleteSTUD($id){

          $query = "DELETE FROM $student WHERE id=$id;";
          $res = mysqli_query($this->con,$query);
          return $res;

        }

        public function fetchSinlgeData($id){

          $query="SELECT FROM $student WHERE id='$id';";

          $res =  mysqli_query($this->con,$query);

          $result = mysqli_fetch_assoc($res);

          return 

        }


}
?>