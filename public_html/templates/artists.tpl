{* defines the page that lists all of the artists on the site *}

{extends file="layout.tpl"}

{block name="title"} Beaver! | All Artists {/block}

{block name="content"}
    <div class="row">
        <div class="col">
            <h1 class="artists-header">All Artists</h1>
        </div>
    </div>
    <div class="row all-artists">
        <div class="col-10 offset-1">
            {foreach $artists as $alpha=>$a}
                <h2>{$alpha}</h2>
                <ul>
                    {foreach $a as $artist}
                        <li><a href="{$WEB_URL}/artist/?a={$artist}" class="artist">{$artist}</a></li>
                    {/foreach}
                </ul>
                {if !$a@last}
                    <hr>
                {/if}
            {/foreach}
        </div>
    </div>
{/block}