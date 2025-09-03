<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Project</title>
   <?php include('./client/commonFile.php') ?>
</head>
<body>
   
   <?php
session_start();
include('./client/header.php');

$isLoggedIn = isset($_SESSION['user']) && !empty($_SESSION['user']['username']);

if (isset($_GET['signUp']) && !$isLoggedIn) {
    include('./client/signUp.php');
} elseif (isset($_GET['login']) && !$isLoggedIn) {
    include('./client/login.php');
} else if (isset($_GET['ask']) && $_GET['ask']) {
    include('./client/ask.php');
} else if (isset($_GET['q-id']) && $_GET['q-id']) {
    $id = $_GET['q-id'];
    include('./client/question-details.php');
} else {
    include('./client/question.php');
}
?>
</body>
</html>