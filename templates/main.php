<main>

 <!--   <pre style="font-size: 20px; overflow: scroll; height: 150px;">
        <?php var_dump($data); ?>
    </pre> -->

<section>
    <img src="<?= $poster_url;?>" width=300 alt="poster de <?= $title;?> "
        style="border-radius: 10px"

    />  
</section>

<hgroup>
    <h3> <?= $title;?> <br/> <?= $until_message?></h3>
    <p>Fecha de estreno: <?= $release_date;?> </p>
    <p>La siguiente pelicula es <?= $following_production;?></p>
</hgroup>

</main>