{* defines the behavior for account pages *}

{extends file="layout.tpl"}

{block name="title"} Beaver! | {$account['username']} {/block}

{block name="content"}

    <div class="container">
        <div class="row">
            <h1 class="col-4">My Profile</h1>
        </div>
        <div class="row">
            <img class="col-3" src="{$WEB_URL}/images/profile/user{$account['user_id']}.jpg" alt=""
                 height="30%" width="20%">
            <div class="col-4">
                <h4>Username: {$account['username']}</h4>
                <!-- <a href="#">Change Username</a>-->
                <h4>Email: {$account['email_address']}</h4>
                {if $account['user_id'] == $currentUser['user_id']}
                    <a href="{$WEB_URL}/account/change_password/?id={$account['user_id']}">Change Password</a>
                    <a href = "{$WEB_URL}/logout/" style = "padding-left: 5px;"> Log Out</a>
                 {/if}

            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <h1>My Playlists</h1>
            </div>
            <div class="col-2">
                {if $account['user_id'] == $currentUser['user_id']}
                    <a href="{$WEB_URL}/playlist/add" class="btn btn-primary">Create New</a>
                {/if}
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-1">
                {if sizeof($playlists) == 0}
                    <p>No playlists</p>
                {/if}
                {foreach $playlists as $id=>$playlist}
                    {if count($playlist['songs']) == 1}
                        <a href="{$WEB_URL}/playlist/?id={$id}"
                           class="lead playlist">{$playlist['title']} - 1 song</a>
                    {else}
                        <a href="{$WEB_URL}/playlist/?id={$id}" class="lead playlist">
                            {$playlist['title']} - {count($playlist['songs'])} songs</a>
                    {/if}

                {/foreach}
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1>My Posts</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {if sizeof($posts) == 0}
                    <p>No posts</p>
                {/if}
                {foreach $posts as $id=>$post}
                    <div class="container post">
                        <a href="{$WEB_URL}/album/?id={$id}">
                            <div class="row">
                                <img class="col-2" src="{$WEB_URL}/{$post['cover']}" alt=""
                                     height="90%" width="10%">
                                <div class="col-7">
                                    <!-- make album title do the flashy text thingy -->
                                    <h4> {$post['artist']} - {$post['title']}</h4>
                                    <p>Album</p>
                                    <!-- <p>I loved this album so much. Adele is the best<br> and super talented.-->
                                    <!-- She is just so awesome.</p>-->
                                </div>
                                <div class="col-3">
                                    <h5> Click For More</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                {/foreach}
            </div>
        </div>
    </div>
{/block}