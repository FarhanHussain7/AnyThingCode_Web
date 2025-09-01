<?php
session_start();
include('../common/db.php');

// Redirect if already logged in
// if (isset($_SESSION['user'])) {
//     header("Location: /PROJECT/index.php");
//     exit;
// }

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT username, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($username, $hashedPassword);
        $stmt->fetch();

        if (password_verify($password, $hashedPassword)) {
            // After verifying credentials
$_SESSION['user'] = ['username' => $username, 'email' => $email];
header("Location: /PROJECT/index.php?login=success");
exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
}
?>