<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 10/11/2018
 * Time: 11:57
 */
session_start();
session_cache_limiter(10);
session_cache_expire(10);

if(isset($_SESSION['usersRendevous']) && !empty($_SESSION['usersRendevous']))
{
    header('location:Accueil');
}
else
{
    header('location:Login');
}