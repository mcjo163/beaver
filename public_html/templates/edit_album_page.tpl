{extends file="layout.tpl"}

{block name="title"}
    Beaver! |
    {if isset($album['title'])}
        Edit {$album['title']}
    {else}
        New Album
    {/if}
{/block}

{block name="content"}

    <form {if $form_type == "add"}action = "index.php" {/if}method ="POST" id="albumForm"
          enctype="multipart/form-data" style="margin-top:50px;">
        <div class="form-group row">
            <label for="cover" class="col-4 col-form-label">Album Cover</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <p>Select image to upload:&nbsp;</p>
                        <input type="file" name="cover" id="cover">
                    </div>
                </div>
            </div>
        </div>

        {if $error['imageError']}
            <div class="alert alert-danger">
                Album cover must be a .jpg image
            </div>
        {/if}



        <div class="form-group row">
            <label for="title" class="col-4 col-form-label">Title</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="title" name="title" type="text"
                            {if isset($album['album_name'])}
                                value="{$album['album_name']}"
                            {/if}
                           class="form-control">
                </div>
            </div>
        </div>

        {if $error['titleError']}
            <div class="alert alert-danger">
                Please enter an album name
            </div>
        {/if}

        <div class="form-group row">
            <label for="artist" class="col-4 col-form-label">Artist</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="artist" name="artist" type="text"
                           {if isset($album['artist_name'])}
                               value="{$album['artist_name']}"
                           {/if}
                           class="form-control">
                </div>
            </div>
        </div>


        {if $error['artistError']}
            <div class="alert alert-danger">
                Please enter an artist name
            </div>
        {/if}

        <div class="form-group row">
            <label for="year" class="col-4 col-form-label">Year</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="year" name="year" type="text"
                            {if isset($album['release_year'])}
                                value="{$album['release_year']}"
                            {/if}
                           class="form-control">
                </div>
            </div>
        </div>

        {if $error['yearError']}
            <div class="alert alert-danger">
                Please enter a valid year
            </div>
        {/if}


        <div class="textboxes">

        {$songCount = 0}
            {if isset($songs)}
                {foreach $songs as $song}
                    {$songCount = $songCount + 1}
                    <div class="form-group row" id="row-song{$songCount}">
                        <div class="col-4">
                            <input type="button" id="btAdd{$songCount}" value="+" class="btn btn-outline-secondary"
                                   tabindex="-1" onclick="addSongAfter({$songCount})">
                            <input type="button" id="delete{$songCount}" value="Delete" class="btn btn-danger"
                                   tabindex="-1" onclick="deleteSong({$songCount})">
                        </div>
                        <div class="col-8">
                            <input type="text" id="song{$songCount}" name="song{$songCount}" class="form-control" value="{$song['song_name']}"
                                   placeholder="Song {$songCount}">
                        </div>
                        {if $error['songError'] && $song['song_name'] == ""}
                            <div class="alert alert-danger">
                                Song name cannot be empty
                            </div>
                        {/if}
                    </div>


                {/foreach}
            {else}
                {$songCount = $songCount + 1}
                <div class="form-group row" id="row-song{$songCount}">
                    <div class="col-4">
                        <input type="button" id="btAdd{$songCount}" value="+" class="btn btn-outline-secondary"
                               tabindex="-1" onclick="addSongAfter({$songCount})">
                        <input type="button" id="delete{$songCount}" value="Delete" class="btn btn-danger"
                               tabindex="-1" onclick="deleteSong({$songCount})">
                    </div>
                    <div class="col-8">
                        <input type="text" id="song{$songCount}" name="song{$songCount}" class="form-control"
                               placeholder="Song {$songCount}">
                    </div>
                </div>
            {/if}

        </div>


        <div class="form-group row">
            <div class="offset-4 col-8">
                <input type="button" id="btAddSong" value="+" class="btn btn-outline-secondary"
                       onclick="addOnBottom()">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button id="submit" name="submit" class="btn btn-primary">
                    {if isset($album) && $form_type == 'edit'}
                        Save Changes
                    {else}
                        Create Album
                    {/if}

                </button>
            </div>
        </div>
    </form>
{/block}

{block name="scripts"}
{*    <script src="{$WEB_URL}/js/edit_album.js"</script>*}
    <script src="{$WEB_URL}/js/edit_album.js"></script>
    <script>var count = {$songCount};</script>

    <script>
        document.onload(function(
            $("#submit").click(function(
                %("#albumForm").submit();
            )
           )
        )
    </script>
{/block}

{block name="head_scripts"}

{/block}