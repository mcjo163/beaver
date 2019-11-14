<?php
/* Smarty version 3.1.33, created on 2019-11-12 21:19:18
  from 'C:\Apache24\htdocs\beaver\public_html\templates\results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcb68261d1832_74405909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46df7389a43ec6881183be73e234ff903c812f4b' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\beaver\\public_html\\templates\\results.tpl',
      1 => 1573611556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcb68261d1832_74405909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20356433635dcb68261b71f9_08110336', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15343358435dcb68261b7cd2_51469720', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "title"} */
class Block_20356433635dcb68261b71f9_08110336 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20356433635dcb68261b71f9_08110336',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Search Results<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_15343358435dcb68261b7cd2_51469720 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15343358435dcb68261b7cd2_51469720',
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
