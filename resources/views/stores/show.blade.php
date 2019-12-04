@php
    $title = __('store') . ': ' . $store->name;
@endphp
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>

    {{-- 編集・削除ボタン --}}
    <div>
        <a href="{{ url('stores/'.$store->id.'/edit') }}" class="btn btn-primary">
            {{ __('Edit') }}
        </a>
        @component('components.btn-del')
            @slot('table', 'stores')
            @slot('id', $store->id)
        @endcomponent
        @component('components.btn-fav')
            @slot('model', 'store')
            @slot('id', $store->id)
        @endcomponent
    </div>

    <dl class="row">
        <dt class="col-md-2">{{ __('ID') }}</dt>
        <dd class="col-md-10">{{ $store->id }}</dd>
        <dt class="col-md-2">{{ __('Name') }}</dt>
        <dd class="col-md-10">{{ $store->name }}</dd>
        <dt class="col-md-2">{{ __('Store Info') }}</dt>
        <dd class="col-md-10">{{ $store->info }}</dd>
    </dl>

    {{-- 課題一覧 --}}
    <a href="{{ url('stores/'.$store->id.'/projects/create') }}" class="btn btn-primary">
        {{ __('New Project') }}
    </a>
    <div class="projects">
        @foreach ($projects as $project)
            <div id="{{ 'project-' . $project->id }}" class="project">
                <div class="project-level">
                    <p>{{ $project->level }}</p>
                </div>
                <div class="project-name">
                    <a href="{{ url('projects/'.$project->id) }}">{{ $project->name }}</a>
                </div>
                <div class="project-info">
                    <p>{{ $project->info }}</p>
                </div>
            </div>
        @endforeach
    </div>

    {{-- レビュー一覧 --}}

    <div class="reviews">
        <details>
            <summary>Reviews</summary>
            <a href="{{ url('stores/'.$store->id.'/reviews/create') }}" class="btn btn-primary">
                {{ __('New Review') }}
            </a>
            @foreach ($store->reviews as $review)
                <div id="{{ 'review-' . $review->id }}" class="review">
                    <div class="review-content">
                        {{ $review->content }}
                    </div>
                    <div class="review-user">
                        {{ $review->user->name }}
                    </div>
                </div>
            @endforeach
        </details>
    </div>
</div>
@endsection
