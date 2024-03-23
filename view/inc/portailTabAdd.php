<fieldset>
    <legend>Add an Artist</legend>
    <form action="" method="POST">
        <label for="artNom">Artist : </label><input type="text" name="artNom">
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
        <li class="tabArtName"><?=$artist["artist_name"]?></li>
            <div class="addWindow">
                <form action="" method="POST">
                    <label for="songNom">Song : </label>
                        <input type="text" name="songNom" id="songNamer">
                        <input type="text" name="songSlug" id="songSlugger">
                        <label for="songTab">Tab : </label>
                        <input type="text" name="songTab">
                        <button type="submit">Add Song</button>
                </form>
            </div>
        <?php endforeach; ?>
        </ul>
    
</fieldset>
<!--
<fieldset>
    <legend>Add a Tab</legend>
    <form action="" method="POST">
        <label for="fullTab">Tab : </label><input type="text" name="fullTab">
    </form>
</fieldset>
    -->