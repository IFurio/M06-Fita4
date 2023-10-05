<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 41 pagina 3</title>
</head>
<body>
    <h1>Endevina el Nombre</h1>
    
        
        <?php
            session_start();
            function formulari() {
                echo "<form method='POST'>\n";
                echo "  <input type='number' name='endevina'>\n";
                echo "  <input type='submit' value='endevina'>\n";
                echo "</form>";
            }
            if (!isset($_POST['endevina'])) {
                formulari();
            } else {
                if ($_POST["endevina"] === $_SESSION['ocult']) {
                    echo "<h3>Felicidades has acertado!</h3>";
                    echo "<a href=ex41pagina1.php>Tornar a l'inici.</a>";
                }
                else if ($_POST["endevina"] < $_SESSION['ocult']) {
                    echo "<h3>El numero que estas buscando es más grande</h3>";
                    formulari();
                }
                else if ($_POST["endevina"] > $_SESSION['ocult']) {
                    echo "<h3>El numero que estas buscando es más pequeño</h3>";
                    formulari();
                }
            }
        ?>
    </form>
</body>
</html>