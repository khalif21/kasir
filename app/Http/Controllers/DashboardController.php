<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Member;
use App\Models\Pembelian;
use App\Models\Pengeluaran;
use App\Models\Penjualan;
use App\Models\Produk;
use App\Models\Supplier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $kategori = Kategori::count();
        $produk = Produk::count();
        $supplier = Supplier::count();
        $member = Member::count();

        $tanggal_awal = date('Y-m-01');
        $tanggal_akhir = date('Y-m-d');

        $data_tanggal = array();
        $data_pendapatan = array();

        $total_penjualan_bulan_ini = 0;
        $total_pembelian_bulan_ini = 0;
        $total_pengeluaran_bulan_ini = 0;

        while (strtotime($tanggal_awal) <= strtotime($tanggal_akhir)) {
            $data_tanggal[] = (int) substr($tanggal_awal, 8, 2);

            $total_penjualan = Penjualan::where('created_at', 'LIKE', "%$tanggal_awal%")->sum('bayar');
            $total_pembelian = Pembelian::where('created_at', 'LIKE', "%$tanggal_awal%")->sum('bayar');
            $total_pengeluaran = Pengeluaran::where('created_at', 'LIKE', "%$tanggal_awal%")->sum('nominal');
            $total_penjualan_bulan_lalu = Penjualan::where('created_at', 'LIKE', '%' . date('Y-m', strtotime('-1 month')) . '%')->sum('bayar');
            $total_pengeluaran_bulan_lalu = Pengeluaran::where('created_at', 'LIKE', '%' . date('Y-m', strtotime('-1 month')) . '%')->sum('nominal');

            $pendapatan = $total_penjualan - $total_pembelian - $total_pengeluaran;
            $data_pendapatan[] = $pendapatan;

            $total_penjualan_bulan_ini += $total_penjualan;
            $total_pembelian_bulan_ini += $total_pembelian;
            $total_pengeluaran_bulan_ini += $total_pengeluaran;
            $total_keuangan = $total_penjualan_bulan_ini - $total_pembelian_bulan_ini - $total_pengeluaran_bulan_ini;

            $tanggal_awal = date('Y-m-d', strtotime("+1 day", strtotime($tanggal_awal)));

            $total_penjualan_bulan_ini_change = $total_penjualan_bulan_lalu != 0 ? (($total_penjualan_bulan_ini - $total_penjualan_bulan_lalu) / $total_penjualan_bulan_lalu) * 100 : 0;
            $total_keuangan_change = $total_pengeluaran_bulan_lalu != 0 ? (($total_keuangan - $total_pengeluaran_bulan_lalu) / $total_pengeluaran_bulan_lalu) * 100 : 0;
        }

        $total_keuangan = $total_pembelian_bulan_ini;
        $total_keuntungan = $total_penjualan_bulan_ini;

        $tanggal_awal = date('Y-m-01');
        if (auth()->user()->level == 1) {
            return view('admin.dashboard', compact(
                'kategori', 'produk', 'supplier', 'member',
                'tanggal_awal', 'tanggal_akhir', 'data_tanggal', 'data_pendapatan',
                'total_keuangan', 'total_keuntungan', 'total_penjualan_bulan_ini'
            ));
        } else {
            return view('kasir.dashboard');
        }
    }
}
