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

    <form method ="POST" style="margin-top:50px;">
        <div class="form-group row">
            <label for="cover" class="col-4 col-form-label">Album Cover</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <p>Select image to upload:&nbsp;</p>
                        <input id="cover" name="cover" type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="title" class="col-4 col-form-label">Title</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="title" name="title" type="text"
                            {if isset($album['title'])}
                                value="{$album['title']}"
                            {/if}
                           class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="artist" class="col-4 col-form-label">Artist</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="artist" name="artist" type="text"
                           {if isset($album['artist'])}
                               value="{$album['artist']}"
                           {/if}
                           class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="year" class="col-4 col-form-label">Year</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="year" name="year" type="text"
                            {if isset($album['year'])}
                                value="{$album['year']}"
                            {/if}
                           class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="textarea" class="col-4 col-form-label">Details</label>
            <div class="col-8">
                <textarea id="textarea" name="details" cols="40" rows="5" class="form-control"></textarea>
            </div>
        </div>
        <div class="textboxes">

        {$songCount = 0}
            {if isset($album['songs'])}
                {foreach $album['songs'] as $song}
                    {$songCount = $songCount + 1}
                    <div class="form-group row" id="row-song{$songCount}">
                        <div class="col-4">
                            <input type="button" id="btAdd{$songCount}" value="+" class="btn btn-outline-secondary"
                                   tabindex="-1" onclick="addSongAfter({$songCount})">
                            <input type="button" id="delete{$songCount}" value="Delete" class="btn btn-danger"
                                   tabindex="-1" onclick="deleteSong({$songCount})">
                        </div>
                        <div class="col-8">
                            <input type="text" id="song{$songCount}" name="song{$songCount}" class="form-control" value="{$song}"
                                   placeholder="Song {$songCount}">
                        </div>
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
                <button name="submit" type="submit" class="btn btn-primary">
                    {if isset($album)}
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
{/block}