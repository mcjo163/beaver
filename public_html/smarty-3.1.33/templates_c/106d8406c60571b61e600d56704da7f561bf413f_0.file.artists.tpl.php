<?php
/* Smarty version 3.1.33, created on 2019-11-04 11:33:27
  from 'C:\Apache24\htdocs\beaver\public_html\templates\artists.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc052d7848528_50337853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '106d8406c60571b61e600d56704da7f561bf413f' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\beaver\\public_html\\templates\\artists.tpl',
      1 => 1572885052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc052d7848528_50337853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9756792075dc052d7826d71_00577183', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3594547085dc052d7827bc6_72460017', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "title"} */
class Block_9756792075dc052d7826d71_00577183 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9756792075dc052d7826d71_00577183',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Beaver! | All Artists <?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_3594547085dc052d7827bc6_72460017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3594547085dc052d7827bc6_72460017',
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
