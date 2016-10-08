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
          <ul class="nav nav-tabs tabs-left med">
            <li class="active"><a href="#hub" data-toggle="tab">Hub</a></li>
	    <li><a href = "#eventCreator" data-toggle = "tab"> Event Creator </a></li>
           

            <li><a href="#profile" data-toggle="tab">Profile</a></li>
          </ul>
        </div>
        <div class="content">
          <div class="col-xs-9">
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="hub">
                <div class="module" id="top3">
                  <span class="large">Top 3 Events for Smitty's Bar</span><hr/>
                  <div id="activity1" class="table top med">
                    Wings & Brews - 120 people
                  </div>
                  <div id="activity2" class="table med">
                    Trivia Night - 76 people
                  </div>
                  <div id="activity3" class="table bottom med">
                    1/2 Price Apps - 72 people
                  </div>
                </div>
		<br>
		<div class = "hub">
		
		
                
               
                   
                  <div class="points med">
                    points <span id="total FOMO customers">420</span>
                  </div>
                  <div class="classified med">
                    Other Events
                    <div class="table top">
                     	Code For Good @ J.P. Morgan Chase
                    </div>
                    <div class="table">
                      	Made in Delaware Festival @ Wilmington
                    </div>
                    <div class="table bottom">
                      Pumpkin Chunkin'
                    </div>
                  </div>
                </div>
              </div>

	      <div class="tab-pane creator" id="eventCreator">
		
		<span class = "large">Event Creator</span>
		<div id="activity1" class="table top med">
                    Event Name </p><br>
		<input type="text"/><br>
                  </div>
                  <div id="activity2" class="table med">
                    <p> Event Time </p><br>
		<input type="text"/><br>
                  </div>
                  <div id="activity3" class="table bottom med">
                    <p> Event Description </p><br>
		<input type="text"/><br>
                  </div>
		
		
		
		</div>


		

            
              <div class="tab-pane profile" id="profile">
                <span class="large">Profile</span>
                <div class="hub med">
                  <p>Business Insights</p>
                  <p>Best Events</p>
                  <p>Total points given: <span class="points" id="pointscp">420</span></p>
                </div>
                <p><span onClick="badgers();" class="pointer med">Badges I've Awarded</span></p>
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