<?php
include 'template.php';

?>

<!doctype html>
<html lang="en">

<?= template_head() ?>

<body>

<?= template_header("Home") ?>

<main>
    <!--    Intro-->
    <section class="section_intro homePage">
        <div class="body-intro">
            <h1>De Leeuw Cleaning <br>Service</h1>
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
                <h1 class="priceAmount">40,-</h1>
                <ul>
                    <li class="checkList"> <i class="fas fa-check "></i> Verwijderd vlekken</li>
                    <li class="checkList"> <i class="fas fa-check "></i> Verwijderd bacterien</li>
                    <li class="checkList"> <i class="fas fa-check "></i> Verwijderd huisstofmijt</li>
                </ul>
                <a href="../php/bank-reiniging.php"><h3 class="readMore">Lees meer</h3></a>
            </div>


            <div class="card pseudo-hover">
                <h3 class="priceTitle">Matrassen</h3>
                <h1 class="priceAmount">40,-</h1>
                <ul>
                    <li class="checkList"> <i class="fas fa-check "></i> Verwijderd vlekken</li>
                    <li class="checkList"> <i class="fas fa-check "></i> Verwijderd bacterien</li>
                    <li class="checkList"> <i class="fas fa-check "></i> Verwijderd huisstofmijt</li>
                </ul>
                <a href="../php/matras-reiniging.php"><h3 class="readMore">Lees meer</h3></a>
            </div>


            <div class="card pseudo-hover">
                <h3 class="priceTitle">Stoelen</h3>
                <h1 class="priceAmount">103,-</h1>
                <ul>
                    <li class="checkList"> <i class="fas fa-check "></i> Verwijderd vlekken</li>
                    <li class="checkList"> <i class="fas fa-check "></i> Verwijderd bacterien</li>
                    <li class="checkList"> <i class="fas fa-check "></i> Verwijderd huisstofmijt</li>
                </ul>
                <a href="../php/stoel-reiniging.php"><h3 class="readMore">Lees meer</h3></a>
            </div>

            <div class="card pseudo-hover">
                <h3 class="priceTitle">Tapijten</h3>
                <h1 class="priceAmount">80,-</h1>
                <ul>
                    <li class="checkList"> <i class="fas fa-check "></i> Verwijderd vlekken</li>
                    <li class="checkList"> <i class="fas fa-check "></i> Verwijderd bacterien</li>
                    <li class="checkList"> <i class="fas fa-check "></i> Verwijderd huisstofmijt</li>
                </ul>
                <a href="../php/tapijt-reiniging.php"><h3 class="readMore">Lees meer</h3></a>
            </div>


            <div class="card pseudo-hover">
                <h3 class="priceTitle">Stoom reiniging</h3>
                <h1 class="priceAmount">30,-</h1>
                <ul>
                    <li class="checkList"> <i class="fas fa-check "></i> Verwijderd vlekken</li>
                    <li class="checkList"> <i class="fas fa-check "></i> Verwijderd bacterien</li>
                    <li class="checkList"> <i class="fas fa-check "></i> Verwijderd huisstofmijt</li>
                </ul>
                <a href="../php/stoom-reiniging.php"><h3 class="readMore">Lees meer</h3><a>
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
</main>

<?= template_footer() ?>

</body>
</html>