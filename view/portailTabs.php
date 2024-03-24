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
    // var_dump area
  //   var_dump($songs);    
        ?>
    <div class="global">
        <aside class="leftAside">Img Here</aside>
        <div class="mainH">
            <h1>Handy place to store Tabs :&rpar;</h1>
            <nav>Links back to Portal</nav>
        </div>
        <aside class="rightAside">Img Here
            </aside>
            
            
            <aside class="artAside">Artists Here
                <ul>
                    <?php  foreach ($artists as $artist) : 
                        ?>
                     <a href="?art=<?=$artist["art_id"]?>"><li class="showSong"><?=$artist["art_name"]?></li></a>
                        <?php 
                    endforeach; ?>
                    </ul>
                </aside>
                <section class="songWindow">
                <?php 
                if (isset($songs)) {
                    foreach ($songs as $song) : 
                        
                        ?>
                            <ul class="songList">
                        <a href="?art=<?=$song["artist_id"]?>&slug=<?=$song["song_slug"]?>"><li><?=$song["song_name"]?></li></a>
                        <?php 
                    endforeach; 
                }
                    ?>
                        </ul>
                        <a href="">Add Tab</a>
                    </section>
                    <main class="tabWindow">Tabs Here
                        <section class="tabWindow">
                    <?php 
                if (isset($tabs)) {                
                    foreach ($tabs as $tab) :     
                        ?>
                            <pre>
                                <p><?=$tab["tab"]?></p>
                            </pre>
                        </section>
                        <?php 
                 endforeach;
            }
                    ?>
                        </main>
    </div>
<script src="scripts/tabs.js"></script>
</body>
</html>