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

        <div class="container center-block row">
            <div class="col-md-6">
                <h1 class="form-signin-heading" style="text-align:center;">BUYER REQUESTS</h1>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Book A</a>
                          </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                          <div class="panel-body"><h4>Request Info 1</h4></div>
                        </div>
                        <div class="panel-footer">Requested by: <b><i>Username</b></i></div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Book B</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                          <div class="panel-body"><h4>Request Info 2</h4></div>
                        </div>
                        <div class="panel-footer">Requested by: <b><i>Username</b></i></div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Book C</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body"><h4>Request Info 3</h4></div>
                        </div>
                        <div class="panel-footer">Requested by: <b><i>Username</b></i></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">

            </div>

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
