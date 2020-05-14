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
                            <th>Category</th>
                            <th>Title</th>
                            <th>Pragraph</th>
                            <th>image</th>
                            <th>view</th>
                            <th>Action</th>
                        </tr>
                        @foreach($jerin as $row)
                            <tr>
                                <td>{{$row->name}}</td>
                                <td>{{$row->title}}</td>
                                <td>{{$row->details}}</td>
                                <td><img src="{{ URL::asset('fontend/images/' . $row->image) }}" style="width: 70px;height: 50px;" /></td>

                                <td>
                                    <a href="{{URL::to('view/post/'.$row->id)}}" class="btn btn-success btn-sm" role="button">details </a>
                                </td>
                                <td>
                                    <a href="{{URL::to('edit/post/'.$row->id)}}" class="btn btn-info btn-sm" role="button">Edit</a>
                                    <a href="{{URL::to('delete/post/'.$row->id)}}" class="btn btn-danger btn-sm" role="button">Delete</a>
                                </td>
                            </tr>

                        @endforeach

                    </table>
                    {{ $jerin->links() }}
                </div>
            </div>
        </div>
@endsection

