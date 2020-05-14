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
                <div class="col-lg-8 col-md-10 mx-auto">
                    <p>Want to get in touch? Fill out the form below to send me  possible!</p>
                    <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->

                    <form action="{{route('story')}}" method="post">
                        @csrf
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Post Title </label>
                                <input type="text" class="form-control" placeholder="Category Name" id="cata" name="cname" >
                            </div>
                        </div>
{{--                        @if (session('alert'))--}}
{{--                            <div class="alert alert-success">--}}
{{--                                {{  }}--}}
{{--                            </div>--}}
{{--                        @endif--}}
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Post Title </label>
                                <input type="text" class="form-control" placeholder="Slug Name" id="slug" name="slug" >
                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
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


