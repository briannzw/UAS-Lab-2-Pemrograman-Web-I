<?php
include("aksi_news.php");
?>

<html>

<head>
    <title>GrandChase News</title>
    <link rel="icon" type="image/png" href="https://en.grandchase.net/favicon/favicon.ico" sizes="96x96">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        function showDropdown(id) {
            document.getElementById("myDropdown" + id).classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>

    <style>
        .title-container {
            background: url(https://contents.grandchase.net/en/event/pc/images/bg_story.jpg) 50% no-repeat;
        }

        section {
            box-sizing: border-box;
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            display: flex;
            justify-content: center;
        }

        .img-main {
            position: absolute;
            object-fit: cover;
        }

        .title {
            font-size: 40px;
            text-shadow: 0 0 1px white, 0 0 1px white, 0 0 1px white, 0 0 1px white;
            text-align: center;
            color: black;
            z-index: 10;
        }

        .card {
            cursor: pointer;
        }

        .card:hover {
            border-width: 2px;
            box-shadow: 3px 3px 3px lightgray;
        }

        /* Dropdown */
        .showLeft {
            text-shadow: none !important;
            color: #000 !important;
            padding: 10px;
        }

        .btn-right {
            right: 0.4em;
            position: absolute;
            top: 0.24em;
        }

        .dropbtn {
            color: black;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown-1 {
            position: absolute;
            display: inline-block;
            width: 100px;
            right: 0.4em;
        }

        .dropdown-content {
            display: none;
            position: relative;
            margin-top: 60px;
            background-color: #f9f9f9;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-1 a:hover {
            background-color: #f1f1f1
        }

        .show {display:block;}
    </style>
</head>

<body>
    <!--awal navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://contents.grandchase.net/pre-register-rewards/images/en_gc_logo.png" width="156.46" height="75" alt="Grandchase">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Characters</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Guides
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Tutorial</a></li>
                            <li><a class="dropdown-item" href="#">Newbie Book</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">About Game</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Forums</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Redeem Code</a>
                    </li>
                </ul>

                <?php if (isset($_SESSION['username'])) : ?>
                    <a class="nav-link disabled ps-0 pe-2">Welcome back, <?= $_SESSION['username'] ?></a>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle ps-0 me-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="account.php">Account Settings</a></li>
                                <li><a class="dropdown-item" href="#">Your Posts</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="logout.php" class="btn btn-outline-danger ms-3">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a href="https://play.google.com/store/apps/details?id=com.kog.grandchaseglobal" target="_blank" class="btn btn-outline-warning me-2">Download Now</a>
                <?php else : ?>
                    <a href="https://play.google.com/store/apps/details?id=com.kog.grandchaseglobal" target="_blank" class="btn btn-outline-warning me-2">Download Now</a>
                    <a href="login.php" class="btn btn-outline-dark">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <!--akhir navbar-->

    <!--container-->
    <div class="container-fluid title-container mb-5">
        <h3 class="py-5 title">- News -</h3>
        <section>
            <img class="img-main" src="https://contents.grandchase.net/en/event/pc/images/story/story013.png">
            <img class="img-main" src="https://contents.grandchase.net/en/event/pc/images/story/story012.png">
            <img class="img-main" src="https://contents.grandchase.net/en/event/pc/images/story/story011.png">
        </section>
    </div>
    <div class="container">
        <p class="py-4 title" style="text-align: left; font-size: 30px;">Recent

            <?php if (cek_admin()) : ?>
                <button class="btn btn-outline-primary" style="float: right;" onclick="location.href ='add_news.php'">+ Add News</button>
            <?php endif; ?>

        </p>
    </div>
    <?php foreach ($news as $n) : ?>
        <div class="container">
            <div class="card mb-3">
                <div class="row g-0">

                    <?php if (isset($_SESSION['username']) && (cek_admin())) : ?>
                        <div class="dropdown-1">
                            <p class="dropbtn btn-right showLeft" onclick="showDropdown(<?= $n['id'] ?>)">&#10247;</p>
                            <!-- menu -->
                            <div id="myDropdown<?= $n['id'] ?>" class="dropdown-content">
                                <a href="modify_news.php?id=<?= $n['id']; ?>">Modify</a>
                                <a href="delete_news.php?id=<?php echo $n["id"]; ?>" onclick="return confirm('Are you sure you want to delete this post?');">Delete</a>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="col-md-4 d-flex align-items-center">
                        <img class="rounded img-fluid" src="<?= $image_folder . $n['image'] ?>" alt="News Image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $n['topic'] ?></h5>
                            <p class="card-text">
                                <?php
                                $string = strip_tags($n['content']);
                                if (strlen($n['content']) > 400) {
                                    $stringCut = substr($string, 0, 250);
                                    $endPoint = strrpos($stringCut, ' ');

                                    $string = ($string = $endPoint) ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                    $string .= '...';
                                }
                                echo $string;
                                ?>
                            </p>
                            <p class="card-text"><small class="text-muted"><?= $n['date'] ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!--awal footer-->
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-dark">Copyright ⒸKOG Co, LTD. All rights reserved.</span>
        </div>
    </footer>
    <!--akhir footer-->
</body>

</html>