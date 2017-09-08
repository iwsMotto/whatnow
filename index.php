<?php
session_start();
ob_start();
?>
<style>
    #index {
        background: snow;
    }

    .cen img {
        margin: auto;

    }

    .carousel-indicators {
        bottom: 0px;
    }

    .carouselimg {
        width: 900px;
        height: 900px;
    }

    .cs {
        padding-bottom: 15px;
        padding-top: 15px;
    }
</style>
<?php
include "header.php";
?>
<body id="index">
<!-- Carousel -->
<div class="col-sm-12 cs">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner cen" role="listbox">
            <div class="item active">
                <img src="img/index/giphy.png" class="carouselimg img-responsive">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="img/index/giphy.png" class="carouselimg img-responsive">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="img/index/giphy.png" class="carouselimg img-responsive">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
    </div>
</div>
</body>