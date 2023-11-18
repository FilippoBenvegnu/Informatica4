<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu del Ristorante</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #menu {
            width: 300px;
            margin: 0 auto;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div id="menu">
    <h2>Menu del Ristorante</h2>
    <?php
    // Array contenente i nomi dei piatti
    $piatti = array("Pasta alla Carbonara", "Pizza Margherita", "Insalata Caprese", "Osso Buco", "Tiramisù");

    // Genera dinamicamente il menu
    echo "<ul>";
    foreach ($piatti as $piatto) {
        echo "<li>$piatto</li>";
    }
    echo "</ul>";
    ?>
</div>

</body>
</html>
