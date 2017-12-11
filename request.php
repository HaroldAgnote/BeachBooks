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
        <script src="js/jquery-3.2.1.min.js"></script>

    </head>
    <?php 
        if (isset($_POST["user_id"])) {
            echo $_POST["user_id"];
        } else {
    ?>
            <script>
            var var_data = localStorage["user_id"];
            $.ajax({
                url: 'request.php',
                type: 'POST',
                data: {
                    user_id : var_data
                },
                success: function(data) {
                    console.log("Using id " + var_data); 
                }
            })     
            </script>
    <?php
        }
    ?>
    <body>
        <?php
        $user_id = $_POST["user_id"];
        $db = new mysqli("localhost", "root", "SoIf7pZnY0DT", "beach_books");
        if ($db->connect_errno) {
            echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
        }
        ?>
        <!-- Fixed navbar -->
        <?php include('nav.php'); ?>

        <main>
            <div class="container center-block row">
                <!-- Implement an alert that shows up in front of the page when the buyer clicks the 'Agree to Appointment' button-->
                <div class="col-md-6">
                    <h1 class="form-signin-heading" style="text-align:center;">YOUR REQUESTS</h1>
                    <div class="panel-group" id="accordion">
                    <?php
        $seller_query = "SELECT s.UserName, b.title, b.author, bc.URL, co.SellingPrice, co.CopyID
                    FROM Request r
                    INNER JOIN Copy co
                    ON r.CopyID = co.CopyID
                    INNER JOIN Book b
                    ON b.BookID = co.BookID
                    INNER JOIN BookCover bc
                    ON bc.CopyID = co.CopyID
                    INNER JOIN Client c
                    ON c.UserID = co.SellerID
                    INNER JOIN Users s
                    ON s.UserID = c.UserID
                    WHERE r.BuyerID= ?
                    ;";
                    $seller_stmt;
                    if ($seller_stmt = $db ->prepare($seller_query)) {
                        $seller_stmt->bind_param("i", $user_id);
                    } else {
                        echo "Preparation failed";
                        echo $db->error;
                    }
                    $seller_stmt->execute();
                    $result = $seller_stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                        foreach ($row as $r) {
                            $seller_name=$row['UserName'];
                            $book_title=$row['title'];
                            $author = $row['author'];
                            $cover = $row['URL'];
                            $price = $row['SellingPrice'];
                        } ?>
                        <div class="panel panel-primary">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#yourReq1">
                                <h4 class="panel-title">
                                    <?php echo $book_title; ?>
                                </h4>
                            </div>
                            <div id="yourReq1" class="panel-collapse collapse">
                                <div class="panel-body"><h4>Location Info 1</h4></div>
                            </div>
                            <div class="panel-footer">Requesting from: <b><i><?php echo $seller_name; ?></b></i>
                                <a class="btn btn-sm btn-success" role="button">Agree to Appointment</a>
                            </div>
                        </div>
                        
                    <?php
                    }
                    ?>
                    </div>
                </div>


                <div class="col-md-6">
                    <h1 class="form-signin-heading" style="text-align:center;">BUYER REQUESTS</h1>
                    <div class="panel-group" id="accordion2">
                    <?php
                    $buyer_query = "SELECT bu.UserName, b.title, b.author, bc.URL, co.SellingPrice, co.CopyID
                                FROM Request r
                                INNER JOIN Copy co
                                ON r.CopyID = co.CopyID
                                INNER JOIN Book b
                                ON b.BookID = co.BookID
                                INNER JOIN BookCover bc
                                ON bc.CopyID = co.CopyID
                                INNER JOIN Client c
                                ON c.UserID = co.SellerID
                                INNER JOIN Users bu
                                ON bu.UserID = r.BuyerID
                                WHERE co.SellerID = ?
                                ;";
                    $buyer_stmt;
                    if ($buyer_stmt = $db ->prepare($buyer_query)) {
                        $buyer_stmt->bind_param("i", $user_id);
                    } else {
                        echo "Preparation failed";
                        echo $db->error;
                    }
                    $buyer_stmt->execute();
                    $result = $buyer_stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                        foreach ($row as $r) {
                            $buyer_name=$row['UserName'];
                            $book_title=$row['title'];
                            $author = $row['author'];
                            $cover = $row['URL'];
                            $price = $row['SellingPrice'];
                        } ?>
                        <div class="panel panel-primary">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#accordion2" href="#buyerReq1">
                                <h4 class="panel-title">
                                    <?php echo $book_title; ?>
                                </h4>
                            </div>
                            <div id="buyerReq1" class="panel-collapse collapse">
                              <div class="panel-body"><h4>Book Info 1</h4></div>
                            </div>
                            <div class="panel-footer">Requested by: <b><i><?php echo $buyer_name; ?></b></i>
                                <a class="btn btn-sm btn-success" role="button" href="appointment.php">Set an Appointment</a>
                            </div>
                        </div>
                        
                    <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
        </main>

        <!-- Alert for agreeing to an appointment location and date set by a seller -->
        <div class="container">
            <div class="alert alert-success fade out" id="approveAppoint">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  Approval for the location and date of the appointment has been sent to the buyer.
            </div>
        </div>

        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
