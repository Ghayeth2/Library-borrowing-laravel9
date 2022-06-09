
@extends('layouts.homeBase')

@section('title', 'User Panel')
@include('homeTrails.user.commentsBanner')
@section('content')
    <!-- Start: Category Filter -->
    <section class="category-filter section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--**********************************
             Content body start
         ***********************************-->
                    <div class="content-body">
                        <!-- row -->

                        <h3>Reviews & Comments</h3>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header col-sm-1 col-lg-12" >
                                    <h4 class="card-title"></h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table header-border table-responsive-sm">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
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
                                                    <td><a href="{{route('userPanel.commentdestroy',['id'=>$row->id])}}"
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
                </div>

            </div>

        </div>
    </section>
    <!-- Start: Category Filter -->



@endsection



