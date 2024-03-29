
var deadline = new Date(Date.parse(new Date()) + 60 * 60 * 1000);


function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
 // var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  //var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    //'days': days,
    //'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}



function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  //var daysSpan = clock.querySelector('.days');
 // var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    //daysSpan.innerHTML = t.days;
   // hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
	
    if (t.total <= 0) {
	  window.location = "ty.html";
      clearInterval(timeinterval);
    }

  }
  
  setTimeout( function() { alert("Session timeout in 10 minutes."); }, 50*60*1000);

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
  
}


// if there's a cookie with the name myClock, use that value as the deadline
if(document.cookie && document.cookie.match('myClock')){
  // get deadline value from cookie
  var deadline = document.cookie.match(/(^|;)myClock=([^;]+)/)[2];
}

// otherwise, set a deadline 60 minutes from now and 
// save it in a cookie with that name
else{
  // create deadline 60 minutes from now
  var deadline = new Date(Date.parse(new Date()) + 60 * 60 * 1000);

  // store deadline in cookie for future reference
  document.cookie = 'myClock=' + deadline + '; path=/;';
}

initializeClock('clockdiv', deadline);

