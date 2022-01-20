@extends('layouts.main')
@section('home')


<section class="py-1 text-center container home">
    <div class="row py-lg-5">
        <div class="text-light col-lg-6 col-md-8 mx-auto">
            <h1>Most Popular Building</h1>
        </div>
    </div>

    <div class="container align-items-center">
        <div class="row row-cols-3 align-items-center">
            @foreach ($data as $item)

            <div class="col mb-4 d-flex justify-content-md-center">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{Storage::url($item->image)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                        <a href="/building/{{$item->id}}" class="btn btn-primary">See Details</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        {{-- <div class="mt-5 d-flex justify-content-center">
            {!! $data->links() !!}
        </div> --}}
    </div>

</section>
@endsection
