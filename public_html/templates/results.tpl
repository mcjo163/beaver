{extends file="layout.tpl"}

{block name="title"}Search Results{/block}

{block name="content"}
    <div class="row">
        <div class="col">
            <h1 class="artists-header">Search Results for "{$query}"</h1>
        </div>
    </div>
    {if count($album_results) > 0}
        <div class="row">
            <div class="col">
                <h3>Albums</h3>
                <ul>
                    {foreach $album_results as $id}
                        <li><a href="{$WEB_URL}/album?id={$id}">{$albums[$id]['title']} - {$albums[$id]['artist']}</a></li>
                    {/foreach}
                </ul>
            </div>
        </div>
    {/if}
    {if count($artist_results) > 0}
    <div class="row">
        <div class="col">
            <h3>Artists</h3>
            <ul>
                {foreach $artist_results as $artist}
                    <li><a href="{$WEB_URL}/artist?a={$artist}">{$artist}</a></li>
                {/foreach}
            </ul>
        </div>
    </div>
    {/if}
    {if count($song_results) > 0}
    <div class="row">
        <div class="col">
            <h3>Songs</h3>
            <ul>
                {foreach $song_results as $song}
                    <li><a href="{$WEB_URL}/album?id={$song[1]}">{$song[0]} 
                    ({$albums[$song[1]]['title']} - {$albums[$song[1]]['artist']})</a></li>
                {/foreach}
            </ul>
        </div>
    </div>
    {/if}
{/block}