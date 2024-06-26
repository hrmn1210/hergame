<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/57635d64f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>css/styling.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.1/dist/sweetalert2.all.min.js"></script>
    <title>GameINA | Games</title>
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron jumbotron-fluid game-jumbotron rellax">
                <div class="container " data-aos="fade-right" data-aos-duration="1500">
                    <h1 class="display-4 font-weight-bold header-jumbotron" d>Mainkan Game Gratis!</h1>
                    <p class="lead text-jumbotron">Mainkan banyak game gratis disini. Gratis, seru dan menarik. <br>
                        Nikmati kemudahan bermain game dimana saja dengan GameINA.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- title -->
    <div class="row">
        <div class="owl-carousel mt--5 container owl-theme category ">
            <div class="b-game-card item" data-aos="fade-down" data-aos-duration="1200">
                <a href="<?=base_url('games/fps')?>">
                    <div class="b-game-card__cover" style="background-image: url(assets/img/fps.png);"></div>
                </a>
            </div>
            <div class="b-game-card item" data-aos="fade-up" data-aos-duration="1400">
                <a href="<?=base_url('games/action')?>">
                    <div class="b-game-card__cover" style="background-image: url(assets/img/action.png);"></div>
                </a>
            </div>
            <div class="b-game-card item" data-aos="fade-down" data-aos-duration="1600">
                <a href="games/petualangan">
                    <div class="b-game-card__cover" style="background-image: url(assets/img/adventure.png);"></div>
                </a>
            </div>
            <div class="b-game-card item" data-aos="fade-up" data-aos-duration="1800">
                <a href="games/olahraga">
                    <div class="b-game-card__cover" style="background-image: url(assets/img/sport.png);"></div>
                </a>
            </div>
            <div class="b-game-card item" data-aos="fade-down" data-aos-duration="2000">
                <a href="games/balapan">
                    <div class="b-game-card__cover" style="background-image: url(assets/img/Racinf.png);"></div>
                </a>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="container">
            <h1 class="font-weight-bold mt-5" data-aos="fade-right" data-aos-duration="1500"
                style="color: #d6011d;font-size:47px !important;">Mainkan Game Populer dan
                Menarik!</h1>
        </div>
    </div>

    <!-- <div class="container">
        <div class="row">

            <?php foreach ($user as $u) {?>

            <div class="col-md-3 mt-4">
                <div class="card">
                    <div class="card-body">
                        <img src="<?=base_url() . 'assets/img/' . $u->gambar_game;?>"
                            class="card-img-top img-responsive" alt="...">
                        <h5 class="card-title font-weight-bold  "><?php echo $u->nama_game; ?></h5>
                        <p class="card-text"><?=$u->deskripsi_game;?></p>
                        <a href="<?=base_url() . 'assets/games/' . $u->link_game;?>"
                            class="btn btn-primary btn-block">Mainkan Game</a>
                    </div>
                </div>
            </div>

            <?php }?>

        </div>
    </div> -->


    <div class="container">
        <div class="row">

            <?php foreach ($user as $u) {?>

            <div class="col-md-3 mt-4 " data-aos="fade-right" data-aos-duration="1500">
                <div class="card card-game" style="width:16rem;">
                    <img src="<?=base_url() . 'assets/img/' . $u->gambar_game;?>" width=""
                        class="card-img-top img-responsive" alt="...">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <p class="nama_game text-center font-weight-bold"><?=$u->nama_game;?></p>
                                <!-- <p class="card-text font-weight-bold"><?=base_url() . 'assets/games/' . $u->link_game;?>
                                    <br>
                                </p> -->
                            </div>
                            <div class="col-md-12 mx-auto">
                                <br>
                                <p class="deskripsi_game text-center" style="height:70px;"><?=$u->deskripsi_game;?></p>
                                <!-- <p class="card-text font-weight-bold"><?=base_url() . 'assets/games/' . $u->link_game;?>
                                    <br>
                                </p> -->

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12 mx-auto container-fluid">
                                <a href="<?=base_url() . 'assets/games/' . $u->link_game;?>" class=" btn btn-danger
                                    btn-block btn-games font-weight-bold">Mainkan!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php }?>

        </div>
    </div>

    <div class="row mt-3" style="background-color: #d6011d; color:white;">
        <div class="container">
            <h1 class="font-weight-bold mt-4" style="color:white;font-size:47px !important;" data-aos="fade-right"
                data-aos-duration="1200">Mau top-up? cek kategori dibawah ini!</h1>
        </div>
    </div>

    <div class="row " style="background-color: #d6011d; ">
        <div class="owl-carousel mt-3 container owl-theme category mb-5">
            <div class="b-game-card item" data-aos="fade-down" data-aos-duration="1200">
                <a href="https://www.codashop.com/id-id/mobile-legends">
                    <div class="b-game-card__cover" style="background-image: url(assets/img/mobile-legends.png);"></div>
                </a>
            </div>
            <div class="b-game-card item" data-aos="fade-up" data-aos-duration="1400">
                <a href="https://www.codashop.com/id-id/free-fire">
                    <div class="b-game-card__cover" style="background-image: url(assets/img/free-fire.png);"></div>
                </a>
            </div>
            <div class="b-game-card item" data-aos="fade-down" data-aos-duration="1600">
                <a href="https://www.codashop.com/id-id/arena-of-valor">
                    <div class="b-game-card__cover" style="background-image: url(assets/img/arena-of-valor.png);"></div>
                </a>
            </div>
            <div class="b-game-card item" data-aos="fade-up" data-aos-duration="1800">
                <a href="https://www.codashop.com/id-id/pubg-mobile-uc-redeem-code">
                    <div class="b-game-card__cover" style="background-image: url(assets/img/pubg.png);"></div>
                </a>
            </div>
            <div class="b-game-card item" data-aos="fade-down" data-aos-duration="2000">
                <a href="https://www.codashop.com/id-id/marvel-duel">
                    <div class="b-game-card__cover" style="background-image: url(assets/img/marvel.png);"></div>
                </a>
            </div>
        </div>
    </div>
    
    </div>



    <!-- Optional JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script>

    <script>
    var rellax = new Rellax('.rellax');
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>


</html>