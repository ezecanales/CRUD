<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
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
                <h3>Ingrese los datos del nuevo juego</h3>
               
                <form action="logica/proceso_agregar.php" method="POST">
                    <div class="form-group">
                        <label for="id">Ingrese el ID del juego</label>
                        <input id="id" name="id" type="text" required="required" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Ingrese el nombre del juego:</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="fecha">Ingrese la fecha de lanzamiento:</label>
                        <input id="fecha" name="fecha" type="date" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Ingrese una breve descripción:</label>
                        <textarea id="descripcion" name="descripcion" cols="40" rows="3" class="form-control" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="consola">Consola:</label>
                        <div>
                            <select id="consola" name="consola" class="custom-select" required="required">
                                <?php
                                    $consolas = new Database();
                                    $res2 = $consolas->mostrarConsolas();
                                    if(!$res2){
                                        ?>
                                        <option>Consolas no encontradas</option>
                                        <?php
                                    }else{
                                        while($row = mysqli_fetch_object($res2)){
                                            ?>
                                            <option value="<?php echo $row->id; ?>"><?php echo $row->nombre; ?></option>
                                            <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
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