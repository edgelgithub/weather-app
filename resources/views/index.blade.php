@extends('layouts.master')
@section('title', 'Welcome to Japan')
@section('content')
   <search-area></search-area>
    @include('layouts.places')
@endsection