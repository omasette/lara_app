<!DOCTYPE html>
<html>
<title> USERS </title>
<head>

</head>
 <body>
   <div class="w3-top">
       <div class="w3-bar w3-black w3-card" id="myNavbar">
           <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> LOGOUT</a>

         </div>


         <table class="table table-striped" style="margin-left:5px;">
         <thread>
         <tr >
           <th> Property_Number</th>
           <th> Property_Name</th>
           <th> Property_Location</th>
           <th> Property_Description</th>
           <th> Property_Rules</th>
         </tr>
         </thread>
         <?php
            require_once "database.php";
             $sql = "SELECT * FROM landlord_property WHERE 1 ";
          //  <!--values ('$number','$name','$location', '$description','$rules' );-->
             $result = $conn->query($sql);
             if ($result){

             if ($result->num_rows > 0 ) {
             while ($row=$result->fetch_assoc()) {
             ?>

             <tbody>
             <tr >
               <td><?php  echo $row['no_of_property']; ?></td>
               <td><?php echo  $row['Property_Name']; ?></td>
               <td><?php echo $row['Property_Location']; ?></td>
               <td><?php  echo $row['Property_Description']; ?></td>
               <td><?php  echo $row['property_Rules']; ?></td>
             </tr>
             </tbody>

<?php
}
}else{
  echo "No data was found";
}
}
?>



</body>
</html>
