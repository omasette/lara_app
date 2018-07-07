<?php

require_once 'database.php';
require_once 'registerprocess.php';
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="index.css">
<title>HOME PAGE</title>
</head>
  <body>
    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card" id="myNavbar">
            <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i> BACK HOME</a>
            <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-unlock"></i> SIGN IN</a>
          </div>

    <center>
  <div class="w3-container w3-light-grey" style="padding:128px 16px" id="Registration">
      <h3 class="w3-center">REGISTRATION</h3>
      <p class="w3-center w3-large">Please register your credentials with us.</p>
      <div class="w3-row-padding" style="margin-top:64px">
          <div class="w3-half">

              <form method="post">
                  <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name" ></p>
                  <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email" ></p>
                  <p><input class="w3-input w3-border" type="text" placeholder="Contact" required name="Contact" ></p>
                  <p><input class="w3-input w3-border" type="text" placeholder="Password" required name="password" ></p>
                  <p><input class="w3-input w3-border" type="text" placeholder="user_ID" required name="user_ID" ></p>
                  <select name="user_Description">
                    <option value="Tenant">Tenant</option>
                    <option value="Landlord">Landlord</option>
                  </select>
                  <p>
                    <input type="submit" name="submit" value="SUBMIT" />
                  </p>
              </form>
          </div>
          <div class="w3-half">
          </center>
              <!-- Add Google Maps -->
              <div id="googleMap" class="w3-greyscale-max" style="width:100%;height:510px;"><img src="connect.png"></div>
          </div>
      </div>
  </div>
</center>
</form>
</div>
</body>
</html>
