<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/starter-template.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>BeachBooks - Post</title>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <script src="js/jquery-3.2.1.min.js"></script>

    </head>
    <body>
        <!-- Fixed navbar -->
        <?php include('nav.php'); ?>

        
        <?php
            $db = new mysqli("localhost", "root", "SoIf7pZnY0DT", "beach_books");
            if ($db->connect_errno) {
                echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
            }
        ?>

        <main>
            <div class="container">
                <h2>Select a Book to Post</h2>
                <form  class="navbar-form navbar-left">
                    <div class="form-group">
                        <input name="search_query" id="input-style" class="form-control" type="text" placeholder="Filter Books" class="form-control circular">
                        <input type="Submit" class="form-control" value="Search">
                    </div>
                </form>
                

                <table class="table table-bordered" id="bookList">
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Edition</th>
                        <th>Used in Course</th>
                    </tr>
                <?php
                    $query = " SELECT b.BookID, b.title, b.author, b.ISBN, b.Edition, cl.ClassSubjNum
                            FROM Book b
                            INNER JOIN Classes cl
                            ON b.BookID = cl.BookID;";
                    if ($stmt = $db->prepare($query)) {
                         
                    } else {
                        echo $db->error; 
                    }

                    $stmt->execute();
                    $result = $stmt->get_result();

                    while($row = $result -> fetch_assoc()) {
                        $book_id = $row['BookID'];
                        $book_title = $row['title'];
                        $book_author = $row['author'];
                        $book_edition = $row['Edition'];
                        $book_course = $row['ClassSubjNum'];
                        
                    ?>
                        
                        <tr id="<?php echo $book_id; ?>" class="postEntry" data-toggle="modal" data-target="#postModal">
                            <td class="bookTitle"><?php echo $book_title; ?></td>
                            <td class="bookAuthor"><?php echo $book_author; ?></td>
                            <td class="bookEdition"><?php echo $book_edition;?></td>
                            <td class="bookCourse"><?php echo $book_course;?></td>
                        </tr>
                    <?php
                    }
                ?>

                    
                <div class="container">
                    <div class="modal fade" id="postModal" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                            <form action="post_confirm.php" method="POST" role="form" enctype="multipart/form-data">
                                <div class="modal-header form-group">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4>BeachBooks</h4>
                                </div>
                                <div class="modal-body form-group">
                                  <ul>
                                      <li id="postModalTitle"></li>
                                      <li id="postModalAuthor"></li>
                                      <li id="postModalEdition"></li>
                                  </ul>
                                    <div>
                                        <h3>Copy Information: </h3>
                                            <label for="book_condition">Book Condition</label>
                                            <select class="form-control" name="book_condition" required autofocus
                              oninvalid="this.setCustomValidity('You must fill out all fields to sign in to your account')" onchange="this.setCustomValidity('')" id="book_condition">
                                  <option value="Excellent">Excellent</option>
                                  <option value="Good">Good</option>
                                  <option value="Average">Fair</option>
                                  <option value="Bad">Bad</option>
</select>    
                                            <label for="book_price">Your Price: $</label>
                                            <input type="number" class="form-control" required name="book_price" id="book_price" min="0" value="0" step=".01">
                                            <input type="hidden" required name="book_id_hide"  id="postModalBookId" value="0">
                                            <label for="fileToUpload">
                                                Select image to upload:
                                            </label>
                                            <input type="file" name="fileToUpload" id="fileToUpload">
                                    </div>
                                </div>
                                <div class="modal-footer form-group">
                                  <button data-toggle="modal" id="post_button" name="submit" class="btn btn-lg btn-success btn-block" type="submit">Post this Book</button>
                                   <button data-dismiss="modal" class="btn btn-lg btn-danger btn-block" type="reset">Cancel</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            
        </main>
        <script src="js/loadPostModal.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
