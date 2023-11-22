<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de reacondicionamiento de ordenadores - BLACK MARKET</title>
    <link rel="stylesheet" type="text/css" href="../css/berriak.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../../../src/css/styleMenu.css"  media="screen"/>
    <style>
        /* Aquí puedes agregar tus estilos personalizados */
    </style>
    
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
            <a href="">Berriak</a>
            <a href="../../../../src/views/Hornitzaileak/php/Hornitzaileak.php">Hornitzaileak</a>
            
            <div class="search-form">
                <input aria-label="Buscar" id="search-input" placeholder="Buscar" class="search-input" value="">
                <button aria-label="Search" type="submit" class="search-button" id="search-button">Buscar</button>
            </div>
            <a class="invisibleDiv"></a>
        </nav>

        <!-- hau da menua eta logoa, pagina guztietan berdina (hemen bukatzen da) -->



        <div class="filtroak">
            <div class="filtroaFormDiv">
                
                <form class="filtroForm" action="berriak.php" method="get">
                    <label for="fecha">Jarri fecha bat eta aukeratu hortik aurrerakoak edo lehenegokoak agertzeko:</label><br>
                    <input type="date" id="fecha" name="fecha" class="search-input" value="<?php echo isset($_GET['fecha']) ? $_GET['fecha'] : ''; ?>" required><br>
                    
                    <select name="seleccion1" id="lang" class="search-input">
                        <option value="aurreragokoak" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === 'aurreragokoak') echo 'selected="selected"'; ?>>aurreragokoak</option>
                        <option value="lehenagokoak" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === 'lehenagokoak') echo 'selected="selected"'; ?>>lehenagokoak</option>

                    </select>
                    <br>
                    <input class="search-buttonFiltro" type="submit" value="Bilatu" />
                </form>
            </div>
            <div class="filtroaFormDiv">
                
                <form class="filtroForm1" action="berriak.php" method="get">
                    
                    <label for="dateFrom">Egun hontatik:</label><br>
                    <input type="date" id="dateFrom" class="search-input" name="dateFrom" value="<?php echo isset($_GET['dateFrom']) ? $_GET['dateFrom'] : ''; ?>" required><br>
                    
                    <label for="dateTo">Egun hontara:</label><br>
                    <input type="date" id="dateTo" class="search-input" name="dateTo" value="<?php echo isset($_GET['dateTo']) ? $_GET['dateTo'] : ''; ?>" required>
                    <br>
                    
                    
                    <input class="search-buttonFiltro" type="submit"  value="Bilatu" />
                </form>
            </div>
        </div>
        




        <div class="h1"><H1>Berriak:</H1></div>
        <div class="BERRIAK">
        <?php
            $servername = "localhost"; 
            $username = "root"; 
            $password = "1WMG2023";  
            $dbname = "erronka"; 

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Errorea: " . $conn->connect_error);
            }

            

            
            $dateFilterFrom = isset($_GET['dateFrom']) ? date('Y-m-d', strtotime($_GET['dateFrom'])) : 'all';
            $dateFilterTo = isset($_GET['dateTo']) ? date('Y-m-d', strtotime($_GET['dateTo'])) : 'all';

            
            $fecha = isset($_GET['fecha']) ? date('Y-m-d', strtotime($_GET['fecha'])) : 'all';
            $lehenGero = (isset($_GET["seleccion1"])) ? $_GET["seleccion1"] : "";

            if ($dateFilterFrom != 'all' && $dateFilterTo != 'all') {
                $sql = "SELECT * FROM berriak WHERE fecha BETWEEN '$dateFilterFrom' AND '$dateFilterTo'";
            } 
            elseif ($fecha != 'all' and $lehenGero == "aurreragokoak") {
                $sql = "SELECT * FROM berriak WHERE fecha >= '$fecha'";
            } 
            elseif ($fecha != 'all' and $lehenGero == "lehenagokoak") {
                $sql = "SELECT * FROM berriak WHERE fecha <= '$fecha'";
            } 
            else {
                $sql = "SELECT * FROM berriak";
            }
            $sql = $conn->query($sql);

            if ($sql->num_rows > 0) {
                
                
                while ($row = $sql->fetch_assoc()) {
                    echo "<div class=\"etiketak\"><b>".$row["izenburua"] . "</b><br><br>" . $row["descripcioLaburra"]. "<br><br><b>". $row["fecha"]."</b></div>" ;
                }
                
            } else {
                echo "Ez dago datuak taulan.";
            }
            
            $conn->close();
            ?>
        </div>















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




    </div>










    







    
</body>
</html>
