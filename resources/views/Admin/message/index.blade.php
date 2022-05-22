
@extends('layouts.adminBase')

@section('title', 'Messages List')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

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
                    <h4 class="card-title">Messages List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border table-responsive-sm">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Full Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Status</th>
                                <th>Delete</th>
                                <th>Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $row)
                                <tr>
                                    <td><a href="javascript:void(0)">{{$row->id}}</a>
                                    </td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->phone}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->subject}}</td>
                                    <td>{{$row->status}}</td>
                                    <td>
                                    <span>
                                        <a href="{{route('Admin.message.show',['id'=>$row->id])}}"
                                        onclick="return !window.open(this.href,'','top = 40 left = 100 width = 1100 , height = 700' )">
                                        Show</a>
                                    </span>
                                    </td>
                                    <td><a href="{{route('Admin.message.destroy',['id'=>$row->id])}}"
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
