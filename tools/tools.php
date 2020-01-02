<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 03/11/2018
 * Time: 11:41
 */
session_cache_expire(2);
session_cache_limiter(2);
session_start();
setlocale (LC_TIME, 'fr_FR.utf8','fra');  

//Cette class porte toutes les ressources static du site (url/chemin/ etc....)
class constantes
{
    public static $js;
    public static $css;
    public static $img;
    public static $fonts;
    public static $video;
    public static $url;
    public static $metier;
    public static $src;

    public static $createOne = 1; //cas de l'insertion d'un element 
    public static $createAll = 2; //cas de l'insertion de plus d'un element 
    public static $selectOne = 3; //cas de recuperation d'un element
    public static $selectAll = 4; //cas de recuperation de plus d'un element
    public static $selectByAgence = 5; //cas ou on fait la recuperation basée sur l'id de l'agence
    public static $updatedOne = 6; //cas de modification d'un element
    public static $updatedAll = 7; //cas de modification de plus d'un element
    public static $deletedOne = 8; //cas de suppression d'un element
    public static $deletedAll = 9; //cas de suppression de plus d'un element
    public static $selectAllBy = 10; //cas de recuperation d'un/des element suivant un paramètre

    public static $emptyDataTable='{
                                        "sEcho": 1,
                                        "iTotalRecords": 0,
                                        "iTotalDisplayRecords": 0,
                                        "aaData":[

                                        ]
                                    }';

    public static $sucsess = 1 ;
    public static $error = 0 ;

    public $response = array();
    private $domaine ;

    public  function __construct()
    {
        $this::$src= $this->getDomaine().'views/src/';
        $this::$css= $this->getDomaine().'views/src/css/';
        $this::$js= $this->getDomaine().'views/src/js/';
        $this::$metier= $this->getDomaine().'views/src/metier/';
        $this::$img= $this->getDomaine().'views/src/images/';
        $this::$video= $this->getDomaine().'views/src/video/';
        $this::$video= $this->getDomaine().'views/src/doc/';
        $this::$fonts= $this->getDomaine().'views/src/fonts/';

        $this::$url= $this->getDomaine().'views/';
    }

    /**
     * @return mixed
     */
    public function getDomaine()
    {
        return (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]/rendezvous/";
    }

    /**
     * @param mixed $domaine
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;
    }

    //Declaration des methode scalaire
    public function generateGUIS() // Generer un GUID
    {

    }
    public function getDateEnglish() // Date en anglais
    {
        return Date('Y-m-d');
    }
    public function getDateFrench() // Date en francais
    {
        return strftime("%A %d %B");
    }

    //Recuperer l'adresse ip de l'utilisateur
    public static function recuperAdresseIp() 
    {

        $http_x = 'HTTP_X_FORWARDED_FOR';
        $http_client = 'HTTP_CLIENT_IP';
        $remote = 'REMOTE_ADDR';

        if (getenv($http_x)) 
        {
            return getenv($http_x);
        } elseif (getenv($http_client)) {
            return getenv($http_client);
        } else {
            return getenv($remote);
        }
    }
    //La date en francais (date et time)
    public static function dateformatFrancais($Odate) 
    {

        $date = date_create($Odate);
        $time = date_format($date, 'd/m/Y H:i:s');
        return $time;
    }

    public static function dateformatFrancaishort($Odate) 
    {

        $date = date_create($Odate);
        $time = date_format($date, 'd/m/Y');
        return $time;
    }

    public static function GetDate($Odate) 
    {

        $date = strtotime($Odate);

        $my_date = date('Y-m-d', $date);

        echo $my_date;


        $date = DateTime::createFromFormat('l j F Y ', 'Mer. 24/12/2014');
        echo $date->format('j F Y');
    }

    /**
    Get Two Date , Calculate days
     * */
    public static function GetDaysBeetwenTwoDates($datedebut, $datefin) 
    {
        $now = $datedebut; // or your date as well
        $your_date = $datefin;
        $datediff = $now - $your_date;
        // echo floor($datediff / (60 * 60 * 24));
        return floor($datediff / (60 * 60 * 24));
    }
    //Date en francais
    public static function dateFrEn($date = '00-00-0000') 
    {
        if ($date != '00-00-0000') {
            list($annee, $mois, $jour) = explode('-', $date);
            return $jour . '-' . $mois . '-' . $annee;
        }
    }
    //Generer un GUID
    public static function generateGuid() 
    {
        $uuid = array(
            'time_low' => 0,
            'time_mid' => 0,
            'time_hi' => 0,
            'clock_seq_hi' => 0,
            'clock_seq_low' => 0,
            'node' => array()
        );

        $uuid['time_low'] = mt_rand(0, 0xffff) + (mt_rand(0, 0xffff) << 16);
        $uuid['time_mid'] = mt_rand(0, 0xffff);
        $uuid['time_hi'] = (4 << 12) | (mt_rand(0, 0x1000));
        $uuid['clock_seq_hi'] = (1 << 7) | (mt_rand(0, 128));
        $uuid['clock_seq_low'] = mt_rand(0, 255);

        for ($i = 0; $i < 6; $i++) {
            $uuid['node'][$i] = mt_rand(0, 255);
        }

        $toReturn = sprintf('%08x-%04x-%04x-%02x%02x-%02x%02x%02x%02x%02x%02x', $uuid['time_low'], $uuid['time_mid'], $uuid['time_hi'], $uuid['clock_seq_hi'], $uuid['clock_seq_low'], $uuid['node'][0], $uuid['node'][1], $uuid['node'][2], $uuid['node'][3], $uuid['node'][4], $uuid['node'][5]
        );

        return $toReturn;
    }
    public function encryptItMD5($q) 
    {
        $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
        $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
        return( $qEncoded );
    }

    public function decryptItMD5($q) 
    {
        $cryptKey = 'qJB0rGtIn5UB1xG03efyCp';
        $qDecoded = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
        return( $qDecoded );
    }
}


$myConstante = new constantes();

//variable de test pour les actions à effectuer
$varTest = isset($_REQUEST['test']) && !empty($_REQUEST['test']) ? $_REQUEST['test'] : null ;
//Genejration d'un new GUID
$newGuid = $myConstante::generateGuid();
//Get user connected guid
$userConnectedGuid = isset($_SESSION['usersRDV']) ? $_SESSION['usersRDV']['idUtilisateurs'] : null ;
// Declaration des variables reutilisatbles
$varCnx = $class = null;

