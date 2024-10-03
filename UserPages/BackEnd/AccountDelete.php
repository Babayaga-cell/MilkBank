<?php // database connection
include_once 'db.connection.php';
?>

<?php
session_start();
?>

<?php
$ID = strval($_SESSION['userID']);

?>

<?php
$sql = " delete FROM users where User_ID = '$ID'";
if (mysqli_query($conn, $sql)) {
	echo "Delete Success";
    	header("Location:logout.be.php");
     exit();

} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);


?>