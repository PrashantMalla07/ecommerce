@extends('master')
@section('content')
<div class=' custom-product'>
    
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach ($products as $index => $item)
                    <li data-target="#myCarousel" data-slide-to="{{$index}}" class="{{$index == 0 ? 'active' : ''}}"></li>
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach ($products as $index => $item)
                    <div class="item {{$index == 0 ? 'active' : ''}}">
                    <a href="{{ url('detail/'.$item['id']) }}">
                        <img class="slider-img" src="{{ asset($item['gallery'][0]) }}" alt="{{$item['name']}}">
                        <div class="carousel carousel-caption slider-text">
                            <h3>{{$item['name']}}</h3>
                            <p>{{$item['description']}}</p>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="trending-block">
            <h1>Trending Product</h1>
            <div class="">
                @foreach ($products as $index => $item)
                    <div class="trending-item">
                    <a href="{{ url('detail/'.$item['id']) }}">
                        <img class="trending-img" src="{{ asset($item['gallery'][0]) }}" alt="">
                        <div class="">
                            <h3>{{$item['name']}}</h3>
                           
                        </div>
                    </a>
                    </div>
                @endforeach
            </div>
        </div>
    
</div>
@endsection
