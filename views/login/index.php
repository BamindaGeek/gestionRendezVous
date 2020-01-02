<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 22/09/2019
 * Time: 01:11
 */
//Le fichier qui contient toutes les constantes du systemes
include '../../tools/tools.php';
//Insertion des vues
$menu =1;
$title ='Connexion utilisateur';
include '../default/head.php';
include 'login.php';
include '../default/foot.php';

?>
    <script src="<?php echo $myConstante::$metier;?>login.js"></script>
    </body>
</html>