<?php
    session_start();;
    include('koneksi.php');

    $success = array();
    $error = array();
    
    $image_folder = "uploaded_image/";

    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $query = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($result);
    
        if($row){
            $nickname = $row['nickname'];
            $admin    = $row['admin'];
            $user_id  = $row['id'];
            if(!$admin) echo("<script>alert('You don\'t have any permission to use this page'); location='news.php'</script>");
        } else {
            echo("<script>alert('Your username not found. Please relog'); location='logout.php'</script>");
        }
    } else {
        echo("<script>alert('Please login first'); location='login.php'</script>");
    }

    function upload_image(){
        global $image_folder;
        global $error;

        $name = $_FILES['content-img']['name'];
        $tempname = $_FILES['content-img']['tmp_name'];

        $imageValidExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $name);
        $imageExtension = strtolower(end($imageExtension));

        $name = date("M j\, Y h.i.s A").'.'.$imageExtension;
        $folder = $image_folder.$name;
        
        if(!in_array($imageExtension, $imageValidExtension)){
            array_push($error, "This image format is not valid");
            return false;
        }
        if(move_uploaded_file($tempname, $folder)){
            return $name;
        }

        return false;
    }

    if(isset($_POST['add_news'])){
        $topic = mysqli_real_escape_string($koneksi, $_POST['topic']);
        $content = mysqli_real_escape_string($koneksi, $_POST['content']);
        $date = mysqli_real_escape_string($koneksi, $_POST['date']);
        $image_name = upload_image();
        
        if($image_name){
            array_push($success, "Image uploaded successfully");

            $query = "INSERT INTO news (topic, content, image, date, news_by) VALUES ('$topic','$content','$image_name','$date', '$user_id')";
            $result = mysqli_query($koneksi, $query);

            $aff_row = mysqli_affected_rows($koneksi);

            if($aff_row > 0){
                echo("<script>alert('News publish success'); location = 'news.php'</script>");
            } else {
                $filename = $image_folder.$image_name;
                if(!unlink($filename)){
                    array_push($error, "Image remove failed");
                }

                array_push($error, "Nothing added to the database");
            }
        }
    }
?>