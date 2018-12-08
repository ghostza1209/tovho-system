<nav class="navbar navbar-expand-md navbar-light border-x" id="navbar">
    <div class="top-logo"><img class="w-100" src="./assets/image/logo.png"></div>
    <button id="collapse_btn" class="navbar-toggler btn-collapse" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse top-menu" id="navbarCollapse">
        <ul class="top-ul d-none d-md-block">
            <li class="flag-round">
                Select language&nbsp;&nbsp;:&nbsp;&nbsp;
                <a href="./index.php?lang=jp"><img src="./assets/image/jp-flag.png"></a>
                &nbsp;
                <a href="./index.php?lang=en"><img src="./assets/image/us-flag.png"></a>
            </li>
            <li class="bd-left"><a href="#">FAQ</a></li>
            <li class="bd-left"><a id="toContactUs" href="#contactUs">Contact us</a></li>
        </ul>
        <ul class="d-block d-md-none navbar-nav">
            <li class="nav-item">Select language</li>
            <li class="nav-item flag-round"><a class="nav-link"><a class="nav-link" href="./index.php?lang=jp">Japan <img src="./assets/image/jp-flag.png"></a></a></li>
            <li class="nav-item flag-round"><a class="nav-link"><a class="nav-link" href="./index.php?lang=en">English <img src="./assets/image/us-flag.png"></a></a></li>
            <li class="nav-item"><a id="toContactUs2"  href="#contactUs" class="nav-link">Contact us</a></li>
        </ul>
    </div>
</nav>
<script>
    $(function () {
        $("#collapse_btn").click(function () {
            if (!$("#navbarCollapse").hasClass("show")) {
                $("#navbar").stop().animate({
                    backgroundColor: 'white'
                }, 100);
            } else {
                $("#navbar").stop().animate({
                    backgroundColor: 'transparent'
                }, 300);
            }
        });
    });
</script>