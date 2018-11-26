<?php
$page_directory = dirname($_SERVER["PHP_SELF"]);
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="">

        <title>Tovho System</title>

        <!-- Bootstrap core CSS -->
        <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/css/swiper.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/css/swiper.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="./assets/myCss/style.css" rel="stylesheet">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXYa_uMYjbv0ak4sdvTi8hVP4s9q48_oo&callback=initMap"
    async defer></script>

<body>

    <!--        <header>
                <php include "./layout/navBar.php"; ?>
            </header>-->
    <div id="load">
    </div>
    <main role="main" id="contents">

        <?php
        include "./layout/inc/header.php";
        include "./layout/inc/vision.php";
        include "./layout/inc/feature.php";
        include "./layout/inc/price.php";
        include "./layout/inc/staff.php";
        include "./layout/inc/company.php";
        include "./layout/inc/contactUs.php";
        ?>
        <!-- FOOTER -->
        <?php include "./layout/footer.php" ?>

    </main>

    <!-- Bootstrap core JavaScript
      Placed at the end of the document so the pages load faster -->
    <script src="./assets/dist/js/bootstrap.min.js"></script>
    <script src="./assets/dist/Scrollify-master/jquery.scrollify.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js.map"></script>

    <script src="./assets/myJs/myJs.js"></script>
    <script>
        var pagePerView;
        $(window).resize(onresize());
        function initMap_th() {
            var uluru = {lat: 7.8639567, lng: 98.3500935};
            var map = new google.maps.Map(document.getElementById('map_th'), {
                center: uluru,
                zoom: 18,
                disableDefaultUI: true
            });

            var marker = new google.maps.Marker({position: uluru, map: map});

        }
        function initMap_jp() {
            var uluru = {lat: 32.7992836, lng: 130.7064792};
            map = new google.maps.Map(document.getElementById('map_jp'), {
                center: uluru,
                zoom: 18,
                disableDefaultUI: true
            });

            var marker = new google.maps.Marker({position: uluru, map: map});

        }
        function onresize() {
            width = $(window).innerWidth();
            if (width < 769) {
                pagePerView = 1;
            } else {
                pagePerView = 3;
            }
        }


        $(function () {

            initMap_th();
            initMap_jp();
            new Swiper('.swiper-container', {
                autoplay: {
                    delay: 5000
                },
                slidesPerView: pagePerView,
                spaceBetween: 10,
                freeMode: false,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },
                navigation: {
                    nextEl: '.button-next',
                    prevEl: '.button-prev'
                }
            });

        });
    </script>
</body>

</html>