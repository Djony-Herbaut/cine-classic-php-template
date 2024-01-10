<?php
    include_once __DIR__."/pages/controller.inc.php"
?>

<!-- inclusion de la template -->
<ul id="collection">
    <?php foreach($_response as $_movie):?> <!--itération avec la bdd -->
        <li>
            <figure>
                <img src="<?= $_movie['cover'] ?>" alt="<?=$_movie['titre']?>">
                    <figcaption>
                    <h2>
                        <span aria-hidden="true">&#128253;</span>
                        <?= strip_tags($_movie['titre'])?>
                   </h2>
                    <p><strong>Réalisateur</strong> : <?= $_movie['realisateur'] ?></p>
                    <p><strong>Sortie</strong> : <?= $_movie['date'] ?></p>
            
                    <a  class="button" href="<?= $_movie['url'] ?>" target="blank">Détails</a>
                </figcaption>
            </figure>
        </li>
    <?php endforeach; ?>
</ul>