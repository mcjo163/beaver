<?php
/* Smarty version 3.1.33, created on 2019-11-13 21:50:02
  from 'C:\Apache24\htdocs\beaver\public_html\templates\playlist_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcc7a8a839719_39737865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d9cd326f707ffb555ad2d86a6fe78af67dc381a' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\beaver\\public_html\\templates\\playlist_page.tpl',
      1 => 1573681800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcc7a8a839719_39737865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15993159205dcc7a8a81ebf2_51675397', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5758623335dcc7a8a825820_25646260', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10168390205dcc7a8a838c58_50988502', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "title"} */
class Block_15993159205dcc7a8a81ebf2_51675397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15993159205dcc7a8a81ebf2_51675397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Beaver! | <?php echo $_smarty_tpl->tpl_vars['playlist']->value['title'];?>
 <?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_5758623335dcc7a8a825820_25646260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5758623335dcc7a8a825820_25646260',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container">
        <div class="row">
            <div class="col">

                <h1 class="display-3"><?php echo $_smarty_tpl->tpl_vars['playlist']->value['title'];?>
</h1>
                <h4>Created by <?php echo $_smarty_tpl->tpl_vars['playlist']->value['user'];?>
</h4>
                <?php if (count($_smarty_tpl->tpl_vars['playlist']->value['songs']) == 1) {?>
                <h5>1 song</h5>
                <?php } else { ?>
                <h5><?php echo count($_smarty_tpl->tpl_vars['playlist']->value['songs']);?>
 songs</h5>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['playlist']->value['albumCount'] == 1) {?>
                    <h5>1 album</h5>
                <?php } else { ?>
                    <h5><?php echo $_smarty_tpl->tpl_vars['playlist']->value['albumCount'];?>
 albums</h5>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['playlist']->value['artistCount'] == 1) {?>
                    <h5>1 artist</h5>
                <?php } else { ?>
                    <h5><?php echo $_smarty_tpl->tpl_vars['playlist']->value['artistCount'];?>
 artists</h5>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['user']->value['username'] == $_smarty_tpl->tpl_vars['playlist']->value['user']) {?>
                    <button type="button" onclick="toggle()" class="btn btn-secondary">Edit</button>
                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#warningPopup">Delete</button>
                    <div class="modal fade" id="warningPopup" tabindex="-1" role="dialog" aria-labelledby="warningPopupLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="warningPopupLabel">Delete playlist?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this playlist?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-outline-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-primary float-right" id="editButton">Add Songs</button>
                <?php }?>

                <form>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="following" name="follow">
                        <label class="custom-control-label" for="following">
                            <strong>Follow this playlist</strong>
                        </label>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Song</th>
                        <th scope="col">Album</th>
                        <th scope="col">Artist</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['playlist']->value['songs'], 'song', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['song']->value) {
?>
                        <tr>
                            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</th>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['song']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td> <!--Prints song title, then album, then artist-->
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_10168390205dcc7a8a838c58_50988502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_10168390205dcc7a8a838c58_50988502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/js/edit_playlist.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
