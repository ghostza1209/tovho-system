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

        <!-- Custom styles for this template -->
        <link href="./assets/myCss/style.css" rel="stylesheet">
       

    <body>

        <header>
            <?php include "./layout/navBar.php"; ?>
        </header>
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
        <script src="./assets/dist/Scrollify-master/jquery.scrollify.js" />
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.esm.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.esm.bundle.js"></script>
    <script src="./assets/myJs/myJs.js"></script>
    <script>
        $(function () {
            $.scrollify({
                section: "section",
                sectionName: "section-name",
                interstitialSection: ".footer",
                easing: "easeOutExpo",
                scrollSpeed: 1000,
                offset: 0,
                scrollbars: true,
                standardScrollElements: "",
                setHeights: true,
                overflowScroll: true,
                updateHash: true,
                touchScroll: true,
                before: function () {},
                after: function () {},
                afterResize: function () {},
                afterRender: function () {}
            });

            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 3,
                spaceBetween: 30,
                freeMode: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });

        });
    </script>
</body>

</html>