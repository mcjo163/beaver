{* defines the behavior for album pages *}

{extends file="layout.tpl"}

{block name="title"} Beaver! | {$album['album_name']} {/block}

{block name="content"}

    <div class="container">
        <div class="row">
            <div class="col-4">
                <img class="album-cover" src="{$WEB_URL}/images/album/{$album['album_id']}.jpg">
            </div>

            <div class="col-8">
                <h1 class="display-3">{$album['album_name']}</h1>
                <h4>{$album['artist_name']}</h4>
                <h4>{$album['release_year']}</h4>
                <h4>Added by <a href="{$WEB_URL}/account/?id={$album['user_fk']}">{$album['username']}</a></h4>

                <form>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="following" name="follow"
                        {if in_array($album['album_id'], $favorite)} checked {/if}>
                        <label class="custom-control-label" for="following">
                            <strong>Follow this album</strong>
                        </label>
                    </div>
                </form>
{*                <div class="alert alert-danger">*}
{*                    DISABLED EDITING UNTIL SESSION VARIABLES IN PLACE, PLEASE DELETE LATER*}
{*                </div>*}

                {if $album['user_fk'] == $user['user_id']}
                    <a href="{$WEB_URL}/album/edit/?id={$album['album_id']}">
                        <button type="button" class="btn btn-secondary">
                            Edit
                        </button>
                    </a>
                    <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                        data-target="#warningPopup">Delete</button>

                    <div class="modal fade" id="warningPopup" tabindex="-1" role="dialog" aria-labelledby="warningPopupLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="warningPopupLabel">Delete album?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this album?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-outline-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                {/if}
            </div>
        </div>
            <div class="row">
                <div class="col">

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col" style="width: 15%">#</th>
                            <th scope="col" style="width: 80%">Song</th>
                            <th scope="col" style="width: 5%"></th>
                        </tr>
                        </thead>
                        <tbody>
                            {foreach $songs as $song}
                                <tr class="song-row">
                                    <th scope="row">{$song@iteration}</th>
                                    <td>
                                        <button type="button" class="btn btn-link song" data-toggle="modal" data-target="#song{$song@iteration}">
                                            {$song['song_name']}
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary playlist-button" data-toggle="modal" data-target="#play{$song@iteration}">
                                            +
                                        </button>
                                    </td>
                                </tr>
                                <div class="modal fade" id="song{$song@iteration}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{$song['song_name']}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body container">
                                                <div class="row">
                                                    <div class="col">
                                                        <p> Added by: {$album['username']}<br>
                                                            Album: {$album['album_name']}<br>
                                                            Artist: {$album['artist_name']}<br>
                                                            Year: {$album['release_year']}</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <img src="{$WEB_URL}/images/album/{$album['album_id']}.jpg" style="width:130px; float:right;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="play{$song@iteration}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add to Playlist:</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body container">
                                                <form>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="playlist" name="playlist" value="add">
                                                        <label class="custom-control-label" for="playlist">
                                                            <strong>Sam's Cool Playlist</strong>
                                                        </label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-2" data-dismiss="modal">Add</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {/foreach}
                        </tbody>
                    </table>
                </div>    
        </div>
    </div>
{/block}