<?php
    session_start();
    include("koneksi.php");

    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $query = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($result);
    
        if($row){
            $admin    = $row['admin'];
            if(!$admin) echo("<script>alert('You don\'t have any permission to use this page'); location='news.php'</script>");

            if(!isset($_GET['id'])){
                echo("<script>alert('No news_id found in URL'); location='news.php'</script>");
            }

            $id = $_GET['id'];

            $query = "SELECT * FROM news WHERE id = '$id'";
            $result = mysqli_query($koneksi, $query);

            if(!$result){
                echo("<script>alert('News_id not found'); location = 'news.php';</script>");
            }

            $image_name = mysqli_fetch_assoc($result)['image'];

            $query = "DELETE FROM news WHERE id = '$id'";
            $result = mysqli_query($koneksi, $query);
            
            $aff_row = mysqli_affected_rows($koneksi);

            if($aff_row > 0){
                $image_folder = "uploaded_image/";

                //Hapus image
                $filename = $image_folder.$image_name;
                if(!unlink($filename)){
                    echo("<script>alert('Image not found');</script>");
                }

                echo("<script>alert('This news was successfully deleted'); location = 'news.php';</script>");
            } else {
                echo("<script>alert('No changes has been made in the database. (".$aff_row.")'); location = 'news.php';</script>");
            }
        } else {
            echo("<script>alert('Your username not found. Please relog'); location = 'logout.php'</script>");
        }
    } else {
        echo("<script>alert('Please login first'); location = 'login.php'</script>");
    }
?>