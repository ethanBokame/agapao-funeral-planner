<?php
require("header.php");
hd("../", "../image/Agapao - logo-icon-modified.png");
?>

<body>

    <?php
    require("navbar.php");
    generateNavbar("../index.php", "savoir_plus.php", "voir_formules.php", "event.php", "#", "#", "#foot", "devis.php", "../image/Agapao - logo.png", "../image/menu.png", "../image/close.png");
    ?>

<center>
<b>
<p class="title-event">
        Rejoins-nous vite aux <span>AGAPAO'EVENT</span>
    </p>
</b>
</center>




<div class="image-container">
        <div class="image-track">
            <img src="../image/event2.jpg" alt="Image 2">
            <img src="../image/event3.jpg" alt="Image 3">
            <img src="../image/event4.jpg" alt="Image 4">
            <!-- Repeat the images to create a continuous loop effect -->
            <img src="../image/event2.jpg" alt="Image 2">
            <img src="../image/event3.jpg" alt="Image 3">
            <img src="../image/event4.jpg" alt="Image 4">
        </div>
    </div>


    <div class="section-e">
        <p class="section-title">Les orphelinades d’Agapao :</p>
        <p>Il s’agit d’ateliers bimestriels où toutes personnes ayant perdu un parent qui souhaitent parler. Nous aurons lors de ces moments des thérapeutes qui aideront toutes les personnes par l’art thérapie ou des séances de psychologie selon le besoin.</p>
    </div>

    <div class="section-e">
        <p class="section-title">Les Apéro deuil :</p>
        <p>Nos ateliers trimestriels, sont des classes pour se libérer, parler et voir combien nous ne sommes pas seul à vivre des moments douloureux.</p>
    </div>

    <div class="section-e">
        <p class="section-title">Le café des veufs et veuves :</p>
        <p>Cette rencontre semestrielle, permettra à toutes personnes ayant perdu un conjoint de sortir, se détendre, rencontrer et discuter avec des personnes qui vivent ces moments.</p>
    </div>

    <div class="section-e">
        <p class="section-title">Les Agapé du cœur :</p>
        <p>Soucieuse de répondre à la mission divine de veiller et prendre soin de la veuve et des orphelins, AGAPAO organisera une collecte de dons en nature et en numéraire afin d’aider des ONG et/ou orphelinats.</p>
    </div>

    <p class="centered-paragraph">Ne soyons pas en marge de cet élan de solidarité et d’amour et soyons un partenaire de cette grande campagne.</p>


    <?php
    require("animation_visible.php");
    require("footer.php");
    generateFooter("../", "#", "#", "#", "#", "#", "#foot", "devis.php");
    ?>
</body>

</html>
