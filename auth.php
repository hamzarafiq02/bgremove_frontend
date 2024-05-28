<?php

$servername = "localhost";
$username = "root";
$password = "root123";
$database = 'photodit';

$conn = mysqli_connect($servername, $username, $password, $database);
session_start();

if(isset($_POST['signin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '" . $email . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)>0) {
        $row = mysqli_fetch_array($result);
        $db_pass = $row['password'];
        if($db_pass===$password){
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['Name'];
            header('Location: dashboard.php');
        }else{
            $_SESSION['error-pass'] = 'Invalid password';
            header('Location: authenticate.php');
        }
    } else {
        $_SESSION['error-email'] = 'Email does not exist';
        header('Location: authenticate.php');
    }
}
else if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirm-password'];
    $plan = "free";
  
    if ($password == $confirmpassword) {
      $sql = "INSERT INTO users (name, email, password, plan) VALUES ('" . $name . "', '" . $email . "', '" . $password . "', '" . $plan . "');";
      if (mysqli_query($conn, $sql)) {
        header('Location: authenticate.php');
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }
} else {
    header('Location: authenticate.php');
}

?>