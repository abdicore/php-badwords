<?php 
$testo = $_GET["paragrafo"];
$parola = $_GET["parolaCensurata"];


?>


<?php 
$saluto = "ciao"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>il tuo paragrafo è:</h1>
    <p> <?php echo $_GET["paragrafo"]  ?></p>
    <h2>la lunghezza del paragrafo è:</h2>
    <h2><?php echo strlen($testo)  ?></h2>
    <h2>la tua badword è:</h2>
    <h2><?php echo $_GET["parolaCensurata"]  ?></h2>
    <h2>ora il tuo testo con la parola cancellate è:</h2>
    <p><?php echo str_ireplace( $parola,"***",$testo)  ?></p>
</body>
</html>