//makes the calendar apppear
$('#calendar-container').datepicker({
  inline: true,
  firstDay: 1,
  showOtherMonts: true,
  dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
});

$('#calendar-container td').click(function(){
  //grab date, time, and name fields and print them out
  //i'm too bad to do that...
  alert("Todays event at: " + Events[0].name + " at " + Events[0].date );
});

//hard coded business event
var chickenBeer = {
 name: "Chicken Beer 2016",
 location: "880 Power mill rd",
 uid: 1846,
 pplAttended: 1234,
 date: $('#calendar-container').datepicker("getDate"),
 type: "Bar"
};

//hard coded business event
var dankMemes = {
  name: "Dankest",
  location: "383 new linden hill rd",
  udi: 2625,
  pplAttended: 3652,
  date: $('#calendar-container').datepicker("getDate"),
  type: "Funny"
};

//hard coded array of events
var Events = [chickenBeer, dankMemes]
