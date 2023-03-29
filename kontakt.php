<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>kontakt</title>

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

<?php include "includes/navigation.php"?>



    <div class="container p-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">kontaktoplysninger</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">mail</h6>
                <p class="card-text">hvis der er nogen problemer eller du vil have mere at vide så kontakt os på mail@vilmafilmfestival.dk</p>

            </div>
        </div>
    </div>

<div class="container  p-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">kontaktoplysninger</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">telefon</h6>
            <p class="card-text">hvis der er nogen problemer eller du vil have mere at vide så kontakt os på "indsæt fiktivt nummer" her i mellem kl 8-15</p>

        </div>
    </div>
</div>


<div class="container p-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">kontaktoplysninger</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">sociale medier</h6>
            <p class="card-text">hvis der er nogen problemer eller du vil have så kan du også kontakte os via enten facebook eller instagram @vilmafilmfestival </p>

        </div>
    </div>
</div>




<?php include "includes/footer.php"?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
