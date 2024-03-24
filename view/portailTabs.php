<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabs Page</title>
        <link rel="stylesheet" href="styles/newTabs.css">
        
    </head>
    <body>
        <?php 
    // var_dump area
  //   var_dump($songs);    
  $checkedPwd = true;
        ?>
    <div class="global">
        <aside class="leftAside"></aside>
        <div class="mainH">
            <h1>Handy place to store Tabs :&rpar;</h1>
            <nav>Links back to Portal and <a href="?pcheck">Add Tab</a></nav>
        </div>
        <aside class="rightAside">
            </aside>
            
            
            <aside class="artAside">Artists Here
                <ul>
                    <?php  foreach ($artists as $artist) : 
                        ?>
                     <a href="?pg&art=<?=$artist["art_id"]?>"><li class="showSong"><?=$artist["art_name"]?></li></a>
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
                        <a href="?pg&art=<?=$song["artist_id"]?>&slug=<?=$song["song_slug"]?>"><li><?=$song["song_name"]?></li></a>
                        <?php 
                    endforeach; 
                }
                    ?>
                        </ul>
                        
                    </section>
                    <main class="tabWin">Tabs Here
                        <section class="tabWindow">
                    <?php 
                    
                if (isset($tabs)) {                
                    foreach ($tabs as $tab) :     
                        ?><button onClick="scrollToBottom('.tabWindow',1000)">Scroll to Bottom</button>
                            <pre>
                                <p><?=$tab["tab"]?></p>
                            </pre>
                            <?php 
                 endforeach;
                }
                    ?>
                    <?php
                    if (isset($_GET['pcheck'])) { ?>
                        <?php if (!isset($checkedPwd)) {
                            echo "Enter the Password";?>
                            <form action="" method="POST">
                                <input type="password" name="pwd" id="pwd">
                                <button type="submit">Enter</button>
                            </form>
                            
                            <?php
                            }else if (isset($checkedPwd)) {
                                include("inc/portailTabAdd.php");
                            }else if (isset($_GET["add"])) {
                                include("inc/portailTabAdd.php");
                            }
                            
                            ?>
                    <?php } ?>
                </section>
                        </main>
    </div>
<script src="scripts/tabs.js"></script>
</body>
</html>