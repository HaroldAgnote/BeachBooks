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
            <!-- Implement an alert that shows up in front of the page when the buyer clicks the 'Agree to Appointment' button-->
            <div class="col-md-6">
                <h1 class="form-signin-heading" style="text-align:center;">YOUR REQUESTS</h1>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#yourReq1">Book A</a>
                            </h4>
                        </div>
                        <div id="yourReq1" class="panel-collapse collapse">
                            <div class="panel-body"><h4>Book Info 1</h4></div>
                        </div>
                        <div class="panel-footer">Requesting from: <b><i>Username</b></i>
                            <a class="btn btn-sm btn-success" role="button">Agree to Appointment</a>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#yourReq2">Book B</a>
                            </h4>
                        </div>
                        <div id="yourReq2" class="panel-collapse collapse">
                            <div class="panel-body"><h4>Book Info 2</h4></div>
                        </div>
                        <div class="panel-footer">Requesting from: <b><i>Username</b></i>
                            <a class="btn btn-sm btn-success" role="button">Agree to Appointment</a>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#yourReq3">Book C</a>
                            </h4>
                        </div>
                        <div id="yourReq3" class="panel-collapse collapse">
                            <div class="panel-body"><h4>Book Info 3</h4></div>
                        </div>
                        <div class="panel-footer">Requesting from: <b><i>Username</b></i>
                            <a class="btn btn-sm btn-success" role="button">Agree to Appointment</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <h1 class="form-signin-heading" style="text-align:center;">BUYER REQUESTS</h1>
                <div class="panel-group" id="accordion2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#buyerReq1">Book A</a>
                          </h4>
                        </div>
                        <div id="buyerReq1" class="panel-collapse collapse">
                          <div class="panel-body"><h4>Location Info 1</h4></div>
                        </div>
                        <div class="panel-footer">Requested by: <b><i>Username</b></i>
                            <a class="btn btn-sm btn-success" role="button" href="appointment.php">Set an Appointment</a>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#buyerReq2">Book B</a>
                            </h4>
                        </div>
                        <div id="buyerReq2" class="panel-collapse collapse">
                          <div class="panel-body"><h4>Location Info 2</h4></div>
                        </div>
                        <div class="panel-footer">Requested by: <b><i>Username</b></i>
                            <a class="btn btn-sm btn-success" role="button" href="appointment.php">Set an Appointment</a>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#buyerReq3">Book C</a>
                            </h4>
                        </div>
                        <div id="buyerReq3" class="panel-collapse collapse">
                            <div class="panel-body"><h4>Location Info 3</h4></div>
                        </div>
                        <div class="panel-footer">Requested by: <b><i>Username</b></i>
                            <a class="btn btn-sm btn-success" role="button" href="appointment.php">Set an Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alert for agreeing to an appointment location and date set by a seller -->
        <div class="container">
            <div class="alert alert-success fade out" id="approveAppoint">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  Approval for the location and date of the appointment has been sent to the buyer.
            </div>
        </div>

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
