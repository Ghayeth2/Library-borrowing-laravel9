
@extends('layouts.adminBase')

@section('title', 'Show Comments')



@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">


        <h3>Show Comments</h3>
        <!-- row -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border table-hover verticle-middle">
                            <tr>
                                <th scope="col" style="color: black">Id</th>
                                <th scope="col">{{$data->id}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Book Title</th>
                                <th scope="col">{{$data->user->book->title}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">User Name</th>
                                <th scope="col">{{$data->user->name}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Comment</th>
                                <th scope="col">{{$data->Comment}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Rate</th>
                                <th scope="col">{{$data->rate}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Status</th>
                                <th scope="col">{{ $data->status }}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Admin Note : </th>
                                <th scope="col">
                                    <form action="{{route('Admin.comment.update',['id'=>$data->id])}}" method="post">
                                        @csrf
                                        <label>Status  </label>
                                        <select name="status">
                                            <option selected>{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </th>
                            </tr>
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

