<?php
/**
 * Created by PhpStorm.
 * User: ABOUBAMBA
 * Date: 02/01/2020
 * Time: 12:02
 */

include '../tools/tools.php';
include '../class/connexion.php';

DEFINE('TYPE_CONNEXION',1);

if($varTest != null && $varTest == 1) {
    if (
        isset($_REQUEST['username']) && !empty($_REQUEST['username']) &&
        isset($_REQUEST['password']) && !empty($_REQUEST['password'])

    ) {
        $recupResultat = null;

        if(TYPE_CONNEXION == 1)
        {

        }
        else
        {
            $class =  new connexion($_REQUEST['username'],$_REQUEST['password'],true,1); //Instanciation de ma class

        }






        if($recupResultat != null && $recupResultat != 2 && sizeOf($recupResultat) > 0)
        {
            $myConstante->response['status']=false ;
            $myConstante->response['donnees']=$recupResultat;
            $myConstante->response['message']='Connexion réussit ...';
            //Session de l'utilisateur connecté
            $_SESSION['usersRDV']= $recupResultat;
        }
        else
        {
            $myConstante->response['status']=true ;
            $myConstante->response['message']='Utilisateur non reconnu par le système ...';
        }


    }
    else
    {
        $myConstante->response['status']=true ;
        $myConstante->response['message']='Veuillez saisir les parametres de connexion ...';

    }
}

echo json_encode($myConstante->response);
