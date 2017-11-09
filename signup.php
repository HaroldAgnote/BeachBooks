<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/starter-template.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>BeachBooks - Sign Up</title>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    </head>
    <body>
        <!-- Fixed navbar -->
        <?php include('nav.php'); ?>
        <div id="sign-in-up" class="container center-block row">

            <div class="col-md-6 boxcol">
                <form class="form-signin">
                    <h2 class="form-signin-heading" id="emph">Sign In and Sell!</h2>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
            </div>

            <div class="col-md-6 boxcol">
                <form class="form-signin">
                    <h2 class="form-signin-heading" id="emph">Create an Account!</h2>
                    <label for="inputFirst" class="sr-only">First Name</label>
                    <input type="text" id="inputFirst" class="form-control"
                    placeholder="First Name" required autofocus>
                    <label for="inputLast" class="sr-only">Last</label>
                    <input type="text" id="inputLast" class="form-control"
                    placeholder="Last Name" required autofocus>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
                </form>
            </div>

        </div> <!-- /container -->
    </body>
</html>
