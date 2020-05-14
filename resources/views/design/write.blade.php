@extends('index')
@section('banner')
    <header class="masthead" style="background-image: url('{{asset("fontend/img/about-bg.jpg")}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>You Can Write Here</h1>
                        <span class="subheading">This is enough .</span>
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
                <div class="col-lg-8 col-md-10 mx-auto">
                    <p>Want to get in touch? Fill out the form below to send me  possible!</p>
                    <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me. -->
                    <a href="{{route('addcat')}}" class="btn btn-info">Add Category</a>
                    <a href="{{route('allcat')}}" class="btn btn-secondary">All Category</a>
                    <a href="{{route('allpostt')}}" class="btn btn-info">All Post</a>
                    <form action="{{route('storing')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Post Title </label>
                                <input type="text" class="form-control" placeholder="Post Title" name="tile">

                            </div>
                        </div>
                        <div class="control-group">

                            <div class="form-group floating-label-form-group controls">
                                <label>Post Title </label>
                                <select class="form-control" name="categoryId">
                                    <option>--Category--</option>
                                    @foreach($category as $row)
                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Post Image</label>
                                <input type="file" class="form-control" placeholder="Post Image" name="image">

                            </div>
                        </div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Post Details</label>
                                <textarea rows="5" class="form-control" placeholder="Post Details" name="details"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <br>
                        <div id="success"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection

