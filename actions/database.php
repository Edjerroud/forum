<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}