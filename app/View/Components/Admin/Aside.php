<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Aside extends Component
{
    /**
     * Create a new component instance.
     */
    public $routes;
    public function __construct()
    {
        $this->routes =[
            [
                "label" => "Dashboard",
                "icon"=> "nav-icon fas fa-th",
                "route_name" => "dashboard",
                "route_active" => "dashboard",
                "is_dropdown"=> false
            ],
            [
                "label" => "Data Users",
                "icon" => "nav-icon fas fa-users",
                "route_name" => "users.index",
                "route_active" => "users.*",
                "is_dropdown" => false
            ],
            [
                "label" => "Master Data",
                "icon" => "nav-icon fas fa-tachometer-alt",
                "route_active" => "master-data.*",
                "is_dropdown" => true,
                "dropdown" => [
                    [
                        "label" => "Kategori",
                        "route_active" => "master-date.kategori.*",
                        "route_name" => "master-data.kategori.index",
                    ],
                    [
                        "label" => "Product",
                        "route_active" => "master-date.product.*",
                        "route_name" => "master-data.product.index",
                    ]
                ]
            ],
            [
                "label" => "Data barang masuk",
                "icon" => "nav-icon fas fa-truck-loading",
                "route_name" => "penerimaan-barang.index",
                "route_active" => "penerimaan-barang.*",
                "is_dropdown" => false
            ],
            [
                "label" => "Data barang keluar",
                "icon" => "nav-icon fas fa-store",
                "route_name" => "pengeluaran-barang.index",
                "route_active" => "pengeluaran-barang.*",
                "is_dropdown" => false
            ],
            [
                "label" => "Laporan",
                "icon" => "nav-icon fas fa-file-invoice",
                "route_active" => "laporan.*",
                "is_dropdown" => true,
                "dropdown" => [
                    [
                        "label" => "Laporan penerimman barang",
                        "route_active" => "laporan.penerimaan-barang.*",
                        "route_name" => "laporan.penerimaan-barang.laporan",
                    ],
                    [
                        "label" => "Laporan pengeluaran barang (Transaksi)",
                        "route_active" => "laporan.pengeluaran-barang.*",
                        "route_name" => "laporan.pengeluaran-barang.laporan",
                    ]
                ]
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.aside');
    }
}
