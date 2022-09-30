<?php
  include_once 'dbh.inc.php';

  //variables to save form data
  $first = $_POST['first'];
  $last = $_POST['last'];
  $email = $_POST['email'];
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];

  // Creates new data into database

  $sql = "INSERT INTO users (first, last, email, uid, pwd) VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
  mysqli_query($conn, $sql);


  //loads home page after login with success in url
  header("location: ../index.php=success");