<fieldset>
    <legend>Add an Artist</legend>
    <form action="" method="POST">
        <label for="artNom">Artist : </label><input type="text" name="artNom" required>
        <button type="submit">Add</button>
    </form>
</fieldset>
<fieldset class="addSong">
    <legend>Add a Song</legend>
    <ul>
    <?php 
        if (isset($messageError)) {
            echo $messageError;
        }
    
     foreach ($artists as $artist) : ?>
       <a href="?pcheck&add=<?=$artist["art_id"]?>"><li class="tabArtName"><?=$artist["art_name"]?></li></a>
            <div class="addWindow">

            <?php endforeach; ?>
        </ul>
        
    </fieldset>
    <?php if (isset($_GET["add"])) { ?>
        <form action="" method="POST">
            <label for="songNom">Song : </label>
            <input type="text" name="songNom" id="songNamer" required>
            <input type="text" name="songSlug" id="songSlugger" style="display: none;">
            <input type="text" name="artId" value="<?=$_GET["add"]?>" style="display: none;">
            <label for="songTab">Tab : </label>
            <textarea name="songTab" cols="30" rows="10" required>
                </textarea>
                <button type="submit">Add Song</button>
            </form>
            <p class="slugWindow">Auto Generated Slug :</p>
            <p class="slugWindow"><span id="showSlug"></span></p>
    <?php 
}
 ?>   

        