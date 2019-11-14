<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{$WEB_URL}/css/sidebar.css">
    <link rel="stylesheet" href="{$WEB_URL}/css/albums.css">
    <link rel="stylesheet" href="{$WEB_URL}/css/artists.css">
    <link rel="stylesheet" href="{$WEB_URL}/css/account.css">

    <link rel="icon" href="{$WEB_URL}/images/beaver/favicon.ico" type="image">
    <title>{block name="title"}Beaver!{/block}</title>
</head>

<body>
    <div class="container-fullwidth">
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <a class="navbar-brand" href="{$WEB_URL}/album">
                <img src="{$WEB_URL}/images/beaver/beaver.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Beaver
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {if isset($albums_active)}active{/if}">
                        <a class="nav-link" href="{$WEB_URL}/album">Albums</a>
                    </li>
                    <li class="nav-item {if isset($artists_active)}active{/if}">
                        <a class="nav-link" href="{$WEB_URL}/artist">Artists</a>
                    </li>
                </ul>
                <form action="{$WEB_URL}/search"  method="GET" class="form-inline my-2 my-lg-0" id="search" onsubmit="return validate()">
                    <input class="form-control mr-sm-2" id="searchBar" type="search" placeholder="Search" aria-label="Search" name="q">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="btn-group px-sm-2">
                    <a href="{$WEB_URL}/album/add/" role="button" class="btn btn-outline-primary">Add Album</a>
                    <a href="{$WEB_URL}/account/?id={$user['id']}" role="button" class="btn btn-outline-primary">Profile</a>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-9">

                    {block name="content"}{/block}

                </div>
                <nav class="col-md-3 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <h3>Following</h3>
                        <ul class="nav flex-column">
                            {foreach $user['following'] as $id=>$album}
                                <li class="nav-item">
                                    <a class="following nav-link" href="{$WEB_URL}/album/?id={$id}">
                                        <img src="{$WEB_URL}/{$album['cover']}" class="float-left">
                                        <div>
                                            {$album['title']}<br>
                                            {$album['artist']}
                                        </div>
                                    </a>
                                </li>
                                {if $album@iteration gte 5}
                                    {break}
                                {/if}
                            {/foreach}
                            <li class="nav-item">
                                <a class="nav-link" href="{$WEB_URL}/following">
                                    See all following
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="{$WEB_URL}/js/validate_search.js"></script>
    {block name="scripts"}{/block}
</body>

</html>