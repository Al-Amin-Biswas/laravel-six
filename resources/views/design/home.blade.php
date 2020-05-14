@extends('index')
@section('banner')
    <header class="masthead" style="background-image: url('fontend/img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Learn English Well</h1>
                        <span class="subheading">The Blog Will Help you To learn english Properly.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mx-auto">
                @foreach($jerin as $brinta)
                <div class="post-preview">
                    <img src="{{ URL::asset('fontend/images/' . $brinta->image) }}" style="width: 500px;height: 350px;" />
                    <a href="#">
                        <h3 class="post-title">
                            {{$brinta->title}}
                        </h3>
                        <p>{{$brinta->details}}</p>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        </p>
                </div>
                @endforeach

                <hr>
                <!-- Pager -->
                <div class="clearfix">
                    {{$jerin->links()}}
                </div>
            </div>

        </div>
    </div>
@endsection
