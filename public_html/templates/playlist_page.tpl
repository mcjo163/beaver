{* defines the behavior for playlist pages *}

{extends file="layout.tpl"}

{block name="title"} Beaver! | {$playlist['title']} {/block}

{block name="content"}

    <div class="container">
        <div class="row">
            <div class="col">

                <h1 class="display-3">{$playlist['title']}</h1>
                <h4>Created by {$playlist['user']}</h4>
                {if count($playlist['songs']) == 1}
                <h5>1 song</h5>
                {else}
                <h5>{count($playlist['songs'])} songs</h5>
                {/if}

                {if $playlist['albumCount'] == 1}
                    <h5>1 album</h5>
                {else}
                    <h5>{$playlist['albumCount']} albums</h5>
                {/if}

                {if $playlist['artistCount'] == 1}
                    <h5>1 artist</h5>
                {else}
                    <h5>{$playlist['artistCount']} artists</h5>
                {/if}

                {if $user['username'] == $playlist['user']}
                    <button type="button" onclick="toggle()" class="btn btn-secondary">Edit</button>
                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#warningPopup">Delete</button>
                    <div class="modal fade" id="warningPopup" tabindex="-1" role="dialog" aria-labelledby="warningPopupLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="warningPopupLabel">Delete playlist?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this playlist?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-outline-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-primary float-right" id="editButton">Add Songs</button>
                {/if}

                <form>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="following" name="follow">
                        <label class="custom-control-label" for="following">
                            <strong>Follow this playlist</strong>
                        </label>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Song</th>
                        <th scope="col">Album</th>
                        <th scope="col">Artist</th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach $playlist['songs'] as $id=>$song}
                        <tr>
                            <th scope="row">{$id}</th>
                            {foreach $song as $item}
                                <td>{$item}</td> <!--Prints song title, then album, then artist-->
                            {/foreach}
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{/block}

{block name="scripts"}
    <script src="{$WEB_URL}/js/edit_playlist.js"></script>
{/block}