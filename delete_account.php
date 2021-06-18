<?php
    session_start();
    include("koneksi.php");

    if(!isset($_SESSION['username'])){                                    //jika user belum login ($user_data tidak valid)
        header("Location: login.php");
        die;
    }
    
    $username = $_SESSION['username'];
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);

    if($row){
        $query = "DELETE FROM user WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($koneksi, $query);

        $aff_row = mysqli_affected_rows($koneksi);

        if($aff_row > 0){
            echo("<script>alert('Your account was successfully deleted.'); location = 'logout.php';</script>");
        } else {
            echo("<script>alert('No changes has been made in the database. (".$aff_row.")'); location = 'account.php';</script>");
        }

    } else {
        echo("<script>alert('Your username not found. Please relog'); location='logout.php'</script>");
    }
?>