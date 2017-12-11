<?php
$db = new mysqli("localhost", "root", "SoIf7pZnY0DT", "beach_books");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

$buyer_id = $_POST["user_id"];
$copy_id = $_POST["copy_id"];

$query = "INSERT INTO Request
           (RequestStatus, BuyerID, CopyID) 
          VALUES
            (NULL, ?, ?)
    ";

if ($stmt = $db->prepare($query)) {
    $stmt->bind_param("ii", $buyer_id, $copy_id);
    $stmt->execute();
}

?>
