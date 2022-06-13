
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
                                <th scope="col">{{$data->book->title}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">User Name</th>
                                <th scope="col">{{$data->user->name}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Taking Date</th>
                                <th scope="col">{{$data->bookdate}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Return Date</th>
                                <th scope="col">{{$data->returndate}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Days</th>
                                <th scope="col">{{ $data->days }}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Note</th>
                                <th scope="col">{{ $data->note }}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Status</th>
                                <th scope="col">{{ $data->status }}</th>
                            </tr>
                            <tr>
                                <form action="{{route('Admin.borrowm.update',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <div class="form-group col-md-6">
                                        <label>Admin Note</label>
                                        <textarea type="text" class="form-control" name="note"> {{$data->note}} </textarea>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label>Status  </label>
                                            <select name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>Accepted</option>
                                                <option>Canceled</option>
                                                <option>In Hold</option>
                                            </select>
                                        </div>

                                    </div>
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

