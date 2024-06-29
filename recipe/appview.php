<?php
    session_start();
?>

<?php 

   include_once("dbh.inc.php");

   $id = $_GET['id'];

   error_reporting(E_ALL);
   ini_set('display_errors', 1);  

   $_SESSION['rid'] = $id;  
   
   $sql = array(
              "SELECT * FROM recipe_ingrediant WHERE rid=$id",
              "SELECT * FROM recipe_item WHERE rid = $id",
              "SELECT * FROM recipe WHERE rid=$id",
              "SELECT * FROM recipe WHERE rid=$id"
            );
   
   for ($i=0; $i<4; $i++) {
    if($i == 0) {
      $result = mysqli_query($conn, $sql[$i]);
    }
    if($i == 1) {
      $result2 = mysqli_query($conn, $sql[$i]);
    }
    if($i == 2) {
      $result3 = mysqli_query($conn, $sql[$i]);
    }
    if($i == 3) {
      $result4 = mysqli_query($conn, $sql[$i]);
    }
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="view.css">
    <title>Document</title>
</head>
<body>

<div class='recipe-card'>
  <?php
    if(mysqli_num_rows($result3) > 0) {
      while($row = mysqli_fetch_assoc($result3)) {
        echo      '<img src="/Online_Recipe_Management_System/recipe/images/'.$row['image']. '" style="background-size:cover; height: 320px">';
  ?>

  <!-- <div style="background:url(https:/Online_Recipe_Management_System/recipe/images/17196016941344939.jpeg) no-repeat 50% 50%; background-size:cover; height: 150px"></div> -->
  <div class="recipe-card__body">
    <h1 class="recipe-card__heading">
    <?php
          
            echo      '<li>'. $row['name']. '</li>';
          }
        };
      ?>  
    </h1>
    <h2 class="recipe-card__subhead">
    <?php
          if(mysqli_num_rows($result4) > 0) {
          while($row = mysqli_fetch_assoc($result4)) {
            echo      '<li>'. $row['description']. '</li>';
          }
        };
      ?>  
    </h2>
    
    <ul class="recipe-card__nav">
      <li>
        <h3 onclick="change()" >Ingredients</h3>
      </li>
      
    </ul>
    
    <ul class="recipe-card__ingredients">
      <?php
          if(mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            echo      '<li>'. $row['ingrediant']. '</li>';
          }
        };
      ?>  
    </ul>

    <ul class="recipe-card__nav">
      
      <li>
      <h3 onclick="change()">Method</h3>
      </li>
    </ul>

    <ul class="recipe-card__ingredients">
      <?php
          if(mysqli_num_rows($result2) > 0) {
          while($row = mysqli_fetch_assoc($result2)) {
            echo      '<li>'. $row['item']. '</li>';
            
          }
        };
        
      ?>  
    </ul>
  </div>
  
  <?php
    echo      '<td>'. '<a href="delete.inc.php?id='.$id.'" class="btn" style="background-color: #f00; text-decoration: none; padding: 5px; border-radius: 5px;"">' .'Delete' .'</a>' .'</td>';
  ?>
  

</div>

<!-- <script src="script.js"></script> -->
    
</body>
</html>