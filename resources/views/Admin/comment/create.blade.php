
@extends('layouts.adminBase')

@section('title', 'Add Book')



@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">


           <h3>Add Book</h3>
        <!-- row -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Book</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{route('Admin.book.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Parent Category</label>
                                <select id="inputState" class="form-control" name="category_id">
                                    @foreach($data as $row)
                                        <option value="{{$row->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree(
                                                 $row,$row->title)}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" placeholder="title">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Keywords</label>
                                <input type="text" class="form-control" name="keyword" placeholder="Keyword">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail">Details</label>
                                <textarea class="form-control" name="detail" id="detail">

                                </textarea>
                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#detail' ) )
                                        .then( editor => {
                                            console.log( editor );
                                        } )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Description</label>
                                <input type="text" class="form-control" name="description" placeholder="Description">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Author</label>
                                <input type="text" class="form-control" name="author" placeholder="Author">
                            </div>
                            <div class="form-group col-md-6">
                                <label>ISBN</label>
                                <input type="text" class="form-control" name="isbn" placeholder="ISBN">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Edition</label>
                                <input type="text" class="form-control" name="edition" placeholder="Edition">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label">Choose image file</label>
                                </div>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Status</label>
                                <select id="inputState" class="form-control" name="status">
                                    <option selected="">Choose...</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
@endsection
