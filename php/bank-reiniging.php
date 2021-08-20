<?php
include 'template.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>De Leeuw Cleaning Service - Bank reiniging</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/beforeAfter.css">
    <script src="https://kit.fontawesome.com/5b818eb41b.js" crossorigin="anonymous"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/beforeAfter.js"></script>
</head>
<body>

<?= template_header("Banken") ?>

<main>
    <section class="section_intro sofaPage">
        <div class="body-intro">
            <h1>Bank reiniging</h1>
            <h3>
                dae soluta temporibus. Deserunt dolorum eaque eos in, odio repudiandae ut.
            </h3>
            <a href="https://api.whatsapp.com/send?phone=+31630825397" class="whatsAppBtn"> <i
                        class="fab fa-whatsapp"></i> Whatsapp ons!</a>
        </div>
    </section>
    <!--    About us-->
    <section class="section_text">
        <div class="container_text">
            <h2>
                Bank reiniging
            </h2>
            <p>
                Voor dat een van onze specialisten begint aan het reinigen van uw meubel, word het meubel eerst
                gecontroleerd op de soort en ernst van de vervuiling. Om een realistisch beeld te creëren van het
                eindresultaat voeren wij na het inspecteren een proefreiniging uit. Alleen wanneer u tevreden bent
                starten wij meteen daarna met het voorbehandelen van het meubel. Zodra de voorbehandeling erop zit
                zullen wij het meubel voorzien van dieptereiniging wat gebeurt door middel van een combinatie van
                reinigingsmiddelen, onze stoom extractie machines en uiteraard een specialist met de nodige ervaring.
                Zodra het meubel weer helemaal vlekvrij en schoon is zullen wij het meubel voor u drogen en na een
                tijdsbestek van 24 uur kunt u weer fijn gebruik maken van het meubel.
            </p>
            <p>
                Kiest u voor meubelreiniging van de Leeuw cleaning service dan kunt in de meeste gevallen dezelfde dag
                weer genieten van uw gereinigde bank. Onze methode heeft als groot voordeel dat de droogtijd vele malen
                korter is dan bij een gemiddelde reiniging. Neem contact met ons op en ervaar de kracht van onze
                reinigingstechnieken. Een ander bijkomend voordeel is dat na reiniging uw meubilair minder snel vuil
                wordt. Onze oplossing laat geen zeepresten achter, waardoor vuil minder snel opnieuw hecht.
            </p>
        </div>
    </section>

    <section class="beforeAfter">
        <div class='container_beforeAfter'>
            <img class='img background-img' src="../source/bgimg1.png">
            <img class='img foreground-img' src="../source/bgImg2.png">
            <input type="range" min="1" max="100" value="50" class="slider" name='slider' id="slider">
            <div class='slider-button'></div>
        </div>
    </section>
</main>

<?= template_footer("Banken") ?>

</body>
</html>