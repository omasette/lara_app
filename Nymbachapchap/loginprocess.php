<?php
session_start ();
 ?>

<?php
//once the user logs in they are redirected to the user page.
if (isset($_SESSION['name'])){
	header('location:users.php');
}


			//encrypting the passwords-->
			function bcrypt($pass_input){
				$crypt_options = array(
					'cost' => 10,
					'salt' => mcrypt_create_iv(22, MYCRYPT_DEV_URANDOM)
					);
	return password_hash($pass_input, PASSWORD_BCRYPT, $crypt_options);
}


if(isset($_POST['submit'])){
$username=$_POST['Username'];
$password=$_POST['Password'];
$user_ID=$_POST['user_ID'];

$username=stripcslashes($username);
$password=stripcslashes($password);
$user_ID=stripcslashes($user_ID);

$username=mysqli_real_escape_string($conn,$username);
$password=mysqli_real_escape_string($conn,$password);
$user_ID=mysqli_real_escape_string($conn,$user_ID);

if(!empty($password)){

$sql= "SELECT * FROM users WHERE Name='$username' and password='$password' and user_ID=$user_ID";


$result=$conn->query($sql);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

if($row['Name']==$username&&$row['password']==$password){
	$user_type=$row['usertype_Description'];
	$_SESSION['usertype']=$user_type;
	if($_SESSION['usertype']=="Administrator"){
		$_SESSION['name']=$row['Name'];
    $_SESSION['userID']=$row['user_ID'];

       header("location:users.php");

	}elseif($_SESSION['usertype']=="Tenant"){
		 $_SESSION['name']=$row['Name'];
       $_SESSION['userID']=$row['user_ID'];
       header("location:users.php");

	}elseif($_SESSION['usertype']=="Landlord"){
		 $_SESSION['name']=$row['Name'];
       $_SESSION['userID']=$row['user_ID'];
       header("location:users.php");


}else{
	echo "INVALID LOG IN. TRY AGAIN!";
}
}
}
}

?>
