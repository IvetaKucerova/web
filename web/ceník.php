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

    <main class="ceník">
        <article class="karta-ceník">
            <header class="header-ceník">
                <h2>Balíček Mini</h2>
                <p> od X 000,-</p>
                <button class="tlačítko-ceník"><a href="kontakt.php">Nezávazná poptávka</a></button>
            </header>

            <ul>
                <li>1 stránka</li>
                <li>Prodejní obsah</li>
                <li>Responzivní design</li>
                <li>GDPR ready</li>
                <li>Cookies redy</li>
                <li>Vlastní administrace</li>
                <li>Optimalizace pro vyhledávače</li>
            </ul>
        </article>

        <article class="karta-ceník">
            <header class="header-ceník">
                <h2>Balíček Medium</h2>
                <p> od XX 000,-</p>
                <button class="tlačítko-ceník"><a href="kontakt.php">Nezávazná poptávka</a></button>
            </header>

            <ul>
                <li>2-5 stránek</li>
                <li>Prodejní obsah</li>
                <li>Responzivní design</li>
                <li>GDPR ready</li>
                <li>Cookies redy</li>
                <li>Vlastní administrace</li>
                <li>Optimalizace pro vyhledávače</li>
            </ul>
        </article>

        <article class="karta-ceník">
            <header class="header-ceník">
                <h2>Balíček Maxi</h2>
                <p> od XX 000,-</p>
                <button class="tlačítko-ceník"><a href="kontakt.php">Nezávazná poptávka</a></button>
            </header>

            <ul>
                <li>6 a více stránek</li>
                <li>Speciální funkce</li>
                <li>Prodejní obsah</li>
                <li>Responzivní design</li>
                <li>GDPR ready</li>
                <li>Vlastní administrace</li>
                <li>Optimalizace pro vyhledávače</li>
            </ul>
        </article>
    </main>

    <?php
        include 'footer.php';
    ?>
</body>
</html>