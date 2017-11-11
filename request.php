<!-- Eventually turn this entire page into a dropdown scrollbar on the navbar to see requests
anywhere without leaving the current page, much like the notification button on the navbar
on YouTube when you are logged in -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/starter-template.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>BeachBooks - Request</title>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    </head>
    <body>
        <!-- Fixed navbar -->
        <?php include('nav.php'); ?>

        <div class="col-md-12">
            <h1 class="form-signin-heading" style="text-align:center;">REQUESTS</h1>
        </div>


        <div class="container">
            <div class="list-group">
                <button class="list-group-item">
                    <h4 class="list-group-item-heading">CECS 100</h4>
                    <p class="list-group-item-text">Requested by: <b><i>Username A</i></b></p>
                </button>
                <button class="list-group-item">
                    <h4 class="list-group-item-heading">CECS 174</h4>
                    <p class="list-group-item-text">Requested by: <b><i>Username B</i></b></p>
                </button>
                <button class="list-group-item">
                    <h4 class="list-group-item-heading">CECS 274</h4>
                    <p class="list-group-item-text">Requested by: <b><i>Username C</i></b></p>
                </button>
            </div>
        </div>

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
