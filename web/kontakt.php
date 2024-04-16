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
        include ('header.php')
    ?>

    <main>
        <div class="seznam">
            <article class="kontakt">
                <img class="ikona2" src="obrazky/ikony-svg/poloha.svg" alt="ikona poloha">
                <p>Nádražní 1152, 671 72 Miroslav</p>
            </article>

            <article class="kontakt">
                <img class="ikona2"  src="obrazky/ikony-svg/telefon.svg" alt="ikona telefon">
                <p>+420 604 454 976</p>
            </article>

            <article class="kontakt">
                <img class="ikona2"  src="obrazky/ikony-svg/email.svg" alt="ikona email">
                <p>kucerova.web@seznam.cz</p>
            </article>

            <article class="kontakt">
                <img class="ikona2"  src="obrazky/ikony-svg/github.svg" alt="ikona GitHub">
                <p>Iveta Kučerová</p>
            </article>

            <article class="kontakt">
                <img class="ikona2"  src="obrazky/ikony-svg/instagram.svg" alt="ikona instagram">
                <p>kucerova.web</p>
            </article>
        </div>

        <p class="ic">IČ: 21017263</p>

        <?php include ('form.php')?>

    </main>

        <?php include ('footer.php')?>
        
</body>
</html>