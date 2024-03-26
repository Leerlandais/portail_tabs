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

        ?>
    <div class="global">
        <aside class="leftAside"></aside>
        <div class="mainH">
            <h1>Handy place to store Tabs :&rpar;</h1>
            <nav>Links back to Portal and <a href="?pcheck">Add Tab</a></nav>
        </div>
        <?php include_once("inc/portailTabNorm.php") ?>
    </div>
<script src="scripts/tabs.js"></script>
</body>
</html>