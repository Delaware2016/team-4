
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

  document.getElementById("survey").innerHTML = "<b>" + question.dataorsomething + "</b>";

  for (let i = 0, choice; choice = choices[i]; i++) {
    document.getElementById("survey").innerHTML += 
      "<br><label><input type='radio' name='survey' id='response" + i + "'>" + 
      choice.dataorsomething + "</label>";
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

window.onload = function() {
  
  /*populateTop3Activites(); // put these on intervals
  populateSurvey();
  populateClassified();*/
}