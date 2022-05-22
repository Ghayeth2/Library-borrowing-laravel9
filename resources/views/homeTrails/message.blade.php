@if($message = \MongoDB\Driver\Session::get('success'))
    <div class="alert alert-success alert-block">
        <button class="close" type="button" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
@if($message = \MongoDB\Driver\Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button class="close" type="button" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
@if($message = \MongoDB\Driver\Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <button class="close" type="button" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
@if($message = \MongoDB\Driver\Session::get('info'))
    <div class="alert alert-info alert-block">
        <button class="close" type="button" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
@if($errors->any())
    <div class="alert alert-danger">
        <button class="close" type="button" data-dismiss="alert">x</button>
        Check the following errors ..
    </div>
@endif
