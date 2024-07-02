@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Your Profile
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ auth()->user()->name }}</h5>
                    <p class="card-text">Email: {{ auth()->user()->email }}</p>
                </div>
            </div>
        </div>
        @can('admin')
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Actions
                </div>
                <div class="card-body">
                    <h5 class="card-title">Manage Scripts</h5>
                    <p class="card-text">View and manage all scripts here.</p>
                    <a href="/dashboard/scripts" class="btn btn-primary">View Scripts</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Actions
                </div>
                <div class="card-body">
                    <h5 class="card-title">Manage Categories</h5>
                    <p class="card-text">View and manage all categories here.</p>
                    <a href="/dashboard/categories" class="btn btn-primary">View Categories</a>
                </div>
            </div>
        </div>
        @endcan
    </div>
@endsection
