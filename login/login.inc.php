<?php
    session_start();
?>

<?php
include_once("dbh.inc.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
    $mail = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email='{$mail}'  AND password='{$pass}'";

    $ShowResult = mysqli_query($conn, $sql);
    if($ShowResult){
        if(mysqli_num_rows($ShowResult) == 1){

          $user = mysqli_fetch_assoc($ShowResult);
          $_SESSION['uid'] = $user['uid'];         
          $_SESSION['name'] = $user['name'];
          $_SESSION['email'] = $user['email'];
          $_SESSION['password'] = $user['password'];
          
          if($user['type'] == "user"){
            header("Location: /Online_Recipe_Management_System/user"); 
          }
          else {
            header("Location: /Online_Recipe_Management_System/admin"); 
          }         
      }
        
      else {

        echo '<script>alert("Incorrect Username Or Password")</script>';

      }
 }
}
?>