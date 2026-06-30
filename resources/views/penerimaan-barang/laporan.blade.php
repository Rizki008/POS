@extends('layouts.app')
@section('content_title', 'Laporan Penerimaan Barang')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Laporan penerimaan barang</h4>
        </div>
        <div class="card-body">
            <table class="table table-sm" id="example2">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nomor Penerimaan</td>
                        <td>Nomor Faktur</td>
                        <td>Distributor</td>
                        <td>Tanggal Masuk</td>
                        <td>Petugas Penerima</td>
                        <td>Opsi</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penerimaanBarang as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nomor_penerimaan }}</td>
                            <td>{{ $item->nomor_faktur }}</td>
                            <td>{{ $item->distributor }}</td>
                            <td>{{ $item->tanggal_penerimaan }}</td>
                            <td>{{ $item->petugas_penerima }}</td>
                            <td>
                                <a href="{{ route('laporan.penerimaan-barang.detail-laporan', $item->nomor_penerimaan) }}"
                                    class="text-primary">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
