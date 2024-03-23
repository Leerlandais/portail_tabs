<?php

function getArtists(PDO $db){

    $sql = "SELECT DISTINCT tabs_artist.artist_name, tabs_artist.artist_id
    FROM    tabs_artist
    LEFT JOIN tabs_song ON tabs_artist.artist_id = tabs_song.artists_id
    ORDER BY artist_name";

    $stmt = $db->prepare($sql);
    
    try {
    
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    
    }catch (PDOException $e){
    
        error_log("Error getting tabs: " . $e->getMessage());
        return false;
    
    }

} 

function getSongs(PDO $db){

    $sql = "SELECT *
    FROM    tabs_song
    JOIN    tabs_artist ON tabs_artist.artist_id = tabs_song.artists_id
    JOIN    tabs_tab ON tabs_song.song_id = tabs_tab.tab_id
    ORDER BY song_name";

    $stmt = $db->prepare($sql);
    
    try {
    
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    
    }catch (PDOException $e){
    
        error_log("Error getting tabs: " . $e->getMessage());
        return false;
    
    }

} 

function getTabs(PDO $db, $song) {

    $sql = "SELECT *
    FROM    tabs_tab
    JOIN    tabs_song ON tabs_tab.tab_id = tabs_song.song_id";

    $stmt = $db->prepare($sql);
    
    try {
    
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    
    }catch (PDOException $e){
    
        error_log("Error getting tabs: " . $e->getMessage());
        return false;
    
    }
}


function checkPass($passToCheck) {
    $cleanedPass = htmlspecialchars(strip_tags(trim($passToCheck)), ENT_QUOTES);
    if ($cleanedPass == MY_TABS_PWD) {
        return true;
    }else {
        header ("public");
    }
}

function addArtist (PDO $db, string $artName) {
    $cleanedName = htmlspecialchars(strip_tags(trim($artName)), ENT_QUOTES);
    if (empty($cleanedName)) {
        return false;
    }
    var_dump($artName);
    $sql = "INSERT INTO `tabs_artist`(`artist_name`) VALUES (:artName)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':artName', $cleanedName);
    try {
        $stmt->execute();
        $db->commit();
        return true;
    } catch (PDOException $e) {
        error_log("Error adding Artist: " . $e->getMessage());
        return false;
}
}



function addTablature (PDO $db, string $nom, string $slug, string $tab, string $artId) {
   // var_dump($nom, $slug, $tab);
   $cleanedNom = htmlspecialchars(strip_tags(trim($nom)), ENT_QUOTES);
   $cleanedSlug = htmlspecialchars(strip_tags(trim($slug)), ENT_QUOTES);
   $cleanedTab = htmlspecialchars(strip_tags(trim($tab)), ENT_QUOTES);
   $cleanedId = htmlspecialchars(strip_tags(trim($artId)), ENT_QUOTES);
//    var_dump($cleanedNom, $cleanedSlug, $cleanedTab, $cleanedId);
    
    $sql = "INSERT INTO `tabs_song` (`artists_id`,`song_name`) VALUES (:artID, :songName)"; 
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':artID', $cleanedId);
    $stmt->bindParam(':songName', $cleanedNom);
    try {
        $stmt->execute();
        
    } catch (PDOException $e) {
        error_log("Error adding message: " . $e->getMessage());
        return false;
    }
    
    $sqlSong = "INSERT INTO `tabs_tab` (`tab_name`, `full_song`) VALUES (:tabName, :fullSong)";
    $stmtSong = $db->prepare($sqlSong);
    $stmtSong->bindParam(":tabName", $cleanedSlug);
    $stmtSong->bindParam(':fullSong', $cleanedTab);

    try {
        $stmtSong->execute();
        return true;
    } catch (PDOException $e) {
        error_log("Error adding message: " . $e->getMessage());
        return false;
    }
}
