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
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <script src="js/jquery-3.2.1.min.js"></script>

    </head>
    <body>
        <!-- Fixed navbar -->
<?php
$db = new mysqli("localhost", "root", "beachbooks_prototype", "beach_books");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
?>
        <?php include('nav.php'); ?>
        <main>
            <div class="container">
                <div class="alert alert-success alert-dismissable" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Request sent!
                </div>
                <a id="post_button" href="post.php" class="btn btn-success" role="button">Post Book</a>
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
    $query = " SELECT u.UserName, b.BookID, b.Title, b.Author, b.Edition, cl.ClassSubjNum, co.Conditions, bc.URL, co.SellingPrice, co.CopyID
        FROM Users u
        INNER JOIN Client c
        ON u.UserID = c.UserID
        INNER JOIN Copy co
        ON c.UserID = co.SellerID
        INNER JOIN Book b
        ON co.BookID = b.BookID
        INNER JOIN Classes cl
        ON cl.BookID = b.BookID
        INNER JOIN BookCover bc
        ON co.CopyId = bc.CopyId
        ORDER BY cl.ClassSubjNum;";
    if ($stmt = $db->prepare($query)) {

    }
} else {
    $input = "%" . $_GET["search_query"] . "%";
    $query = " SELECT u.UserName, b.BookID, b.Title, b.Author, b.Edition, cl.ClassSubjNum, co.Conditions, bc.URL, co.SellingPrice, co.CopyID
        FROM Users u
        INNER JOIN Client c
        ON u.UserID = c.UserID
        INNER JOIN Copy co
        ON c.UserID = co.SellerID
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
        u.UserName LIKE ?
        OR
        cl.ClassSubjNum LIKE ?
        ORDER BY cl.ClassSubjNum;";

    if ($stmt = $db->prepare($query)) {
        // $stmt->bind_param('ssss', $title, $author, $client, $class);
        $stmt->bind_param('ssss', $input, $input, $input, $input);
    } else {
        echo "Failed to query"; 
    }
} 
$stmt->execute();
$result = $stmt->get_result();
$counter=1;
?>
<script>
    var books = [];
</script>
<?php
while($row = $result->fetch_assoc()) {
    foreach ($row as $r) {
        $book_id = $row['BookID'];
        $copy_id = $row['CopyID'];
        $seller = $row['UserName'];
        $cover = $row['URL'];
        $title = $row['Title'];
        $author = $row['Author'];
        $edition = $row['Edition'];
        $class = $row['ClassSubjNum'];
        $condition = $row['Conditions'];
        $price = $row['SellingPrice'];
        $price = sprintf("$ %1\$.2f", $price);
        $counter = $counter + 1;
    } ?>
    <script>
    var book = {
    "book_id": "<?php echo $book_id;?>",
    "copy_id": "<?php echo $copy_id;?>",
    "title": "<?php echo $title;?>",
    };
    books.push(book);
    </script>
    <?php
?>
                        <tr id="<?php echo $copy_id; ?>" class="bookEntry" data-toggle="modal" data-target="#bookModal">
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
                            <td class="bookPrice"><?php echo $price; ?> </td>
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
                          <a onclick="request_book()" data-dismiss="modal" id="take_offer_button" class="btn btn-lg btn-success btn-block" role="button">Take the Offer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/loadBookModal.js"></script>
        <script>
            function request_book() {
                if (localStorage["user"] == "Guest" ) {
                    window.location.href="signup.php";
                    return false;
                }
                console.log(copy_id);
                $('.alert').show();
                console.log("Hi :) ");
                $.ajax({
                url: 'request_book.php',
                    data: {
                            user_id: localStorage["user_id"],
                            copy_id: copy_id,
                    },
                    type: 'post',
                });
                return false;
            }
            var post_button = document.getElementById('post_button');
            post_button.onclick = (function () {
                if (localStorage["user"] == "Guest") {
                    window.location.href="signup.php";
                    return false;
                }
            });
        </script>
    </body>
</html>
