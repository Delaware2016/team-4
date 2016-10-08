<?php

function generatePage($body, $title="FOMO Login") {
  $page = <<<EOPAGE
<!doctype html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>$title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

  </head>
  <style>
  body,h1 {font-family: "Raleway", sans-serif}
  body, html {height: 100%}
  .bgimg-1 {
    background-image: url('delaware.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
  }
  </style>
  <body>
    $body
  </body>
</html>
EOPAGE;

  return $page;
}

?>
