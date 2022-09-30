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

   <!-- Fetches all from users database and includes a loop to check if there is no result and also a condition/while loop for looping each result -->

   <!-- $sql = "SELECT * FROM users;";
   $result = mysqli_query($conn, $sql);
   $resultCheck = mysqli_num_rows($result);
   if ($resultCheck > 0) {
     // loops while there is a result 
     while ($row = mysqli_fetch_assoc($result)) {
       echo $row['uid'] . "<br>";
     }
   } -->
 
  <!-- <form action="includes/signup.inc.php" method="POST">
    <input type="text" name="first" placeholder="First Name"><br>
    <input type="text" name="last" placeholder="Last Name"><br>
    <input type="text" name="email" placeholder="E-mail"><br>
    <input type="text" name="uid" placeholder="User Name"><br>
    <input type="text" name="pwd" placeholder="Password"><br>
    <button type="submit" name="submit">Sign Up</button>
    </form> -->

    <!-- THIS CODE: Will use prepared statements to select a specific user -->
    <!-- <?php
      // using prepared statements is a safer way to search for data in a database
      $data = "Admin";
      // Created a template for grabbing a specific user
      $sql = "SELECT * FROM users WHERE uid=?;";
      // Create a prepated statement
      $stmt = mysqli_stmt_init($conn);
      // Prepare prepared statement
      if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL statement failed";
      } else {
        // Bind parameters to the placeholder
        // The letter s in the parameter means the data type will be a string. s=string, i=integer, b=BLOB, d=double
        mysqli_stmt_bind_param($stmt, "s", $data);
        // Run parameters inside database
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while ($row = mysqli_fetch_assoc($result)) {
          echo $row['uid'] . "<br>";
        }
      }        
    ?> -->

    <form action="includes/signup.inc.php" method="POST">
      <input type="text" name="first" placeholder="First Name"><br>
      <input type="text" name="last" placeholder="Last Name"><br>
      <input type="text" name="email" placeholder="E-mail"><br>
      <input type="text" name="uid" placeholder="User Name"><br>
      <input type="text" name="pwd" placeholder="Password"><br>
      <button type="submit" name="submit">Sign Up</button>
    </form>
</body>
</html>