@include('IT_DEPARTMENT.sidebar');
@include('COMMEN/navbar')

<div id="remoteModelData" class="modal fade" role="dialog"></div>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Leaves</h4>
                        </div>
                        @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{Session::get('fail')}}
                        </div>

                        @endif
                        @if(Session::get('success'))
                        <div class="alert alert-danger">
                            {{Session::get('success')}}
                        </div>

                        @endif
                        
                        <div class="header-action">
                            <button type="button" class="btn btn-primary mt-2 mr-2" data-toggle="modal" data-target="#exampleModalCenter">
                                Apply leave
                            </button></br>

                            <button type="button" class="btn btn-primary mt-2 mr-2" data-toggle="modal" data-target="#LeavesDetails">
                                See Details
                            </button>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Apply Leaves</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{url('/saves')}}" method="POST" onsubmit="return Validation()">
                                     @csrf

                                        <div class="form-group">
                                            <label for="type">Leave type </label><span style="color:red">*</span>
                                            <input type="text" name="leavetype" class="form-control" id="leavetype">
                                            <span style="color:red" id="leavetyp"></span>
                                        </div>
                                        
                                         <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                                            <input type="checkbox" class="custom-control-input bg-primary" id="customCheck-1" name="daytype" value="0.5" >
                                            <label class="custom-control-label" for="customCheck-1"> Half Day</label> 
                                        </div></br>

                                        <div class="form-group">
                                            <label for="exampleInputdate">From</label><span style="color:red">*</span>
                                            <input type="date" name="fdate" class="form-control" id="startdate">
                                            <span style="color:red" id="strtdt"></span>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputdate">To</label><span style="color:red">*</span>
                                            <input type="date" name="tdate" class="form-control" id="enddate">
                                            <span style="color:red" id="nddate"></span>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Reason</label><span style="color:red">*</span>
                                            <textarea class="form-control" name="reason" id="reason" rows="3"></textarea>
                                            <span style="color:red" id="reson"></span>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="LeavesDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Leaves Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="table-responsive">
                                        <table id="datatable" class="table data table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>S No.</th>
                                                    <td>12</td>
                                                </tr>
                                                <tr> 
                                                    <th>Employee Name</th>
                                                    <td>{{$empData->name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Pending Leaves</th>
                                                    <td>{{$empData->empleave->Pending_leaves ?? ''}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Total Leaves</th>
                                                    <td>18</td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="collapse" id="datatable-1">
                            <div class="card"><kbd class="bg-dark">
                                    <pre id="bootstrap-datatables" class="text-white"><code>

&#x3C;table id=&#x22;datatable&#x22; class=&#x22;table data-table table-striped table-bordered&#x22; &#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th&#x3E;Name&#x3C;/th&#x3E;
         &#x3C;th&#x3E;Position&#x3C;/th&#x3E;
         &#x3C;th&#x3E;Office&#x3C;/th&#x3E;
         &#x3C;th&#x3E;Age&#x3C;/th&#x3E;
         &#x3C;th&#x3E;Start date&#x3C;/th&#x3E;
         &#x3C;th&#x3E;Salary&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Tiger Nixon&#x3C;/td&#x3E;
         &#x3C;td&#x3E;System Architect&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Edinburgh&#x3C;/td&#x3E;
         &#x3C;td&#x3E;61&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2011/04/25&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$320,800&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Garrett Winters&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Accountant&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Tokyo&#x3C;/td&#x3E;
         &#x3C;td&#x3E;63&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2011/07/25&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$170,750&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Ashton Cox&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Junior Technical Author&#x3C;/td&#x3E;
         &#x3C;td&#x3E;San Francisco&#x3C;/td&#x3E;
         &#x3C;td&#x3E;66&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2009/01/12&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$86,000&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Cedric Kelly&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Senior Javascript Developer&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Edinburgh&#x3C;/td&#x3E;
         &#x3C;td&#x3E;22&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2012/03/29&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$433,060&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Airi Satou&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Accountant&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Tokyo&#x3C;/td&#x3E;
         &#x3C;td&#x3E;33&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2008/11/28&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$162,700&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Brielle Williamson&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Integration Specialist&#x3C;/td&#x3E;
         &#x3C;td&#x3E;New York&#x3C;/td&#x3E;
         &#x3C;td&#x3E;61&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2012/12/02&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$372,000&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Herrod Chandler&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Sales Assistant&#x3C;/td&#x3E;
         &#x3C;td&#x3E;San Francisco&#x3C;/td&#x3E;
         &#x3C;td&#x3E;59&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2012/08/06&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$137,500&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Rhona Davidson&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Integration Specialist&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Tokyo&#x3C;/td&#x3E;
         &#x3C;td&#x3E;55&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2010/10/14&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$327,900&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Colleen Hurst&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Javascript Developer&#x3C;/td&#x3E;
         &#x3C;td&#x3E;San Francisco&#x3C;/td&#x3E;
         &#x3C;td&#x3E;39&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2009/09/15&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$205,500&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Sonya Frost&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Software Engineer&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Edinburgh&#x3C;/td&#x3E;
         &#x3C;td&#x3E;23&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2008/12/13&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$103,600&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Jena Gaines&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Office Manager&#x3C;/td&#x3E;
         &#x3C;td&#x3E;London&#x3C;/td&#x3E;
         &#x3C;td&#x3E;30&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2008/12/19&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$90,560&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Quinn Flynn&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Support Lead&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Edinburgh&#x3C;/td&#x3E;
         &#x3C;td&#x3E;22&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2013/03/03&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$342,000&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Charde Marshall&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Regional Director&#x3C;/td&#x3E;
         &#x3C;td&#x3E;San Francisco&#x3C;/td&#x3E;
         &#x3C;td&#x3E;36&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2008/10/16&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$470,600&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Haley Kennedy&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Senior Marketing Designer&#x3C;/td&#x3E;
         &#x3C;td&#x3E;London&#x3C;/td&#x3E;
         &#x3C;td&#x3E;43&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2012/12/18&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$313,500&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Tatyana Fitzpatrick&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Regional Director&#x3C;/td&#x3E;
         &#x3C;td&#x3E;London&#x3C;/td&#x3E;
         &#x3C;td&#x3E;19&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2010/03/17&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$385,750&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Michael Silva&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Marketing Designer&#x3C;/td&#x3E;
         &#x3C;td&#x3E;London&#x3C;/td&#x3E;
         &#x3C;td&#x3E;66&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2012/11/27&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$198,500&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Paul Byrd&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Chief Financial Officer (CFO)&#x3C;/td&#x3E;
         &#x3C;td&#x3E;New York&#x3C;/td&#x3E;
         &#x3C;td&#x3E;64&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2010/06/09&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$725,000&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Gloria Little&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Systems Administrator&#x3C;/td&#x3E;
         &#x3C;td&#x3E;New York&#x3C;/td&#x3E;
         &#x3C;td&#x3E;59&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2009/04/10&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$237,500&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Bradley Greer&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Software Engineer&#x3C;/td&#x3E;
         &#x3C;td&#x3E;London&#x3C;/td&#x3E;
         &#x3C;td&#x3E;41&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2012/10/13&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$132,000&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Dai Rios&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Personnel Lead&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Edinburgh&#x3C;/td&#x3E;
         &#x3C;td&#x3E;35&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2012/09/26&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$217,500&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
&#x3C;/table&#x3E;
</code></pre>
                                </kbd></div>
                        </div>
                        <!--<p>Images in Bootstrap are made responsive with <code>.img-fluid</code>. <code>max-width: 100%;</code> and <code>height: auto;</code> are applied to the image so that it scales with the parent element.</p>-->

                        <div class="table-responsive">
                            <table id="datatable" class="table data-table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>S No.</th>
                                        <th>Employee Name</th>
                                        <th>Leave Type</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>No of Days</th>
                                        <th>Pending Leaves</th>
                                        <th>Reason</th>
                                        <th>Status</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($empleave as $list)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$list->users->name}}</td>
                                        <td>{{$list->Leave_type}}</td>
                                        <td>{{$list->leavefrom}}</td>
                                        <td>{{$list->leaveto}}</td>
                                        <td>{{$list->No_of_days}}</td>
                                        <td>{{$list->Pending_leaves}}</td>
                                        <td>{{$list->Reason}}</td>
                                        <td>{{$list->Status}}</td>
                                         <td>
                                            <div class="d-flex justify-content-end align-items-center">
                                                <a class="badge bg-danger" data-placement="top" title="" data-original-title="Delete" href="{{url('/delete/')}}/{{$list->id}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">-->
                                    <!--    <div class="modal-dialog modal-dialog-centered" role="document">-->
                                    <!--        <div class="modal-content">-->
                                    <!--            <div class="modal-header">-->
                                    <!--                <h5 class="modal-title" id="exampleModalCenterTitle">Leaves Details</h5>-->
                                    <!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                                    <!--                    <span aria-hidden="true">&times;</span>-->
                                    <!--                </button>-->
                                    <!--            </div>-->
                                    <!--            <div class="modal-body">-->
                                    <!--                 Do you want to delete this leave application?-->
                                    <!--            </div>-->
                                    <!--            <div class="modal-footer">-->
                                    <!--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                    <!--                <a href=""><button type="submit" name="submit" class="btn btn-primary">Delete</button></a>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    
                                    @endforeach
                                   
                                </tbody>
                                @if(count($empleave)>5)
                                <tfoot>
                                    <tr>
                                        <th>S No.</th>
                                        <th>Employee Name</th>
                                        <th>Leave Type</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>No of Days</th>
                                        <th>Pending Leaves</th>
                                        <th>Reason</th>
                                        <th>Status</th>
                                        <th>Options</th>
                                </tfoot>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function Validation() {

        var leavetype = document.getElementById('leavetype').value;
        var startdate = document.getElementById('startdate').value;
        var enddate = document.getElementById('enddate').value;
        var reason = document.getElementById('reason').value;

        if (leavetype == "") {
            document.getElementById('leavetyp').innerHTML = "Please enter leave type";
            return false;
        } else {
            document.getElementById('leavetyp').innerHTML = "";
        }

        if (startdate == "") {
            document.getElementById('strtdt').innerHTML = "Please select start date";
            return false;
        } else {
            document.getElementById('strtdt').innerHTML = "";
        }

        if (enddate == "") {
            document.getElementById('nddate').innerHTML = "Please select end date";
            return false;
        } else {
            document.getElementById('nddate').innerHTML = "";
        }

        if (reason == "") {
            document.getElementById('reson').innerHTML = "Please enter reason";
            return false;
        } else {
            document.getElementById('reson').innerHTML = "";
        }
        
       
    }
    
     $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#startdate').attr('min', minDate);
    $('#enddate').attr('min', minDate);
});


</script>

<script>
$(document).ready(function(){ 
   $(".alert-danger").fadeTo(3000, 600).slideUp(600, function(){
       $(".alert-danger").slideUp(600);
     });
})
</script>
@include('COMMEN/footer');