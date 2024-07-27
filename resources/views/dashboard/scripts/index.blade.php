@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List Naskah</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive col-lg-8">
        @can('admin')
        <a href="/dashboard/scripts/create" class="btn btn-primary mb-3">Create new Naskah</a>
        @endcan
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($scripts as $script)
                    <tr>
                        <td>{{ $script->id }}</td>
                        <td>{{ $script->title }}</td>
                        <td>{{ $script->category->name }}</td>
                        <td><a href="/dashboard/scripts/{{ $script->slug }}" class="badge bg-info"> Show</a></td>
                        <td><a href="/dashboard/scripts/{{ $script->slug }}/edit" class="badge bg-warning"> Edit</a></td>
                         @can('admin')
                        <td>
                           
                            <form action="/dashboard/scripts/{{ $script->slug }}" method="post"class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0 "onclick="return confirm('Are You Sure?')"> Delete</a>
                                </button>
                            </form>
                        </td>
                        @endcan
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
