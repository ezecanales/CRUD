<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgregarC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h3 {
            color: #333333;
        }

        form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>

</head>

<body>
    <?php 
        include("menu/admin.html");
        include("logica/database.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>ingrese datos de la nueva consola</h3>
               
                <form action="logica/proceso_agregar_consola.php" method="POST">
                    <div class="form-group">
                        <label for="id">ingrese el ID de la consola</label>
                        <input id="id" name="id" type="text" required="required" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Ingrese el nombre de la consola:</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="fecha">Ingrese la fecha de lanzamiento:</label>
                        <input id="fecha" name="fecha" type="date" value="<?php echo $res->fechalan; ?>" class="form-control" required="required" >
                    </div>
                    <div class="form-group">
                        <label for="marca">Ingrese la marca:</label>
                        <input id="marca" name="marca" type="text" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <button name="submit" type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>