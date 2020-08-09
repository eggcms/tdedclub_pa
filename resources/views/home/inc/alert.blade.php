@if(count($errors)>0)
    @foreach($errors->all() as $error)
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Oh snap!!</strong> &nbsp; &nbsp;<span>{{$error}}</span>
            </div>
        </div>
    </div>
    @endforeach
@endif
@if(session('success'))
<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Well done! </strong> &nbsp; &nbsp; <span>{{session('success')}}</span>
        </div>
    </div>
</div>
@endif
@if(session('error'))
<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Oh snap!!</strong> &nbsp; &nbsp;<span>{{session('error')}}</span>
        </div>
    </div>
</div>
@endif