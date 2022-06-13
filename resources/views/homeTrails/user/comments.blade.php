
@extends('layouts.homeBase')

@section('title', 'User Panel')
@include('homeTrails.user.commentsBanner')
@section('content')
    <!-- Start: Category Filter -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--**********************************
             Content body start
         ***********************************-->
                    <div class="content-body">
                        <!-- row -->

                        <h3 style="padding-top: 10px;padding-bottom: 10px">Reviews & Comments</h3>
                                        <table>
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Book</th>
                                                <th>User Name</th>
                                                <th>Comment</th>
                                                <th>Rate</th>
                                                <th>Status</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach( $comments as $row)
                                                <tr>
                                                    <td><a href="javascript:void(0)">{{$row->id}}</a>
                                                    </td>
                                                    <td><a href="{{route('Admin.book.show',['id'=> $row->book_id])}}">{{$row->book->title}}</a></td>
                                                    <td>{{$row->user->name}}</td>
                                                    <td>{{$row->comment}}</td>
                                                    <td>{{$row->rate}}</td>
                                                    <td>{{$row->status}}</td>
                                                    <td><a href="{{route('userPanel.reviewdestroy',['id'=>$row->id])}}"
                                                           class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete?')"
                                                        >Delete</a></td>
                                            @endforeach
                                            </tbody>
                                        </table>


                    </div>
                    <!--**********************************
                        Content body end  class="badge badge-success"
                    ***********************************-->
                </div>

            </div>

        </div>
    <!-- Start: Category Filter -->



@endsection



