<?php
session_start();
?>

<?php
include_once("dbh.inc.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

$eid = $_SESSION['rid'];

if (isset($_POST['submit'])) {

    $sql = "UPDATE recipe SET status = 'approved' WHERE rid = {$_SESSION['rid']}";

    $result = mysqli_query($conn, $sql);
    
    if($result){
		
        header('Location: /Online_Recipe_Management_System/admin/#recentRes');
        }
        
        else{
            die(mysqli_error($conn));
            
        }
}
?>