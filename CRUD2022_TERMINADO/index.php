<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            font-size: 60px;
            margin-top: 180px;
            color: #000;
            text-shadow: 0 0 10px #ff0000, 0 0 20px #00ff00, 0 0 30px #0000ff, 0 0 40px #ffff00, 0 0 50px #ff00ff, 0 0 60px #00ffff, 0 0 70px #ffffff;
            animation: shadowEffect 5s infinite alternate;
        }

        @keyframes shadowEffect {
            0% { text-shadow: 0 0 10px #ff0000; }
            14% { text-shadow: 0 0 20px #00ff00; }
            28% { text-shadow: 0 0 30px #0000ff; }
            42% { text-shadow: 0 0 40px #ffff00; }
            57% { text-shadow: 0 0 50px #ff00ff; }
            71% { text-shadow: 0 0 60px #00ffff; }
            85% { text-shadow: 0 0 70px #ffffff; }
            100% { text-shadow: 0 0 10px #ff0000; }
        }
    </style>
</head>
<body>
    <?php include("menu/admin.html"); ?>
    <h1>SEAN BINVENIDOS AL CRUD SOBRE JUEGOS</h1>
</body>
</html>