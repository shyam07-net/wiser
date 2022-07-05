<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('b966c583e5276dc9060d', {
      cluster: 'ap2'
    });
    var channel = pusher.subscribe('my-personal-channel');
    channel.bind('Send-task-live-notifications', function(data) {
      console.log(data);
      console.log(data.data[2]);
      var id= 6;
      if(data.reciver_id==id)
      {
      alert('Hello'+data.author);
      }else{
        alert('Tumhare liye nahi hai ye beta');
      }
      

    });
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>
  No. is <span id="notify"></span>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

