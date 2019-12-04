@php
    $title = __('Create Review');
@endphp
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <form action="{{ url('storeReviews') }}" method="post">
        @csrf {{-- CSRF保護 --}}
        @method('POST') {{-- 疑似フォームメソッド --}}
        <div class="form-group">
            <label for="content">{{ __('Content') }}</label>
            <input id="content" type="text" class="form-control" name="content" required autofocus>
        </div>
        <input type="hidden" name="user_id"　value="{{ $user_id }}">
        <input type="hidden" name="store_id"　value="{{ $store_id }}">
        <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </form>
</div>
@endsection