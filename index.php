<?php
  include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <title>Mock Title</title>
</head>
<body>
  
  <?php 
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
      // loops while there is a result 
      while ($row = mysqli_fetch_assoc($result)) {
        echo $row['uid'] . "<br>";
      }
    }
  ?>

  <h1></h1>


</body>
</html>