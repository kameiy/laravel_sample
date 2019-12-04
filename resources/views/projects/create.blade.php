@php
    $title = __('Create Project');
@endphp
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <form action="{{ url('projects') }}" method="post">
        @csrf {{-- CSRF保護 --}}
        @method('POST') {{-- 疑似フォームメソッド --}}
        <div class="form-group">
            <label for="level">{{ __('Level') }}</label>
            <select id="level" type="text" class="form-control" name="level" required autofocus>
            <option value="10級">10級</option>
            <option value="9級">9級</option>
            <option value="8級">8級</option>
            <option value="7級">7級</option>
            <option value="6級">6級</option>
            <option value="5級">5級</option>
            <option value="4級">4級</option>
            <option value="3級">3級</option>
            <option value="2級">2級</option>
            <option value="1級以上">1級以上</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control" name="name" required autofocus>
        </div>
        <div class="form-group">
            <label for="info">{{ __('Info') }}</label>
            <input id="info" type="text" class="form-control" name="info" required autofocus>
        </div>
        <input type="hidden" name="user_id"　value="{{ $user_id }}">
        <input type="hidden" name="store_id"　value="{{ $store_id }}">
        <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </form>
</div>
@endsection