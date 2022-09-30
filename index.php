<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <title>Mock Title</title>
</head>
<body>

    <!-- // Fetches all from users database and includes a loop to check if there is no result and also a condition/while loop for looping each result

    // $sql = "SELECT * FROM users;";
    // $result = mysqli_query($conn, $sql);
    // $resultCheck = mysqli_num_rows($result);
    // if ($resultCheck > 0) {
    //   // loops while there is a result 
    //   while ($row = mysqli_fetch_assoc($result)) {
    //     echo $row['uid'] . "<br>";
    //   }
    // } -->

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