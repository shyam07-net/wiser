@include('IT_DEPARTMENT.sidebar');
@include('COMMEN/navbar')
<div class="content-page">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between my-schedule mb-4">
                </div>

                

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch">
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between align-items-center p-3">
                                    <h5 class="font-weight-bold">Trashed Tasks</h5>
                             
                                </div>
                                <div class="table-responsive">
                                    <table class="table data-table mb-0">
                                        <thead class="table-color-heading">
                                             <tr class="">  
                                                <th scope="col"> Title </th>
                                                <th scope="col" > Action</th>
                                              </tr>
                                        </thead>
                                <tbody>
                                <tr class="white-space-no-wrap">
                                @if($TrashedTask===false)
                                <td>There is no task inside trashed</td>
                                </tr>
                                @else
                                @foreach($TrashedTask as $list)
                                <tr>
                                 <td class="">{{$list->Title}}</td>
                                    <td><span class="task-op">
                                        <input type="hidden" name="" class="tid" value="{{$list->id}}">
                                        <a class="btn btn-danger text-white deleteTask" ><i class="fa fa-trash"></i>&nbsp;Delete Permanently</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-warning RestoreTask" ><i class="fa fa-recycle"></i>&nbsp;Restore</a></span></td>
                                </tr>
                                @endforeach
                                    @endif
                                </tr>
                                
                                </tbody>
                                </table>
                            </div>
                        <!--     <div id="load_more_publications"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>








@include('COMMEN/footer');  