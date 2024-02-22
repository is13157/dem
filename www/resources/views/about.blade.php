@php use Illuminate\Support\Facades\Storage; @endphp
@extends('main')
@section('content')
    <div class=""> {{-- logo+slogan --}}
        <img class="" alt="" src="{{Storage::get('pageContent/logo.svg')}}">
        <p>Девиз театра</p>
    </div>
    <div class="slider"> {{-- slider --}}

    </div>
@endsection
