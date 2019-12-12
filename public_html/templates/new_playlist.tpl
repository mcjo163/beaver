{*Defines the layout of the add album page*}

{extends file="layout.tpl"}

{block name="title"} Beaver! | Add Album {/block}

{block name="content"}
    <div class="container">
        <div class="row">

            <div class="col justify-content-center">
                <h1 class="text-center">Create New Playlist</h1>
            </div>
        </div>
    </div>
    <form action="." method="post">
        {* if the playlist field was empty when submitted *}
        {if isset($playlist)}
            <div class="alert alert-danger my-2 col-4 offset-5" role="alert">
                Playlist Name cannot not be empty.
            </div>
        {/if}
        <div class="form-group row justify-content-md-center">
            <label for="last_name" class="col-2 col-form-label text-right">Playlist Name</label>
            <div class="col-4">
                <input id="last_name" name="playlist" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row justify-content-md-center">
            <div class="ol-4">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
{/block}
