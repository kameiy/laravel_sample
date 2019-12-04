@php
    $title = __('Edit').': '.$store->name;
@endphp
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <form action="{{ url('stores/'.$store->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ $store->name }}" required autofocus>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </form>
</div>
@endsection