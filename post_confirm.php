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
                                $cover_stmt->bind_param("sd", $target_file, $copy_id); 
                                $target_dir = "uploads/";
                                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                                $uploadOk = 1;
                                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                
                                // Check if image file is a actual image or fake image
                                if(isset($_POST["submit"])) {
                                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                    if($check !== false) {
                                        echo "File is an image - " . $check["mime"] . ".";
                                        $uploadOk = 1;
                                    } else {
                                        echo "File is not an image.";
                                        $uploadOk = 0;
                                    }
                                }
                                // Check if file already exists
                                if (file_exists($target_file)) {
                                    echo "Sorry, file already exists.";
                                    $uploadOk = 0;
                                }
                                // Check file size
                                if ($_FILES["fileToUpload"]["size"] > 500000) {
                                    echo "Sorry, your file is too large.";
                                    $uploadOk = 0;
                                }
                                // Allow certain file formats
                                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                && $imageFileType != "gif" ) {
                                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                    $uploadOk = 0;
                                }
                                // Check if $uploadOk is set to 0 by an error
                                if ($uploadOk == 0) {
                                    echo "Sorry, your file was not uploaded.";
                                // if everything is ok, try to upload file
                                } else {
                                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                                    } else {
                                        echo "Sorry, there was an error uploading your file.";
                                    }
                                }
                                $image_url = $target_dir . basename($_FILES["fileToUpload"]["name"]);
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
