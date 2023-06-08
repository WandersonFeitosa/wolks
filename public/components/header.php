<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wolkswagen</title>
    <!-- Favico -->
    <link rel="shortcut icon" href="./assets/img/logo-wolks.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/main.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

    <script>
        if (window.location.pathname == "/login") {
            console.log(localStorage.getItem("token"));
            if (localStorage.getItem("token")) {
                window.location.href = "./internal";
            }
        }
    </script>
    
    <?php
    session_start();
    ?>
</head>

<body>