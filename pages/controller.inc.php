<?php
    const long_title = "Ciné classique";
    $_date = date("d - m - Y");

        class Page{
            static $_copyright = "Djony Herbaut - All right reserved ";
            public $_title = "Ciné";
            public $_link = "./css/reset.css";
            static $_manifest = "./favicon/site.webnifest";
            static $_lang = ["fr","en"];

            /* connexion à la bdd */
            public function fn(string $msg){
                return $msg;
            }
        }
        $_new_page = new Page(); /* instance de Page:: */