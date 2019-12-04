@extends('layouts.app')

@section('content')
<div class="container">
    <dl class="row">
        <dt class="col-md-2">{{ __('ID') }}</dt>
        <dd class="col-md-10">{{ $user->id }}</dd>
        <dt class="col-md-2">{{ __('Name') }}</dt>
        <dd class="col-md-10">{{ $user->name }}</dd>
    </dl>
    <h1>Fav Stores</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Name') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($like_stores as $store)
                    <tr>
                        <td>{{ $store->id }}</td>
                        <td><a href="{{ url('stores/'.$store->id) }}">{{ $store->name }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <h1>Fav Projects</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Name') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($like_projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td><a href="{{ url('projects/'.$project->id) }}">{{ $project->name }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <h1>Fav Trials</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Name') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($like_trials as $trial)
                    <tr>
                        <td>{{ $trial->id }}</td>
                        <td><a href="{{ url('trials/'.$trial->id) }}">{{ $trial->id }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <h1>Fav Users</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Name') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($likes_users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td><a href="{{ url('users/'.$user->id) }}">{{ $user->name }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <h1>Faved Users</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Name') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($liked_users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td><a href="{{ url('users/'.$user->id) }}">{{ $user->name }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
