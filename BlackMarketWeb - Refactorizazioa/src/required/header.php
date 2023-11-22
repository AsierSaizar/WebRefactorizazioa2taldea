<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de reacondicionamiento de ordenadores - BLACK MARKET</title>
</head>
<body> 

    <div class="container">

    <!-- hau da menua eta logoa, pagina guztietan berdina (hemen hasten da) -->

    <header>
        <a href="../../../../src/views/index/php/index.php"><img src="../../../../public/MicrosoftTeams-image.png" alt="Logo de BLACK MARKET" style="width: 200px; height: 100px;" ></a>
    </header>

    <nav id="menu">
        <a class="invisibleDiv"></a>
        <a href="../../../../src/views/index/php/index.php">Guri buruz</a>
        <a href="../../../../src/views/konponenteak/php/pagina_konponenteak.php">konponenteak</a>
        <a href="../../../../src/views/berriak/php/berriak.php">Berriak</a>
        <a href="../../../../src/views/Hornitzaileak/php/Hornitzaileak.php">Hornitzaileak</a>
        
        <div class="search-form">
            <input aria-label="Buscar" id="search-input" placeholder="Buscar" class="search-input" value="">
            <button aria-label="Search" type="submit" class="search-button" id="search-button">Buscar</button>
        </div>
        <a class="invisibleDiv"></a>
    </nav>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('search-button').addEventListener('click', function (e) {
                e.preventDefault();
                var searchTerm = document.getElementById('search-input').value;
                searchProducts(searchTerm);
            });

            function searchProducts(term) {
                var found = window.find(term, false, false, true, false, true, false);
                if (!found) {
                    alert("No se encontraron coincidencias.");
                }
            }
        });
    </script>
    <!-- BILATZAILEAREN SCRIPTA -->
    <!-- hau da menua eta logoa, pagina guztietan berdina (hemen bukatzen da) -->