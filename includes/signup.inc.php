<?php
  include_once 'dbh.inc.php';

  // THIS CODE: Will add a new user to the database
  //variables to save form data
  //mysqli_real_escape_string($conn, $_POST['first']); - this will stop code from being read in the database
  // $first = mysqli_real_escape_string($conn, $_POST['first']);
  // $last = mysqli_real_escape_string($conn, $_POST['last']);
  // $email = mysqli_real_escape_string($conn, $_POST['email']);
  // $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  // $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

  // // Creates new data into database

  // $sql = "INSERT INTO users (first, last, email, uid, pwd) VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
  // mysqli_query($conn, $sql);


  // //loads home page after login with success in url
  // header("location: ../index.php=success");


  // THIS CODE: Will add users to the database using prepared statements, a safer way to add users to the database
  $first = mysqli_real_escape_string($conn, $_POST['first']);
  $last = mysqli_real_escape_string($conn, $_POST['last']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
  $sql = "INSERT INTO users (first, last, email, uid, pwd) VALUES (?, ?, ?, ?, ?);";
  
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)){
    echo "SQL ERROR";
  } else {
    // The second parameter uses s for string, and uses as many as needed (5 in this case)
    mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $pwd, $uid);
    mysqli_stmt_execute($stmt);
  }

  header("location: ../index.php=success");