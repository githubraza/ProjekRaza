@extends('layouts.home')
@section('container')
<main>

    <section class="listing py-2 text-center container text-light">
        <div class="row mt-5 py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1>Property Listing</h1>
            </div>
        </div>
    </section>

    <div class="album py-5 ">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($data as $item)

                <div class="col">
                    <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                            src="{{Storage::url($item->image)}}" role="img" aria-label="Placeholder: Thumbnail"
                            preserveAspectRatio="xMidYMid slice" focusable="false">

                        <div class="card-body">
                            <h1 style="font-size:18px;"class="card-text mb-3">{{$item->name}}</h1>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="/building/{{$item->id}}" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                                </div>
                                <small class="text-muted">Rp.{{$item->price}}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

</main>



@endsection
