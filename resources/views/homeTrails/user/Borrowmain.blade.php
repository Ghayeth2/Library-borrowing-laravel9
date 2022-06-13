@extends('layouts.homeBase')

@section('title', 'Borrow '.$data->title.' Form')
@include('homeTrails.user.borrowMainBanner')
@section('content')
    <!-- Start: Category Filter -->
    <div class="container" style="padding-top: 15px; padding-bottom: 15px;" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-12">
                @include('homeTrails.message')
                <form action="{{route('storeborrowbook')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label> Taking Date</label>
                                <input class="form-control" type="date" placeholder="Taking Date" name="bookdate"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Return Date</label>
                                <input class="form-control" type="date" placeholder="Return Date" name="returndate"/>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="form-group form-submit">
                                <button class="btn btn-dark-gray" type="submit" name="id" value="{{$data->id}}"/>
                                Apply
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
    <!-- Start: Category Filter -->

@endsection



