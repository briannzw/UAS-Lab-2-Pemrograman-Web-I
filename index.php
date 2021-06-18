<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>GrandChase</title>
    <link rel="icon" type="image/png" href="https://en.grandchase.net/favicon/favicon.ico" sizes="96x96">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <style>
        .carousel .carousel-item {
            height: 659px;
        }

        .carousel-item img {
            position: absolute;
            object-fit: cover;
            top: 0;
            left: 0;
            min-height: 659px;
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news.php">News</a>
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

    <!--awal carousel-->
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <iframe src="https://www.youtube.com/embed/lVcHaBpq6Ec?autoplay=1enablejsapi=1" width="100%"
                    height="100%"></iframe>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Join the Chase!</h5>
                    <p>Download NOW and begin your adventure TODAY!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://wallpaperaccess.com/full/3506715.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>The official sequel of GrandChase Online</h5>
                    <p>Played by over 20M players worldwide!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://3.bp.blogspot.com/-4-xEpybbCiY/WyFCZtLy81I/AAAAAAACBbM/bjRY3ft8g6U2tja0YP8Nts5Mkqgv7HFagCLcBGAs/s1600/GrandChase-Dimensional%2BChaser.png"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>#LongLiveTheChase</h5>
                    <p>The Adventure beyond Dimensions begins.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--akhir carousel-->

    <!--awal card-->
    <div class="container-fluid align-items-center d-flex flex-column align-items-center justify-content-center bg-image"
        style="height: 720px; background: url('https://koggames.com/wp-content/uploads/2020/07/section-bg.jpg') no-repeat; background-size: cover; background-position: center;">
        <h3 class="text-light m-0 p-3 mb-5 text-center">- Features -</h3>
        <div class="row row-cols-1 row-cols-md-3 mx-auto">
            <div class="col">
                <div class="card h-100">
                    <img src="https://play-lh.googleusercontent.com/x-0HsoNMvS9g6yqebRszlQQwc4Lfm3GB1F2p0t-X3AvmRoh6V8xeUp8wnn3X97-7tx64=w720-h310-rw"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">A Game For The True RPG Fan</h5>
                        <p class="card-text">Experience real action on mobile!
                            Feel the satisfaction of gathering more than 100 monsters and then slaying them all at once!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://play-lh.googleusercontent.com/rMM0nRiE60EcVmZYzac3RFXtjDGpxQK3upn1HVXl-2Lq_VvcMw6GAIbnZbQP5W0bjHA=w720-h310-rw"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Interesting Game Mechanics</h5>
                        <p class="card-text">Whether it’s skill timing, order, coordinates, or directions,
                            it’s YOU that will change the flow of battle!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://play-lh.googleusercontent.com/OAu9U9GD5xqINR0Q8dOkSpSB9tLljJCCkE88VU5gW-c-b_IaW2CcamOgIW3KSqCF_zo=w720-h310-rw"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Build Your Dream Team</h5>
                        <p class="card-text">All new characters have been added along with the original cast from
                            GrandChase!
                            With over 100 different heroes plus multiple pets to collect
                            You can mix and match to assemble your own unique team!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--akhir card-->

    <!--awal container-->
    <div class="container-fluid bg-image text-center p-0" style="
      background: url('https://i.redd.it/9v7dfttebs841.png') no-repeat; background-size: cover;">
        <h3 class="text-light m-0 p-3 text-center" style="background-color: rgba(0, 0, 0, .85);">- Newest Update -</h3>
        <iframe class="p-5" src="https://www.youtube.com/embed/X48-XHFlnzM" width="80%" height="720px"></iframe>
    </div>
    <!--akhir container-->

    <!--awal footer-->
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-dark">Copyright ⒸKOG Co, LTD. All rights reserved.</span>
        </div>
    </footer>
    <!--akhir footer-->
</body>

</html>