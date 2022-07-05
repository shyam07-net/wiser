@include('includes.sidebar')
@include('includes.navbar')

<div id="remoteModelData" class="modal fade" role="dialog"></div>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">

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
                    Add Notes
                </button></br>
            </div>

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Add Notes</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('/notessaves')}}" method="POST" onsubmit="return Validation()">
                                @csrf
                                <div class="form-group">
                                    <label for="type">Title</label><span style="color:red">*</span>
                                    <input type="text" name="title" class="form-control" id="title">
                                    <span style="color:red" id="tit"></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Notes</label><span style="color:red">*</span>
                                    <textarea class="form-control" name="notes" id="notes" rows="3"></textarea>
                                    <span style="color:red" id="note"></span>
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

            <div class="row">
                <div class="col-sm-12">
                    <h3 class="mb-2">Personal Notes</h3>
                </div>
                @foreach($empnotes as $list)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card text-white  bg-info">
                        <div class="card-body">
                            <h4 class="card-title text-white">{{$list->title}}</h4>
                            <blockquote class="blockquote mb-0">
                                <p class="font-size-14">{{$list->notes}}</p>
                                <footer class="blockquote-footer text-black font-size-12"><a href="{{url('/deletenotes/')}}/{{$list->id}}"><i class="fa fa-trash-o" style="color:red" aria-hidden="true"></i></a></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    function Validation() {

        var title = document.getElementById('title').value;
        var notes = document.getElementById('notes').value;

        if (title == "") {
            document.getElementById('tit').innerHTML = "Please enter title";
            return false;
        } else {
            document.getElementById('tit').innerHTML = "";
        }
        if (notes == "") {
            document.getElementById('note').innerHTML = "Please enter notes";
            return false;
        } else {
            document.getElementById('note').innerHTML = "";
        }
    }
</script>
<script>
    $(document).ready(function() {
        $(".alert-danger").fadeTo(3000, 600).slideUp(600, function() {
            $(".alert-danger").slideUp(600);
        });
    })
</script>

@include('includes.footer')