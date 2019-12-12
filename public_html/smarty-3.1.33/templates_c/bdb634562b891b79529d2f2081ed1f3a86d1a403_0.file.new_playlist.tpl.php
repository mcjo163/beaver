<?php
/* Smarty version 3.1.33, created on 2019-12-12 01:42:29
  from 'C:\Apache24\htdocs\beaver\public_html\templates\new_playlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df19b059b57d7_35309909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdb634562b891b79529d2f2081ed1f3a86d1a403' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\beaver\\public_html\\templates\\new_playlist.tpl',
      1 => 1576114945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df19b059b57d7_35309909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10737732205df19b059aeac9_34043940', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9753193535df19b059af8f8_09154626', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "title"} */
class Block_10737732205df19b059aeac9_34043940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10737732205df19b059aeac9_34043940',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Beaver! | Add Album <?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_9753193535df19b059af8f8_09154626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9753193535df19b059af8f8_09154626',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<?php
}
}
/* {/block "content"} */
}
