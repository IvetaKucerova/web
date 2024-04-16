<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kučerová.web</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
        include 'header.php';
    ?>

<main>
    <section class="nadpis">
        <h1>
        Webové stránky na míru vašim potřebám...
        </h1>
    </section>

    <section class="karty">
        <div class="karta">
            <h2>Design na míru vašim představám</h2>

            <img class="ikona" src="obrazky/ikony-svg/Design.png" alt="ikona design">

            <p>Originální layout webových stránek, jednoduchost a přehlednost</p>
        </div>

        <div class="karta">
            <h2>Responzivní UX webové stránky</h2>

            <img class="ikona" src="obrazky/ikony-svg/rezponzivita.svg" alt="ikona responzivita">

            <p>Přizpůsobivý web, na kterém se návštěvníci dobře zorientují.</p>
        </div>

        <div class="karta">
            <h2>CTA a formuláře</h2>

            <img class="ikona" src="obrazky/ikony-svg/formular.svg" alt="ikona formuláře">

            <p>Kontaktní formuláře, tlačítka, odkazy nebo vyskakovací okna, která dovedou zákazníka k akci.</p>
        </div>

        <div class="karta">
            <h2>Správa webových stránek</h2>

            <img class="ikona" src="obrazky/ikony-svg/sprava.svg" alt="ikona správy obsahu">

            <p>Nárazové změny, občasná údržba, nebo pravidelný servis.</p>
        </div>
    </section>

    <?php
        include 'button.php';
    ?>

</main>

    <?php
        include 'footer.php';
    ?>

</body>
</html>