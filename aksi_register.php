<?php
    session_start();
    include('koneksi.php');

    $error = array();

    if(isset($_POST["register"])){
        $username = mysqli_real_escape_string($koneksi, $_POST['username']);
        $email = mysqli_real_escape_string($koneksi, $_POST['email']);
        $password1 = mysqli_real_escape_string($koneksi, $_POST['pass']);
        $password2 = mysqli_real_escape_string($koneksi, $_POST['pass2']);

        $check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' LIMIT 1";
        $result = mysqli_query($koneksi, $check_query);
        
        $user = mysqli_fetch_assoc($result);
        if($user){
            if($user['username'] == $username){
                array_push($error, "Username already exists");
            }

            if($user['email'] == $email){
                array_push($error, "Email already used");
            }
        }

        if($password1 != $password2){
            array_push($error, "Confirm password must be same with your password");
        }

        if(count($error) == 0){
            $password = password_hash($password1, PASSWORD_DEFAULT);
           
            $nickname = "";

            $query = "INSERT INTO user (username, password, email, nickname, admin) VALUES('$username', '$password', '$email', '$nickname', '0')";
            $result = mysqli_query($koneksi, $query);

            $query = "SELECT * FROM user WHERE username = '$username'";
            $result = mysqli_query($koneksi, $query);

            $row = mysqli_fetch_assoc($result);
            $nickname = "user".bin2hex(random_bytes(10));
            
            $query = "UPDATE user SET nickname = '$nickname' WHERE username = '$username'";
            $result = mysqli_query($koneksi, $query);

            echo ("<script>alert('Your account was successfully created.'); location = 'login.php';</script>");
        }
    }
?>