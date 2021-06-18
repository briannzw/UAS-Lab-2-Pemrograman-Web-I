<?php
    session_start();
    include('koneksi.php');

    $image_folder = "uploaded_image/";
    
    function cek_admin(){
        global $koneksi;
        if(isset($_SESSION['username'])){
            $username = $_SESSION['username'];

            $query = "SELECT admin FROM user WHERE username = '$username'";
            $result = mysqli_query($koneksi, $query);

            $row = mysqli_fetch_row($result);
            
            if($row){
                if($row[0]) return true;
            }
        }

        return false;
    }

    $query = "SELECT * FROM news ORDER BY date DESC, id DESC";
    $result = mysqli_query($koneksi, $query);

    $news = [];

    if($result && mysqli_num_rows($result) > 0){
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        $news = $rows;
    }
?>