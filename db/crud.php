<?php
    //private database object
    class crud{
        private $db;

        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;   
        }

        public function insertAttendees($fname, $lname, $dob, $email, $contact, $specialty){
            try {
                //define sql statement ot be executed./in line with the database name
                $sql = "INSERT INTO attendee (firstname,lastname,dateofbirth,emailaddress,contactnumber,specialty_id) 
                        VALUES (:fname,:lname,:dob,:email,:contact,:specialty)";
                //prepare the sql statement for execution

                $stmt = $this->db->prepare($sql);
                //bind all paceholders to the actual values

                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':specialty',$specialty);
                
                // execute statement
                $stmt->execute();
                return true;

            } catch (PDOExeception $e) {
                echo $e->getMessage();
                return false;
                
            }


        }

        public function getAttendees(){
            $sql = "SELECT * FROM `attendee` a inner join specialties s on a.specialty_id = s.specialty_id";
            $result = $this->db->query($sql);
            return $result;
        }

        public function getAttendeeDetails($id){
            $sql = "SELECT * from 'attendee' a inner join specialties s on a.specialty_id = s.specialty_id where attendee_id = :id";
            $stmt = $this->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;

        }

        public function getSpecialties(){
            $sql = "SELECT * FROM `specialties`"; 
            $result = $this->db->query($sql);
            return $result;
        }
    }



?>