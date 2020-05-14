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
                <div class="col-lg-10 col-md-12 mx-auto">
                    <p>Want to get in touch? Fill out the form below to send me  possible!</p>
                    <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                    <a href="{{route('addcat')}}" class="btn btn-info">Add Category</a>
                    <a href="{{route('allcat')}}" class="btn btn-secondary">All Category</a>
                    <table class="table table-responsive">
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Create At</th>
                            <th>view</th>
                            <th>Action</th>
                        </tr>
                        @foreach($category as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->status}}</td>
                            <td>{{$row->created_at}}</td>

                            <td>
                                <a href="{{URL::to('view/category/'.$row->id)}}" class="btn btn-success btn-sm" role="button">details </a>
                            </td>
                            <td>
                                <a href="{{URL::to('edit/category/'.$row->id)}}" class="btn btn-info btn-sm" role="button">Edit</a>
                                <a href="{{URL::to('delete/category/'.$row->id)}}" class="btn btn-danger btn-sm" role="button">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
@endsection

