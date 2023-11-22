<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de reacondicionamiento de ordenadores - BLACK MARKET</title>
    <link rel="stylesheet" type="text/css" href="../../../../src/views/Hornitzaileak/css/Hornitzaileak.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../../../src/css/styleMenu.css"  media="screen"/>
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
    
 
        

        <div class="formularioa">
            <h3><b>Hornitzaile izateko formulario hau bete:</b></h3>
            <form method="post">


            <label for="tlfzenb">Empresarako Telefono Zenbakia:</label>
            <input type="number" id="tlfzenb" name="tlfzenb" required><br>


            <label for="empresaizena">Empresaren Izena:</label>
            <input type="text" id="empresaizena" name="empresaizena" required><br>

            <label for="korreoa">Empresaren Korreoa:</label>
            <input type="email" id="korreoa" name="korreoa" required><br>


            <label for="empresahel">Empresaren Helbidea:</label>
            <input type="text" id="empresahel" name="empresahel" required><br>


            <label for="nan">NAN:</label>
            <input type="text" id="nan" name="nan" required><br>

            <label for="eskeintzeko">Zer eskaintzen duzue?:</label>
            <textarea id="eskeintzeko" name="eskeintzeko"></textarea><br>

            <input type="submit" value="Hornitzaile bihurtu">
            <input type="reset" value="Ezabatu">


            </form>

            <?php
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $servername = "localhost";
                $username = "root";
                $password = "1WMG2023";
                $dbname = "erronka"; 

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Errorea datu-basearekin konexioan: " . $conn->connect_error);
                }

                $tlfzenb = $_POST["tlfzenb"];
                $empresaizena = $_POST["empresaizena"];
                $korreoa = $_POST["korreoa"];
                $empresahel = $_POST["empresahel"];
                $nan = $_POST["nan"];
                $eskeintzeko = $_POST["eskeintzeko"];

                $sql = "INSERT INTO hornitzaileak (EmpresarekoTlfZenbakia, EmpresarenIzena, EmpresarenKorreoa, Helbidea, NAN, testua) VALUES (?, ?, ?, ?, ?, ?)";

                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssss", $tlfzenb, $empresaizena, $korreoa, $empresahel, $nan, $eskeintzeko);

                if ($stmt->execute()) {
                    echo "Datuak zuzen gorde dira.";
                } else {
                    echo "Errorea datuak datu-basean sartzerakoan: " . $stmt->error;
                }

                $stmt->close();
                $conn->close();
            }
            ?>
        </div>
        
        
    </div>
    <br>
    
















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

    








    
</body>
</html>
