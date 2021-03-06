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
    <table><tr><td>
    <img src="fomo_logo.png" alt="FOMO - DE" class="logo">
    </td><td>
    <?php
      session_start();
      echo "<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;Hello, ".$_SESSION['uname']."</strong></p>";
    ?>
    </tr></table>
    <div class="row" style="min-height:600px;">
      <div class="col-sm-6">
        <div class="col-xs-3"> <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-left med">
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
                  <span class="large">Popular Activites</span><hr/>
<?php
  require_once("dbLogin.php");

  $dbhandle = mysql_connect($host, $user, $password)
    or die("could not connect to host");

  $selected = mysql_select_db("fomo", $dbhandle)
    or die("could not access database");

  $result = mysql_query("select Name, Attendees from events");

  for ($i=0; $i<3; $i++) {
    $row = mysql_fetch_array($result);
    echo "<div>".$row{'Name'}." | Attending: ".$row{'Attendees'}."</div>";
  }
?>
                </div>
                <br>
                <div class="hub">
                  <div class="survey med">
                    <b>survey</b><br>
                    <label><input type="radio" name="survey" id="response1">response one</label><br>
                    <label><input type="radio" name="survey" id="response2">response two</label><br>
                    <input type="button" value="Submit" onClick="sendSurveyResponse();"/>
                  </div>
                  <div class="points med">
		    <?php
                    session_start();
                    echo "points <span>".$_SESSION['points']."</span>"
                    ?>
                  </div>
                  <div class="classified med">
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
                  <span class="large">User Pipelines</span> <hr/>
                  <span class="med">College</span><br>
                  <input type="button" value="<" onClick="rotatePipeline(false,'college');"/>
                  <input type="button" value=">" onClick="rotatePipeline(true,'college');"/>
                  <div class="scrollmenu" id="college">
                    <a href="#item1">Big Ole Party</a>
                    <a href="#item2">Throwdown</a>
                    <a href="#item3">Job Fair</a>
                  </div>
                  <span class="med">Work</span><br>
                  <input type="button" value="<" onClick="rotatePipeline(false,'work');"/>
                  <input type="button" value=">" onClick="rotatePipeline(true,'work');"/>
                  <div class="scrollmenu" id="work">
                    <a href="#item2">Partay</a>
                    <a href="#item3">Happy Hour</a>
                    <a href="#item4">Birthday Party</a>
                  </div>
                  <span class="med">Field</span><br>
                  <input type="button" value="<" onClick="rotatePipeline(false,'field');"/>
                  <input type="button" value=">" onClick="rotatePipeline(true,'field');"/>
                  <div class="scrollmenu" id="field">
                    <a href="#item2">Coffee</a>
                    <a href="#item3">Meetup</a>
                    <a href="#item4">Fun Times</a>
                  </div>
                  <span class="med">Recommended</span><br>
                  <input type="button" value="<" onClick="rotatePipeline(false,'recommended');"/>
                  <input type="button" value=">" onClick="rotatePipeline(true,'recommended');"/>
                  <div class="scrollmenu" id="recommended">
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
                <span class="large">Profile</span>
                <div class="hub med">
                  <ul class = "profile-list">
                  <li><p>Insights about yourself</p></li>
                  <li><p>Events you visited</p></li>
		  <?php
                  session_start();
                  echo "<li><p>Total points: <span>".$_SESSION['points']."</span></p></li>";
                  ?>
                </ul>
                </div>
                <p><span onClick="badgers();" class="pointer med">Badges</span></p>
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
