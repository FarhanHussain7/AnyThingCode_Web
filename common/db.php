<?php

    $host="localhost";
    $username="root";
    $password="farhan@8130310586@1234";
    $database="Phpproject";

    $conn = new mysqli($host,$username,$password,$database);

    if($conn->connect_error){
        echo "Not Connected with DB ". $conn->connect_error;
    }else{
        // echo " Connected susscefully";
    }

?>