<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menù Ristorante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

    <h2>Menu del Ristorante</h2>
    <?php
    $pizze = array("Pizza Viennese", "Pizza Margherita", "Pizza Patatosa", "Pizza Marinara", "Pizza Diavola");
    echo "<ul>";
    foreach ($pizze as $piatto) {
        echo "<li>$piatto</li>";
       echo "</ul>";
    }
    foreach ($pizze as $piatto) {
    echo 'img src=https://shop.medicair.it/wp-content/uploads/2022/07/Pizza-Margherita-1.jpg'
    }
      ?>

</body>
</html>

