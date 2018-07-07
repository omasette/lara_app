<?php
    if (isset($_POST['submit'])){
      require_once 'database.php';
      $name = $_POST ['Name'];
      $contactNo = $_POST['Contact'];
      $password = $_POST['password'];
      $emailAdd = $_POST['Email'];
      $user_ID = $_POST['user_ID'];
      $user_Description = $_POST['user_Description'];

$sql = "INSERT INTO users (Name, contactNo, password , Email_Address,user_ID,usertype_Description)
VALUES ('$name', '$contactNo','$password', '$emailAdd','$user_ID','$user_Description')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
