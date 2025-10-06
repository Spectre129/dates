<?php
session_start();

if ($_SESSION["gLogin"] == 1)
{
  //echo "g logged in";
}
if ($_SESSION["eLogin"] == 1)
{
  //echo "e logged in";
}
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
            <div class = "col">
                <img src = "../images/datedeal.png">
          </div>
        </div>
        <div class = "row mt-2">
          <div class = "col mt-5">
            <img src = "../images/g.png">
          </div>
          <div class = "col mt-5 ms-5">
            <img src = "../images/e.png">
          </div>
        </div>
        <div clas = "row">
          <a href = "home.php" class = "btn"> Home </a>
        </div>
    </div>
  </body>
</html>