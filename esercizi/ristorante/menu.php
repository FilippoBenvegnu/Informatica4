<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MENU PIZZERIA BENVE </title>
    <style>
        .pizza-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .pizza-info {
            text-align: center;
        }
    </style>
</head>
<body style="font-family:verdana" bgcolor = "yellow" width = "100%">

    <h1 align="center" style=color:red> MENU PIZZERIA BENVE </h1>

    <?php
        $menu = array(
        "Pizza Margherita" => array("price" => 6.50, "descrizione" => " è una pizza Margherita fatta in casa che incarna l'essenza della cucina italiana classica. Ogni fetta è un viaggio nei sapori autentici, una celebrazione della semplicità che rende questo piatto un'icona della gastronomia italiana. Goditi la perfezione di questa pizza, dove gli ingredienti freschi e la maestria culinaria si fondono per creare un'opera d'arte gastronomica nel comfort della tua cucina.", "image" => "https://www.reteteitaliene.ro/bucataria/wp-content/uploads/2022/02/pizza_margherita.jpg"),
        "Pizza Diavola" => array("price" => 7.50, "descrizione" => "Questa pizza Diavola è una pizza che risveglia i sensi con il suo carattere audace e il suo tocco piccante. La pizza Diavola fatta in casa è un'esperienza culinaria che sfida il palato, portando un po' di fuoco e passione direttamente sulla tua tavola.", "image" => "https://www.nordy.it/it/prodotto/gallery/pizza-diavola-napoletana_674_L_diavola.jpg"),
        "Pizza Vegetariana" => array("price" => 8.00, "descrizione" => "Il risultato è una pizza Vegetariana fatta in casa che non solo sazia il palato ma delizia anche gli occhi. Un'esperienza culinaria che celebra la freschezza e la varietà delle verdure, dimostrando che la cucina senza carne può essere altrettanto appagante e deliziosa.", "image" => "https://media.istockphoto.com/id/1430885903/it/foto/pizza-vegetale-in-stile-newyorkese-con-broccoli-olive-e-funghi.jpg?s=612x612&w=0&k=20&c=OOGs55WNTVCnJpYhfbXXgm5GlTovy2qUN1x2oIV0j9c="),
        "Pizza Quattro Formaggi" => array("price" => 9.50, "descrizione" => "Questa pizza Quattro Formaggi fatta in casa è un viaggio attraverso la ricchezza e la varietà dei formaggi italiani, portando il lusso di una pizzeria artigianale direttamente nella tua cucina. Sia che tu sia un amante dei formaggi o un nuovo esploratore di sapori, questa creazione casalinga ti avvolgerà in un abbraccio di formaggio deliziosamente indimenticabile.", "image" => "https://frenks.de/cdn/shop/products/Pizza4Formaggi_1024x1024.jpg?v=1599747823"),
        "Pizza Capricciosa" => array("price" => 9.00, "descrizione" => "Questa è una pizza Capricciosa fatta in casa che soddisfa tutti i sensi, unendo sapori classici italiani in un esplosione di gusto che delizierà il palato di chiunque abbia il piacere di assaporarla. Questa pizza è un inno all autenticità e alla freschezza, portando il calore e la tradizione direttamente sulla tua tavola.", "image" => "https://italianspizza.it/wp-content/uploads/2022/06/FAMILY-PIZZA-CAPRICCIOSA-online-pizza-delivery-consegna-a-domicilio-aperti-7-giorni-su-7-eventi-mirandolo-terme-borghetto-lodigiano-lodi-milano-italia.png")
    );
    ?>

    <?php
    foreach ($menu as $pizza => $info) {
        echo "<div class='pizza-container'>";
        echo "<hr>";
        echo "<img src='{$info['image']}' alt='$pizza' width='150' height='150'>";
        echo "<div class='pizza-info'>";
        echo "<h2>$pizza</h2>";
        echo "<p>Prezzo: {$info['price']} €</p>";
        echo "<p> {$info['descrizione']} </p>";
        echo "</div>";
        echo "</div>";
    }
    ?>

</body>
</html>
