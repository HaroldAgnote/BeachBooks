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
        <script src="js/jquery-3.2.1.min.js"></script>

    </head>
    <body>
        <!-- Fixed navbar -->
<?php
$db = new mysqli("localhost", "root", "SoIf7pZnY0DT", "beach_books");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
?>
        <?php include('nav.php'); ?>
        <main>
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
                        <th>Price</th>
                    </tr>
<?php
$stmt;
if (empty($_GET)) {
    $query = " SELECT c.ClientName, b.Title, b.Author, b.Edition, cl.ClassSubjNum, co.Conditions, bc.URL
        FROM Client c
        INNER JOIN Seller s
        ON c.UserID = s.UserID
        INNER JOIN Copy co
        ON s.SellerID = co.SellerID
        INNER JOIN Book b
        ON co.BookID = b.BookID
        INNER JOIN Classes cl
        ON cl.BookID = b.BookID
        INNER JOIN BookCover bc
        ON co.COPYID = bc.COPYID;
    " ;
    if ($stmt = $db->prepare($query)) {

    }
} else {
    $input = "%" . $_GET["search_query"] . "%";
    $query = " SELECT c.ClientName, b.Title, b.Author, b.Edition, cl.ClassSubjNum, co.Conditions, bc.URL 
        FROM Client c
        INNER JOIN Seller s
        ON c.UserID = s.UserID
        INNER JOIN Copy co
        ON s.SellerID = co.SellerID
        INNER JOIN Book b
        ON co.BookId = b.BookId
        INNER JOIN Classes cl
        ON cl.BookID = b.BookID
        INNER JOIN BookCover bc
        on co.CopyId = bc.CopyId
        WHERE b.title LIKE ?
        OR 
        b.author LIKE ?
        OR
        c.ClientName LIKE ?
        OR
        cl.ClassSubjNum LIKE ?;";

    if ($stmt = $db->prepare($query)) {
        // $stmt->bind_param('ssss', $title, $author, $client, $class);
        $stmt->bind_param('ssss', $input, $input, $input, $input);
    } 
}
$stmt->execute();
$result = $stmt->get_result();
$counter=1;
while($row = $result->fetch_assoc()) {
    foreach ($row as $r) {
        $seller = $row['ClientName'];
        $cover = $row['URL'];
        $title = $row['Title'];
        $author = $row['Author'];
        $edition = $row['Edition'];
        $class = $row['ClassSubjNum'];
        $condition = $row['Conditions'];
        $counter = $counter + 1;

    }
?>
                        <tr id="book_<?php echo $counter; ?>" class="bookEntry" data-toggle="modal" data-target="#bookModal">
                            <td class="bookSeller">
                                <?php echo $seller; ?>
                            </td>
                            <td style="height:150px;width:200px;">
                              <img class="bookCover" src="<?php echo $cover ?>" style="max-width:55%;height:auto;" alt="CECS Textbook"></img>
                            </td>
                            <td class="bookTitle"><?php echo $title; ?></td>
                            <td class="bookAuthor"><?php echo $author ?></td>
                            <td class="bookEdition"><?php echo $edition;?></td>
                            <td class="bookCourses"> <?php echo $class; ?></td>
                            <td class="bookCondition"><?php echo $condition; ?></td>
                            <td class="bookPrice"><!-- <?php echo $condition; ?> --></td>
                        </tr>

<?php

}
?>
                </table>
            </div><!-- /.container -->
        </main>

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
                              <li id="bookModalCover"></li>
                          </ul>
                        </div>
                        <div class="modal-footer">
                          <a class="btn btn-lg btn-success btn-block" role="button">Take the Offer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/loadBookModal.js"></script>
    </body>
</html>
