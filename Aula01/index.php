<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <a href="index.html" target="_blank" style=" background-color: grey; color: white;">Página Inicial</a>
        <a href="contato.html" target="_blank">Contato</a>
        <a href="calendario.html" target="_blank">Calendário</a>
    </div>
    <h1>AULA DE PHP - RELEMRANDO HTML</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quo neque repellendus vitae minus porro nostrum, optio quas non repellat itaque saepe aliquid beatae nam placeat magnam quae vero cum. Aliquam officiis ducimus illum animi numquam, nesciunt magnam atque voluptatum esse corrupti tenetur consequatur quo! Tempore vero natus assumenda explicabo fugit? Officiis ducimus error nam, architecto aspernatur praesentium cupiditate debitis accusamus odit provident magni, asperiores distinctio modi doloremque minus optio nihil ex! Soluta, similique facilis eligendi fugiat sapiente quidem ea.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam reprehenderit distinctio optio vero sit itaque voluptatibus deleniti necessitatibus commodi? Eligendi deserunt odio nostrum atque iure deleniti numquam veritatis laudantium hic soluta quidem dolorem eveniet reiciendis asperiores ut doloribus voluptatem quisquam, facere temporibus exercitationem consequuntur? A ut quo explicabo cum exercitationem dicta. Quam excepturi omnis illum nulla dolorem ratione labore maxime quidem molestiae debitis quis sit dignissimos, aspernatur eaque laudantium est delectus cumque fugiat. Incidunt mollitia voluptates consequatur est sed labore?</p>
    

    <?php 
    
        echo "<h2>Olá Mundo</h2>";
        $numero = 3;
        $numero2 = 4;
        $numero3 = $numero + $numero2;

        echo "-> ". $numero . " + " . $numero2 . " = " . $numero3; 


    
    ?>
</body>
</html>