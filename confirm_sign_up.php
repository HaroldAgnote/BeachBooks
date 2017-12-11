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

<?php
    $name = $_POST["first_name"] . " " . $_POST["last_name"];
?>

    <main>
        <div class="container">
            <h2>Account created :) </h3>
            <h3>Thank you for joining BeachBooks, <?php echo $name; ?>
            <h3>Username: <?php echo $_POST["new_username"]; ?> </h3>
            <h3>Email: <?php echo $_POST["new_email"]; ?> </h3>
        </div>
    </main>

    <?php
$user_query = "INSERT INTO Users (Password, UserName, LoginStatus) VALUES (?, ?, NULL);";

$get_user_id_query = "SELECT UserID FROM Users WHERE UserName = ? ;";

$client_query = "INSERT INTO Client (ClientName, ClientEmail, UserID) VALUES (?, ?, ?)";

if ($user_stmt = $db->prepare($user_query)) {
    // echo "Adding to User";
    $user_stmt->bind_param("ss", $password, $username);
    $password = $_POST["new_password"];
    $username = $_POST["new_username"];
    $user_stmt->execute(); 
    $user_stmt->close();
    // echo "Added to User";
} 

if ($search_stmt = $db->prepare($get_user_id_query)) {
    // echo "Getting user id";
    $search_stmt->bind_param("s", $search_username);
    $search_username = $username . "";
    $search_stmt->execute();
    $search_stmt->bind_result($user_id);
    $search_stmt->fetch();
    $search_stmt->close();
    // echo "Retrieved " . $user_id;
}

if ($client_stmt = $db->prepare($client_query)) {
    // echo "Inserting to Client";
    $client_stmt->bind_param("ssi", $new_name, $email, $new_user_id);
    $new_name = "" . $name;
    $email = $_POST["new_email"];
    $new_user_id = $user_id;
    $client_stmt->execute();
    // echo "Successfully added to database :)";
} else {
    // echo "I failed :(";
    die('prepare() failed: ' . htmlspecialchars($db->error));
}
    ?>

<script src="js/bootstrap.min.js"></script>
<script src="js/loadBookModal.js"></script>
</body>
</html>
