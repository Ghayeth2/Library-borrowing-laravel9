
@extends('layouts.adminBase')

@section('title', 'Add FAQ')



@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">


           <h3>Add FAQ</h3>
        <!-- row -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add FAQ</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{route('Admin.faq.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Question</label>
                                <input type="text" class="form-control" name="question" placeholder="Question">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail">Answer</label>
                                <textarea class="form-control" name="answer" id="answer">

                                </textarea>
                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#answer' ) )
                                        .then( editor => {
                                            console.log( editor );
                                        } )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>
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
