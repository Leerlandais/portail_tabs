        
<aside class="rightAside">
    </aside>
    
    
    <aside class="artAside">Artists Here
        <ul>
           <a href="?pg&sort=all"><li>Show All Songs</li></a> 
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
                <a href="?pg&slug=<?=$song["song_slug"]?>"><li><?=$song["song_name"]?></li></a>
                <?php 
            endforeach; 
        }
        if (isset($tabs)) {                
            ?>
                </ul>
                
            </section>
            <main class="tabWin">Tabs Here
                <section class="tabWindow">
            <?php 
            
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
                    }else if (isset($checkedPwd) && $checkedPwd == true) {
                        include("portailTabAdd.php");
                    }else if (isset($_GET["add"])) {
                        include("portailTabAdd.php");
                    }
                    
                    ?>
            <?php } ?>
        </section>
                </main>