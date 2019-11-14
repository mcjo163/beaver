<?php
/* Smarty version 3.1.33, created on 2019-11-13 20:13:07
  from 'C:\Apache24\htdocs\beaver\public_html\templates\account_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dccaa234bf728_91277716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8095f794b68a0828df18c9a8d18a6bb9bd7b06a4' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\beaver\\public_html\\templates\\account_page.tpl',
      1 => 1573693824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dccaa234bf728_91277716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3738540855dccaa2346c680_25773192', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10671623555dccaa2347e018_03208731', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "title"} */
class Block_3738540855dccaa2346c680_25773192 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3738540855dccaa2346c680_25773192',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Beaver! | <?php echo $_smarty_tpl->tpl_vars['account']->value['username'];?>
 <?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_10671623555dccaa2347e018_03208731 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10671623555dccaa2347e018_03208731',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container">
        <div class="row">
            <h1 class="col-4">My Profile</h1>
        </div>
        <div class="row">
            <img class="col-3" src="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['account']->value['avatar'];?>
" alt=""
                 height="30%" width="20%">
            <div class="col-9">
                <h4>Username: <?php echo $_smarty_tpl->tpl_vars['account']->value['username'];?>
</h4>
                <!-- <a href="#">Change Username</a>-->
                <h4>Email: <?php echo $_smarty_tpl->tpl_vars['account']->value['email'];?>
</h4>
                <?php if ($_smarty_tpl->tpl_vars['user']->value['username'] == $_smarty_tpl->tpl_vars['account']->value['username']) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/account/change_password">Change Password</a>
                <?php }?>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <h1>My Playlists</h1>
            </div>
            <div class="col-2">
                <?php if ($_smarty_tpl->tpl_vars['user']->value['username'] == $_smarty_tpl->tpl_vars['account']->value['username']) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/playlist/add" class="btn btn-primary">Create New</a>
                <?php }?>
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-1">
                <?php if (sizeof($_smarty_tpl->tpl_vars['playlists']->value) == 0) {?>
                    <p>No playlists</p>
                <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['playlists']->value, 'playlist', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['playlist']->value) {
?>
                    <?php if (count($_smarty_tpl->tpl_vars['playlist']->value['songs']) == 1) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/playlist/?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
                           class="lead playlist"><?php echo $_smarty_tpl->tpl_vars['playlist']->value['title'];?>
 - 1 song</a>
                    <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/playlist/?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="lead playlist">
                            <?php echo $_smarty_tpl->tpl_vars['playlist']->value['title'];?>
 - <?php echo count($_smarty_tpl->tpl_vars['playlist']->value['songs']);?>
 songs</a>
                    <?php }?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1>My Posts</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php if (sizeof($_smarty_tpl->tpl_vars['posts']->value) == 0) {?>
                    <p>No posts</p>
                <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['post']->value) {
?>
                    <div class="container post">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/album/?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                            <div class="row">
                                <img class="col-2" src="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['cover'];?>
" alt=""
                                     height="90%" width="10%">
                                <div class="col-7">
                                    <!-- make album title do the flashy text thingy -->
                                    <h4> <?php echo $_smarty_tpl->tpl_vars['post']->value['artist'];?>
 - <?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h4>
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
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
