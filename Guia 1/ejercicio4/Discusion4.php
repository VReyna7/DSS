<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discusion 4</title>
</head>
<body d-flex justify-content-center>
    <h1>Conversion de Dolares a Euros</h1>
    <form action="dolar_euro.php" method="post">
        <div class="mb-3">
            <label class="form-label">Ingrese un numero de dolares</label>
            <input type="text" name="dolares" class="form-label" require> 
        </div>
        <input type="submit" value="Convertir" class="btn btn-primary mb-3" >
    </form>
</body>
</html>