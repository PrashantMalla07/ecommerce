@extends('master')
@section('content')
<div class='custom-product'>
    <div class="row">
        <div class="col-sm-8">
            <div class="trending-block">
                <h3>Products</h3>
                <div class="row">
                    @foreach ($products as $index => $item)
                        <div class="col-md-4 mb-3">
                            <div class="search-item">
                                <a href="{{ url('detail/'.$item->id) }}" class="d-block">
                                    <div class="trending-img-container">
                                        <img class="trending-img img-fluid" src="{{ asset($item->gallery[0]) }}" alt="">
                                    </div>
                                    <div class="mt-2">
                                        <h4>{{$item->name}}</h4>
                                        <p>{{$item->description}}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <h3>Filter</h3>
            <!-- Add your filter options here -->
        </div>
    </div>
</div>
@endsection
