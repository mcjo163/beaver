<?php
/* Smarty version 3.1.33, created on 2019-11-12 20:15:04
  from 'C:\Apache24\htdocs\beaver\public_html\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcb59189d1632_53453471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67af79aef1290196cacdbad4660bded8be938d5f' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\beaver\\public_html\\templates\\layout.tpl',
      1 => 1573607671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcb59189d1632_53453471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/css/sidebar.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/css/albums.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/css/artists.css">
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/images/beaver/favicon.ico" type="image">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15739687835dcb59189bd731_64098477', "title");
?>
</title>
</head>

<body>
    <div class="container-fullwidth">
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/album">
                <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/images/beaver/beaver.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Beaver
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php if (isset($_smarty_tpl->tpl_vars['albums_active']->value)) {?>active<?php }?>">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/album">Albums</a>
                    </li>
                    <li class="nav-item <?php if (isset($_smarty_tpl->tpl_vars['artists_active']->value)) {?>active<?php }?>">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/artist">Artists</a>
                    </li>
                </ul>
                <form action="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/search" method="GET" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="q">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="btn-group px-sm-2">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/add_album.html" role="button" class="btn btn-outline-primary">Add Album</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/account/account.html" role="button" class="btn btn-outline-primary">Profile</a>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-9">

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_685851715dcb59189c7cd8_18793341', "content");
?>


                </div>
                <nav class="col-md-3 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <h3>Following</h3>
                        <ul class="nav flex-column">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value['following'], 'album', false, 'id');
$_smarty_tpl->tpl_vars['album']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->iteration++;
$__foreach_album_0_saved = $_smarty_tpl->tpl_vars['album'];
?>
                                <li class="nav-item">
                                    <a class="following nav-link" href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/album/?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['album']->value['cover'];?>
" class="float-left">
                                        <div>
                                            <?php echo $_smarty_tpl->tpl_vars['album']->value['title'];?>
<br>
                                            <?php echo $_smarty_tpl->tpl_vars['album']->value['artist'];?>

                                        </div>
                                    </a>
                                </li>
                                <?php if ($_smarty_tpl->tpl_vars['album']->iteration >= 5) {?>
                                    <?php break 1;?>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['album'] = $__foreach_album_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/following">
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
/* {block "title"} */
class Block_15739687835dcb59189bd731_64098477 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15739687835dcb59189bd731_64098477',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Beaver!<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_685851715dcb59189c7cd8_18793341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_685851715dcb59189c7cd8_18793341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}