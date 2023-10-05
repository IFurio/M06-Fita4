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
                    $_SESSION['intents'] += 1;
                    echo "<h4>Intentos = " . $_SESSION['intents'];
                    echo "<br><a href=ex41pagina1.php>Volver al inicio.</a>";
                }
                else if ($_POST["endevina"] < $_SESSION['ocult']) {
                    echo "<h3>El número que estás buscando es más grande</h3>";
                    $_SESSION['intents'] += 1;
                    array_push($_SESSION['historial'], $_POST["endevina"]);
                    $nums = "";
                    foreach ($_SESSION['historial'] as $num) {
                        $nums .= $num . ", ";
                    }
                    $nums = substr($nums, 0, -2);
                    echo "<h4>Intentos = " . $_SESSION['intents'];
                    echo "<h4>Números introducidos: $nums</h4>";
                    formulari();
                }
                else if ($_POST["endevina"] > $_SESSION['ocult']) {
                    echo "<h3>El número que estás buscando es más pequeño</h3>";
                    $_SESSION['intents'] += 1;
                    array_push($_SESSION['historial'], $_POST["endevina"]);
                    $nums = "";
                    foreach ($_SESSION['historial'] as $num) {
                        $nums .= $num . ", ";
                    }
                    $nums = substr($nums, 0, -2);
                    echo "<h4>Intentos = " . $_SESSION['intents'];
                    echo "<h4>Números introducidos: $nums</h4>";
                    formulari();
                }
            }
        ?>
    </form>
</body>
</html>