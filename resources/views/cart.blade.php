@extends('layouts.main')

@section('home')
<div class="produk-detail d-flex align-items-center justify-content-center">
    <div class="box-produk ">
        {{-- @foreach ($ as )

        @endforeach --}}
        {{-- @foreach ($ as )

        @endforeach --}}
        <div class="atas d-flex">
            <div class="no text-light d-flex justify-content-center align-items-center">
                <h1>No</h1>
            </div>
            <div class="nama text-light d-flex align-items-center">
                <h1>Name</h1>
            </div>
            <div class="delete text-light d-flex justify-content-center align-items-center">
                <h1>Delete</h1>
            </div>
        </div>
        @foreach ($data as $item)
        <div class="bawah d-flex">
            <div class="no text-light d-flex justify-content-center align-items-center">
                <h4>{{$loop->iteration}}</h4>
            </div>
            <div class="nama text-light d-flex align-items-center">
                <h1>{{$data[0]->building[0]->name}}</h1>
            </div>
            <div class="delete text-light d-flex justify-content-center align-items-center">
                <a class="btn btn-primary" href="/deleteItem/{{$data[0]->id}}"role="button">Delete</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
{{-- <h1>Delete</h1> --}}




@endsection
