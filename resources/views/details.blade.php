@extends('layouts.main')

@section('home')
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<main>
    <section class="container home">
        <div class="produk-detail">
            <div class="produk-detail-kiri">
                <img src="{{Storage::url($data->image)}}" alt="">
            </div>
            <div class="produk-detail-kanan text-light ml-2">
                <h1>{{$data->name}}</h1>
                <h3>Description</h3>
                <h5>{{$data->description}}</h5>
                <h3>Location</h3>
                <h5>{{$data->location}}</h5>
                <h3>Price</h3>
                <h5>Rp.{{$data->price}}</h5>
                <form action="/addToListing" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <button class="btn btn-primary mt-3" type="submit" role="button">Add to Cart</button>
                </form>
            </div>
        </div>




    </section>
</main>
@endsection
