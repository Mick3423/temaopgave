<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Kaspar Munk</title>

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

<div class="container">
    <div><img src="images/kaspar.png" class="img-fluid" alt="Billeaugust"></div>
    <h1>Kaspar Munk</h1>

    <p> Kaspar Munk afholder oplæg om at være manuskriptforfatter.

        Han vil dele sin erfaring som manuskriptforfatter og give tips og tricks til alle, der ønsker at forbedre deres færdigheder inden for skrivning af manuskripter.


    <p>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
            læs mere her
        </button>
    </p>
    <div class="collapseknap">
        <div class="collapse collapse-horizontal" id="collapseWidthExample">
            <div class="card card-body collapseknap">
                Han er en anerkendt dansk instruktør og manusforfatter, der har arbejdet på flere prisvindende film og tv-serier.
            </div>
        </div>
    </div>
    <h3 class="text-center">hvor kan man møde Kaspar Munk</h3>
</div>

<div class="accordion m-3" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Slagelse
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                8/4 2024
                <ul>
                    <li>
                        19:30-21:10
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Sorø
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                9/4 2024
                <ul>
                    <li>
                        19:30-21:10
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                dianalund
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                10/4 2024
                <ul>
                    <li>
                        19:30-21:10
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                høng
            </button>
        </h2>
        <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                11/4 2024
                <ul>
                    <li>
                        19:30-21:10
                    </li>
                </ul>
            </div>


        </div>
    </div>
</div>


<?php include "includes/footer.php"?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
