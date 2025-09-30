<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
session_unset();

$_SESSION["gLogin"] = 0;
$_SESSION["eLogin"] = 0;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dates!!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel = "stylesheet" href = "../style.css">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <div class = "container">
        <div class = "row">        
            <div class = "col-3"></div>
            <div class = "col">
                <img src = "../images/ru.png">
            </div>
        </div>
        <div class = "row">
          <div class = "col">
            <a href = "../controller/controller.php?user=gavin" class = "btn">
              <img src = "../images/gavin.png">
            </a>
          </div>
          <div class = "col">
            <a href = "../controller/controller.php?user=erin" class = "btn">
              <img src = "../images/erin.png">
            </a>
          </div>
        </div>
    </div>
  </body>
</html>