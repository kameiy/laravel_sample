@php
    $title = __('stores');
@endphp
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <form action="{{ url('stores') }}" method="get">
        @csrf {{-- CSRF保護 --}}
        @method('GET') {{-- 疑似フォームメソッド --}}
        <div class="form-group">
            <input id="q" type="text" class="form-control" name="q" required autofocus>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">{{ __('Search') }}</button>
    </form>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Info') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stores as $store)
                    <tr>
                        <td>{{ $store->id }}</td>
                        <td><a href="{{ url('stores/'.$store->id) }}">{{ $store->name }}</a></td>
                        <td>{{ $store->info }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection