<script>
// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;
var pusher = new Pusher('a86e590851d8c029f88f', {
cluster: 'ap2'
});
var channel = pusher.subscribe('meeting-channel');
channel.bind('Send-meeting-live-notifications', function(data) {
console.log(data.reciever);
console.log(data.Sender_id);
var reciever = <?php echo session('USER_ID');  ?> ;
if(reciever==data.reciever)
{    
    playSound();
    $('#getCode').html(data.Sender_id);
    $('#meet_emp_id').val(data.main_id);
    jQuery("#getCodeModal").modal('show');

}
});


var channel = pusher.subscribe('message-channel');
channel.bind('Send-message-live-notifications', function(data) {
var reciever = <?php echo session('USER_ID');  ?> ;
if(reciever==data.recieverId)
{
 CountNotifications('{{@csrf_token()}}');
 playSound();
}
});  
var channel = pusher.subscribe('task-channel');
channel.bind('Send-task-live-notifications', function(data) {
var reciever = <?php echo session('USER_ID');  ?> ;
if(reciever==data.recieverId)
{
 CountNotifications('{{@csrf_token()}}');
 playSound();
}
}); 
  </script>

</head>

    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <span class="mr-1">
                        Copyright
                        <script>document.write(new Date().getFullYear())</script>© <a href="#" class="">The Wise Owl</a>
                        All Rights Reserved.
                    </span>
                </div>
            </div>
        </div>
    </footer> <!-- Backend Bundle JavaScript -->
<!-- rajeev links -->
    <!-- ajax or jquery cdn  -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- form validation cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  <!-- end form validation cdn -->
  <!-- date picker--->
   <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">  
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>  
  <!---->
  
  
  <script type="text/javascript" src="{{asset('file-manager/javascript/assignnewtask.js')}}"></script>
 <link rel="stylesheet" type="text/css" href="{{asset('file-manager/CSS/index.css')}}">


<!-- rajeev links -->

    <script src="../assets/js/backend-bundle.min.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>

    <script src="../assets/js/sidebar.js"></script>

    <!-- Flextree Javascript-->
    <script src="../assets/js/flex-tree.min.js"></script>
    <script src="../assets/js/tree.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>

    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/sweetalert.js"></script>

    <!-- Vectoe Map JavaScript -->
    <script src="../assets/js/vector-map-custom.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/chart-custom.js"></script>
    <script src="../assets/js/charts/01.js"></script>
    <script src="../assets/js/charts/02.js"></script>

    <!-- slider JavaScript -->
    <script src="../assets/js/slider.js"></script>

    <!-- Emoji picker -->
    <script src="../assets/vendor/emoji-picker-element/index.js" type="module"></script>


    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>
</body>


</html>