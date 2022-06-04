
@extends('layouts.adminBase')

@section('title', 'Admin Settings')



@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->

        <h3>Settings</h3>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div>
                <form action="{{route('Admin.settings.update')}}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="tab-content">
                                    <div id="v-pills-general" class="tab-pane fade">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">General</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="basic-form">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Title</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="title" value="{{$data->title}}" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Keyword</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="keyword" value="{{$data->keyword}}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Description</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Company</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="company" value="{{$data->company}}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Contact</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="contact" value="{{$data->contact}}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Address</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Phone</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Fax</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Icon</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="icon" value="{{$data->icon}}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label>Status</label>
                                                            <select id="inputState" class="form-control" name="status">
                                                                <option selected="">Choose...</option>
                                                                <option>True</option>
                                                                <option>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="v-pills-stmp" class="tab-pane fade active show">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Stmpserver</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="stmpserver" value="{{$data->stmpserver}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Stmpemail</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="stmpemail" value="{{$data->stmpemail}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Stmppassword</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="stmppassword" value="{{$data->stmppassword}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Stmpport</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="stmpport" value="{{$data->stmpport}}" class="form-control">
                                                </div>
                                            </div>
                                    </div>
                                    <div id="v-pills-socialmedia" class="tab-pane fade">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Facebook</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Instagram</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Twitter</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="v-pills-contact" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-xl-12 col-xxl-12">
                                                <div class="card">
                                                    <label for="exampleInputEmail">Contact</label>
                                                    <textarea class="form-control" name="contact" id="contact">

                                                </textarea>
                                                    <script>
                                                        ClassicEditor
                                                            .create( document.querySelector( '#contact' ) )
                                                            .then( editor => {
                                                                console.log( editor );
                                                            } )
                                                            .catch( error => {
                                                                console.error( error );
                                                            } );
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="v-pills-aboutus" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-xl-12 col-xxl-12">
                                                <div class="card">
                                                    <label for="exampleInputEmail">About Us</label>
                                                    <textarea class="form-control" name="aboutus" id="aboutus">

                                                </textarea>
                                                    <script>
                                                        ClassicEditor
                                                            .create( document.querySelector( '#aboutus' ) )
                                                            .then( editor => {
                                                                console.log( editor );
                                                            } )
                                                            .catch( error => {
                                                                console.error( error );
                                                            } );
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="v-pills-references" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-xl-12 col-xxl-12">
                                                <div class="card">
                                                    <label for="exampleInputEmail">References</label>
                                                    <textarea class="form-control" name="references" id="references">

                                                </textarea>
                                                    <script>
                                                        ClassicEditor
                                                            .create( document.querySelector( '#references' ) )
                                                            .then( editor => {
                                                                console.log( editor );
                                                            } )
                                                            .catch( error => {
                                                                console.error( error );
                                                            } );
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="nav flex-column nav-pills">
                                    <a href="#v-pills-general" data-toggle="pill" class="nav-link show">General</a>
                                    <a href="#v-pills-stmp" data-toggle="pill" class="nav-link active">Stmp</a>
                                    <a href="#v-pills-socialmedia" data-toggle="pill" class="nav-link">Social Media</a>
                                    <a href="#v-pills-contact" data-toggle="pill" class="nav-link">Contact</a>
                                    <a href="#v-pills-aboutus" data-toggle="pill" class="nav-link">About Us</a>
                                    <a href="#v-pills-references" data-toggle="pill" class="nav-link">References</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection
