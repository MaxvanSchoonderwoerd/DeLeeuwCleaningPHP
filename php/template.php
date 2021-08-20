<?php

function template_head(){
    echo <<<EOT
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>De Leeuw Cleaning Service</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/beforeAfter.css">
    <script src="https://kit.fontawesome.com/5b818eb41b.js" crossorigin="anonymous"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/beforeAfter.js"></script>

</head>
EOT;

}

function template_header($page)
{
    echo <<<EOT
<header class="header_nav">
    <div class="topbar"></div>
    <section class="section_nav">
        <div class="container_nav_item"><a href="index.php"><img class="logo" src="../source/logoBlue.png"
                                                                  alt="logo"/></a></div>
        <h3 class="titleHeader">De Leeuw Cleaning</h3>
        <div class="container_nav_item"><i class="fa fa-bars" id="hamburgerBtn"></i></div>
    </section>
    <ul id="hamburgerLinks" class="hamburgerLinks header_nav animate-out">
        <li class="nav_item"><a class="nav_link" href="index.php">Home</a></li>
        <li class="nav_item"><a class="nav_link" href="bank-reiniging.php">Banken</a></li>
        <li class="nav_item"><a class="nav_link" href="matras-reiniging.php">Matrassen</a></li>
        <li class="nav_item"><a class="nav_link" href="stoel-reiniging.php">Stoelen</a></li>
        <li class="nav_item"><a class="nav_link" href="tapijt-reiniging.php">Tapijten</a></li>
        <li class="nav_item"><a class="nav_link" href="stoom-reiniging.php">Stoom Reiniging</a></li>
        <li class="nav_item"><a class="nav_link" href="reviews.php">Reviews</a></li>
        <li class="nav_item"><a class="nav_link" href="contact.php">Contact</a></li>
        <li class="nav_item"><a class="nav_link" href="over-ons.php">Over ons</a></li>
        <div class="nav_decoration_container">
            <div class="nav_decoration"></div>
            <div class="nav_decoration"></div>
            <div class="nav_decoration"></div>
            <div class="nav_decoration"></div>
            <div class="nav_decoration"></div>
            <div class="nav_decoration"></div>
        </div>
    </ul>
</header>
EOT;
}

function template_footer()
{
    echo <<<EOT
<footer>
    <img class="logoFooter" src="../source/logoWhite.png" alt="logo">
    <section class="footer_links">
        <li class="footer_item"><a class="footer_link" href="index.php">Home</a></li>
        <ul>
            <li class="footer_item"><a class="footer_link" href="bank-reiniging.php">Banken</a></li>
            <li class="footer_item"><a class="footer_link" href="matras-reiniging.php">Matrassen</a></li>
            <li class="footer_item"><a class="footer_link" href="stoel-reiniging.php">Stoelen</a></li>
            <li class="footer_item"><a class="footer_link" href="tapijt-reiniging.php">Tapijten</a></li>
            <li class="footer_item"><a class="footer_link" href="stoom-reiniging.php">Stoom reiniging</a></li>
        </ul>
        </li>
        <li class="footer_item"><a class="footer_link" href="#">Reviews</a></li>
        <li class="footer_item"><a class="footer_link" href="#">Contact</a></li>
        <li class="footer_item"><a class="footer_link" href="#">Over ons</a></li>
    </section>
    <section class="footer_socials">
        <a href="https://api.whatsapp.com/send?phone=+31630825397"><i class="fab fa-whatsapp"></i></a>
        <a href="https://www.instagram.com/deleeuwcleaningservice/"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
    </section>
</footer>

EOT;
}

?>