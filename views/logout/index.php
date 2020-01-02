<?php
/**
 * Created by PhpStorm.
 * User: FONTAINE
 * Date: 14/03/2017
 * Time: 18:14
 */
include_once('../../tools/tools.php');
if(isset($_SESSION['usersRDV']))
{
    session_destroy();

    unset($_SESSION['usersRDV']);

    header('location:'.$myConstante->getDomaine());
}
else{

    unset($_SESSION['usersRDV']);

    header('location:'.$myConstante->getDomaine());
}