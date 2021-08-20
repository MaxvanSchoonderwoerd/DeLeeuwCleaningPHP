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
    <title>De Leeuw Cleaning Service - Contact</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/5b818eb41b.js" crossorigin="anonymous"></script>
    <script src="../js/menu.js"></script>
</head>
<body>

<?= template_header("contact")?>

<main>
<!--    contact card-->
    <section class="section_contactCard">
        <div class="contact_card">
            <h2>Lorem ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, quos ullam. Aperiam esse pariatur
                quas rerum sint. Cumque, officiis, quis.</p>
            <img class="profile_picture" src="https://source.unsplash.com/random/500x800">
            <li><a href="https://api.whatsapp.com/send?phone=+31630825397"><i class="fab fa-whatsapp"></i></a></li>
            <li><a href="https://www.instagram.com/deleeuwcleaningservice/"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
        </div>
    </section>

</main>

<?= template_footer() ?>

</body>
</html>