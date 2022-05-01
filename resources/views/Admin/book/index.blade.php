
@extends('layouts.adminBase')

@section('title', 'Book List')

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
                    <h4 class="card-title">Category List</h4>
                    <a href="{{route('Admin.book.create')}}"> <button type="button" class="btn btn-success " >
                            Add Book</button></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border table-responsive-sm">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>ISBN</th>
                                <th>Edition</th>
                                <th>Image</th>
                                <th>Image Gallery</th>
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
                                    <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree(
                                                 $row->category,$row->category->title)}}</td>
                                    <td>{{$row->title}}</td>
                                    <td>{{$row->author}}</td>
                                    <td>{{$row->isbn}}</td>
                                    <td>{{$row->edition}}</td>
                                    <td>
                                    <span >
                                        @if($row->image)
                                            <img src="{{Storage::url($row->image)}}" style="height: 40px">
                                        @endif
                                    </span>
                                    </td>
                                    <td>
                                    <span>
                                        <a href="{{route('Admin.image.index',['bid'=>$row->id])}}"
                                        onclick="return !window.open(this.href,'','top = 40 left = 100 width = 1100 , height = 700' )">
                                        <img class="brand-title" src="{{asset('adminPannel')}}/images/gallery.png"
                                             style="background-color: black" height="40px"></a>
                                    </span>
                                    </td>
                                    <td>{{$row->status}} </td>
                                    <td><a href="{{route('Admin.book.edit',['id'=>$row->id])}}"
                                           class="btn btn-outline-dark">Edit</a></td>
                                    <td><a href="{{route('Admin.book.destroy',['id'=>$row->id])}}"
                                           class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete?')"
                                        >Delete</a></td>
                                    <td><a href="{{route('Admin.book.show',['id'=>$row->id])}}"
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
