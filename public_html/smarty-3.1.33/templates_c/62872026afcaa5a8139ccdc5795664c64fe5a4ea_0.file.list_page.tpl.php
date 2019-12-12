<?php
/* Smarty version 3.1.33, created on 2019-12-12 00:57:32
  from '/Library/WebServer/Documents/beaver/public_html/templates/list_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df1907c6e7273_05713701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62872026afcaa5a8139ccdc5795664c64fe5a4ea' => 
    array (
      0 => '/Library/WebServer/Documents/beaver/public_html/templates/list_page.tpl',
      1 => 1576111944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df1907c6e7273_05713701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4771702425df1907c6caa36_18248378', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17721293275df1907c6cffd9_94666906', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "title"} */
class Block_4771702425df1907c6caa36_18248378 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4771702425df1907c6caa36_18248378',
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
class Block_17721293275df1907c6cffd9_94666906 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17721293275df1907c6cffd9_94666906',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'album');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
?>
                        <td>
                            <a class="following nav-link" href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/album/?id=<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/images/album/<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
.jpg" class="float-left">
                                <div>
                                    <?php echo $_smarty_tpl->tpl_vars['album']->value['album_name'];?>
<br>
                                    <?php echo $_smarty_tpl->tpl_vars['album']->value['artist_name'];?>

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
