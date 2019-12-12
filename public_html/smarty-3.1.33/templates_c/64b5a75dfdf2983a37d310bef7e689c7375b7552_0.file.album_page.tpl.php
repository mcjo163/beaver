<?php
/* Smarty version 3.1.33, created on 2019-12-12 01:09:49
  from 'C:\Apache24\htdocs\beaver\public_html\templates\album_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df1935d827ee4_12282663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64b5a75dfdf2983a37d310bef7e689c7375b7552' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\beaver\\public_html\\templates\\album_page.tpl',
      1 => 1576112986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df1935d827ee4_12282663 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9343106935df1935d811171_72825253', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1218356215df1935d815b63_64399909', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "title"} */
class Block_9343106935df1935d811171_72825253 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9343106935df1935d811171_72825253',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Beaver! | <?php echo $_smarty_tpl->tpl_vars['album']->value['album_name'];?>
 <?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_1218356215df1935d815b63_64399909 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1218356215df1935d815b63_64399909',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <img class="album-cover" src="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/images/album/<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
.jpg">
            </div>

            <div class="col-8">
                <h1 class="display-3"><?php echo $_smarty_tpl->tpl_vars['album']->value['album_name'];?>
</h1>
                <h4><?php echo $_smarty_tpl->tpl_vars['album']->value['artist_name'];?>
</h4>
                <h4><?php echo $_smarty_tpl->tpl_vars['album']->value['release_year'];?>
</h4>
                <h4>Added by <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/account/?id=<?php echo $_smarty_tpl->tpl_vars['album']->value['user_fk'];?>
"><?php echo $_smarty_tpl->tpl_vars['album']->value['username'];?>
</a></h4>

                <form>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="following" name="follow"
                        <?php if (in_array($_smarty_tpl->tpl_vars['album']->value['album_id'],$_smarty_tpl->tpl_vars['favorite']->value)) {?> checked <?php }?>>
                        <label class="custom-control-label" for="following">
                            <strong>Follow this album</strong>
                        </label>
                    </div>
                </form>

                <?php if ($_smarty_tpl->tpl_vars['album']->value['user_fk'] == $_smarty_tpl->tpl_vars['user']->value['user_id']) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/album/edit/?id=<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
">
                        <button type="button" class="btn btn-secondary">
                            Edit
                        </button>
                    </a>
                    <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                        data-target="#warningPopup">Delete</button>

                    <div class="modal fade" id="warningPopup" tabindex="-1" role="dialog" aria-labelledby="warningPopupLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="warningPopupLabel">Delete album?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this album?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/album/delete/?id=<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
">
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
            <div class="row">
                <div class="col">

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col" style="width: 15%">#</th>
                            <th scope="col" style="width: 80%">Song</th>
                            <th scope="col" style="width: 5%"></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['songs']->value, 'song');
$_smarty_tpl->tpl_vars['song']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['song']->value) {
$_smarty_tpl->tpl_vars['song']->iteration++;
$__foreach_song_0_saved = $_smarty_tpl->tpl_vars['song'];
?>
                                <tr class="song-row">
                                    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['song']->iteration;?>
</th>
                                    <td>
                                        <button type="button" class="btn btn-link song" data-toggle="modal" data-target="#song<?php echo $_smarty_tpl->tpl_vars['song']->iteration;?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['song']->value['song_name'];?>

                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary playlist-button" data-toggle="modal" data-target="#play<?php echo $_smarty_tpl->tpl_vars['song']->iteration;?>
">
                                            +
                                        </button>
                                    </td>
                                </tr>
                                <div class="modal fade" id="song<?php echo $_smarty_tpl->tpl_vars['song']->iteration;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $_smarty_tpl->tpl_vars['song']->value['song_name'];?>
</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body container">
                                                <div class="row">
                                                    <div class="col">
                                                        <p> Added by: <?php echo $_smarty_tpl->tpl_vars['album']->value['username'];?>
<br>
                                                            Album: <?php echo $_smarty_tpl->tpl_vars['album']->value['album_name'];?>
<br>
                                                            Artist: <?php echo $_smarty_tpl->tpl_vars['album']->value['artist_name'];?>
<br>
                                                            Year: <?php echo $_smarty_tpl->tpl_vars['album']->value['release_year'];?>
</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/images/album/<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
.jpg" style="width:130px; float:right;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="play<?php echo $_smarty_tpl->tpl_vars['song']->iteration;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add to Playlist:</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body container">
                                                <form>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="playlist" name="playlist" value="add">
                                                        <label class="custom-control-label" for="playlist">
                                                            <strong>Sam's Cool Playlist</strong>
                                                        </label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-2" data-dismiss="modal">Add</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
$_smarty_tpl->tpl_vars['song'] = $__foreach_song_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>    
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
