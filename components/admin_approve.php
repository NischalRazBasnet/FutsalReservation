<?php
include_once '_dbconnect.php';
$booking_id = $_GET['id'];


$sql = "UPDATE booking SET status = 'Accepted' WHERE id = '$booking_id'";
// use mysqli

if ($con->query($sql) === TRUE) {
    header("Location: ../admin_bookings.php");
} else {
    echo "Error updating record: " . $con->error;
}
?>