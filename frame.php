<html>
  <title>FOMO</title>
  <head>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="bootstrap.vertical-tabs.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="calendar.css">
  </head>
  <body>
    <img src="fomo_logo.png" alt="FOMO - DE" class="logo">
    <div class="row" style="min-height:600px;">
      <div class="col-sm-6">
        <div class="col-xs-3"> <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-left">
            <li class="active"><a href="#hub" data-toggle="tab">Hub</a></li>
            <li><a href="#pipeline" data-toggle="tab">Pipeline</a></li>
            <li><a href="#calendar" data-toggle="tab">Calendar</a></li>
            <li><a href="#map_pane" data-toggle="tab" id="map_pane_tag">Map</a></li>
            <li><a href="#profile" data-toggle="tab">Profile</a></li>
          </ul>
        </div>
        <div class="content">
          <div class="col-xs-9">
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="hub">
                <div class="module" id="top3">
                  <h3>Top 3 Activites</h3><hr/>
<?php
  require_once("dbLogin.php");

  $dbhandle = mysql_connect("localhost", "root", "")
    or die("could not connect to database");

  $selected = mysql_select_db("fomo", $dbhandle)
    or die("Could not select database");

  $result = mysql_query("select Name, Attendees from events;");

  for ($i = 0; $i<3; $i++) {
    $row = mysql_fetch_array($result);
    echo "<div>".$row{'Name'}." | Attending: ".$row{'Attendees'}."</div>";
  }
?>                 
                </div>
                <br>
                <div class="hub">
                  <div class="survey">
                    <b>survey</b><br>
                    <label><input type="radio" name="survey" id="response1">response one</label><br>
                    <label><input type="radio" name="survey" id="response2">response two</label><br>
                    <input type="button" value="Submit" onClick="sendSurveyResponse();"/>
                  </div>
                  <div class="points">
                    points <span class="points" id="points">420</span>
                  </div>
                  <div class="classified">
                    classified
                    <div class="table top">
                      ad 1
                    </div>
                    <div class="table">
                      ad 2
                    </div>
                    <div class="table bottom">
                      ad 3
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="pipeline">
                <div class="tab-pane pipeline" id="pipeline">
                  <h3>User Pipelines</h3> <hr/>
                  College
                  <div class="scrollmenu">
                    <a href="#item1">Big Ole Party</a>
                    <a href="#item2">Throwdown</a>
                    <a href="#item3">Job Fair</a>
                  </div>
                  Work
                  <div class="scrollmenu">
                    <a href="#item2">Partay</a>
                    <a href="#item3">Happy Hour</a>
                    <a href="#item4">Birthday Party</a>
                  </div>
                  Field
                  <div class="scrollmenu">
                    <a href="#item2">Coffee</a>
                    <a href="#item3">Meetup</a>
                    <a href="#item4">Fun Times</a>
                  </div>
                  Recommended
                  <div class="scrollmenu">
                    <a href="#item2">Concert</a>
                    <a href="#item3">Club Rager</a>
                    <a href="#item4">Good Stuff</a>
                  </div>
                </div>
              </div>
              <div class="tab-pane calendar" id="calendar"><br>
                <div id="calendar-container"></div>
              </div>
              <div class="tab-pane" id="map_pane">
                <h3>My Google Maps Demo</h3>
                <div id="map"></div>
              </div>
              <div class="tab-pane profile" id="profile">
                <h3> Profile</h3>
                <p>Insights about yourself</p>
                <p>Events you visited</p>
                <p>Total points: <span class="points" id="pointscp">420</span></p>
                <p><span onClick="badgers();" class="pointer">Badges</span></p>
                <div id="badgers">
                  <img src="redder.png" class="badger" id="b0">
                  <img src="fire.png" class="badger" id="b1">
                  <img src="100.png" class="badger" id="b2">
                  <img src="lime.png" class="badger" id="b3">
                  <img src="chicken.png" class="badger" id="b4">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="hub.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="framecalendar.js"></script>
    <script src="mapinit.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBS6VVHtcbw9E2f4jdq4IBgt8bDU6wBbHU&callback=initMap">
    </script>
    <script>$(document).on("click","#map_pane_tag",initMap)</script>
  </body>
</html>
