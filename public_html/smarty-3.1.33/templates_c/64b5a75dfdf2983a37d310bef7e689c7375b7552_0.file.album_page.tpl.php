<?php
<<<<<<< HEAD
/* Smarty version 3.1.33, created on 2019-11-12 20:09:14
=======
/* Smarty version 3.1.33, created on 2019-11-13 20:39:42
>>>>>>> master
  from 'C:\Apache24\htdocs\beaver\public_html\templates\album_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
<<<<<<< HEAD
  'unifunc' => 'content_5dcb57ba6aee07_89135606',
=======
  'unifunc' => 'content_5dcc6a0e3d3454_47193193',
>>>>>>> master
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64b5a75dfdf2983a37d310bef7e689c7375b7552' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\beaver\\public_html\\templates\\album_page.tpl',
<<<<<<< HEAD
      1 => 1573607351,
=======
      1 => 1573677551,
>>>>>>> master
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5dcb57ba6aee07_89135606 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5dcc6a0e3d3454_47193193 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18903089685dcb57ba68ce86_97110137', "title");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14582743205dcc6a0e3bee32_32349220', "title");
>>>>>>> master
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20192095995dcb57ba6926c9_01405660', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "title"} */
class Block_18903089685dcb57ba68ce86_97110137 extends Smarty_Internal_Block
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12459801755dcc6a0e3c44d0_86853310', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "title"} */
class Block_14582743205dcc6a0e3bee32_32349220 extends Smarty_Internal_Block
>>>>>>> master
{
public $subBlocks = array (
  'title' => 
  array (
<<<<<<< HEAD
    0 => 'Block_18903089685dcb57ba68ce86_97110137',
=======
    0 => 'Block_14582743205dcc6a0e3bee32_32349220',
>>>>>>> master
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Beaver! | <?php echo $_smarty_tpl->tpl_vars['album']->value['title'];?>
 <?php
}
}
/* {/block "title"} */
/* {block "content"} */
<<<<<<< HEAD
class Block_20192095995dcb57ba6926c9_01405660 extends Smarty_Internal_Block
=======
class Block_12459801755dcc6a0e3c44d0_86853310 extends Smarty_Internal_Block
>>>>>>> master
{
public $subBlocks = array (
  'content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_20192095995dcb57ba6926c9_01405660',
=======
    0 => 'Block_12459801755dcc6a0e3c44d0_86853310',
>>>>>>> master
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container">
        <div class="row">
            <div class="col-4">
                <img class="album-cover" src="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['album']->value['cover'];?>
">
            </div>

            <div class="col-8">
                <h1 class="display-3"><?php echo $_smarty_tpl->tpl_vars['album']->value['title'];?>
</h1>
                <h4><?php echo $_smarty_tpl->tpl_vars['album']->value['artist'];?>
</h4>
                <h4><?php echo $_smarty_tpl->tpl_vars['album']->value['year'];?>
</h4>
<<<<<<< HEAD
                <h4>Added by <?php echo $_smarty_tpl->tpl_vars['album']->value['user'];?>
</h4>
=======
                <h4>Added by <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/account/?id=<?php echo $_smarty_tpl->tpl_vars['album']->value['posterID'];?>
"><?php echo $_smarty_tpl->tpl_vars['album']->value['user'];?>
</a></h4>
>>>>>>> master

                <form>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="following" name="follow"
                        <?php if (in_array($_smarty_tpl->tpl_vars['album']->value,$_smarty_tpl->tpl_vars['user']->value['following'])) {?> checked <?php }?>>
                        <label class="custom-control-label" for="following">
                            <strong>Follow this album</strong>
                        </label>
                    </div>
                </form>

                <?php if ($_smarty_tpl->tpl_vars['album']->value['user'] == $_smarty_tpl->tpl_vars['user']->value['username']) {?>
<<<<<<< HEAD
                    <a href="edit_19.html">
=======
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/album/edit/?id=<?php echo $_smarty_tpl->tpl_vars['albumID']->value;?>
">
>>>>>>> master
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
                                    <button type="button" class="btn btn-outline-danger">Delete</button>
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
<<<<<<< HEAD
                            <th scope="col" style="width: 80%">Song</th>
                            <th scope="col" style="width: 5%"></th>
=======
                            <th scope="col" style="width: 85%">Song</th>
>>>>>>> master
                        </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['album']->value['songs'], 'song', false, 'id');
$_smarty_tpl->tpl_vars['song']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['song']->value) {
$_smarty_tpl->tpl_vars['song']->iteration++;
$__foreach_song_0_saved = $_smarty_tpl->tpl_vars['song'];
?>
                                <tr class="song-row">
                                    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['song']->iteration;?>
</th>
                                    <td>
                                        <button type="button" class="btn btn-link song" data-toggle="modal" data-target="#song<?php echo $_smarty_tpl->tpl_vars['song']->iteration;?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['song']->value;?>

                                        </button>
                                    </td>
<<<<<<< HEAD
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary playlist-button" data-toggle="modal" data-target="#play<?php echo $_smarty_tpl->tpl_vars['song']->iteration;?>
">
                                            +
                                        </button>
                                    </td>
=======
>>>>>>> master
                                </tr>
                                <div class="modal fade" id="song<?php echo $_smarty_tpl->tpl_vars['song']->iteration;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $_smarty_tpl->tpl_vars['song']->value;?>
</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body container">
                                                <div class="row">
                                                    <div class="col">
                                                        <p> Added by: <?php echo $_smarty_tpl->tpl_vars['album']->value['user'];?>
<br>
                                                            Album: <?php echo $_smarty_tpl->tpl_vars['album']->value['title'];?>
<br>
                                                            Artist: <?php echo $_smarty_tpl->tpl_vars['album']->value['artist'];?>
<br>
                                                            Year: <?php echo $_smarty_tpl->tpl_vars['album']->value['year'];?>
</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['album']->value['cover'];?>
" style="width:130px; float:right;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<<<<<<< HEAD
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
=======
>>>>>>> master
                            <?php
$_smarty_tpl->tpl_vars['song'] = $__foreach_song_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
<<<<<<< HEAD
                </div>    
=======
                                                    </div>     
>>>>>>> master
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
