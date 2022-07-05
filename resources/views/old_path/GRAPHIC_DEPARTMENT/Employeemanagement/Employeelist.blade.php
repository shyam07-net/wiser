@include('GRAPHIC_DEPARTMENT.sidebar');
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
                        <div class="header-action">

                            <!--<a href="{{url('/empleaves/export')}}"><button type="button" class="btn btn-secondary btn-sm">-->
                            <!--        <svg xmlns="http://www.w3.org/2000/svg" class="mr-1" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
                            <!--            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />-->
                            <!--        </svg>-->
                            <!--        Export-->
                            <!--    </button></a>-->
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
                        <p>Images in Bootstrap are made responsive with <code>.img-fluid</code>. <code>max-width: 100%;</code> and <code>height: auto;</code> are applied to the image so that it scales with the parent element.</p>

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
                                        <td>
                                            <form method="post" action="/changeleavestatus">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$list->id}}">
                                                <select name="status" class="form-control" style="width:125px;">
                                                    @if($list->Status)
                                                    <option value="{{$list->Status}}" selected>{{$list->Status}}</option>
                                                    @else
                                                    <option value="" selected>New</option>
                                                    @endif
                                                    <option value="Approved">Approved</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Declined">Declined</option>
                                                </select>&nbsp;</br>
                                                <button type="submit" class="btn btn-outline-primary rounded-pill mt-2">UPDATE</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
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

                                    </tr>
                                </tfoot>
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
</script>
@include('COMMEN/footer');