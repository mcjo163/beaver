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

    <title>Reset Password</title>
</head>

<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-6 offset-md-3 py-3 rounded bg-light shadow">
            <h1>Reset Password</h1>
            <form action="/beaver/public_html/change_password/" method="POST">
                {* if the email and password do not match *}
                {if isset($noMatch)}
                    <div class="alert alert-danger my-2" role="alert">
                        New passwords do not match.
                    </div>
                {/if}
                <div class="form-group">
                    <label for="new_password">New Password</label>
                    <input type="password" name="password" class="form-control" id="new_password"
                           placeholder="password" {if isset($password)} value="{$password}"{/if}>
                </div>
                {* if the password field was empty when submitted *}
                {if isset($emptyPassword)}
                    <div class="alert alert-danger my-2" role="alert">
                        Password cannot not be empty.
                    </div>
                {/if}
                <div class="form-group">
                    <label for="confirm_password">Confirm New Password</label>
                    <input type="password" name="confirm" class="form-control" id="confirm_password"
                           placeholder="password">
                </div>
                {* if the password field was empty when submitted *}
                {if isset($emptyConfirm)}
                    <div class="alert alert-danger my-2" role="alert">
                         Confirm New Password cannot not be empty.
                    </div>
                {/if}
                <button type="submit" class="btn btn-primary">Reset Password</button>
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