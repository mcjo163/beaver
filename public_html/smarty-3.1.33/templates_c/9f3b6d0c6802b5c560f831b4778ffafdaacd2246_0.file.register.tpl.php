<?php
/* Smarty version 3.1.33, created on 2019-12-11 05:47:46
  from '/Library/WebServer/Documents/beaver/public_html/templates/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df083020d0697_56237681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f3b6d0c6802b5c560f831b4778ffafdaacd2246' => 
    array (
      0 => '/Library/WebServer/Documents/beaver/public_html/templates/register.tpl',
      1 => 1573699069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df083020d0697_56237681 (Smarty_Internal_Template $_smarty_tpl) {
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

    <title>Beaver! | Create an Account</title>
</head>

<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-6 offset-md-3 py-3 rounded bg-light shadow">
            <h1>Create an Account</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="username">
                </div>
                                <?php if (isset($_smarty_tpl->tpl_vars['emptyUsername']->value)) {?>
                    <div class="alert alert-danger my-2" role="alert">
                        Username cannot not be empty.
                    </div>
                <?php }?>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password"
                           placeholder="password">
                </div>
                                <?php if (isset($_smarty_tpl->tpl_vars['emptyPassword']->value)) {?>
                    <div class="alert alert-danger my-2" role="alert">
                        Password cannot not be empty.
                    </div>
                <?php }?>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" name="confirm" class="form-control" id="confirmPassword"
                           placeholder="re-enter password">
                </div>
                                <?php if (isset($_smarty_tpl->tpl_vars['emptyConfirm']->value)) {?>
                    <div class="alert alert-danger my-2" role="alert">
                        Confirm password cannot not be empty.
                    </div>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['noMatch']->value)) {?>
                    <div class="alert alert-danger my-2" role="alert">
                        Passwords must match.
                    </div>
                <?php }?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="email">
                </div>
                                <?php if (isset($_smarty_tpl->tpl_vars['emptyEmail']->value)) {?>
                    <div class="alert alert-danger my-2" role="alert">
                        Email cannot not be empty.
                    </div>
                <?php }?>
                <button type="submit" class="btn btn-primary">Create Account</button>
                <p class="float-right pr-2">Already have an account? <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/login">Log in!</a></p>
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
