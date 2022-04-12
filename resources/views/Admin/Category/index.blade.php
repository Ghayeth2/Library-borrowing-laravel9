
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
                <div class="card-header">
                    <h4 class="card-title">Category List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border table-responsive-sm">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Keyword</th>
                                <th>Description</th>
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
                                <td>{{$row->title}}</td>
                                <td><span class="text-muted">{{$row->keyword}}</span>
                                </td>
                                <td>{{$row->description}}</td>
                                <td><span class="badge badge-success">{{$row->image}}</span>
                                </td>
                                <td>{{$row->status}} </td>
                                <td><a href="/Admin/Category/edit/{{$row->id}}"
                                       class="btn btn-outline-dark">Edit</a></td>
                                <td><a href="/Admin/Category/delete/{{$row->id}}"
                                       class="btn btn-outline-danger">Delete</a></td>
                                <td><a href="/Admin/Category/show/{{$row->id}}"
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
        Content body end
    ***********************************-->
@endsection
