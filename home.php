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

        <?php
            $db = mysqli_connect('localhost', 'root', 'SoIf7pZnY0DT', 'beach_books');
            if (!$db)
            {
                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }
        ?>
    
        <?php 
            ?>        

        <div class="container">
            <table class="table table-bordered" id="bookList">
                <tr>
                    <th>Seller</th>
                    <th>Cover</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Edition</th>
                    <th>Used in Course</th>
                    <th>Condition</th>
                </tr>
                <?php 

                    if (empty($_GET)) {
                        $query = " SELECT c.ClientName, b.Title, b.Author, b.Edition,(COALESCE(cl.SubjectName, '') || COALESCE(cl.SubjectNum, '')) AS Course,
                             co.Conditions
                            FROM Client c
                            INNER JOIN Seller s
                            ON c.UserID = s.UserID
                            INNER JOIN Copy co
                            ON s.SellerID = co.SellerID
                            INNER JOIN Book b
                            ON co.BookID = b.BookID
                            INNER JOIN Classes cl
                            ON cl.ClassID = b.ClassID;" ;
                    } else {
                        $input = $_GET["search_query"];
                    }

                    $result = mysqli_query($db, $query);
                    $counter=1;
                    while($row = mysqli_fetch_assoc($result)) {
                        $seller = $row['clientName'];
                        $title = $row['Title'];
                        $author = $row['Author'];
                        $edition = $row['Edition'];
                        $class = $row['Course'];
                        $condition = $row['Conditions'];
                        $counter = $counter + 1;
                ?>
                    <tr id="book_<?php echo $counter; ?>" class="bookEntry" data-toggle="modal" data-target="#bookModal">
                        <td class="bookSeller">
                            <?php echo $seller; ?>
                        </td>
                        <td>
                            <img src="https://images-na.ssl-images-amazon.com/images/I/91CfRJMPqjL._AC_UL320_SR236,320_.jpg" style="width:20%; height:20%" alt="CECS Textbook"></img>
                        </td>
                        <td class="bookTitle"><?php echo $title; ?></td>
                        <td class="bookAuthor"><?php echo $author ?></td>
                        <td class="bookEdition"><?php echo $edition;?></td>
                        <td class="bookCourses"> <?php echo $class; ?></td>
                        <td class="bookCondition"><?php echo $condition; ?></td>
                    </tr>
                    
                <?php

                    }
                ?>

            </table>
        </div><!-- /.container -->

        <!-- Modal -->
        <div class="container">
            <div class="modal fade" id="bookModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>BeachBooks</h4>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <li id="bookModalTitle"></li>
                                <li id="bookModalAuthor"></li>
                                <li id="bookModalEdition"></li>
                                <li id="bookModalSeller"></li>
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
        <script src="js/loadBookModal.js"></script>
    </body>
</html>
