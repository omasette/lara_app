<!--insert statement-->
          <?php

if(!empty($_POST['submit']))
{
    require_once 'database.php';
$output = '';
$message = '';
$number = mysqli_real_escape_string($conn, $_POST["Property_Number"]);
$name = mysqli_real_escape_string($conn, $_POST["Property_Name"]);
$location = mysqli_real_escape_string($conn, $_POST["Property_Location"]);
$description = mysqli_real_escape_string($conn, $_POST["Property_Description"]);
$rules = mysqli_real_escape_string($conn, $_POST["Property_Rules"]);

//  $number = isset($_POST['$number']) ? $_POST['Property_Number'] : '';
  //$name = isset($_POST['$name']) ? $_POST['Property_Name'] : '';
  //$location = isset($_POST['$location']) ? $_POST['Property_Location'] : '';
  //$description = isset($_POST['$description']) ? $_POST['Property_Description'] : '';
  //$rules = isset($_POST['$rules']) ? $_POST['Property_Rules'] : '';

          $sql = "INSERT INTO landlord_property (no_of_property, Property_Name, Property_Location, Property_Description, Property_Rules)
          VALUES ('$number', '$name', '$location', '$description', '$rules')";

          if ($conn->query($sql) === TRUE) {
              echo "New record created successfully";
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }
}
          $conn->close();
          ?>
