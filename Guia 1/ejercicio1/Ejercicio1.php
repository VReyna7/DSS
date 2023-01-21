<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$cad = "El script que est&aacute;s ejecutando: " .$_SERVER["SERVER_NAME"]. $_SERVER['PHP_SELF'] .
". ";
echo "<h3>" . $cad . "</h3>";
?>

</body>
</html>