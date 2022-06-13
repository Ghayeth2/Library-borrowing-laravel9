
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

                        <h3 style="padding-top: 10px;padding-bottom: 10px">Books</h3>
                                        <table>
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Book</th>
                                                <th>User Name</th>
                                                <th>Taking Date</th>
                                                <th>Return Date</th>
                                                <th>Admin Note</th>
                                                <th>Status</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach( $books as $row)
                                                <tr>
                                                    <td><a href="javascript:void(0)">{{$row->id}}</a>
                                                    </td>
                                                    <td><a href="{{route('Admin.book.show',['id'=> $row->book_id])}}">{{$row->book->title}}</a></td>
                                                    <td>{{$row->user->name}}</td>
                                                    <td>{{$row->bookdate}}</td>
                                                    <td>{{$row->returndate}}</td>
                                                    <td>{{$row->note}}</td>

                                                    <td>{{$row->status}}</td>
                                                    <td><a href="{{route('userPanel.booksdestroy',['id'=>$row->id])}}"
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



