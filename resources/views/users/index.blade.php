@extends('layouts.app')
@section('content_title', 'Data Produk')
@section('content')

    <div class="card">
        <div class="card-title">
            <h4 class="card-header">Data Users</h4>
            {{-- <div>
                <x-user.form-user>
            </div> --}}
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-end mb-2 ">
                <x-user.form-user />
            </div>
            <x-alert :errors="$errors" />
            <table class="table table-sm" id="example2">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Nama Users</th>=
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->name }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <x-user.form-user :id="$user->id" />
                                    <a href="{{ route('users.destroy', $user->id) }}" data-confirm-delete="true"
                                        class="btn btn-danger mx-1">
                                        <i class="fas fa-trash"></i></a>
                                    <x-user.reset-password :id="$user->id" />
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
