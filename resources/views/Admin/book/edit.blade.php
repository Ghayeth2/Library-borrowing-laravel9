
@extends('layouts.adminBase')

@section('title', 'Edit Book')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">


           <h3>Edit Book</h3>
        <!-- row -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit {{$data->title}}</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{route('Admin.book.update',['id'=>$data->id])}}"method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Parent Category</label>
                                <select id="inputState" class="form-control" name="category_id">
                                    <option value="0" selected="selected">Main Category</option>
                                    @foreach($datalist as $row)
                                        <option value="{{$row->id}}" @if($row->id == $data->category_id) selected="selected"@endif >
                                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree(
                                                 $row,$row->title)}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
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
                                <label>Details</label>
                                <input type="text" class="form-control" name="detail" value="{{$data->detail}}">
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
