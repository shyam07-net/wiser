jQuery(document).ready(function(){
jQuery('.addnewtask').click(function(){ 
$("#ModalForTask").modal('show');
$("#title").val('');
$("#description").val('');
$("#addcomment").val('');
$("#startDate").val('');
$("#endd").val('');
$("#taskId").val('');
$('#selectEmployee').selectmenu('refresh');
$('#TaskAssignForm .error').val('');
$("#selectEmployee option[value='']").attr("selected", "selected");
});
});
/*********************** This is for  date in  modal for task  ****************/
  $('#startDate').datepicker
    ({
    dateFormat: 'mm/dd/yy',
    changeMonth: true,
    changeYear: true,
    minDate: '0D',
    });
    $('#endd').datepicker
    ({
    dateFormat: 'mm/dd/yy',
    minDate: '0D',
    changeMonth: true,
    changeYear: true,
    });
/*********************** This is for  date in  modal ****************/
$.validator.addMethod('filesize', function(value, element, param) {
  return this.optional(element) || (element.files[0].size <= param)
}, 'File size must be less than {0} bytes');    // this is used to validate file


 $('#TaskAssignForm').validate({
      rules:{
        title : {
          required : true,
          pattern: /^[a-zA-Z'.\s]{1,100}$/
        },
        description : {
          required : true,
          minlength: 10,
          // email: true,
          // pattern:/^[A-Za-z0-9_]+\@[A-Za-z0-9_]+\.[A-Za-z0-9_]+/,
        },
        selectEmployee : {
          required : true,
        },
        startDate : {
          //date:true,
          required : true
        },
        endd : {
          required : true,
        //   minDate:'#startDate',
        },
        TaskMedia : {
          filesize: 30*1024*1024,
          extension: "jpeg|jpg|png|mp4|3gp|mkv|webm|webp",
        }
   
      },
      messages : {
        title : {
          required : 'Enter title name',
          pattern : 'Please use characters only',
        },
        description : {
          required : 'Enter description',
        },
        selectEmployee : {
          required : 'Please select an employee',
        },
        startDate : {
          required : 'Please enter  starting date',
        },
      endd : {
          required : 'Please enter  Completion date',
        },
        TaskMedia : {
          extension: 'only jpeg,png,webp,mp4,mkv,webm files are allowed',
          filesize: 'File should be less than 30 MB'
        }
        
      }
    });


jQuery(document).ready(function(){
$('.chngestts').click(function(e){
e.preventDefault();
var tId = $(this).closest('.startTask').find('.tid').val();
var sid = null;
    Swal.fire({
      title: 'Do you want to start work on it?',
      showDenyButton: true,
      confirmButtonText: 'Start',
      denyButtonText: `Don't Start`,
      confirmButtonColor: '#4CBB17',
      }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
          $.ajaxSetup({
          headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
          $.ajax({
            method:"post", url:"/changestatus", data:{'tId':tId,'sId':sid,},
            success:function(response)
            {
              // $("#responseModal").modal('show');
              // $('#responsed').html(response);
              Swal.fire({ position: 'top-center',icon: 'success',title: response,showConfirmButton: false,timer: 2000})
            }
         });
        const myTimeout = setTimeout(reload, 2000);
        function reload()
        { window.location.reload();}
        } 
        else if (result.isDenied) { Swal.fire({position: 'top-center',icon: 'error',title: 'Koi Baat Nahi Hai',showConfirmButton: false,timer: 1000 })

        }
    })

});
});
jQuery(document).ready(function(){
jQuery('.cbtn').change(function(){
let sid=jQuery(this).val();
var tId = $(this).closest('.changeStatus').find('.ctid').val();
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });
jQuery.ajax({
 url:"/changestatus",
method:'post',
data:{'tId':tId,'sId':sid,},
success:function(response){
// $("#responseModal").modal('show');
// $('#responsed').html(response);
 Swal.fire({ position: 'top-center',icon: 'success',title: response,showConfirmButton: false,timer: 2000})
  const myTimeout = setTimeout(reloads, 2000);
        function reloads()
        { window.location.reload();}
}
});
});

});

jQuery(document).ready(function(){
jQuery('.editTask').click(function(){
//$("#ModalForTask").modal('show');
var tId = $(this).closest('.edit-task-div').find('.taskId').val();
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });
jQuery.ajax({
url:"/EditTask",
method:'post',
data:{'tId':tId,},
success:function(response){
console.log(response.TaskData);
$("#ModalForTask").modal('show');

$("#title").val(response.TaskData.Title);
$("#description").val(response.TaskData.Description);
$("#addcomment").val(response.TaskData.AdditionalCmnt);
$("#startDate").val(response.TaskData.StartDate);
$("#endd").val(response.TaskData.CompletionDate);
$("#selectEmployee").html(response.AllEmployees);
$("#taskId").val(response.TaskData.id);
 }
});
});
});

jQuery(document).ready(function(){
jQuery('.RestoreTask').click(function(){
 Swal.fire({
      title: 'Do you want to restore this task ?',
      showDenyButton: true,
      confirmButtonText: 'Restore',
      denyButtonText: `Cancel`,
      confirmButtonColor: '#4CBB17',
      }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
var tId = $(this).closest('.task-op').find('.tid').val();
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });
jQuery.ajax({
url:"/restoreTask",
method:'post',
data:{'tId':tId,},
success:function(response){
 Swal.fire({ position: 'top-center',icon: 'success',title: response,showConfirmButton: false,timer: 2000});

 }
});
        const myTimeout = setTimeout(reload, 2000);
        function reload()
        { window.location.reload();}
        } else if (result.isDenied) { Swal.fire({position: 'top-center',icon: 'error',title: 'Koi Baat Nahi Hai',showConfirmButton: false,timer: 1000 })

        }
});
});
});
jQuery(document).ready(function(){
jQuery('.deleteTask').click(function(){
 Swal.fire({
      title: 'Do you want to permanent delete this task ?',
      showDenyButton: true,
      confirmButtonText: 'Delete',
      denyButtonText: `Cancel`,
      confirmButtonColor: '#4CBB17',
      }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
var tId = $(this).closest('.task-op').find('.tid').val();
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });
jQuery.ajax({
url:"/deleteTask",
method:'post',
data:{'tId':tId,},
success:function(response){
 Swal.fire({ position: 'top-center',icon: 'success',title: response,showConfirmButton: false,timer: 2000})

 }
});
const myTimeout = setTimeout(reload, 2000);
function reload()
{ window.location.reload();}
} else if (result.isDenied) { Swal.fire({position: 'top-center',icon: 'error',title: 'Koi Baat Nahi Hai',showConfirmButton: false,timer: 1000 })

        }
});
});
});

// function exportData(div_id, token, url) {
//     $.ajax({
//         url: url,
//         type: 'GET',
//         data: {
//             '_token': token,
//         },
//         dataType: 'html',
//         success: function (data) {
//           //alert('hello inside success');
//         }
//     });

// }
// this is used for additional
function apendBlade(button_id, div_id, token, url) {
    // $('#return_View_button').css('pointer-events','none');
    //alert('helo');
    $.ajax({
        url: url,
        type: 'POST',
        data: {
            '_token': token,
        },
        dataType: 'html',
        success: function (data) {
          //alert('hello inside success');
            $('#' + div_id).append(data+'<br/>');
          // $('#show_more_button').css('pointer-events','visible');
            // $('#' + button_id).css('display','none');
        }
    });
}

// profile page
function ChangeProfilePic()
{
    var x = document.getElementById("profile-pic");
     if (x.style.display === "none") {
    x.style.display = "inline";
    } else {
    x.style.display = "none";
    }
}

$('#changeProfileForm').validate({
      rules:{
        profile_pic : {
          required:true,
          extension: "jpeg|jpg|png|svg|gif|webp",
          filesize: 2*1024*1024,
        }
   
      },
      messages : {
     
        profile_pic : {
          required : 'Please select a file',
          extension : 'Invalid image type',
          filesize : 'File should be less than 3 MB',
        },
        
      }
});


/**************************************Notifications ***************************/
function fetchNotifications(token,div_id)
{
  // alert(div_id);
  $.ajax({
        url: "/notifications",
        type: 'POST',
        data: {
            '_token': token,
        },
         dataType: 'html',
        success: function (data) {
          //alert('hello inside success');
            $('#' + div_id).html(data+'<br/>');
        }
    });
}

function CountNotifications(_token)
{
 $.ajax({
        url: "/count-notifications",
        type: 'POST',
        data: {
            '_token': _token,
        },
         dataType: 'html',
        success: function (data) {
          //alert('hello inside success');
            $('#count-notifications').html(data);
            document.title = '('+data+') Wiser | CRM Dashboard';
            
        }
    }); 
}
function ReadNotification(url,_token,id)
{
  $.ajax({
        url: url,
        type: 'POST',
        data: {
            '_token': _token,'id':id,
        },
        success: function (data) {
         CountNotifications(_token);
         fetchNotifications(_token,'notification-ul');
        }
    });
}
function ReadAllNotification(url,_token)
{
  $.ajax({
        url: url,
        type: 'POST',
        data: {
            '_token': _token,
        },
        success: function (data) {
         CountNotifications(_token);
         fetchNotifications(_token,'notification-ul');
        }
    });
}
/****************************chat *********************************/
// End this coding
function fetchUsers(div_id,url,token){
 $.ajax({
        url: url,
        type: 'POST',
        data: {
            '_token': token,
        },
        dataType: 'html',
        success: function (data) {
           $('#' + div_id).html(data);
           //alert('hello');
        }
    });
}

function FetchUserMessages(url,_token,user,div_id,TypeofUser)
{
  $.ajax({
        url: url,
        type: 'POST',
        data: {
            '_token': _token,
            'UserId':user,
            'TypeofUser':TypeofUser,
        },
        dataType: 'html',
        success: function (data) {
          $('#'+div_id).empty();
           $('#' + div_id).html(data);
        }
    });
}

function RefreshUserMessages(url,_token,Rid,div_id)
{
  $.ajax({
          url: url,
          type: 'POST',
          data: {
              '_token': _token,
              'UserId':Rid,
          },
          dataType: 'html',
          success: function (data) {
             $('#' + div_id).html(data);
             // alert('hello');
          }
      });
}


/*********** Selecting ANd Deslecting files of chat ***********************************/

function clickfile(){ $('#chat-media').click();

}
function showChatFile(){
 var file = document.getElementById('chat-media');
 //var fileName = file.files[0].name;
 $('#filesList').empty();
 for(var i = 0 ; i < file.files.length ; i++){
      var fileName = file.files[i].name;
      $('#filesList').append('<div class="name">' + fileName + '</div>');
    }

}


//   const cdt = new DataTransfer();
// $("#chat-media").on('change', function(e){
//   for(var i = 0; i < this.files.length; i++){
//     let fileBloc = $('<span/>', {class: 'file-block'}),
//        fileName = $('<span/>', {class: 'name', text: this.files.item(i).name});
//     fileBloc.append('<span class="file-delete"><span><i class="fa fa-close"></i></span></span>')
//       .append(fileName).append('<br/>');
//     $("#files-names").append(fileBloc);
//   };
//   //Adding files to the DataTransfer object
//   for (let file of this.files) {
//     cdt.items.add(file);
//   }
//   // Update of the files of the input file after addition
//   this.files = cdt.files;

//   // EventListener for delete button created
//   $('span.file-delete').click(function(){
//     let name = $(this).next('span.name').text();
//     // Suppress file name display
//     $(this).parent().remove();
//     for(let i = 0; i < cdt.items.length; i++){
//       // Match file and name
//       if(name === cdt.items[i].getAsFile().name){
//         // Deleting file in DataTransfer object
//         cdt.items.remove(i);
//         continue;
//       }
//     }
//     //Updating input file files after deletion
//     document.getElementById('chat-media').files = cdt.files;
//   });
// });
/*********** Selecting ANd Deslecting files of chat ***********************************/



      $('#msg-send').on('submit',function(e){
        e.preventDefault();
        $("#chat-submit" ).prop( "disabled", true);
        var formData = new FormData(this);  
        $('#filesList').html('');
        $('#chat-input').val('');
        $('#chat-media').val(null);
        document.getElementById('cht-file-progress').style.display = 'block';
        $.ajaxSetup({
        headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
        $.ajax({
        url:'Send-message',
        cache:false,
        type:'post',
        data:formData,
        contentType:false,   //multipart/form-data,
        processData:false,
        dataType: 'html',
        success:function(data)
        {
          $("#chat-submit").removeAttr('disabled');
          document.getElementById('cht-file-progress').style.display = 'none';
          $('#chat-input').val('');
          $('#filesList').html('');
         $('#chat-media').val('');
         $('#msg-list').html(data);

        }
        });
   });


$('#search-users').on('input', function() {
  var search_user = $(this).val();
   $.ajaxSetup({
          headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
   $.ajax({
        url: 'search-user',
        type: 'POST',
        data: {
            'input':search_user,
        },
        dataType: 'html',
        success: function (data) {
           $('#all-users-list').html(data);
        }
    });
    });
$('#search-chat-users').on('input', function() {
  var chat_user = $(this).val();
   $.ajaxSetup({
          headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
   $.ajax({
        url: 'search-chat-user',
        type: 'POST',
        data: {
            'input':chat_user,
        },
        //dataType: 'html',
        success: function (data) {
          console.log(data);
           $('#chat-list').html(data);
        }
    });
    });
function MsgDlt(_token,msgid,url,Rid) {
 swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this message!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
     $.ajax({
          url: url,
          type: 'POST',
          data: {
              '_token': _token,'msgid':msgid,
          },
          dataType: 'html',
          success: function (data) {
            RefreshUserMessages('refresh-user-messages',_token,Rid,'msg-list');
           swal("Your message was deleted!");
          }
      }); 

  } else {
    // swal("Your imaginary file is safe!");
  }
});
}

function deleChatMedia(url,_token,cmid,Rid) {
  swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this message!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
     $.ajax({
          url: url,
          type: 'POST',
          data: {
              '_token': _token,'cmid':cmid,
          },
          dataType: 'html',
          success: function (data) {
            //alert(data);
            RefreshUserMessages('refresh-user-messages',_token,Rid,'msg-list');
           swal("Your message was deleted!");
          }
      }); 

  } else {
    // swal("Your imaginary file is safe!");
  }
});
}



function MsgEdit(_token,msgid,url,Rid) {
swal("Enter new message:", {
content: "input",
}).then((value) => {
  //swal(`You typed: ${value}`);
 if(  `${value}`=='')
 {
   MsgDlt(_token,msgid,'msg-delete');
 }else{
  $.ajax({
        url: url,
        type: 'POST',
        data: {
            '_token': _token,'msgid':msgid,'content':`${value}`,
        },
        dataType: 'html',
        success: function (data) {
          RefreshUserMessages('refresh-user-messages',_token,Rid,'msg-list');
          swal('message edited');
        }
    });
 }

});
 
}
function GetMssgsHstry(_token,msgid,url)
{
   $.ajax({
        url: url,
        type: 'POST',
        data: {
            '_token': _token,'msgid':msgid,
        },
        dataType: 'html',
        success: function (data) {
        $('#edit-mssg-hstry').modal('show');
        $("#edit-mssg-hstry").appendTo("body");
        $(".edit-mssg-hstry").html(data);
        }
    });
}

function playSound()
{
     const audio = new Audio("https://28thavenuemedia.com/file-manager/media-files/audios/msgrcvd.mp3");
        audio.play();
}
