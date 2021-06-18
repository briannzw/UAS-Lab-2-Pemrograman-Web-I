<?php
    include("aksi_add_news.php");
?>

<html>
    <head>
        <title>GrandChase Add News</title>
        <link rel="icon" type="image/png" href="https://en.grandchase.net/favicon/favicon.ico" sizes="96x96">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <style>
            form input{
                margin-bottom: 10px;
                width: 100%;
                max-width: 100%;
            }
        </style>
    </head>
    <body>
        <!--awal navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="https://contents.grandchase.net/pre-register-rewards/images/en_gc_logo.png" width="156.46"
                        height="75" alt="Grandchase">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="news.php">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Characters</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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

                    <?php if(isset($_SESSION['username'])) : ?>
                        <a class="nav-link disabled ps-0 pe-2">Welcome back, <?= $_SESSION['username'] ?></a>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle ps-0 me-2" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a href="https://play.google.com/store/apps/details?id=com.kog.grandchaseglobal" target="_blank"
                        class="btn btn-outline-warning me-2">Download Now</a>
                    <?php else : ?>
                        <a href="https://play.google.com/store/apps/details?id=com.kog.grandchaseglobal" target="_blank"
                        class="btn btn-outline-warning me-2">Download Now</a>
                        <a href="login.php" class="btn btn-outline-dark">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
        <!--akhir navbar-->

        <?php
            if(count($success) > 0){
                foreach($success as $s){
                    echo("<div class='alert alert-success me-3 ms-3 mt-2 mb-2' role='alert'>".$s."</div>");
                }
            }
        ?>

        <?php
            if(count($error) > 0){
                foreach($error as $e){
                    echo("<div class='alert alert-danger me-3 ms-3 mt-2 mb-2' role='alert'>".$e."</div>");
                }
            }
        ?>

        <form action="add_news.php" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="container rounded pb-4 px-4 mt-5" style="border: 1px solid lightgray; border-radius: 5px; width: 65%;">
                <div class="row align-items-center mt-3 mb-2">
                    <div class="col">
                        <h4>Add News</h4>
                        <p style="float: right;">Date : <?= date("M j\, Y") ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Image</p>
                        <input type="file" name="content-img" class="form-control" accept="image/*" required></input>
                    </div>
                </div>
                <div class="row align-items-center mt-3 mb-2">
                    <div class="col">
                        <p>Topic</p>
                        <input type="text" name="topic" class="form-control" value="<?= isset($_POST["topic"]) ? htmlentities($_POST["topic"]) : ''; ?>" required></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Content</p>
                        <textarea name="content" style="width: 100%; max-width: 100%; margin-bottom: 10px;" class="form-control" required><?= isset($_POST["content"]) ? htmlentities($_POST["content"]) : ''; ?></textarea>
                    </div>
                </div>
                <input type="hidden" name="date" value="<?= date("M j\, Y") ?>"></input>
                <input class="btn btn-outline-primary mt-5" name="add_news" type="submit"></input>
            </div>
            
        </form>

        <!--awal footer-->
        <footer class="footer mt-auto py-3 bg-light">
            <div class="container text-center">
                <span class="text-dark">Copyright ⒸKOG Co, LTD. All rights reserved.</span>
            </div>
        </footer>
        <!--akhir footer-->
    </body>
</html>