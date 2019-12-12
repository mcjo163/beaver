<?php
/* Smarty version 3.1.33, created on 2019-12-12 00:49:06
  from 'C:\Apache24\htdocs\beaver\public_html\templates\edit_album_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df18e82748d40_47401811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5659c66284f370eb345514a5e27291bc0d07b3c' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\beaver\\public_html\\templates\\edit_album_page.tpl',
      1 => 1576111743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df18e82748d40_47401811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15756839835df18e82727905_00384674', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6880355975df18e82731481_04658269', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8151941285df18e827470e7_33997341', "scripts");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12269925645df18e82748444_57720004', "head_scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "title"} */
class Block_15756839835df18e82727905_00384674 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15756839835df18e82727905_00384674',
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
class Block_6880355975df18e82731481_04658269 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6880355975df18e82731481_04658269',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form <?php if ($_smarty_tpl->tpl_vars['form_type']->value == "add") {?>action = "index.php" <?php }?>method ="POST" id="albumForm"
          enctype="multipart/form-data" style="margin-top:50px;">
        <div class="form-group row">
            <label for="cover" class="col-4 col-form-label">Album Cover</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <p>Select image to upload:&nbsp;</p>
                        <input type="file" name="cover" id="cover">
                    </div>
                </div>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['error']->value['imageError']) {?>
            <div class="alert alert-danger">
                Album cover must be a .jpg image
            </div>
        <?php }?>



        <div class="form-group row">
            <label for="title" class="col-4 col-form-label">Title</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="title" name="title" type="text"
                            <?php if (isset($_smarty_tpl->tpl_vars['album']->value['album_name'])) {?>
                                value="<?php echo $_smarty_tpl->tpl_vars['album']->value['album_name'];?>
"
                            <?php }?>
                           class="form-control">
                </div>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['error']->value['titleError']) {?>
            <div class="alert alert-danger">
                Please enter an album name
            </div>
        <?php }?>

        <div class="form-group row">
            <label for="artist" class="col-4 col-form-label">Artist</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="artist" name="artist" type="text"
                           <?php if (isset($_smarty_tpl->tpl_vars['album']->value['artist_name'])) {?>
                               value="<?php echo $_smarty_tpl->tpl_vars['album']->value['artist_name'];?>
"
                           <?php }?>
                           class="form-control">
                </div>
            </div>
        </div>


        <?php if ($_smarty_tpl->tpl_vars['error']->value['artistError']) {?>
            <div class="alert alert-danger">
                Please enter an artist name
            </div>
        <?php }?>

        <div class="form-group row">
            <label for="year" class="col-4 col-form-label">Year</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="year" name="year" type="text"
                            <?php if (isset($_smarty_tpl->tpl_vars['album']->value['release_year'])) {?>
                                value="<?php echo $_smarty_tpl->tpl_vars['album']->value['release_year'];?>
"
                            <?php }?>
                           class="form-control">
                </div>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['error']->value['yearError']) {?>
            <div class="alert alert-danger">
                Please enter a valid year
            </div>
        <?php }?>


        <div class="textboxes">

        <?php $_smarty_tpl->_assignInScope('songCount', 0);?>
            <?php if (isset($_smarty_tpl->tpl_vars['songs']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['songs']->value, 'song');
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
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['song']->value['song_name'];?>
"
                                   placeholder="Song <?php echo $_smarty_tpl->tpl_vars['songCount']->value;?>
">
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['error']->value['songError'] && $_smarty_tpl->tpl_vars['song']->value['song_name'] == '') {?>
                            <div class="alert alert-danger">
                                Song name cannot be empty
                            </div>
                        <?php }?>
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
                <button id="submit" name="submit" class="btn btn-primary">
                    <?php if (isset($_smarty_tpl->tpl_vars['album']->value) && $_smarty_tpl->tpl_vars['form_type']->value == 'edit') {?>
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
class Block_8151941285df18e827470e7_33997341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_8151941285df18e827470e7_33997341',
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

    <?php echo '<script'; ?>
>
        document.onload(function(
            $("#submit").click(function(
                %("#albumForm").submit();
            )
           )
        )
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
/* {block "head_scripts"} */
class Block_12269925645df18e82748444_57720004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_scripts' => 
  array (
    0 => 'Block_12269925645df18e82748444_57720004',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "head_scripts"} */
}
