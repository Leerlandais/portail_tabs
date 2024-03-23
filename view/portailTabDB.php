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
// var_dump($artists);
?>
<h1>My Favourite Tablatures</h1>
<a href="?pg=tabsLee" class="uglyLink"><h4>Back to Tabs</h4></a>
<?php if (!isset($checkedPwd)) {?>
<form action="" method="POST">
    <input type="password" name="pwd" id="pwd">
    <button type="submit">Enter</button>
</form>

<?php
}else if (isset($checkedPwd) && $checkedPwd === true) {
    include("inc/portailTabAdd.php");
}else {
    echo "Enter the Password";
}
?>
<script src="scripts/tabs.js"></script>
</body>
</html>

