
// queries db for current top activities, displays top 3
function populateTop3Activites() {
  var top = ['test1', '2', '3']; // top 3 from db

  for (let i = 0; i < 3; i++) {
    document.getElementById("activity" + (i + 1)).innerHTML = massage(top[i]);// prob need to massage this beforehand
  }
}

// queries db, displays new survey/ generated survey
function populateSurvey() {
  var survey = 'response from db'; // massage this
  var question = survey.getQuestionsomehow; // survey question
  var choices = survey.getChoicesmagically; // choices

  document.getElementById("survey").innerHTML = "<b>" + question.dataorsomething + "</b><br>";

  for (let i = 0, choice; choice = choices[i]; i++) {
    document.getElementById("survey").innerHTML += 
      "<label><input type='radio' name='survey' id='response" + i + "'>" + 
      choice.dataorsomething + "</label><br>";
  }

  document.getElementById("survey").innerHTML += "<input type='button' onClick='sendSurveyResponse();' value='Submit'/>";
}

// sends survey answer to db, populates next one if available
function sendSurveyResponse() {
  var answers = document.getElementsByName("survey");

  for (let i = 0, answer; answer = answers[i]; i++) {
    if (answer.checked) {
      // send answer to db

      // check db for more surveys
      // if more
      populateSurvey();

      break;
    }
  }
}

// gets classifieds from db
function populateClassified() {
  var ads = 'db response with ads or w/e'; // massage this

  document.getElementById("classified").innerHTML = 
    "<div class='table top'>" + ads[0].dataorsomething + "</div>"; // lazy or we can say it's an optimization

  for (let i = 1; i < ads.length - 1; i++) {
    document.getElementById("classified").innerHTML = 
      "<div class='table'>" + ads[i].dataorsomething + "</div>";
  }

  document.getElementById("classified").innerHTML = 
    "<div class='table bottom'>" + ads[ads.length - 1].dataorsomething + "</div>";
}

// get user's points
function getPoints() {
  var points = 'query db for this users points'; // massage this

  document.getElementById("points").innerHTML = points;
}

// parses response from db and massage it to html. use this to format any response: maybe
// maybe make one for each type, unless db response is really nice
function massage(s) {
  return s;
}

// display toggle for badges
function badgers() {
  document.getElementById('badgers').style.display = 
    (document.getElementById('badgers').style.display == 'block') ? 'none' : 'block';
}

var pipes ={'work' : ['Partay', 'Happy Hour', 'Birthday Party', 'Strike', 'five', 'six', 'seven'],
            'college' : ['Big Ole Party', 'Throwdown', 'Job Fair', 'extra', 'ahhh'],
            'field' : ['Coffee', 'Meetup', 'Fun Times', 'one', 'two'],
            'recommended' : ['Concert', 'Club Rager', 'Good Stuff', 'one', 'two']};
var limit = 3;

// generates pipeline 
function populatePipeline() {
  document.getElementById("work").innerHTML = '';

  for (let i = 0; i < limit; i++) {
    document.getElementById("work").innerHTML += 
      "<a href='#item" + i + "'>" + pipes[id][i] + "</a>";
  }
}

// rotates pipeline cw/cc 
function rotatePipeline(cw, id) {
  document.getElementById(id).innerHTML = '';

  if (cw) {
    rotate(pipes[id]);
  } else {
    rotateRev(pipes[id]);
  }

  for (let i = 0; i < limit; i++) {
    document.getElementById(id).innerHTML += 
      "<a href='#item" + i + "'>" + pipes[id][i] + "</a>";
  }
}

// rotates cw
function rotateRev(a) {
  a.unshift(a.pop());
}

// rotates cc
function rotate(a) {
  a.push(a.splice(0,1)[0]);
}

window.onload = function() {
  
  /*populateTop3Activites(); // put these on intervals
  populateSurvey();
  populateClassified();*/
}