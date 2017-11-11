<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/starter-template.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>BeachBooks - Home</title>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    </head>
    <body>
        <!-- Fixed navbar -->
        <?php include('nav.php'); ?>

        <div class="container">
            <table class="table table-bordered" id="bookList">
                <tr>
                    <th>Cover</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Edition</th>
                    <th>Used in Course</th>
                    <th>Condition</th>
                </tr>
                <tr class="bookEntry" data-toggle="modal" data-target="#bookModal">
                    <td>
                        <img src="https://images-na.ssl-images-amazon.com/images/I/91CfRJMPqjL._AC_UL320_SR236,320_.jpg" style="width:20%;height:20%" alt="CECS Textbook"></img>
                        <button type="button" data-toggle="modal" data-target="#myModal">Insert Cover Page Here</button>
                        </button>
                    </td>
                    <td>The Book of Everything</td>
                    <td>Charles Barkley</td>
                    <td>4th Edition</td>
                    <td>
                        <ul>
                            <li>CECS 100 </li>
                            <li>CECS 174 </li>
                            <li>CECS 228 </li>
                            <li>CECS 274 </li>
                        </ul>
                    </td>
                    <td>Fair</td>
                </tr>
                <tr class="bookEntry" data-toggle="modal" data-target="#bookModal">
                    <td>
                        <img src="http://www.heritagebooks.com.np/images/product/1469943825a_txt_book_for_enginneee.jpg" style="width:20%;height:20%" alt="CECS Textbook"></img>
                        <button type="button" data-toggle="modal" data-target="#myModal">Insert Cover Page Here</button>
                        </button>
                    </td>
                    <td>The Book of Everything</td>
                    <td>Charles Barkley</td>
                    <td>4th Edition</td>
                    <td>
                        <ul>
                            <li>CECS 100 </li>
                            <li>CECS 174 </li>
                            <li>CECS 228 </li>
                            <li>CECS 274 </li>
                        </ul>
                    </td>
                    <td>Fair</td>
                </tr>
            </table>
        </div><!-- /.container -->

        <!-- Modal -->
        <div class="container">
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>BeachBooks</h4>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <li>Book Title</li>
                                <li>Author</li>
                                <li>Edition</li>
                                <li>Being sold by: </li>
                            </ul>
                            <div class="modal-footer">
                              <a class="btn btn-lg btn-success btn-block" role="button" href="appointment.php">Take the Offer</a>
                                BeachBooks
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
