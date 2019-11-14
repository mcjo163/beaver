<!DOCTYPE html>
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
                        {* if the email and password do not match *}
                        {if isset($infoMismatch)}
                            <div class="alert alert-danger my-2" role="alert">
                                Email and password do not match.
                            </div>
                        {/if}
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="email"
                            {if isset($email)} value="{$email}"{/if}>

                        {* if the email field was empty when submitted *}
                        {if isset($emptyEmail)}
                            <div class="alert alert-danger my-2" role="alert">
                                Email cannot not be empty.
                            </div>
                        {/if}
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="password">

                        {* if the password field was empty when submitted *}
                        {if isset($emptyPassword)}
                            <div class="alert alert-danger my-2" role="alert">
                                Password cannot not be empty.
                            </div>
                        {/if}
                    </div>
                    <button type="submit" class="btn btn-primary">Log in</button>
                    <p class="float-right pr-2">Need an account? <a href="../register">Sign up!</a></p>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript ======================================================
     Placed at the end of the document so the pages load faster                   -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    {*
    <script src="{$WEB_URL}lib/Bootstrap/js/bootstrap.min.js"></script>*}
</body>

</html>