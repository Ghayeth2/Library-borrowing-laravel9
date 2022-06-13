@extends('layouts.adminBase')

@section('title', 'Edit FAQ'.$data->title)

@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">


        <h3>Edit Book</h3>
        <!-- row -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit {{$data->title}}</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{route('Admin.faq.update',['id'=>$data->id])}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Title</label>
                                <input type="text" class="form-control" value="{{$data->question}}" name="question">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail">Details</label>
                                <textarea class="form-control" name="answer" id="answer">
                                    {{ $data->answer }}
                                </textarea>
                                <script>
                                    ClassicEditor
                                        .create(document.querySelector('#answer'))
                                        .then(editor => {
                                            console.log(editor);
                                        })
                                        .catch(error => {
                                            console.error(error);
                                        });
                                </script>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Status</label>
                                <select id="inputState" class="form-control" name="status">
                                    <option selected="">Choose...</option>
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
@endsection
