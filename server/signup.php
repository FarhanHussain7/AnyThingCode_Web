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
    $stmt->bind_param(NULL, $username, $email, $password, $address);

    $result = $stmt->execute();
    $id = $stmt->insert_id;
    if ($result) {
        
        $_SESSION['user'] = ['username' => $username, 'email' => $email, "user_id" => $id];
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
        $user_id=0;

        $Query = "select * from users where email='$email1' and password='$password1';";
        $result = $conn->query($Query);
        if($result->num_rows==1){
                foreach($result as $row){
                    $username1 = $row['username'];
                    $user_id = $row['id'];
                }
                // echo $username1;
                $_SESSION["user"] = ["username" => $username1, "email" => $email1, "user_id" => $user_id];
                header("location: /PROJECT/index.php");
        }else{
            echo "Not found";
        }
}   else if(isset($_POST['ask'])){
        // echo "Question asked";
        // print_r($_POST);
        // print_r($_SESSION);

     $title  = $_POST['title'];
    $description = $_POST['description'];
    $category_id = $_POST['category'];
    $user_id = $_SESSION['user']['user_id'];

    $question = $conn->prepare("INSERT INTO question (`id`, `title`, `description`, `category_id`, `user_id`)
     VALUES (NULL, '$title', '$description', '$category_id', '$user_id');");

    $result = $question->execute();
    if ($result) {
    echo "question submit";
    }else{
        echo "not submited";
    }

}

?>