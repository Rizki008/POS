@extends('layouts.app')
@section('content_title', 'Data Kategori')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div> --}}
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger d-flex flex-column">
                                    @foreach ($errors->all() as $error)
                                        <small class="text-white mb-2">{{ $error }}</small>
                                    @endforeach
                                </div>
                            @endif
                            <div class="d-flex justify-content-end mb-2">
                                <x-kategori.form-kategori />
                            </div>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Slug</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kategori as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->nama_kategori }}</td>
                                            <td>{{ $item->slug }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <x-kategori.form-kategori :id="$item->id" />
                                                    <a href="{{ route('master-data.kategori.destroy', $item->id) }}"
                                                        data-confirm-delete="true" class="btn btn-danger mx-1">
                                                        <i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
