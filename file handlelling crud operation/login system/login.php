<?php
session_start();

$_name = "hasnat";
$_password ="827ccb0eea8a706c4c34a16891f84e7b";

if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    header("location:login.php");
    exit();
}

if(isset($_POST["btn_login"])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $message =[];

    if($_name==$name && $_password==md5($password)){
        $message=["login"=>"Welcome $name"];
        $_SESSION["name"] = $name;
        header("location:form_post.php");
        exit();
    }else{
        $message =["login"=>"incorret username or password"];
        echo $message["login"];
    }
}

if (isset($_SESSION["name"])){
    echo "<h2>Welcome, {$_SESSION['name']}</h2>";
    echo '<a href ="login.php?logout=true">Logout</a>';
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        body{
            display:flex;
            place-content:center;
            height:100vh;
        }
    </style>
</head>
<body>
    <div>
        <h1>Login Form</h1>
        <form action="login.php" method="post">
            <label for="name">Username</label><br>
            <input type="text" name="name" id="name"><br><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"><br><br>
            <input type="submit" name="btn_login" id="" value="login">
        </form>
    </div>
</body>
</html>