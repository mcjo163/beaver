<?php
/* Smarty version 3.1.33, created on 2019-12-12 00:48:36
  from '/Library/WebServer/Documents/beaver/public_html/templates/artists.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df18e64199612_92353417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c1b7d87d06b7bfdcbefe0eb21be793eb8448d06' => 
    array (
      0 => '/Library/WebServer/Documents/beaver/public_html/templates/artists.tpl',
      1 => 1573699069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df18e64199612_92353417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18148112845df18e64188972_74610781', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10022264275df18e64189646_26367859', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "title"} */
class Block_18148112845df18e64188972_74610781 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18148112845df18e64188972_74610781',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Beaver! | All Artists <?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_10022264275df18e64189646_26367859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10022264275df18e64189646_26367859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col">
            <h1 class="artists-header">All Artists</h1>
        </div>
    </div>
    <div class="row all-artists">
        <div class="col-10 offset-1">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artists']->value, 'a', true, 'alpha');
$_smarty_tpl->tpl_vars['a']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['alpha']->value => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->iteration++;
$_smarty_tpl->tpl_vars['a']->last = $_smarty_tpl->tpl_vars['a']->iteration === $_smarty_tpl->tpl_vars['a']->total;
$__foreach_a_0_saved = $_smarty_tpl->tpl_vars['a'];
?>
                <h2><?php echo $_smarty_tpl->tpl_vars['alpha']->value;?>
</h2>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['a']->value, 'artist');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['artist']->value) {
?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/artist/?a=<?php echo $_smarty_tpl->tpl_vars['artist']->value;?>
" class="artist"><?php echo $_smarty_tpl->tpl_vars['artist']->value;?>
</a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <?php if (!$_smarty_tpl->tpl_vars['a']->last) {?>
                    <hr>
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['a'] = $__foreach_a_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
