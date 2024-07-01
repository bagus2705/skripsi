@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Script List</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive col-lg-8">
        <a href="/dashboard/scripts/create" class="btn btn-primary mb-3">Create new Script</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($scripts as $script)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $script->title }}</td>
                        <td>{{ $script->kategori->name }}</td>
                        <td><a href="/dashboard/scripts/{{ $script->slug }}" class="badge bg-info"> Show</a></td>
                        <td><a href="/dashboard/scripts/{{ $script->slug }}/edit" class="badge bg-warning"> Edit</a></td>
                        <td>
                            <form action="/dashboard/scripts/{{ $script->slug }}" method="post"class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0 "onclick="return confirm('Are You Sure?')"> Delete</a>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
