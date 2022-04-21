
@extends('layouts.adminImageBase')

@section('title', 'Book Image List')



@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <!-- row -->

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header col-sm-1 col-lg-12" >
                <h4 class="card-title">{{$book->title}}</h4>
            </div>
            <form action="{{route('Admin.image.store',['bid'=>$book->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" placeholder="title">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label">Choose image file</label>
                        </div>

                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table header-border table-responsive-sm">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $image as $row)
                            <tr>
                                <td><a href="javascript:void(0)">{{$row->id}}</a>
                                </td>
                                <td>{{$row->title}}</td>
                                <td>
                                    <span >
                                        @if($row->image)
                                            <img src="{{Storage::url($row->image)}}" style="height: 40px">
                                        @endif
                                    </span>
                                </td>
                                <td><a href="{{route('Admin.image.destroy',['bid'=>$book->id,'id'=>$row->id])}}"
                                       class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete?')"
                                    >Delete</a></td>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end  class="badge badge-success"
    ***********************************-->
@endsection
