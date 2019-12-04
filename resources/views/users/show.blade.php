@php
    $title = __('User') . ': ' . $user->name;
@endphp
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>

    {{-- 編集・削除ボタン --}}
    <div>
        @component('components.btn-fav')
            @slot('model', 'user')
            @slot('id', $user->id)
        @endcomponent
    </div>

    <dl class="row">
        <dt class="col-md-2">{{ __('Id') }}</dt>
        <dd class="col-md-10">{{ $user->id }}</dd>
        <dt class="col-md-2">{{ __('Name') }}</dt>
        <dd class="col-md-10">{{ $user->name }}</dd>
    </dl>

    {{-- Trial --}}
    <h1>Trials</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Content') }}</th>
                    <th>{{ __('Url') }}</th>
                    <th>{{ __('User') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trials as $trial)
                    <tr>
                        <td>{{ $trial->id }}</td>
                        <td><a href="{{ url('trials/'.$trial->id) }}">{{ $trial->content }}</a></td>
                        <td>{{ $trial->url }}</td>
                        <td>{{ $trial->user->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection