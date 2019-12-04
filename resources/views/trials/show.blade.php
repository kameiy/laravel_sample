@php
    $title = __('Trial') . ': ' . $trial->project->name;
@endphp
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>

    {{-- 編集・削除ボタン --}}
    <div>
        @component('components.btn-del')
            @slot('table', 'trials')
            @slot('id', $trial->id)
        @endcomponent
        @component('components.btn-fav')
            @slot('model', 'trial')
            @slot('id', $trial->id)
        @endcomponent
    </div>

    <dl class="row">
        <dt class="col-md-2">{{ __('Level') }}</dt>
        <dd class="col-md-10">{{ $trial->project->level }}</dd>
        <dt class="col-md-2">{{ __('Name') }}</dt>
        <dd class="col-md-10">{{ $trial->project->name }}</dd>
        <dt class="col-md-2">{{ __('project Info') }}</dt>
        <dd class="col-md-10">{{ $trial->project->info }}</dd>
        <dt class="col-md-2">{{ __('trial Content') }}</dt>
        <dd class="col-md-10">{{ $trial->content }}</dd>
        <dt class="col-md-2">{{ __('user') }}</dt>
        <dd class="col-md-10">{{ $trial->user->name }}</dd>
    </dl>

    <div>
        <form action="{{ url('comments') }}" method="post">
            @csrf {{-- CSRF保護 --}}
            @method('POST') {{-- 疑似フォームメソッド --}}
            <div class="form-group">
                <input id="comment" type="text" class="form-control" name="comment" required autofocus>
            </div>
            <input type="hidden" name="trial_id"　value="{{ $trial->id }}">
            <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        </form>
    </div>
    {{-- Comment一覧 --}}
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Comment') }}</th>
                    <th>{{ __('User') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td>{{ $comment->comment }}</td>
                        <td>{{ $comment->user->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection