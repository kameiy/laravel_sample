@php
    $title = __('project') . ': ' . $project->name;
@endphp
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>

    {{-- 編集・削除ボタン --}}
    <div>
        @component('components.btn-del')
            @slot('table', 'projects')
            @slot('id', $project->id)
        @endcomponent
        @component('components.btn-fav')
            @slot('model', 'project')
            @slot('id', $project->id)
        @endcomponent
    </div>

    <dl class="row">
        <dt class="col-md-2">{{ __('ID') }}</dt>
        <dd class="col-md-10">{{ $project->id }}</dd>
        <dt class="col-md-2">{{ __('Level') }}</dt>
        <dd class="col-md-10">{{ $project->level }}</dd>
        <dt class="col-md-2">{{ __('Name') }}</dt>
        <dd class="col-md-10">{{ $project->name }}</dd>
        <dt class="col-md-2">{{ __('Project Info') }}</dt>
        <dd class="col-md-10">{{ $project->info }}</dd>
    </dl>

    {{-- Trial一覧 --}}
    <a href="{{ url('projects/'.$project->id.'/trials/create') }}" class="btn btn-primary">
        {{ __('New Trial') }}
    </a>
    <div class="table-responsive">
        @foreach ($trials as $trial)
            @component('components.trial')
                @slot('trial', $trial)
            @endcomponent
        @endforeach
    </div>
</div>
@endsection
