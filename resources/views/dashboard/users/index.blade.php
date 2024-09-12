@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Pengguna</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive col-lg-8">
        <form action="/dashboard/users" method="GET" class="col-lg-6 mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari email"
                    value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </form>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Peran</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            @if (auth()->user()->id !== $user->id)
                                <button class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#editRoleModal{{ $user->id }}">Ubah</button>
                            @else
                                <span class="badge bg-secondary">Tidak bisa mengubah peran sendiri </span>
                            @endif
                        </td>
                    </tr>
                    
                    @if (auth()->user()->id !== $user->id)
                        <div class="modal fade" id="editRoleModal{{ $user->id }}" tabindex="-1" aria-labelledby="editRoleModalLabel{{ $user->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editRoleModalLabel{{ $user->id }}">Ubah Peran untuk {{ $user->email }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="/dashboard/users/{{ $user->id }}" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="role" class="form-label">Peran</label>
                                                <select class="form-select" id="role" name="role" required>
                                                    <option value="pembaca" {{ $user->role == 'pembaca' ? 'selected' : '' }}>Pembaca</option>
                                                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                                    <option value="filologis" {{ $user->role == 'filologis' ? 'selected' : '' }}>Filologis</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Simpan </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-3">
            {{ $users->appends(request()->except('page'))->links() }}
        </div>
    </div>
@endsection
