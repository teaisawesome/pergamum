@extends('layouts.productindex')


@section('products')
    <div class="row">
        <div class="col-md-6"><h1>Termékek</h1></div>
        <div class="col-md-6 text-right"><a href="products/create" class="btn btn-info">+ Új termék hozzáadása</a></div>
    </div>
    <hr>
    @forelse ($products as $product)
    <div class="row mb-5">
        <div class="col-md-4 text-right">
            <img src="{{asset('/storage/ProductImages/5404631_3.jpg')}}" alt="kep" width="auto" height="200">
        </div>
        <div  class="col-md-8">
            <h3 class="font-weight-bold">{{ $product->title }}</h3>
            <h4 class="font-italic">{{ $product->author }}</h4>
            <p class="text-secondary">{{ $product->description }} ...</p>
            <a class="btn btn-info" href="products/{{ $product->id }}/edit">Szerkesztés</a>
            <a class="btn btn-warning" href="/{{ $product->id }}/edit">Készlet</a>
        </div>
    </div>
    @empty
        <h1>Még nincs terméked!</h1>
    @endforelse
@endsection