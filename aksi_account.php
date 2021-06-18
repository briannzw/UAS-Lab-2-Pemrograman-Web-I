<?php
    session_start();;
    include('koneksi.php');

    $success = array();
    $error = array();
    
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $query = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($result);
    
        if($row){
            $username = $row['username'];
            $userid   = $row['id'];
            $nickname = $row['nickname'];
            $email    = $row['email'];
            $admin    = $row['admin'];
        } else {
            echo("<script>alert('Your username not found. Please relog'); location='logout.php'</script>");
        }
    } else {
        echo("<script>alert('Please login first'); location='login.php'</script>");
    }

    if(isset($_POST['email'])){
        $email = mysqli_real_escape_string($koneksi, $_POST['email']);

        $query = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($koneksi, $query);

        $check = mysqli_fetch_assoc($result);
        if($check && $check['username'] != $_SESSION['username']){
            array_push($error, "This email is already used (please refresh)");
        } else {
            $query = "UPDATE user SET email = '$email' WHERE username = '$username'";
    
            $result = mysqli_query($koneksi, $query);
            $aff_row = mysqli_affected_rows($koneksi);
            
            if($aff_row > 0) array_push($success, "Your email has been successfully changed");
            else array_push($error, "Nothing has been changed");
        }
    }

    if(isset($_POST['nickname'])){
        $nickname = mysqli_real_escape_string($koneksi, $_POST['nickname']);

        $query = "SELECT * FROM user WHERE nickname = '$nickname'";
        $result = mysqli_query($koneksi, $query);

        $check = mysqli_fetch_assoc($result);
        if($check && $check['username'] != $_SESSION['username']){
            array_push($error, "This nickname is already used (please refresh)");
        } else {
            $query = "UPDATE user SET nickname = '$nickname' WHERE username = '$username'";
    
            $result = mysqli_query($koneksi, $query);
            $aff_row = mysqli_affected_rows($koneksi);
            
            if($aff_row > 0) array_push($success, "Your nickname has been successfully changed");
            else array_push($error, "Nothing has been changed");
        }
    }

    if(isset($_POST['pass'])){
        $oldPass = $_POST['oldPass'];
        $confirmPass = $_POST['confirmPass'];

        if(password_verify($oldPass, $row['password'])){
            $pass = mysqli_real_escape_string($koneksi, $_POST['newPass']);
            if($confirmPass == $pass){
                $pass = password_hash($pass, PASSWORD_DEFAULT);
                $query = "UPDATE user SET password = '$pass' WHERE username = '$username'";
        
                $result = mysqli_query($koneksi, $query);
                $aff_row = mysqli_affected_rows($koneksi);
                
                if($aff_row > 0) array_push($success, "Your password has been successfully changed");
                else array_push($error, "Nothing has been changed");
            } else {
                array_push($error, "Confirm password must be same with your new password");
            }
        } else {
            array_push($error, "Your old password is wrong");
        }
    }
?>