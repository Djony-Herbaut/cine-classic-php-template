<?php
    include_once __DIR__."/pages/head.inc.php";
    include_once __DIR__."/pages/connection.inc.php";
?>
 <body>
        <header>
            <h1>
                <span aria-hidden="true">&#128253;</span>

               <?= long_title ?>      </h1>
        </header>

        <main>
            <div class="primary-collection" role="group" aria-labelledby="collection">
                <?php
                    include_once __DIR__."/pages/collection_film.inc.php";
                ?>                
            </div>
        </main>
        
    <?php

    include_once __DIR__."/pages/footer.inc.php"
    ?>
    </body>