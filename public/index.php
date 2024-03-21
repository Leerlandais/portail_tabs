<?php

require_once "../config.php";
require_once "../model/portailTabsModel.php";


try {
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}    

$artists = getArtists($db);
$songs = getSongs($db);
// $tabs = getTabs($db);

if (isset($_GET["song"])) {
    $thisSong = $_GET["song"];
    $tabs = getTabs($db, $thisSong);
}
    

/*  -------------     TABS    --------------  */

if (isset($_POST["pwd"])) {
    $checkedPwd = false;
    $checkedPwd = checkPass($_POST["pwd"]); 
}

if (isset($_POST["artNom"])) {   
    var_dump($_POST["artNom"]);
    var_dump($db);
        $addArt = addArtist($db,$_POST['artNom']);
        
        if ($addArt) {        
            header("./"); 
            exit();
        } else {        
            $messageError = "Something went wrong";
        }    
        
    }   
if (isset($_POST["songNom"])) {
    var_dump($_POST['songNom']);
    var_dump($_POST['artID']);
}
    
/*  -------------     CONTROLLER    --------------  */

 // $db =null;
 if(isset($_GET["pg"])){
    switch($_GET["pg"]){
        case 'tabsLee':
            $title = "tabsLee";
            include("../view/portailTabs.php");
            break;
            case 'tabcontrol' :
                $title = "Add tabs";
                include("../view/portailTabDB.php");
                break;
                default :
                $title = "Page d'Accueil";
                include("../view/portailTabs.php");
            }
        }else{
            $title = "Page d'Accueil";
            include("../view/portailTabs.php");
            
    }

                            