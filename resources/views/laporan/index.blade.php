@extends('layouts.app')
@section('content_title', 'Laporan Barang Masuk')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Laporan Barang Masuk</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Bulan</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tahun</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
