<?php
require_once 'database.php';
require_once 'registerpropertyprocess.php';
 ?>

<!DOCTYPE html>
<html>
<title> LANDLORDS </title>
<head>

</head>
<body>
  <center>
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="Registration">
    <h3 class="w3-center">REGISTER PROPERTY</h3>
    <p class="w3-center w3-large">Please register your property details with us and get more tenants.</p>
    <div class="w3-row-padding" style="margin-top:64px">
        <div class="w3-half">

<!--form to insert data-->
            <form method="post">
                <p><input class="w3-input w3-border" type="number" placeholder="Property Number" required name="Property_Number"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Property Name" required name="Property_Name"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Property Location" required name="Property_Location"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Property Description" required name="Property_Description"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Property Rules" required name="Property_Rules"></p>
                <p>
                  <input type="submit" name="submit" value="SUBMIT" />
                </p>
            </form>
        </div>
        <div class="w3-half">
        </center>
</head>
</html>
