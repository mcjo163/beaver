<?php
/* Smarty version 3.1.33, created on 2019-11-14 01:44:44
  from 'C:\Apache24\htdocs\beaver\public_html\templates\results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dccb18c6353c9_10046999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46df7389a43ec6881183be73e234ff903c812f4b' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\beaver\\public_html\\templates\\results.tpl',
      1 => 1573695411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dccb18c6353c9_10046999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17859666185dccb18c5fe328_43248646', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16646051315dccb18c600355_37679968', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "title"} */
class Block_17859666185dccb18c5fe328_43248646 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17859666185dccb18c5fe328_43248646',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Search Results<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_16646051315dccb18c600355_37679968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16646051315dccb18c600355_37679968',
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['album_results']->value, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value) {
?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/album?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['albums']->value[$_smarty_tpl->tpl_vars['id']->value]['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['albums']->value[$_smarty_tpl->tpl_vars['id']->value]['artist'];?>
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
/artist?a=<?php echo $_smarty_tpl->tpl_vars['artist']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['artist']->value;?>
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
/album?id=<?php echo $_smarty_tpl->tpl_vars['song']->value[1];?>
"><?php echo $_smarty_tpl->tpl_vars['song']->value[0];?>
 
                    (<?php echo $_smarty_tpl->tpl_vars['albums']->value[$_smarty_tpl->tpl_vars['song']->value[1]]['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['albums']->value[$_smarty_tpl->tpl_vars['song']->value[1]]['artist'];?>
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
