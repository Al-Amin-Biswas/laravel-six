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
                    <p>Want to get !</p>
                    <ul>
                        <li>Student Name: {{$love->name}}</li>
                        <li>Student Address: {{$love->address}}</li>
                        <li>Student Email: {{$love->email}}</li>
                        <li>Student Phone: {{$love->phone}}</li>


                    </ul>

                </div>
            </div>
        </div>
@endsection


