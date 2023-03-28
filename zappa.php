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


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="images/vilmaLogo.png" alt="vilmalogo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Film
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Zappa</a></li>
                        <li><a class="dropdown-item" href="#">You and me forever</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Byer
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Slagelse</a></li>
                        <li><a class="dropdown-item" href="#">Sorø</a></li>
                        <li><a class="dropdown-item" href="#">Dianalund</a></li>
                        <li><a class="dropdown-item" href="#">Høng</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">kontakt os</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">om os</a>
                </li>
        </div>
    </div>
</nav>


<div class="container">
    <div><img src="images/zappa.jpg" class="img-fluid" alt="zappa"></div>
    <h1>Zappa</h1>

    <p>”Zappa” er en dansk ungdomsfilm fra 1983, instrueret af Bille August og baseret på et manuskript af forfatteren Bjarne Reuter. Filmen tager os med tilbage til 1960'erne og følger en gruppe unge drenge og deres dag til dag narrestreger, som langsomt udvikler sig til slemmere ting.  </p>

    <a href="#" class=" btn bg-primary">læs mere her</a>
    <h3 class="text-center">hvor spilles Zappa</h3>
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


<div class="  bg-secondary container-fluid  ">
    <div class="row footer">
        <div class="col-6"><a href="#">kontakt os</a> </div>
        <div class="col-6"><a href="#">facebook</a></div>
        <div class="col-6"><a href="#"> om os</a> </div>
        <div class="col-6"><a href="#"> instagram</a></div>
    </div>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
