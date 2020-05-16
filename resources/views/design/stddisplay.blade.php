@extends('index')
@section('banner')
    <header class="masthead" style="background-image: url('{{asset("fontend/img/about-bg.jpg")}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>You Can Write Here</h1>
                        <span class="subheading">This is .</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

@endsection

@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mx-auto">
                    <a href="{{route('write')}}" class="btn btn-info">Write Post</a>
                    <p>Want to get in touch? Fill out the form below to send me  possible!</p>
                    <br>
                    <table class="table table-responsive">
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>view</th>
                            <th>Action</th>
                        </tr>
                        @foreach($data as $row)
                            <tr>
                                <td>{{$row->name}}</td>
                                <td>{{$row->address}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->phone}}</td>

                                <td>
                                    <a href="{{URL::to('view/student/'.$row->id)}}" class="btn btn-success btn-sm" role="button">details </a>
                                </td>
                                <td>
                                    <a href="{{URL::to('edit/student/'.$row->id)}}" class="btn btn-info btn-sm" role="button">Edit</a>
                                    <a href="{{URL::to('delete/student/'.$row->id)}}" class="btn btn-danger btn-sm" role="button">del</a>
                                </td>
                            </tr>

                        @endforeach

                    </table>

                </div>
            </div>
        </div>
@endsection

