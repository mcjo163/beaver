<?php
/* Smarty version 3.1.33, created on 2019-12-12 01:02:38
  from '/Library/WebServer/Documents/beaver/public_html/templates/results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df191aeb41e83_66784269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '074b780240594becf766e608c220fdd5da49ea76' => 
    array (
      0 => '/Library/WebServer/Documents/beaver/public_html/templates/results.tpl',
      1 => 1576111607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df191aeb41e83_66784269 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11153387145df191aeb26777_34843670', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11693377725df191aeb27811_16324237', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "title"} */
class Block_11153387145df191aeb26777_34843670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11153387145df191aeb26777_34843670',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Search Results<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_11693377725df191aeb27811_16324237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11693377725df191aeb27811_16324237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col">
            <h1 class="artists-header">Search Results for "<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
"</h1>
        </div>
    </div>
    <?php if (count($_smarty_tpl->tpl_vars['album_results']->value) > 0) {?>
        <div class="row">
            <div class="col">
                <h3>Albums</h3>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['album_results']->value, 'album');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/album?id=<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['album']->value['album_name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['album']->value['artist_name'];?>
</a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
    <?php }?>
    <?php if (count($_smarty_tpl->tpl_vars['artist_results']->value) > 0) {?>
    <div class="row">
        <div class="col">
            <h3>Artists</h3>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artist_results']->value, 'artist');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['artist']->value) {
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/artist?a=<?php echo $_smarty_tpl->tpl_vars['artist']->value['artist_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['artist']->value['artist_name'];?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
    <?php }?>
    <?php if (count($_smarty_tpl->tpl_vars['song_results']->value) > 0) {?>
    <div class="row">
        <div class="col">
            <h3>Songs</h3>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['song_results']->value, 'song');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['song']->value) {
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/album?id=<?php echo $_smarty_tpl->tpl_vars['song']->value['album_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['song']->value['song_name'];?>
 
                    (<?php echo $_smarty_tpl->tpl_vars['song']->value['album_name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['song']->value['artist_name'];?>
)</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
    <?php }
}
}
/* {/block "content"} */
}
