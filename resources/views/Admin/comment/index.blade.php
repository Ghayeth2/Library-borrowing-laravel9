
@extends('layouts.adminBase')

@section('title', 'Comment List')



@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->

        <h3>Book List</h3>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header col-sm-1 col-lg-12" >
                    <h4 class="card-title">Comment List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border table-responsive-sm">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>User Name</th>
                                <th>Book Title</th>
                                <th>Comment</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th>Show</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $row)
                                <tr>
                                    <td><a href="javascript:void(0)">{{$row->id}}</a>
                                    </td>
                                    <td>{{$row->user->name}}</td>
                                    <td>{{$row->book->title}}</td>
                                    <td>{{$row->comment}}</td>
                                    <td>{{$row->rate}}</td>
                                    <td>{{$row->status}}</td>
                                    <td>
                                    <span>
                                        <a class="btn btn-outline-success" href="{{route('Admin.comment.show',['id'=>$row->id])}}"
                                        onclick="return !window.open(this.href,'','top = 40 left = 100 width = 1100 , height = 700' )">
                                        Show</a>
                                    </span>
                                    </td>
                                    <td><a href="{{route('Admin.comment.destroy',['id'=>$row->id])}}"
                                           class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete?')"
                                        >Delete</a></td>
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
