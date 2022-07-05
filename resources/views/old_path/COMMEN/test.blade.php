<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <style>
        * {
  -webkit-tap-highlight-color: transparent
}

    </style>
    <title>Just Test</title>
</head>
<body>
    <div class="container">
    <div id="welcome">
  <h2>Welcome to the Test page </h2>

  <p>just enter into  url <b style="color:green;">"/test"</b> and do whats ever you want 👌</p>
</div>
<div>
  <fieldset id="timer-container">
    <div id="timer"><span class="value">00:00:00</span>  <span id="sec">sec</span>

    </div>
    <!-- <div id="button-container">
    <button id="submit" type="submit">Start</button>
    <button id='reset' type="reset">Reset</button>
    <button id="stop" type="stop">Stop</button>
    </div> -->
    </fieldset>

   
  
</div>
    </div>

</br></br></hr></br></br>

    <form>
  <select id="ddlViewBy">
  <option value="" selected="selected">Select</option>
  <option value="0">Online</option>
    <option value="1">lunch</option>
    <option value="2" >TeaBreak</option>
    <option value="3">Washroom</option>
  </select>
</form>

  <script>
var e = document.getElementById("ddlViewBy");
function show(){
  var as = document.forms[0].ddlViewBy.value;
  var strUser = e.options[e.selectedIndex].value;
//   console.log(as, strUser);

  if (as == 0) {
    value = readTime(timer.text());
    start = setInterval(updateDisplay, 1000);
} else if (as == 1) {
    value = readTime(timer.text());
    start = setInterval(updateDisplay, 1000);
} else if (as == 2){
    console.log("TeaBreak");
}else if (as == 3){
    console.log("Washroom");
}else{
    console.log("Someting went wrong");
}




}
e.onchange=show;
show();

  </script>





    <script>

    var start, value, timer = $('#timer');

$('#submit').click(function(){
    value = readTime(timer.text());
    start = setInterval(updateDisplay, 1000);
  // replace 1 with 1000
});

$('#stop').click(function(){ clearInterval(start);}

);

$('#reset').click(function(){
    clearInterval(start);
    value = parseInt(timer.text(formatTime(0)));
});

function updateDisplay(){
    value++;
    timer.text(formatTime(value));
    if (value >= 86400) {
        value = 0;
        console.log('stop and take a break, you have been working over 24hrs!');
    }
}

function formatTime(t){
    var h = ('0' + parseInt( t / 3600 ) % 24).slice(-2),
        m = ('0' + parseInt( t / 60 ) % 60).slice(-2),
        s = ('0' + t % 60).slice(-2);
    return h+':'+m+':'+s;
}

function readTime(s){
    var r = s.split(':');
    return parseInt(r[0])*3600 + parseInt(r[1])*60 + parseInt(r[2]);
}


    </script>
</body>
</html>