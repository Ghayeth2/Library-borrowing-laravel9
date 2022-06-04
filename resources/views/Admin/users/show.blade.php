
@extends('layouts.adminBase')

@section('title', 'Show User')



@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">


        <h3>Show User</h3>
        <!-- row -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

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
                                <th scope="col" style="color: black">Email</th>
                                <th scope="col">{{$data->email}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">User</th>
                                <th scope="col">{{$data->User}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Roles</th>
                                <th scope="col">
                                    @foreach($data->roles as $role)
                                        {{$role->name}}
                                        <a  href="{{route('Admin.users.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}">
                                            [x]</a>
                                    @endforeach
                                </th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Status</th>
                                <th scope="col">{{ $data->status }}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Add Role : </th>
                                <th scope="col">
                                    <form action="{{route('Admin.users.addrole',['id'=>$data->id])}}" method="post">
                                        @csrf
                                        <select name="role">
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}">
                                                    {{$role->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-primary">Add Role</button>
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

