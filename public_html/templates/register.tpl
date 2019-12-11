<!doctype html>
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
                {if isset($infoConflict)}
                    <div class="alert alert-danger" role="alert">
                        A user with this username or email address already exists.
                    </div>
                {/if}
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="username"
                    {if isset($username)} value="{$username}"{/if}>
                </div>
                {* if the username field was empty when submitted *}
                {if isset($emptyUsername)}
                    <div class="alert alert-danger my-2" role="alert">
                        Username cannot not be empty.
                    </div>
                {/if}
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="email"
                    {if isset($email)} value="{$email}"{/if}>
                </div>
                {* if the email field was empty when submitted *}
                {if isset($emptyEmail)}
                    <div class="alert alert-danger my-2" role="alert">
                        Email cannot not be empty.
                    </div>
                {/if}
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password"
                           placeholder="password">
                </div>
                {* if the password field was empty when submitted *}
                {if isset($emptyPassword)}
                    <div class="alert alert-danger my-2" role="alert">
                        Password cannot not be empty.
                    </div>
                {/if}
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" name="confirm" class="form-control" id="confirmPassword"
                           placeholder="re-enter password">
                </div>
                {* if the confirm password field was empty when submitted *}
                {if isset($emptyConfirm)}
                    <div class="alert alert-danger my-2" role="alert">
                        Confirm password cannot not be empty.
                    </div>
                {/if}
                {if isset($noMatch)}
                    <div class="alert alert-danger my-2" role="alert">
                        Passwords must match.
                    </div>
                {/if}
                <button type="submit" class="btn btn-primary">Create Account</button>
                <p class="float-right pr-2">Already have an account? <a href="{$WEB_URL}/login">Log in!</a></p>
            </form>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>