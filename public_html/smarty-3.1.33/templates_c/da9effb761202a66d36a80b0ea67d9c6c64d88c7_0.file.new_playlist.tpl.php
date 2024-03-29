<?php
/* Smarty version 3.1.33, created on 2019-11-14 03:08:33
  from '/Library/WebServer/Documents/beaver/public_html/templates/new_playlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dccc5310e4432_23064183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da9effb761202a66d36a80b0ea67d9c6c64d88c7' => 
    array (
      0 => '/Library/WebServer/Documents/beaver/public_html/templates/new_playlist.tpl',
      1 => 1573699069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dccc5310e4432_23064183 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="/beaver/public_html/css/sidebar.css">
    <link rel="stylesheet" href="/beaver/public_html/css/albums.css">
    <link rel="icon" href="/beaver/public_html/images/beaver/favicon.ico" type="image">
    <title>Beaver!</title>
</head>

<body>
<div class="container-fullwidth">
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="/beaver/public_html/album/albums.html">
            <img src="/beaver/public_html/images/beaver/beaver.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Beaver
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Following</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="/beaver/public_html/album/albums.html">Albums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/beaver/public_html/artist/artist.html">Artists</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="btn-group px-sm-2">
                <a href="/beaver/public_html/add_album.html" role="button" class="btn btn-outline-primary">Add Album</a>
                <a href="/beaver/public_html/account/account.html" role="button" class="btn btn-outline-primary">Profile</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-9">
                <!-- CONTENT -->
                <div class="container">
                    <div class="row">

                        <div class="col justify-content-center">
                            <h1 class="text-center">Create New Playlist</h1>
                        </div>
                    </div>
                </div>
                <form action="." method="post">
                                        <?php if (isset($_smarty_tpl->tpl_vars['playlist']->value)) {?>
                        <div class="alert alert-danger my-2 col-4 offset-5" role="alert">
                            Playlist Name cannot not be empty.
                        </div>
                    <?php }?>
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


            </div>
            <nav class="col-md-3 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <h3>Following</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="following nav-link" href="/beaver/public_html/album/another_light.html">
                                <img src="/beaver/public_html/images/album/7.jpg" class="float-left">
                                <div>
                                    Another Light<br>
                                    Red Vox
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="following nav-link" href="/beaver/public_html/album/19.html">
                                <img src="/beaver/public_html/images/album/1.jpg" class="float-left">
                                <div>
                                    19<br>
                                    Adele
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="following nav-link" href="/beaver/public_html/album/the_human_condition.html">
                                <img src="/beaver/public_html/images/album/5.jpg" class="float-left">
                                <div>
                                    The Human Condition<br>
                                    Jon Bellion
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="following nav-link" href="/beaver/public_html/album/landmark.html">
                                <img src="/beaver/public_html/images/album/4.jpg" class="float-left">
                                <div>
                                    Landmark<br>
                                    Hippo Campus
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="following nav-link" href="/beaver/public_html/album/am.html">
                                <img src="/beaver/public_html/images/album/2.jpg" class="float-left">
                                <div>
                                    AM<br>
                                    Arctic Monkeys
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                See more following
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
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
