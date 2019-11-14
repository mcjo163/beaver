<?php
/* Smarty version 3.1.33, created on 2019-11-12 06:17:44
  from 'C:\Apache24\htdocs\beaver\public_html\templates\list_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dca4e888f1a73_52356125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44755d124d38aa555b8e77a04363c3123b57ac4a' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\beaver\\public_html\\templates\\list_page.tpl',
      1 => 1573539462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dca4e888f1a73_52356125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18043685815dca4e888deb44_21018948', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17397097465dca4e888e2a60_24375657', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "title"} */
class Block_18043685815dca4e888deb44_21018948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18043685815dca4e888deb44_21018948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Beaver! | <?php echo $_smarty_tpl->tpl_vars['list_title']->value;?>
 <?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_17397097465dca4e888e2a60_24375657 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17397097465dca4e888e2a60_24375657',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('half', 0);?>
    <?php if (!(1 & count($_smarty_tpl->tpl_vars['albums']->value))) {?>
        <?php $_smarty_tpl->_assignInScope('half', intdiv(count($_smarty_tpl->tpl_vars['albums']->value),2));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('half', intdiv(count($_smarty_tpl->tpl_vars['albums']->value),2)+1);?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('cols', array_chunk($_smarty_tpl->tpl_vars['albums']->value,$_smarty_tpl->tpl_vars['half']->value,true));?>

    <div class="row">
        <div class="col">
            <h1 class="albums-header"><?php echo $_smarty_tpl->tpl_vars['list_title']->value;?>
</h1>
        </div>
    </div>

    <div class="row">
        <div class="offset-1 col-10">
            <table>
                <tr>
                    <th class="list-column"></th>
                    <th class="list-column"></th>
                </tr>
                <tr>
                    <?php $_smarty_tpl->_assignInScope('countToTwo', 0);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'album', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['album']->value) {
?>
                        <td>
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
                        </td>
                        <?php $_smarty_tpl->_assignInScope('countToTwo', $_smarty_tpl->tpl_vars['countToTwo']->value+1);?>
                        <?php if ($_smarty_tpl->tpl_vars['countToTwo']->value == 2) {?>
                            <?php $_smarty_tpl->_assignInScope('countToTwo', 0);?>
                            </tr>
                            <tr>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tr>
            </table>

        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
