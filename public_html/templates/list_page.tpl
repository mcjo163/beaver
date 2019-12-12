{* defines the behavior for a page that lists any collection of albums *}

{extends file="layout.tpl"}

{block name="title"}Beaver! | {$list_title} {/block}

{block name="content"}

    <div class="row">
        <div class="col">
            <h1 class="albums-header">{$list_title}</h1>
        </div>
    </div>

    <div class="row">
        <div class="offset-1 col-10">
            <table>
                <tr>
                    <th class="list-column"></th>
                    <th class="list-column"></th>
                </tr>
                <tr>
                    {$countToTwo = 0}
                    {foreach $albums as $album}
                        <td>
                            <a class="following nav-link" href="{$WEB_URL}/album/?id={$album['album_id']}">
                                <img src="{$WEB_URL}/images/album/{$album['album_id']}.jpg" class="float-left">
                                <div>
                                    {$album['album_name']}<br>
                                    {$album['artist_name']}
                                </div>
                            </a>
                        </td>
                        {$countToTwo = $countToTwo + 1}
                        {if $countToTwo == 2}
                            {$countToTwo = 0}
                            </tr>
                            <tr>
                        {/if}
                    {/foreach}
                </tr>
            </table>

        </div>
    </div>
{/block}