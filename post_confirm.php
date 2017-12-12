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
                <?php 
                    $user_id = $_SESSION["user_id"];
                    $book_id = $_POST["book_id_hide"];
                    $book_condition = $_POST["book_condition"];
                    $book_price = $_POST["book_price"];

                    $insert_query = "INSERT INTO Copy
                                        (Conditions, SellingPrice, SellerID, BookID)
                                    VALUES
                                        (?, ?, ?, ?);";
                    $get_copy_id_query = "SELECT MAX(co.CopyID) FROM Copy co";
                                    
                    $cover_query = "INSERT INTO BookCover
                                        (URL, CopyID)
                                    VALUES
                                        (?, ?);";
                    if ($insert_copy_stmt = $db->prepare($insert_query)) {
                        $insert_copy_stmt->bind_param("sdii", $book_condition, $book_price, $user_id, $book_id); 
                        $insert_copy_stmt->execute();
                        $insert_copy_stmt->close();
                        if ($get_copy_id_stmt=$db->prepare($get_copy_id_query)) {
                            $get_copy_id_stmt->execute(); 
                            $get_copy_id_stmt->bind_result($copy_id);
                            echo $copy_id;
                            $get_copy_id_stmt->fetch();
                            $get_copy_id_stmt->close();
                            if ($cover_stmt = $db->prepare($cover_query)) {
                                $cover_stmt->bind_param("sd", $image_url, $copy_id); 
                                $image_url = "http://anguerde.com/pics/main/12/253409-book.jpg";
                                $cover_stmt->execute();
                                echo " <h3>Your book has been posted :) </h3>";
                            } else {
                                echo $db->error;
                            }
                        } else {
                            echo $db->error;
                        }
                    } else {
                        echo $db->error;
                    }
                ?> 
            </div>
        </main>
    </body>
</html>
