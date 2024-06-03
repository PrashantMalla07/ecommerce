@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{ asset($product->gallery[0]) }}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go back</a>
            <h2>{{ $product->name }}</h2>
            <h3>Price: ${{ $product->price }}</h3>
            <h3>Category: {{ $product->category }}</h3>
            <h4>Description: {{ $product->description }}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                @csrf
                <button type="submit" class="btn btn-success">Add to cart</button>
            </form>
           
            <!-- Wishlist button -->
            <form action="/add_to_wishlist" method="POST" style="display:inline;">
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                @csrf
                <button type="submit" class="btn btn-link p-0"><i class="fas fa-heart fa-2x text-danger"></i></button>
            </form>
            <br><br>
            <button class="btn btn-primary">Buy Now</button>
            <br><br>
        </div>
    </div>
</div>
@endsection
