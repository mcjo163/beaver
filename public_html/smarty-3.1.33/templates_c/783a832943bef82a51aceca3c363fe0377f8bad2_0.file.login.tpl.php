<?php
/* Smarty version 3.1.33, created on 2019-11-14 00:03:24
  from '/Library/WebServer/Documents/beaver/public_html/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcc99cc0f4967_89717345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '783a832943bef82a51aceca3c363fe0377f8bad2' => 
    array (
      0 => '/Library/WebServer/Documents/beaver/public_html/templates/login.tpl',
      1 => 1573689797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcc99cc0f4967_89717345 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login!</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-6 offset-md-3 py-3 bg-light shadow">
                <h1>Welcome!</h1>
                <form action="." method="POST">
                    <div class="form-group">
                                                <?php if (isset($_smarty_tpl->tpl_vars['infoMismatch']->value)) {?>
                            <div class="alert alert-danger my-2" role="alert">
                                Email and password do not match.
                            </div>
                        <?php }?>
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="email"
                            <?php if (isset($_smarty_tpl->tpl_vars['email']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"<?php }?>>

                                                <?php if (isset($_smarty_tpl->tpl_vars['emptyEmail']->value)) {?>
                            <div class="alert alert-danger my-2" role="alert">
                                Email cannot not be empty.
                            </div>
                        <?php }?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="password">

                                                <?php if (isset($_smarty_tpl->tpl_vars['emptyPassword']->value)) {?>
                            <div class="alert alert-danger my-2" role="alert">
                                Password cannot not be empty.
                            </div>
                        <?php }?>
                    </div>
                    <button type="submit" class="btn btn-primary">Log in</button>
                    <p class="float-right pr-2">Need an account? <a href="../register">Sign up!</a></p>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript ======================================================
     Placed at the end of the document so the pages load faster                   -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
    </body>

</html><?php }
}
