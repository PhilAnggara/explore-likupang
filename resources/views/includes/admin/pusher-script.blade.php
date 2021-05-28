<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
  // Enable pusher logging - don't include this in production
  Pusher.logToConsole = true;

  var pusher = new Pusher('d9ac5590298b408e3f68', {
    cluster: 'ap1'
  });

  var channel = pusher.subscribe('my-channel');
  channel.bind('saran-ditambahkan', function(data) {
    alert(JSON.stringify(data));
  });
</script>