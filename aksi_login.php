<?php
    session_start();
    include('koneksi.php');

    $error = array();

    if(isset($_SESSION['username'])){
        echo("<script>alert('You already logged in'); location = 'index.php';</script>");
    }

    if(isset($_POST["login"])){
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $query    = mysqli_query($koneksi, "select * from user where username = '$username'");
        $row = mysqli_fetch_assoc($query);

        if($row){
            if(password_verify($password, $row["password"])){
                $_SESSION['username']=$username;
                header ("location:index.php");
            }
            else{
                array_push($error, "Username or password wrong");
            }
        } else {
            array_push($error, "Username not found");
        }
    }
?>