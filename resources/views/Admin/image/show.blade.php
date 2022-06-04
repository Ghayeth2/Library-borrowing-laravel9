@extends('layouts.adminBase')

@section('title', 'Show Book')



@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">


        <h3>Show Book</h3>
        <!-- row -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title ">{{$data->title}}</h4>
                    <a href="{{route('Admin.book.destroy',['id'=>$data->id])}}">
                        <button type="button" class="btn btn-danger "
                                onclick="return confirm('Are you sure you want to delete?')">
                            Delete
                        </button>
                    </a>
                    <a href="{{route('Admin.book.edit',['id'=>$data->id])}}">
                        <button type="button" class="btn btn-dark ">
                            Edit
                        </button>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border table-hover verticle-middle">
                            <tr>
                                <th scope="col" style="color: black">Id</th>
                                <th scope="col">{{$data->id}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Title</th>
                                <th scope="col">{{$data->title}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Categroy</th>
                                <th scope="col">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree(
                                                 $data->category,$data->category->title)}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Keyword</th>
                                <th scope="col">{{$data->keyword}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Detail</th>
                                <th scope="col">{{$data->detail}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Image</th>
                                <th scope="col">
                                    <span>
                                        @if($data->image)
                                            <img src="{{Storage::url($data->image)}}" style="height: 100px">
                                        @endif
                                    </span>
                                </th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Status</th>
                                <th scope="col">{{$data->status}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Created Date</th>
                                <th scope="col">{{$data->created_at}}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="color: black">Updated Date</th>
                                <th scope="col">{{$data->updated_at}}</th>
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

