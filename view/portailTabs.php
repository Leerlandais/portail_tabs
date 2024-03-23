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
    // var_dump($db);    
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
                    <?php  foreach ($artists as $artist) : ?>
                        <li><?=$artist["art_name"]?></li>
                        <?php endforeach; ?>
                    </ul>
                </aside>
                <section class="songWindow">Songs Here
                    
                    </section>
                    <main class="tabWindow">Tabs Here
                        </main>
    </div>
<script src="scripts/tabs.js"></script>
</body>
</html>