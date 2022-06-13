
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
                <form role="form" action="{{route('Admin.setting.update')}}" method="post" enctype="multipart/form-data">
                    <div class="tab">
                        @csrf
                        <form class="tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link text-blue active" data-toggle="tab" href="#general" role="tab" aria-selected="true">General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-blue" data-toggle="tab" href="#stmp" role="tab" aria-selected="true">StmpEmail</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-blue" data-toggle="tab" href="#about1" role="tab" aria-selected="true">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-blue" data-toggle="tab" href="#reference1" role="tab" aria-selected="false">Reference</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-blue" data-toggle="tab" href="#contact1" role="tab" aria-selected="false">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-blue" data-toggle="tab" href="#social" role="tab" aria-selected="false">Social</a>
                                </li>
                            </ul>


                            <!--stmp-->


                            <div class="tab-content">
                                <div class="tab-pane fade" id="stmp" role="tabpanel">
                                    <div class="pd-20">


                                        <div class="form-group">
                                            <label for="smtpserver" class="col-sm-12 col-md-12 col-form-label"><b>smtpserver</b></label>
                                            <div class="col-sm-12 col-md-12">
                                                <input class="form-control" type="text" name="smtpserver" value="{{$data->smtpserver}}" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="smtpemail" class="col-sm-12 col-md-12 col-form-label"><b>smtpemail</b></label>
                                            <div class="col-sm-12 col-md-12">
                                                <input class="form-control" type="text" name="smtpemail" value="{{$data->smtpemail}}" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="smtppassword" class="col-sm-12 col-md-12 col-form-label"><b>smtppassword</b></label>
                                            <div class="col-sm-12 col-md-12">
                                                <input class="form-control" type="password" name="smtppassword" value="{{$data->smtppassword}}" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="smtpport" class="col-sm-12 col-md-12 col-form-label"><b>smtpport</b></label>
                                            <div class="col-sm-12 col-md-12">
                                                <input class="form-control" type="number" name="smtpport" value="{{$data->smtpport}}" >
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <!--reference-->

                                <div class="tab-pane fade" id="reference1" role="tabpanel">
                                    <div class="pd-20">

                                        <div class="form-group">
                                            <label for="references" >Reference</label>
                                            <textarea class="form-control" name="references" id="references">
                                    {{ $data->reference }}
                                </textarea>
                                            <script>
                                                ClassicEditor
                                                    .create(document.querySelector('#references'))
                                                    .then(editor => {
                                                        console.log(editor);
                                                    })
                                                    .catch(error => {
                                                        console.error(error);
                                                    });
                                            </script>
                                        </div>

                                    </div>
                                </div>

                                <!--about-->

                                <div class="tab-pane fade" id="about1" role="tabpanel">
                                    <div class="pd-20">

                                        <div class="form-group">
                                            <label for="aboutus" >About Us</label>
                                            <textarea class="form-control" name="aboutus" id="aboutus1">
                                                {{$data->aboutus}}
                                </textarea>
                                            <script>
                                                ClassicEditor
                                                    .create(document.querySelector('#aboutus1'))
                                                    .then(editor => {
                                                        console.log(editor);
                                                    })
                                                    .catch(error => {
                                                        console.error(error);
                                                    });
                                            </script>
                                        </div>

                                    </div>
                                </div>


                                <!--contact-->

                                <div class="tab-pane fade" id="contact1" role="tabpanel">
                                    <div class="pd-20">

                                        <div class="form-group">
                                            <label for="contact" >Contact Us</label>
                                            <textarea class="form-control" name="contact" id="contact">
                                                {{$data->contact}}
                                </textarea>
                                            <script>
                                                ClassicEditor
                                                    .create(document.querySelector('#contact'))
                                                    .then(editor => {
                                                        console.log(editor);
                                                    })
                                                    .catch(error => {
                                                        console.error(error);
                                                    });
                                            </script>
                                        </div>

                                    </div>
                                </div>

                                <!--general-->
                                <div class="tab-pane fade active show" id="general" role="tabpanel">
                                    <div class="pd-20">
                                        <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-group">
                                        <div class="form-group row">
                                            <label id="title" class="col-sm-12 col-md-12 col-form-label"><b>title</b></label>
                                            <div class="col-sm-12 col-md-12">
                                                <input class="form-control" type="text" name="title" value="{{$data->title}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="keywords" class="col-sm-12 col-md-12 col-form-label"><b>keywords</b></label>
                                            <div class="col-sm-12 col-md-12">
                                                <input class="form-control" type="text" name="keywords" value="{{$data->keywords}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="description" class="col-sm-12 col-md-12 col-form-label"><b>description</b></label>
                                            <div class="col-sm-12 col-md-12">
                                                <input class="form-control" type="text" name="description" value="{{$data->description}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="company" class="col-sm-12 col-md-12 col-form-label"><b>company</b></label>
                                            <div class="col-sm-12 col-md-12">
                                                <input class="form-control" type="text" name="company" value="{{$data->company}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="address" class="col-sm-12 col-md-12 col-form-label"><b>address</b></label>
                                            <div class="col-sm-12 col-md-12">
                                                <input class="form-control" type="text" name="address" value="{{$data->address}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phone" class="col-sm-12 col-md-12 col-form-label"><b>Phone</b></label>
                                            <div class="col-sm-12 col-md-12">
                                                <input class="form-control" type="number" name="phone" value="{{$data->phone}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fax" class="col-sm-12 col-md-12 col-form-label"><b>Fax</b></label>
                                            <div class="col-sm-12 col-md-12">
                                                <input class="form-control" type="number" name="fax" value="{{$data->fax}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-12 col-md-12 col-form-label"><b>Email</b></label>
                                            <div class="col-sm-12 col-md-12">
                                                <input class="form-control" type="text" name="email" value="{{$data->email}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Custom file input</label>
                                            <div class="custom-file"  >
                                                <input type="file" class="custom-file-input"  name="icon">
                                                <label class="custom-file-label"  ><b>{{$data->icon}}</b></label>
                                            </div>
                                        </div>
                                        <div

                                        <label for="status" class="col-sm-12 col-md-12"><b>Status</b></label>
                                        <select id="status" name="status" class="form-control" placeholder="status" required>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>

                                    </div>
                                </div>
                            </div>




                            <!--social-->

                            <div class="tab-pane fade" id="social" role="tabpanel">
                                <div class="pd-20">

                                    <div class="form-group">
                                        <label for="youtube" class="col-sm-12 col-md-12 col-form-label"><b>YouTube</b></label>
                                        <div class="col-sm-12 col-md-12">
                                            <input class="form-control" type="text" name="youtube" value="{{$data->youtube}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="instagram" class="col-sm-12 col-md-12 col-form-label"><b>instagram</b></label>
                                        <div class="col-sm-12 col-md-12">
                                            <input class="form-control" type="text" name="instagram" value="{{$data->instagram}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="twitter" class="col-sm-12 col-md-12 col-form-label"><b>twitter</b></label>
                                        <div class="col-sm-12 col-md-12">
                                            <input class="form-control" type="text" name="twitter" value="{{$data->twitter}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="facebook" class="col-sm-12 col-md-12 col-form-label"><b>facebook</b></label>
                                        <div class="col-sm-12 col-md-12">
                                            <input class="form-control" type="text" name="facebook" value="{{$data->twitter}}">
                                        </div>
                                    </div>

                                </div>
                            </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Submit Data</button>

                </form>
            </div>
        </div>
        </form>
    </div>
    </form>

    </div>
            Content body end
        ***********************************-->
@endsection
