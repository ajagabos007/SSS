@if(isset($errors) && count($errors)>0)
    <div class="alert alert-dismissable alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
        @foreach($errors->all() as $error)
            <p> <strong>{{$error}}<br/> {{__("wrong email or password")}}</strong></p>
        @endforeach
    </div>
@endif
