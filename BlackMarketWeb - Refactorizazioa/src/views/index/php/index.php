<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de reacondicionamiento de ordenadores - BLACK MARKET</title>
    <link rel="stylesheet" type="text/css" href="../css/index.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../../../src/css/styleMenu.css"  media="screen"/>
    <style>
        /* Aquí puedes agregar tus estilos personalizados */
    </style>
    <script src="https://kit.fontawesome.com/7f605dc8fe.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <!-- hau da menua eta logoa, pagina guztietan berdina (hemen hasten da) -->

        <header>
            <a href="../../../../src/views/index/php/index.php"><img src="../../../../public/MicrosoftTeams-image.png" alt="Logo de BLACK MARKET" style="width: 200px; height: 100px;" ></a>
        </header>

        <nav id="menu">
            <a class="invisibleDiv"></a>
            <a href="">Guri buruz</a>
            <a href="../../../../src/views/konponenteak/php/pagina_konponenteak.php">konponenteak</a>
            <a href="../../../../src/views/berriak/php/berriak.php">Berriak</a>
            <a href="../../../../src/views/Hornitzaileak/php/Hornitzaileak.php">Hornitzaileak</a>
            
            <div class="search-form">
                <input aria-label="Buscar" id="search-input" placeholder="Buscar" class="search-input" value="">
                <button aria-label="Search" type="submit" class="search-button" id="search-button">Buscar</button>
            </div>
            <a class="invisibleDiv"></a>
        </nav>

        <!-- BILATZAILEAREN SCRIPTA -->
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
        
        <!-- ZER EGITEN DUGU? (hemen HASTEN da) -->
        <div class="main-content">
            <h1>Ongi etorri BLACK MARKET-era</h1>
            
            <div>
                <h2>Kokapena:</h2>
                <iframe  class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.0004935167062!2d114.21814714152501!3d22.315821092814197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3404014917c2eb25%3A0x3ec7edbd8edd2c3e!2sKwun%20Tong%20Garden%20Estate!5e0!3m2!1ses!2ses!4v1699258285417!5m2!1ses!2ses"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="etiketaGB">
                <div>
                    <h2>Guri buruz:</h2>
                    <img src="../../../../public/empresaargazkia.jpg">
                </div>
                <div class="GBtext">
                    <p>¡Kaixo! "Black Market" enpresa birgaitzean dagoen arren, gure helburua da kalitate handiko produktuak merkean eskaintzea. Gure bezeroen beharrei egokitutako aukerak eta aurreikuspenak ematen ditugu, beti ere teknologia munduaren aurrez ari garelarik. Gure konpromisoa da kalitatea eta bezeroen pozaren gainean jartzea. Gurekin batera, teknologia berriak gure eskura izan ditzazun!"</p>
                </div>
                
            </div>
            
        </div>
        <!-- ZER EGITEN DUGU? (hemen BUKATZEN da) -->









        







    </div>

    
</body>
<footer>
    <!-- SARE SOZIALAK? (hemen HASTEN da) -->
    <div class="creadores">
        <h3><b>Black Marketen sortzaileak:</b></h3>
        <p>Asier Saizar, Iker Asenjo eta Beñat Gerique</p>
        <h3>Kontaktoa:</h3>
        <p>688742857      Black Market@gmail.com</p>
    </div>
    <div class="footer">
            <div><h2>Kontakto eta sare sozialak:</h2></div>
            <nav id="sareSozialak">
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa-brands fa-tiktok"></i>Tik tok</a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa-brands fa-youtube"></i>Youtube</a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa-brands fa-twitter"></i>Twitter</a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa-brands fa-instagram"></i>Instagram</a>
            </nav>
        </div>
        <!-- SARE SOZIALAK? (hemen BUKATZEN da) -->
</footer>
</html>
