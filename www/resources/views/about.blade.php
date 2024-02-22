@php use App\Models\Perfomance;use Illuminate\Support\Facades\Storage; @endphp
@extends('main')
@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center"> {{-- logo+slogan --}}
        <img class="" alt="" src="{{Storage::get('pageContent/logo.svg')}}">
        <p>Девиз театра</p>
    </div>
    <div id="carousel" class="carousel slide mt-3" data-bs-ride="carousel"> {{-- slider --}}
        <div class="carousel-indicators">
            <button type="button" data-bs-target="carousel" data-bs-slide-to="0" aria-label="Slide 1" class="active"
                    aria-current="true"></button>
            <button type="button" data-bs-target="carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            @foreach($perfomances as $perfomance)
                <div class="carousel-item @if(Perfomance::latest()->get()) active @endif">
                    <img src="{{$perfomance->photo}}" class="d-block w-100" alt="">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
