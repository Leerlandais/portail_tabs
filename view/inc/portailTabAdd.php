<fieldset>
    <legend>Add an Artist</legend>
    <form action="" method="POST">
        <label for="artNom">Artist : </label><input type="text" name="artNom">
        <button type="submit">Add</button>
    </form>
</fieldset>
<fieldset class="addSong">
    <legend>Add a Song</legend>
    <?php 
        if (isset($e)) {
            echo $e;
        }
    
     foreach ($artists as $artist) : ?>
        <form action="" method="POST" class="addSongForm">
        <?=$artist["artist_name"]?>
        <input type="text" name="songName"></label>
        <input type="text" name="songTab"></label>
        <input type="text" name="artID" value="<?=$artist["artist_id"]?>">
        <button type="submit">Add</button>

        <?php endforeach; ?>
    </form>
    
</fieldset>
<!--
<fieldset>
    <legend>Add a Tab</legend>
    <form action="" method="POST">
        <label for="fullTab">Tab : </label><input type="text" name="fullTab">
    </form>
</fieldset>
    -->