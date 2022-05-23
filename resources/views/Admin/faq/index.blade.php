
@extends('layouts.adminBase')

@section('title', 'FAQ List')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->

        <h3>FAQ List</h3>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header col-sm-1 col-lg-12" >
                    <h4 class="card-title">Category List</h4>
                    <a href="{{route('Admin.faq.create')}}"> <button type="button" class="btn btn-success " >
                            Add FAQ</button></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border table-responsive-sm">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Question</th>
                                <th>Answer</th>
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
                                    <td>{{$row->question}}</td>
                                    <td>{!! $row->answer !!}</td>
                                    <td>{{$row->status}}</td>
                                    <td><a href="{{route('Admin.faq.edit',['id'=>$row->id])}}"
                                           class="btn btn-outline-dark">Edit</a></td>
                                    <td><a href="{{route('Admin.faq.destroy',['id'=>$row->id])}}"
                                           class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete?')"
                                        >Delete</a></td>
                                    <td><a href="{{route('Admin.faq.show',['id'=>$row->id])}}"
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
