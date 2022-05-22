
@extends('layouts.adminBase')

@section('title', 'Show Message')



@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">


        <h3>Show Message</h3>
        <!-- row -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title ">{{$data->title}}</h4>
                    <a href="{{route('Admin.Message.destroy',['id'=>$data->id])}}"> <button type="button" class="btn btn-danger "
                                                                                            onclick="return confirm('Are you sure you want to delete?')">
                            Delete</button></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border table-hover verticle-middle">
                            <tr>
                                <th scope="col" style="color: black">Id</th>
                                <th scope="col">{{$data->id}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Full Name</th>
                                <th scope="col">{{$data->name}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Phone Number</th>
                                <th scope="col">{{$data->phone}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Email</th>
                                <th scope="col">{{$data->email}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Subject</th>
                                <th scope="col">{{$data->subject}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Message</th>
                                <th scope="col">{{$data->message}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Status</th>
                                <th scope="col">{{ $data->status }}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Admin Note : </th>
                                <th scope="col">
                                    <form action="{{route('Admin.message.update',['id'=>$data->id])}}" method="post">
                                        @csrf
                                    <textarea cols="100" id="note" name="note">
                                        {{$data->note}}
                                    </textarea>
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

