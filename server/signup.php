<?php
session_start();
include('../common/db.php');

// Redirect if already logged in
// if (isset($_SESSION['user'])) {
//     header("Location: /PROJECT/index.php");
//     exit;
// }

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $password=$_POST['password'];
    $address = $_POST['address'];

    $stmt = $conn->prepare("INSERT INTO users (username, email, password, address) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $email, $password, $address);

    if ($stmt->execute()) {
        $_SESSION['user'] = ['username' => $username, 'email' => $email];
        // After successful signup
header("Location: /PROJECT/index.php");
exit;
    } else {
        echo "Registration failed.";
    }
}else if(isset($_POST['login'])){
        $email1 = $_POST['email'];
        $password1 = $_POST['password'];

        $username1="";

        $Query = "select * from users where email='$email1' and password='$password1';";
        $result = $conn->query($Query);
        if($result->num_rows==1){
                foreach($result as $row){
                    $username1 = $row['username'];
                }
                // echo $username1;
                $_SESSION["user"] = ["username" => $username1, "email" => $email1];
                header("location: /PROJECT/index.php");
        }else{
            echo "Not found";
        }
}   else if(isset($_GET['ask'])){
        echo "Question asked";
    }

?>