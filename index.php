<?php include_once 'Ficheros/Consultas_DB.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/syle.css">
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
    <link href="assets/css/nivo-lightbox.css" rel="stylesheet" />
    <link href="assets/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="assets/css/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/color/default.css" rel="stylesheet">
    <title>Integradora 1</title>
</head>

<body>

    <!-- page loader -->


    <!-- Section: home video -->
    <section id="intro" class="home-video text-light">
        <div class="home-video-wrapper">

            <div class="homevideo-container">
                <div id="P1" class="bg-player" style="display:block; margin:
                        auto; background: rgba(0,0,0,0.5)" data-property="{videoURL:'https://www.youtube.com/watch?v=Aw73bVIv4cs',containment:'.homevideo-container',
                        quality: 'hd720', showControls: false, autoPlay:true,
                        mute:true, startAt:0, opacity:1}"></div>
            </div>
            <div class="overlay">
                <div class="text-center video-caption">
                    <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.8s">
                        <h1 class="big-heading font-light"><span id="js-rotating">??Tienes Hambre?, Ya no mas
                                adivina quien llego, Crazy About Food, te
                                quedaras con ganas de mas!!</span></h1>
                    </div>
                    <div class="wow bounceInUp" data-wow-offset="0" data-wow-delay="1s">
                        <div class="margintop-30">
                            <a href="#about" class="btn btn-skin" id="btn-scroll">Start here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: intro -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="about">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
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
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown" id='dmenu'>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categorias
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Pasteles</a></li>
                            <li><a class="dropdown-item" href="#">Gelatinas</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Pan de
                                    Dulce</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <div class="user">
                    <ul>
                        <li><a href=""><i class="bi bi-person-fill"></i>Login</a></li>
                        <li><a href=""><i class="bi bi-person-plus-fill"></i>Resgister</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <header class="content">
        <div class="container">
            <div class="row">
                <!--Inicio / BIENVENIDA-->
                <div class="inicio">
                    <h1>Bienvenido a la Panaderia Sur</h1>
                </div>
                <?php
$element = 'aMemberVar';
print $Consultas_DB->$element; // prints "aMemberVar Member Variable"
?>
                <div class="contenido_inicial shadow-lg p-3 mb-5 bg-body rounded">
                    <h1>Mas vendidos</h1>
                    <div class="card-group">
                        <div class="card">
                            <div class="imagen">
                                <img src="https://cdn0.bodas.com.mx/vendor/4891/3_2/960/jpg/img-20210315-162655_5_34891-161962994857508.jpeg"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <div class="columns">
                                        <div class="col">Pastel de Boda</div>
                                        <div class="col precio">$20.0</div>
                                    </div>
                                </h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <div class="imagen">
                                <img src="https://cdn0.bodas.com.mx/vendor/4891/3_2/960/jpg/img-20210315-162655_5_34891-161962994857508.jpeg"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <div class="columns">
                                        <div class="col">Pastel de Boda</div>
                                        <div class="col precio">$20.0</div>
                                    </div>
                                </h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <div class="imagen">
                                <img src="https://cdn0.bodas.com.mx/vendor/4891/3_2/960/jpg/img-20210315-162655_5_34891-161962994857508.jpeg"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <div class="columns">
                                        <div class="col">Pastel de Boda</div>
                                        <div class="col precio">$20.0</div>
                                    </div>
                                </h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="assets/js/navbar.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/slippry.min.js"></script>
<script src="assets/js/jquery.flexslider-min.js"></script>
<script src="assets/js/morphext.min.js"></script>
<!-- <script src="assets/js/gmap.js"></script> -->
<script src="assets/js/jquery.mb.YTPlayer.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/jquery.scrollTo.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/stellar.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/nivo-lightbox.min.js"></script>
<script src="assets/js/jquery.nicescroll.min.js"></script>
<script src="assets/js/custom.js"></script>

</html>