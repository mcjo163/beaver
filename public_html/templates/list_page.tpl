{* defines the behavior for a page that lists any collection of albums *}

{extends file="layout.tpl"}

{block name="title"}Beaver! | {$list_title} {/block}

{block name="content"}
    {$half = intdiv(count($albums), 2)}
    {$cols = array_chunk($albums, $half+1, true)}
    <div class="row">
        <div class="col">
            <h1 class="albums-header">{$list_title}</h1>
        </div>
    </div>

    <div class="row">
        <div class="offset-1 col-5">
            <ul class="all-albums nav flex-column">
                {foreach $cols[0] as $id=>$album}
                    <li class="nav-item">
                        <a class="following nav-link" href="{$WEB_URL}/album/?id={$id}">
                            <img src="{$WEB_URL}/{$album['cover']}" class="float-left">
                            <div>
                                {$album['title']}<br>
                                {$album['artist']}
                            </div>
                        </a>
                    </li>
                {/foreach}
            </ul>
        </div>
        {if isset($cols[1])}
            <div class="col-5">
                <ul class="all-albums nav flex-column">
                    {foreach $cols[1] as $id=>$album}
                        <li class="nav-item">
                            <a class="following nav-link" href="{$WEB_URL}/album/?id={$id}">
                                <img src="{$WEB_URL}/{$album['cover']}" class="float-left">
                                <div>
                                    {$album['title']}<br>
                                    {$album['artist']}
                                </div>
                            </a>
                        </li>
                    {/foreach}
                </ul>
            </div>
        {/if}
    </div>
{/block}