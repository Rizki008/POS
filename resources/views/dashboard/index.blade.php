@extends('layouts.app')
@section('content_title', 'Dashboard')
@section('content')
    {{-- <div class="card">
    <div class="card-body">
        Selamat datang di aplikai lapas, <strong>{{ auth()->user()->name  }}</strong>
    </div>
</div> --}}
    <div class="row">
        <x-dashboard-card type="bg-info" icon="fas fa-users" label="Total User" value="{{ $totalUsers }}" />
        <x-dashboard-card type="bg-success" icon="fas fa-suitcase" label="Total Produk" value="{{ $totalProduk }}" />
        <x-dashboard-card type="bg-warning" icon="fas fa-shopping-bag" label="Total Order" value="{{ $totalOrder }}" />
        <x-dashboard-card type="bg-danger" icon="fas fa-dollar-sign" label="Total Pendapatan"
            value="{{ $totalPendapatan }}" />
    </div>
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Transaksi Trakhir</h4>
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Tanggal transaksi</th>
                                <th>Nomor Transaksi</th>
                                <th>Jumlah Item</th>
                                <th>Total harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($latestOrder as $item)
                                <tr>
                                    <td>{{ $item->tanggal_transaksi }}</td>
                                    <td>{{ $item->nomor_pengeluaran }}</td>
                                    <td>{{ $item->items->count() }} <small>Item</small></td>
                                    <td>Rp. {{ number_format($item->total_harga) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    Menampilkan 5 data transaksi terbaru
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Produk Terlaris</h4>
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Jumlah Terjual</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produkTerlaris as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->nama_produk }}</td>
                                    <td>{{ $item->total_terjual }} <small>Item</small></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    Menampilkan 5 data produk terlaris
                </div>
            </div>
        </div>
    </div>
@endsection
