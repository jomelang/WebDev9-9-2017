<?php

    class database{

        var $conn;

        function __construct(){

            $this->conn = new mysqli("localhost", "root", "", "registrationForm");

            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error());
            }
            
        }
    }

    class modelUser extends database{
        
        public function registerUser($data){

            $con = $this->conn;
            $sql = "INSERT INTO regtbl (username, password, firstname, middlename, lastname, address, contact_number) VALUES ('{$data['username']}', '{$data['password']}', '{$data['firstname']}', '{$data['middlename']}', '{$data['lastname']}', '{$data['address']}', '{$data['contact_number']}')";
            $result = $con->query($sql);

            if ($result){
                return true;
            }
            else{
                return false;
            }
        }
    }

    $userModel = new modelUser();
    $message = "";

    if (isset($_POST['submit'])){
        if ($_POST['password'] == $_POST['confirm_password']){
            $username = new modelUser();
            $result = $username->registerUser($_POST);
            if ($result){
                $message="Registered Successfully! <br>";
            }
            else{
                $message="Failed! <br>";
            }
        }
    }
?>

<html>
    <head>
        <title>Dashboard</title>
    </head>
    <body>        
    <h1><?=$message;?></h1>
    
    <?php
        if($message != ""){
            echo "Username:" . $_POST['username'] . "<br>";
            echo "Password:" . $_POST['password'] . "<br>";
            echo "Firstname:" . $_POST['firstname'] . "<br>";
            echo "Middlename:" . $_POST['middlename'] . "<br>";
            echo "Lastname:" . $_POST['lastname'] . "<br>";
            echo "Address:" . $_POST['address'] . "<br>";
            echo "Contact #:" . $_POST['contact_number'];
        }
    ?>
    </body>
</html>
