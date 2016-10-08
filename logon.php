<?php
  require_once("support.php");

  $footer = "";

  $body = <<<EOBODY
  <div class="bgimg-1 w3-display-container w3-animate-opacity w3-text-white">
    <div class="w3-display-topleft w3-padding-large w3-xlarge">
      <img src="fomo_logo.png" alt="FOMO - DE" style="width:100px; height: 100px;">
    </div>
    <div style="background-color: rgba(0,0,0,0.75); border-radius: 25px; padding-left: 20px; padding-right: 20px; padding-bottom: 20px; text-align:center" class="w3-display-middle">
      <h1 class="w3-jumbo w3-animate-top">FOMO LOGIN</h1>
    <hr/>
      <div id = "login_style">	
	<p> Logging into FOMO gives you access to the best Delaware has to offer! </p>
	<input type = "text" id = "login" placeholder = "Email Id" name = "uid">
   	<input type = "password" id = "password" name = "upass" placeholder = "***">
   	<input type = "submit" id = "dologin" value = "Login" onclick="location.href='frame.html';">
      </div>
    </div>
  </div>
EOBODY;

  $page = $body.$footer;

  echo generatePage($page);
?>
