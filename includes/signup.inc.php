<?php
  include_once 'dbh.inc.php';

  //variables to save form data
  //mysqli_real_escape_string($conn, $_POST['first']); - this will stop code from being read in the database
  $first = mysqli_real_escape_string($conn, $_POST['first']);
  $last = mysqli_real_escape_string($conn, $_POST['last']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

  // Creates new data into database

  $sql = "INSERT INTO users (first, last, email, uid, pwd) VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
  mysqli_query($conn, $sql);


  //loads home page after login with success in url
  header("location: ../index.php=success");