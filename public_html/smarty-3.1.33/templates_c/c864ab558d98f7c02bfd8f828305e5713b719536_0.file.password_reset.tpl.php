<?php
/* Smarty version 3.1.33, created on 2019-12-12 01:31:04
  from 'C:\Apache24\htdocs\beaver\public_html\templates\password_reset.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df1985887fbd1_60388405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c864ab558d98f7c02bfd8f828305e5713b719536' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\beaver\\public_html\\templates\\password_reset.tpl',
      1 => 1576112687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df1985887fbd1_60388405 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="/beaver/beaver_icon.ico" type="image">

    <title>Reset Password</title>
</head>

<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-6 offset-md-3 py-3 rounded bg-light shadow">
            <h1>Reset Password</h1>
            <form action="/beaver/public_html/account/change_password/?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST">
                                <?php if (isset($_smarty_tpl->tpl_vars['noMatch']->value)) {?>
                    <div class="alert alert-danger my-2" role="alert">
                        New passwords do not match.
                    </div>
                <?php }?>
                <div class="form-group">
                    <label for="new_password">New Password</label>
                    <input type="password" name="password" class="form-control" id="new_password"
                           placeholder="password" <?php if (isset($_smarty_tpl->tpl_vars['password']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"<?php }?>>
                </div>
                                <?php if (isset($_smarty_tpl->tpl_vars['emptyPassword']->value)) {?>
                    <div class="alert alert-danger my-2" role="alert">
                        Password cannot not be empty.
                    </div>
                <?php }?>
                <div class="form-group">
                    <label for="confirm_password">Confirm New Password</label>
                    <input type="password" name="confirm" class="form-control" id="confirm_password"
                           placeholder="password">
                </div>
                                <?php if (isset($_smarty_tpl->tpl_vars['emptyConfirm']->value)) {?>
                    <div class="alert alert-danger my-2" role="alert">
                         Confirm New Password cannot not be empty.
                    </div>
                <?php }?>
                <button type="submit" class="btn btn-primary">Reset Password</button>
            </form>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
