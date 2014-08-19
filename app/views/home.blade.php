@extends('master')

@section('content')

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="./img/bg_01.jpg" alt="" />
        </div>
        <div class="item">
            <img src="./img/bg_02.jpg" alt="" />
        </div>
        <div class="item">
            <img src="./img/sample1.jpg" alt="" />
        </div>

        <div class="item">
            <img src="./img/sample2.jpg" alt="" />
        </div>

        <div class="item">
            <img src="./img/sample3.jpg" alt="" />
        </div>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>


    <div class="search">
        <div class="container">
                <div class="col-md-10 col-md-offset-1">

                            <div class="put-the-dang-thing-in-the-middle">
                                <h1 class="how-do-you text-center">How do you feel today? </h1>

                                {{ Form::open(['url' => 'mood']) }}
                                    <div class="form-group">
                                        {{ Form::text('type', null, ['class' => 'form-control', 'id' => 'shorten-input', 'placeholder' => '(i.e. "happy, sad, melancholic")']) }}
                                        {{ $errors->first('url', '<div class="error">:message</div>') }}

                                    </div>
                                {{ Form::close() }}

                                <div class="text-center">
                                    <p>{{ HTML::link(Request::url().'/mood',"See most popular mood's", ['class' => 'link-mood']) }}</p>

                                </div>
                </div>



        </div>

    </div>


@stop