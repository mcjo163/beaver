<?php
/* Smarty version 3.1.33, created on 2019-11-04 11:41:39
  from 'C:\Apache24\htdocs\beaver\public_html\templates\list_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc054c3052fe4_58385471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44755d124d38aa555b8e77a04363c3123b57ac4a' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\beaver\\public_html\\templates\\list_page.tpl',
      1 => 1572885697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc054c3052fe4_58385471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12197291765dc054c3028376_83446237', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18198967015dc054c30331e3_78253767', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "title"} */
class Block_12197291765dc054c3028376_83446237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12197291765dc054c3028376_83446237',
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
class Block_18198967015dc054c30331e3_78253767 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18198967015dc054c30331e3_78253767',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('half', intdiv(count($_smarty_tpl->tpl_vars['albums']->value),2));?>
    <?php $_smarty_tpl->_assignInScope('cols', array_chunk($_smarty_tpl->tpl_vars['albums']->value,$_smarty_tpl->tpl_vars['half']->value+1,true));?>
    <div class="row">
        <div class="col">
            <h1 class="albums-header"><?php echo $_smarty_tpl->tpl_vars['list_title']->value;?>
</h1>
        </div>
    </div>

    <div class="row">
        <div class="offset-1 col-5">
            <ul class="all-albums nav flex-column">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cols']->value[0], 'album', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['album']->value) {
?>
                    <li class="nav-item">
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
                    </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['cols']->value[1])) {?>
            <div class="col-5">
                <ul class="all-albums nav flex-column">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cols']->value[1], 'album', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['album']->value) {
?>
                        <li class="nav-item">
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
                        </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        <?php }?>
    </div>
<?php
}
}
/* {/block "content"} */
}
