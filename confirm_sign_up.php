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
            <h2>Account created :) </h3>
            <h3>Thank you for joining BeachBooks, <?php echo $_POST["first_name"] . " " . $_POST["last_name"]; ?>
            <h3>Email: <?php echo $_POST["new_email"]; ?> </h3>
        </div>
    </main>

<script src="js/bootstrap.min.js"></script>
<script src="js/loadBookModal.js"></script>
</body>
</html>
