<fieldset>
    <legend>Add an Artist</legend>
    <form action="" method="POST">
        <label for="artNom">Artist : </label><input type="text" name="artNom">
        <button type="submit">Add</button>
    </form>
</fieldset>
<fieldset class="addSong">
    <legend>Add a Song</legend>
    
    <?php foreach ($artists as $artist) : ?>
        <form action="" method="POST" class="addSongForm">
        <label for="songNom"><?=$artist["artist_name"]?></label>
        <input type="text" name="songNom">
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