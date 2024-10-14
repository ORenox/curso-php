<?php
    const API_URL = "https://whenisthenextmcufilm.com/api";
    #inicializar una nueva sesion de cURL; ch = cURL handle
    $ch = curl_init(API_URL);

    //indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla

    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

    /*ejecutar la petición  y 
    guardamos el resultado
     */

    $result= curl_exec($ch);

    $data = json_decode($result,true);

    curl_close($ch);

    
?>



<head>
    <title>La próxima película de marvel</title>
    <meta charset="UTF-8"/>
    <meta name="description" content="la próxima película de marvel">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>

    <!-- Centered viewport -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >

    
</head>



<main>

 <!--   <pre style="font-size: 20px; overflow: scroll; height: 150px;">
        <?php var_dump($data); ?>
    </pre> -->

<section>
    <img src="<?= $data["poster_url"];?>" width=300 alt="poster de <?= $data["title"];?> "
        style="border-radius: 10px"

    />
</section>

<hgroup>
    <h3> <?= $data["title"];?> se estrena en <?= $data["days_until"];?>  días :0</h3>
    <p>Fecha de estreno: <?= $data["release_date"];?> </p>
    <p>La siguiente pelicula es <?= $data["following_production"]["title"];?></p>
</hgroup>

</main>



<style>
    :root{
        color-scheme: light-dark;
    }

    body{
        display: grid;
        place-content: center;
        padding: 100px;
    }

    section{
        display: flex;
        justify-items: center;
    }
    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img{
        margin: 0 auto;


    }
</style>