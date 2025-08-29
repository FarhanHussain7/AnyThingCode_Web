<?php
session_start();
include('../common/db.php');
echo "<br/>";
if(isset($_POST['signup'])){
    // echo "User name is ".$_POST['username']."<br/>";
    // echo "User email is ".$_POST['email']."<br/>";
    // echo "User password is ".$_POST['password']."<br/>";
    // echo "User address is ".$_POST['address']."<br/>";

     $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];

   $user = $conn->prepare("INSERT INTO `users` (`id`, `username`, `email`, `password`, `address`)
    VALUES (NULL, '$username', '$email', '$password', '$address');");

     
    $result = $user->execute();
    if($result){
        echo "New user register ";
        $_SESSION['username'] = ['username'=>$username, 'email'=>$email];
    }else {
        echo "Not register";
    }
    
}

?>