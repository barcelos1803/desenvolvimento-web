<?php


    class SiteController{

        public function home(){
            require_once('views/templates/header.php');
            require_once('views/site/home.html');
            require_once('views/templates/footer.php');
        }
        public function sobreNos(){
            require_once('views/templates/header.php');
            require_once('views/site/sobreNos.html');
            require_once('views/templates/footer.php');
        }
        public function feminino(){
            require_once('views/templates/header.php');
            require_once('views/site/feminino.html');
            require_once('views/templates/footer.php');
        }
        public function infantil(){
            require_once('views/templates/header.php');
            require_once('views/site/infantil.html');
            require_once('views/templates/footer.php');
        }
        public function masculino(){
            require_once('views/templates/header.php');
            require_once('views/site/masculino.html');
            require_once('views/templates/footer.php');
        }
    }
?>