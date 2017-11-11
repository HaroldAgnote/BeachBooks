<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/starter-template.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>BeachBooks - Set Up Appointment</title>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    </head>
    <body>
        <!-- Fixed navbar -->
        <?php include('nav.php'); ?>

        <div id="sign-in-up" class="container center-block row">

            <div class="col-md-12">
                <h1 class="form-signin-heading" style="text-align:center;">MAKE AN APPOINTMENT</h1>
            </div>

            <div class="col-md-6">
                <div class="row">
                        <div class="col-sm-3">
                            <form><label>Month</label>
                            <select class="form-control" name="appoint-month">
                                <option value="jan">January</option>
                                <option value="feb">February</option>
                                <option value="mar">March</option>
                                <option value="apr">April</option>
                                <option value="may">May</option>
                                <option value="jun">June</option>
                                <option value="jul">July</option>
                                <option value="aug">August</option>
                                <option value="sep">September</option>
                                <option value="oct">October</option>
                                <option value="nov">November</option>
                                <option value="dec">December</option>
                            </select></form>
                        </div>
                        <div class="col-sm-3">
                            <form><label>Day</label>
                            <input class="form-control" type="number" name="appoint-day" min="1" max="31" value="1">
                            </input></form>
                        </div>
                        <div class="col-sm-3">
                            <form><label>Time</label>
                            <input class="form-control" type="time" name="appoint_time"></form>
                        </div>
                        <div class="col-sm-3">
                            <form><label>Wait Length</label>
                            <select class="form-control" name="appoint-wait">
                                <option value="10min">10 minutes</option>
                                <option value="15min">15 minutes</option>
                                <option value="20min">20 minutes</option>
                                <option value="30min">30 minutes</option>
                                <option value="45min">45 minutes</option>
                                <option value="1hour">1 hour</option>
                            </select></form>
                        </div>
                </div><br>
                <form>
                    <label>Specifications</label>
                    <textarea class="form-control" name="appoint-specs" rows="10"
                        placeholder="Enter any specific directions or location..."></textarea>
                </form>
                <br>
                <button class="btn btn-lg btn-success btn-block" type="submit">Set the Appointment</button>
                <button class="btn btn-lg btn-danger btn-block" type="submit">On Second Thought...</button>
            </div>

            <!--Google API -->
            <div class="col-md-6">
                <form class="form-signin">
                      <script>
                      </script>
                </form>
            </div>

        </div>

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>