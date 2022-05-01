
@extends('layouts.adminBase')

@section('title', 'Category List')



@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->

        <h3>Category List</h3>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header col-sm-1 col-lg-12" >
                    <h4 class="card-title">Category List</h4>
                    <a href="{{route('Admin.Category.create')}}"> <button type="button" class="btn btn-success " >
                            Add Category</button></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border table-responsive-sm">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Parent</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $row)
                                <tr>
                                    <td><a href="javascript:void(0)">{{$row->id}}</a>
                                    </td>
                                    <td> {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($row,$row->title)}}</td>
                                    <td>{{$row->title}}</td>
                                    <td>
                                    <span >
                                        @if($row->image)
                                            <img src="{{Storage::url($row->image)}}" style="">
                                        @endif
                                    </span>
                                    </td>
                                    <td>{{$row->status}} </td>
                                    <td><a href="{{route('Admin.Category.edit',['id'=>$row->id])}}"
                                           class="btn btn-outline-dark">Edit</a></td>
                                    <td><a href="{{route('Admin.Category.destroy',['id'=>$row->id])}}"
                                           class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete?')"
                                        >Delete</a></td>
                                    <td><a href="{{route('Admin.Category.show',['id'=>$row->id])}}"
                                           class="btn btn-outline-warning">Show</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!--**********************************
        Content body end  class="badge badge-success"
    ***********************************-->
@endsection
