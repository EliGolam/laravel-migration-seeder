@extends('layouts.main-layout')


{{-- HEADER --}}
@section('header')

    <p>HEADER GOES HERE</p>

@endsection


{{-- MAIN --}}
@section('main')

    <p>MAIN CONTENT GOES HERE</p>
    @foreach ($trainsToday as $train)
        @dump($train)
    @endforeach

@endsection


{{-- FOOTER --}}
@section('footer')

    <p>FOOTER GOES HERE</p>

@endsection

