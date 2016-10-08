<!doctype html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Test Page</title>
  </head>
  <body>
    <?php
      /*
      ini_set('display_errors', 1);
      ini_set('display_startup_erros', 1);
      error_reporting(E_ALL);
      */
      $host = "localhost";
      $user = "root";
      $password = "";
      $database = "fomo";
      $table = "users";

      $dbhandle = mysql_connect($host, $user, $password)
        or die("could not connect to database");

      $selected = mysql_select_db("fomo", $dbhandle)
        or die("Could not select database");

      $result = mysql_query("select Firstname, Lastname, Email from users");
      while ($row = mysql_fetch_array($result)) {
        echo $row{'Email'};
      }
    ?>
  </body>
</html>
