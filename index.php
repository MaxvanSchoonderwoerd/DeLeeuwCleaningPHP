<?php
include 'php/template.php';

?>

<?= template_head("Home") ?>

<body>

<?= template_header("Home") ?>

<main>
    <!-- Slider main container -->
    <section class="section_swiper">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img class="swiperImage" src="https://source.unsplash.com/random/1920x1080">
                    <div class="swiperTextWrapper">
                        <h2 class="swiperText">Voor al uw <span class="blueText">meubel reiniging</span> staan wij voor u klaar.<br>Maak nu een
                            afspraak!
                        </h2>
                        <a href="https://api.whatsapp.com/send?phone=+31630825397" class="whatsAppBtn"><i
                                    class="fab fa-whatsapp whatsAppBtnLogo"></i> Whatsapp ons!</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img class="swiperImage" src="https://source.unsplash.com/random/1920x1080">
                    <div class="swiperTextWrapper">
                        <h2 class="swiperText">Alles super schoon in een korte tijd</h2>
                        <a href="https://api.whatsapp.com/send?phone=+31630825397" class="whatsAppBtn"><i
                                    class="fab fa-whatsapp whatsAppBtnLogo"></i> Whatsapp ons!</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img class="swiperImage" src="https://source.unsplash.com/random/1920x1080">
                    <div class="swiperTextWrapper">
                        <h2 class="swiperText">Test 123</h2>
                        <a href="https://api.whatsapp.com/send?phone=+31630825397" class="whatsAppBtn"><i
                                    class="fab fa-whatsapp whatsAppBtnLogo"></i> Whatsapp ons!</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img class="swiperImage" src="https://source.unsplash.com/random/1920x1080">
                    <div class="swiperTextWrapper">
                        <h2 class="swiperText">Nog meer text</h2>
                        <a href="https://api.whatsapp.com/send?phone=+31630825397" class="whatsAppBtn"><i
                                    class="fab fa-whatsapp whatsAppBtnLogo"></i> Whatsapp ons!</a>
                    </div>
                </div>
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </section>

    <section class="section_text">
        <div class="container_text">
            <h2>
                Wat we doen
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti explicabo perspiciatis praesentium
                ut.
                Esse et explicabo libero mollitia? Minima, nobis, quibusdam! Accusamus natus veritatis voluptate.
            </p>
            <p>
                leniti explicabo perspiciatis praesentium ut. Esse et explicabo libero mollitia? Minima, nobis,
                quibusdam!
                Accusamus natus veritatis voluptate.
            </p>
            <ul>
                <li class="liCheck">Snel</li>
                <li class="liCheck">Zorgvuldig</li>
                <li class="liCheck">Grondig</li>
                <li class="liCheck">Duurzaam</li>
                <li class="liCheck">lorem</li>
            </ul>
        </div>

    </section>
    <!--    Prices-->
    <section class="section_prices">
        <div class="container_prices">

            <div class="card pseudo-hover">
                <h3 class="priceTitle">Banken</h3>
                <h1 class="priceAmount">60,-</h1>
                <ul>
                    <li class="checkList"><i class="fas fa-check "></i>Geeft een schoon gevoel</li>
                    <li class="checkList"><i class="fas fa-check "></i>Geeft een frisse geur</li>
                    <li class="checkList"><i class="fas fa-times "></i>Verwijderd vlekken</li>
                    <li class="checkList"><i class="fas fa-times "></i>Verwijderd bacterien en huisstofmijt</li>
                </ul>
                <a href="php/bank-reiniging.php"><h3 class="readMore">Lees meer</h3></a>
            </div>


            <div class="card pseudo-hover">
                <h3 class="priceTitle">Matrassen</h3>
                <h1 class="priceAmount">70,-</h1>
                <ul>
                    <li class="checkList"><i class="fas fa-check "></i>Geeft een schoon gevoel</li>
                    <li class="checkList"><i class="fas fa-check "></i>Geeft een frisse geur</li>
                    <li class="checkList"><i class="fas fa-times "></i>Verwijderd vlekken</li>
                    <li class="checkList"><i class="fas fa-times "></i>Verwijderd bacterien en huisstofmijt</li>
                </ul>
                <a href="php/matras-reiniging.php"><h3 class="readMore">Lees meer</h3></a>
            </div>


            <div class="card pseudo-hover">
                <h3 class="priceTitle">Stoelen</h3>
                <h1 class="priceAmount">30,-</h1>
                <ul>
                    <li class="checkList"><i class="fas fa-check "></i>Geeft een schoon gevoel</li>
                    <li class="checkList"><i class="fas fa-check "></i>Geeft een frisse geur</li>
                    <li class="checkList"><i class="fas fa-times "></i>Verwijderd vlekken</li>
                    <li class="checkList"><i class="fas fa-times "></i>Verwijderd bacterien en huisstofmijt</li>
                </ul>
                <a href="php/stoel-reiniging.php"><h3 class="readMore">Lees meer</h3></a>
            </div>

            <div class="card pseudo-hover">
                <h3 class="priceTitle">Tapijten</h3>
                <h1 class="priceAmount">50,-</h1>
                <ul>
                    <li class="checkList"><i class="fas fa-check "></i>Geeft een schoon gevoel</li>
                    <li class="checkList"><i class="fas fa-check "></i>Geeft een frisse geur</li>
                    <li class="checkList"><i class="fas fa-times "></i>Verwijderd Vlekken</li>
                    <li class="checkList"><i class="fas fa-times "></i>Verwijderd bacterien en huisstofmijt</li>
                </ul>
                <a href="php/tapijt-reiniging.php"><h3 class="readMore">Lees meer</h3></a>
            </div>


            <div class="card pseudo-hover">
                <h3 class="priceTitle">Stoom reiniging</h3>
                <h1 class="priceAmount">150,-</h1>
                <ul>
                    <li class="checkList"><i class="fas fa-check "></i>Geeft een schoon gevoel</li>
                    <li class="checkList"><i class="fas fa-check "></i>Geeft een frisse geur</li>
                    <li class="checkList"><i class="fas fa-times "></i>Verwijderd vlekken</li>
                    <li class="checkList"><i class="fas fa-times "></i>Verwijderd schimmels</li>
                </ul>
                <a href="php/stoom-reiniging.php"><h3 class="readMore">Lees meer</h3></a>
            </div>
        </div>
    </section>
    <!--    quotes-->
    <section class="section_quote">
        <div class="container_quote">
            <blockquote>
                Mijn bank was al jaren zo vies en nu kan ik eindelijk weer vrienden uitnodigen!
            </blockquote>
        </div>
        <div class="container_quote">
            <blockquote>
                Niemand heeft dit gezegd maar het staat tussen quotes dus het moet wel gezegd zijn
            </blockquote>
        </div>
        <div class="container_quote">
            <blockquote>
                bla die bla die bla die bla die bla bla bank schoon tapijt schoon alles schoon
            </blockquote>
        </div>
    </section>

    <!--    points-->
    <section class="points">
        <div class="container_points">
            <div class="gridLeft">
                <div class="pointsText">
                    <h3>Voor uw gezondheid</h3>
                    <p>Onze behandeling is niet alleen goed voor uw bank, maar ook voor uw gezondheid.
                        Onze behandeling dood 99,9% van de virussen zoals het
                        Covid19-Virus.
                        Bestrijd huismijt, bacteriën en andere enzymen.</p>
                </div>
                <img class="pointsPicture" src="source/bacteria.png">
                <img class="pointsPicture2" src="source/bacteria.png">
            </div>
            <div class="gridRight">
                <img class="pointsPicture2" src="source/impregneren.png">
                <div class="pointsText">
                    <h3>Impregneren</h3>
                    <p>Naast uw bank laten reinigen kunnen wij ook uw bank impregneren.
                        Bij aankoop van een bank wordt de stof al geïmpregneerd geleverd.
                        Met deze behandeling voorkomt u vlekken en kan ook door een klein ongelukje de vlek makkelijker
                        worden
                        verwijderd.</p>
                </div>
                <img class="pointsPicture" src="source/impregneren.png">
            </div>
            <div class="gridLeft">
                <div class="pointsText">
                    <h3>Ontgeuren</h3>
                    <p>Ruikt uw bank, fauteuil of kleed niet meer zo fris,
                        bijvoorbeeld doordat uw huisdier zijn behoeftes erop heeft gedaan of door etens resten die er
                        diep in zijn
                        getrokken?
                        Onze behandeling reinigt niet alleen, maar verwijderd ook nare geurtjes en luchtjes!</p>
                </div>
                <img class="pointsPicture" src="source/smelly%20couch.png">
                <img class="pointsPicture2" src="source/smelly%20couch.png">
            </div>
        </div>
    </section>
</main>

<?= template_footer("Home") ?>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },

    });
</script>
</body>
</html>