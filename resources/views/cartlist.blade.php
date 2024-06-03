@extends('master')
@section('content')
<div class='custom-product'>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="trending-block">
                    <h3>Cart List</h3>
                    <div class="row">
                        @foreach ($products as $index => $item)
                            <div class="col-md-4 mb-3">
                                <div class="search-item">
                                    <a href="{{ url('detail/'.$item->id) }}">
                                        <div class="trending-img-container">
                                            <!-- Remove unwanted characters from the image path -->
                                            @php
                                                $imagePath = str_replace(['["', '"]'], '', $item->gallery);
                                            @endphp
                                            <img class="trending-img img-fluid" src="{{ asset($imagePath) }}" alt="{{ $item->name }}">
                                        </div>
                                        <div class="mt-2">
                                            <h4>{{ $item->name }}</h4>
                                            <p>{{ $item->description }}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
