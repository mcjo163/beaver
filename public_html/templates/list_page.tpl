{* defines the behavior for a page that lists any collection of albums *}

{extends file="layout.tpl"}

{block name="title"}Beaver! | {$list_title} {/block}

{block name="content"}
    {$half = 0}
    {if count($albums) is even}
        {$half = intdiv(count($albums), 2)}
    {else}
        {$half = intdiv(count($albums), 2) + 1}
    {/if}
    {$cols = array_chunk($albums, $half, true)}

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
                    {foreach $albums as $id=>$album}
                        <td>
                            <a class="following nav-link" href="{$WEB_URL}/album/?id={$id}">
                                <img src="{$WEB_URL}/{$album['cover']}" class="float-left">
                                <div>
                                    {$album['title']}<br>
                                    {$album['artist']}
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