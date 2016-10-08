<?php
  require_once("support.php");
  require_once("dbLogin.php");

  $usersTable = "users";
  $businessesTable = "businesses";
  $errorMessage = ""; 

  session_start();

if (isset($_POST['confirmUser'])) {
    $dbhandle = mysql_connect($host, $user, $password)
      or die("Could not connect to database");

    $selected = mysql_select_db($database, $dbhandle)
      or die("Could not select database");

    $result = mysql_query("select Firstname, points from users where Email='".$_POST['uname']."' and Password='".$_POST['pword']."'");

    $row = mysql_fetch_array($result);
    if (!empty($row)) {
      $_SESSION['uname'] = $row['Firstname'];
      $_SESSION['points'] = $row['points'];
      header("Location: ./frame.php");
    } else {
      $errorMessage .= "<br /> <h4><strong> Incorrect Username/Password Combination </strong></h4>";
    }   
  }

  $scriptName = $_SERVER["PHP_SELF"];
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
        <form action="$scriptName" method="post">
          <input type="text" name="uname" placeholder="Email" required />
          <input type="password" name="pword" placeholder="*****" required />
          <input type="submit" name="confirmUser" value="Login" />
	  <p>$errorMessage<p>
        </form>
      </div>
    </div>
  </div>
EOBODY;

  $page = $body.$footer;

  echo generatePage($page);
?>
