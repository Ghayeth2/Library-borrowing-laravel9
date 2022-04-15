
@extends('layouts.adminBase')

@section('title', 'Edit Category')



@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">


           <h3>Edit Category</h3>
        <!-- row -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit {{$data->title}}</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{route('Admin.Category.update',['id'=>$data->id])}}"method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Title</label>
                                <input type="text" class="form-control" value="{{$data->title}}" name="title">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Keywords</label>
                                <input type="text" class="form-control" value="{{$data->keyword}}" name="keyword" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>Description</label>
                                <input type="text" class="form-control" name="description"  value="{{$data->description}}" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label">Choose image file</label>
                                </div>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Status</label>
                                <select id="inputState" class="form-control" name="status">
                                    <option selected="">Choose...</option>
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
@endsection
