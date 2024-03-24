<?php

require_once "../config.php";
require_once "../model/portailTabsModel.php";


try {
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}    

$artists = getArtists($db); // I find it really annoying that this MUST BE PLACED BEFORE the 'pg' switch!!! 
// $songs = getSongs($db);

if (isset($_GET["art"])) {
    $songs = getSongs($db, $_GET["art"]);
  //  header ("./");
}

if (isset($_GET["slug"])) {
    $tabs = getTab($db, $_GET ["slug"]);
}

if (isset($_POST["pwd"])) {
    
    $checkedPwd = checkPass($_POST["pwd"]); 

}

if (isset($_POST["artNom"])) {
    $addArtist = addArtist($db,$_POST['artNom']);

}

if (isset($_POST["songNom"]) && isset($_POST["songSlug"]) && isset($_POST["songTab"]) && isset($_POST["artId"])) {
    //   var_dump($_POST["songNom"], $_POST["songTab"], $_POST["songSlug"], $_POST["artId"]);
       $addTab = addTablature($db, $_POST["songNom"], $_POST["songSlug"], $_POST["songTab"], $_POST["artId"]);
   }



            include("../view/portailTabs.php");

    

/*


$artists = getArtists($db);
$songs = getSongs($db);
// $tabs = getTabs($db);

if (isset($_GET["song"])) {
    $thisSong = $_GET["song"];
    $tabs = getTabs($db, $thisSong);
}
    

//  -------------     TABS    --------------  

if (isset($_POST["pwd"])) {
    $checkedPwd = false;
    $checkedPwd = checkPass($_POST["pwd"]); 
}

if (isset($_POST["artNom"])) {   

        $addArt = addArtist($db,$_POST['artNom']);
        
        if ($addArt) {        
            header("./"); 
            exit();
        } else {        
            $messageError = "Something went wrong";
        }    
        
    }   

if (isset($_POST["songNom"]) && isset($_POST["songSlug"]) && isset($_POST["songTab"]) && isset($_POST["artId"])) {
 //   var_dump($_POST["songNom"], $_POST["songTab"], $_POST["songSlug"], $_POST["artId"]);
    $addTab = addTablature($db, $_POST["songNom"], $_POST["songSlug"], $_POST["songTab"], $_POST["artId"]);
}
    */
//  -------------     CONTROLLER    --------------  

 // $db =null;


                            
    