<?php
session_start();
require_once 'landlordprocess.php';
 ?>
<!DOCTYPE html>
<html>
<title> MY PROPERTIES </title>
<head>

</head>
 <body>
   <!--session to show who is online   -->
   <?php echo $_SESSION['name'] ?>


   <div class="w3-top">
       <div class="w3-bar w3-black w3-card" id="myNavbar">
           <a href="registerproperty.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i> REGISTER PROPERTY</a>
           <a href="notifications.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i> NOTIFICATIONS</a>
           <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> LOGOUT</a>
<!--code to fetch data from the database and portray in the lanlords page-->

         </div>
           <div class="row">
             <div class="column">
               <img src="hudson_house.png" style="width:100%">
             </div>
         </div>
</body>
</html>
