<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<!-- Her skal sidens indhold ligge -->

<?php include "includes/navigation.php"?>



<div class="container p-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">vilmafilmfestival</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">hvem er vi?</h6>
            <p class="card-text">Vi har altid elsket at vise film frem her på Vilmafilmfestival. I år der kigger vi tilbage på de sidste 60 år af ungdomsfilm
            </p>

        </div>
    </div>
</div>

<div class="container  p-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">vil der ske andet end film?</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">oplæg</h6>
            <p class="card-text"> ud over film, vil der også være nogle oplæg fra folk i film og tv branchen. De vil give et kig bag kulisserne og dele deres historier + tips og tricks.</p>

        </div>
    </div>
</div>


<div class="container p-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">tema</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">vil det være samme tema næste år?</h6>
            <p class="card-text"> nej... hvert år bliver der udvalgt et nyt samfundsrelevant tema og gæster der holder oplæg.</p>

        </div>
    </div>
</div>




<?php include "includes/footer.php"?>
</body>
</html>
