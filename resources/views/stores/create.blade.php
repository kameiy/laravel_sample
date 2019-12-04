@php
    $title = __('Create Store');
@endphp
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <form action="{{ url('stores') }}" method="post">
        @csrf {{-- CSRF保護 --}}
        @method('POST') {{-- 疑似フォームメソッド --}}
        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control" name="name" required autofocus>
        </div>
        <div class="form-group">
            <label for="info">{{ __('Store Info') }}</label>
            <input id="info" type="text" class="form-control" name="info" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </form>
</div>
@endsection