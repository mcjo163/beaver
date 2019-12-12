<?php
/* Smarty version 3.1.33, created on 2019-12-11 01:16:04
  from '/Library/WebServer/Documents/beaver/public_html/templates/edit_album_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df043543066e2_93303802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '577f0ef5957568c15de8bf47c78249472de83a54' => 
    array (
      0 => '/Library/WebServer/Documents/beaver/public_html/templates/edit_album_page.tpl',
      1 => 1573699069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df043543066e2_93303802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9071379365df043542e67a9_30407823', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12379378425df043542ef902_39603024', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11382826865df04354305772_09144949', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "title"} */
class Block_9071379365df043542e67a9_30407823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9071379365df043542e67a9_30407823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Beaver! |
    <?php if (isset($_smarty_tpl->tpl_vars['album']->value['title'])) {?>
        Edit <?php echo $_smarty_tpl->tpl_vars['album']->value['title'];?>

    <?php } else { ?>
        New Album
    <?php }
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_12379378425df043542ef902_39603024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12379378425df043542ef902_39603024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form method ="POST" style="margin-top:50px;">
        <div class="form-group row">
            <label for="cover" class="col-4 col-form-label">Album Cover</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <p>Select image to upload:&nbsp;</p>
                        <input id="cover" name="cover" type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="title" class="col-4 col-form-label">Title</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="title" name="title" type="text"
                            <?php if (isset($_smarty_tpl->tpl_vars['album']->value['title'])) {?>
                                value="<?php echo $_smarty_tpl->tpl_vars['album']->value['title'];?>
"
                            <?php }?>
                           class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="artist" class="col-4 col-form-label">Artist</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="artist" name="artist" type="text"
                           <?php if (isset($_smarty_tpl->tpl_vars['album']->value['artist'])) {?>
                               value="<?php echo $_smarty_tpl->tpl_vars['album']->value['artist'];?>
"
                           <?php }?>
                           class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="year" class="col-4 col-form-label">Year</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="year" name="year" type="text"
                            <?php if (isset($_smarty_tpl->tpl_vars['album']->value['year'])) {?>
                                value="<?php echo $_smarty_tpl->tpl_vars['album']->value['year'];?>
"
                            <?php }?>
                           class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="textarea" class="col-4 col-form-label">Details</label>
            <div class="col-8">
                <textarea id="textarea" name="details" cols="40" rows="5" class="form-control"></textarea>
            </div>
        </div>
        <div class="textboxes">

        <?php $_smarty_tpl->_assignInScope('songCount', 0);?>
            <?php if (isset($_smarty_tpl->tpl_vars['album']->value['songs'])) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['album']->value['songs'], 'song');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['song']->value) {
?>
                    <?php $_smarty_tpl->_assignInScope('songCount', $_smarty_tpl->tpl_vars['songCount']->value+1);?>
                    <div class="form-group row" id="row-song<?php echo $_smarty_tpl->tpl_vars['songCount']->value;?>
">
                        <div class="col-4">
                            <input type="button" id="btAdd<?php echo $_smarty_tpl->tpl_vars['songCount']->value;?>
" value="+" class="btn btn-outline-secondary"
                                   tabindex="-1" onclick="addSongAfter(<?php echo $_smarty_tpl->tpl_vars['songCount']->value;?>
)">
                            <input type="button" id="delete<?php echo $_smarty_tpl->tpl_vars['songCount']->value;?>
" value="Delete" class="btn btn-danger"
                                   tabindex="-1" onclick="deleteSong(<?php echo $_smarty_tpl->tpl_vars['songCount']->value;?>
)">
                        </div>
                        <div class="col-8">
                            <input type="text" id="song<?php echo $_smarty_tpl->tpl_vars['songCount']->value;?>
" name="song<?php echo $_smarty_tpl->tpl_vars['songCount']->value;?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['song']->value;?>
"
                                   placeholder="Song <?php echo $_smarty_tpl->tpl_vars['songCount']->value;?>
">
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('songCount', $_smarty_tpl->tpl_vars['songCount']->value+1);?>
                <div class="form-group row" id="row-song<?php echo $_smarty_tpl->tpl_vars['songCount']->value;?>
">
                    <div class="col-4">
                        <input type="button" id="btAdd<?php echo $_smarty_tpl->tpl_vars['songCount']->value;?>
" value="+" class="btn btn-outline-secondary"
                               tabindex="-1" onclick="addSongAfter(<?php echo $_smarty_tpl->tpl_vars['songCount']->value;?>
)">
                        <input type="button" id="delete<?php echo $_smarty_tpl->tpl_vars['songCount']->value;?>
" value="Delete" class="btn btn-danger"
                               tabindex="-1" onclick="deleteSong(<?php echo $_smarty_tpl->tpl_vars['songCount']->value;?>
)">
                    </div>
                    <div class="col-8">
                        <input type="text" id="song<?php echo $_smarty_tpl->tpl_vars['songCount']->value;?>
" name="song<?php echo $_smarty_tpl->tpl_vars['songCount']->value;?>
" class="form-control"
                               placeholder="Song <?php echo $_smarty_tpl->tpl_vars['songCount']->value;?>
">
                    </div>
                </div>
            <?php }?>

        </div>


        <div class="form-group row">
            <div class="offset-4 col-8">
                <input type="button" id="btAddSong" value="+" class="btn btn-outline-secondary"
                       onclick="addOnBottom()">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">
                    <?php if (isset($_smarty_tpl->tpl_vars['album']->value)) {?>
                        Save Changes
                    <?php } else { ?>
                        Create Album
                    <?php }?>

                </button>
            </div>
        </div>
    </form>
<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_11382826865df04354305772_09144949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_11382826865df04354305772_09144949',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/js/edit_album.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>var count = <?php echo $_smarty_tpl->tpl_vars['songCount']->value;?>
;<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
