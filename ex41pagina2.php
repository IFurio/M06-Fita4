<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex41 pagina 2</title>
</head>
<body>
    <h1>Nombre Enregistrat</h1>
    <?php
        session_start();
        $_SESSION['ocult'] = $_POST['ocult'];
        $_SESSION['historial'] = [];
        $_SESSION['intents'] = 0;
    ?>
    <a href="ex41pagina3.php">Endevinar</a>
    
</body>
</html>