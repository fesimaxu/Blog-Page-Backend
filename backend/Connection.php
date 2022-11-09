<?php
//Get  connection information
    $host = "localhost";
    $username = "root";
    $password = "";
    $database_db = "blog_website";

    function connect() {
        global $host, $username, $password, $database_db;

        $conn = new mysqli($host,$username,$password,$database_db);

        if($conn->connect_error){

            die("connection failed ". $conn->connect_error);
        }else{
            return $conn;
        }
    }
    


    function closeConnection($conn){
        $conn->close();
    }
?>
