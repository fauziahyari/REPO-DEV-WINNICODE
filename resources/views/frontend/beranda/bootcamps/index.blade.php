@extends('frontend.beranda.layouts.app')

@section('container')
<div class="container">
    <h1 class="text-center my-5">Daftar Bootcamp</h1>
    <div class="row">
        @foreach ($bootcamps as $bootcamp)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/bootcamps/' . $bootcamp->image) }}" class="card-img-top" alt="Bootcamp Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $bootcamp->name }}</h5>
                        <p class="card-text">
                            {{ Str::limit($bootcamp->description, 100) }}
                        </p>
                        <p class="card-text">
                            <strong>Price:</strong> ${{ number_format($bootcamp->price, 2) }}
                        </p>
                    </div>
                    <div class="card-footer bg-white">
                        <a href="{{ route('bootcamps.show', $bootcamp->id) }}" class="btn btn-primary w-100">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
