<?php
    include('aksi_register.php');
?>

<html>
    <head>
        <title>GrandChase Register</title>
        <link rel="icon" type="image/png" href="https://en.grandchase.net/favicon/favicon.ico" sizes="96x96">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>
        <link href="style-login.css" rel="stylesheet">
        <script src="parallax.js"></script>
        <style>
            p{
                margin-bottom: 0;
            }
            input{
                margin-bottom: 20px;
            }
            .form-login{
                position: absolute;
                right: 10%;
                top: 30%;
                width: 20%;
                background: white;
                padding: 15px;
                border-radius: 10px;
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            .logo{
                text-align: center;
            }
            .logo img{
                width: 156.46;
                height: 75;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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

        <?php
            if(count($error) > 0){
                foreach($error as $e){
                    echo("<div class='alert alert-danger me-3 ms-3 mt-2 mb-2' role='alert'>".$e."</div>");
                }
            }
        ?>
        
        <section>
            <img src="https://contents.grandchase.net/en/event/pc/images/kv/front.png" class="layer center" data-speed="10">
            <img src="https://contents.grandchase.net/en/event/pc/images/kv/right2.png" class="layer right" data-speed="3">
            <img src="https://contents.grandchase.net/en/event/pc/images/kv/right1.png" class="layer right" data-speed="7">
            <img src="https://contents.grandchase.net/en/event/pc/images/kv/left2.png" class="layer left" data-speed="5">
            <img src="https://contents.grandchase.net/en/event/pc/images/kv/left1.png" class="layer left" data-speed="6">
        </section>

        <form action="register.php" method="post" autocomplete="off" class="form-login">
            <div class="logo">
                <img src="https://contents.grandchase.net/pre-register-rewards/images/en_gc_logo.png">
            </div>
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter your username..." class="form-control" required>
                <p>Email</p>
                <input type="email" name="email" placeholder="Enter your email..." class="form-control" required>
                <p>Password</p>
                <input type="password" name="pass" placeholder="Enter your password..." class="form-control" required>
                <p>Confirm Password</p>
                <input type="password" name="pass2" placeholder="Re-enter your password..." class="form-control" style="margin-bottom:5px;" required>
                <a href="login.php" style="text-decoration: none;">Already have an account? Login</a>
                <br>
                <input type="submit" name="register" value="Register" class="btn btn-outline-success me-2" style="margin-top:5px;">
                <input type="reset" name="hapus" value="Reset" class="btn btn-outline-warning me-2" style="margin-top:5px;">
        </form>
    </body>

    <!--awal footer-->
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-dark">Copyright ⒸKOG Co, LTD. All rights reserved.</span>
        </div>
    </footer>
    <!--akhir footer-->
</html>

