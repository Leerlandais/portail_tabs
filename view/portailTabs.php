<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="styles/tabs.css">
    
</head>
<body>
<?php 
//    include("../../../view/inc/header.php");
    
?>

<fieldset class="artistField">
    <legend>Select Artis<a href="?pg=tabcontrol">t</a></legend>
    <div class="artistWindow">
        <ul class="artistList">
            <?php foreach ($artists as $artist) : ?>
                <li class="artistName"><?=$artist["artist_name"]?></li>
                    <ul class="songList">
                    <?php 
                        $i=1;
                        foreach ($songs as $song) : 
                            if ($song["artists_id"] == $artist["artist_id"]) {
                        ?>
                            <li class="songName"><a href="?song=<?=$song["song_id"]?>"><?=$song["song_name"]?></a></li>
                    <?php
                            } 
                            $i++;
                        endforeach; ?>

                    </ul>
                <?php endforeach; ?>
        </ul>
    </div>
</fieldset>
<p>Click <a href="?pg=tabcontrol" class="uglyLink">here</a> to add a tab</p>

    
<?php if (isset($tabs)) {  ?>
    <?php
    foreach($tabs as $tab) :
        if ($tab["tab_id"] == $_GET["song"]) {
            echo $tab["tab_name"]."<br>";  // stick tab in divs etc ?>
    <div class="tabHolder">
        <div class="tabWindow">
        <pre>
        <div class="chord"><?=$tab["full_song"];?></div>
        </div>
        </pre>
        </div>
        <?php
        }
    endforeach;
    }
?>

<script src="scripts/tabs.js"></script>
</body>
</html>