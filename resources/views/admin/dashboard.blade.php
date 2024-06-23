@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
            <div class="inner">
                <h3>{{ $kategori }}</h3>

                <p>Total Kategori</p>
            </div>
            <div class="icon">
                <i class="fa fa-cube"></i>
            </div>
            <a href="{{ route('kategori.index') }}" class="small-box-footer">Lebih Banyak <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{ $produk }}</h3>

                <p>Total Produk</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
            <a href="{{ route('produk.index') }}" class="small-box-footer">Lebih Banyak <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{ $member }}</h3>

                <p>Total Member</p>
            </div>
            <div class="icon">
                <i class="fa fa-id-card"></i>
            </div>
            <a href="{{ route('member.index') }}" class="small-box-footer">Lebih Banyak <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{ $supplier }}</h3>

                <p>Total Supplier</p>
            </div>
            <div class="icon">
                <i class="fa fa-truck"></i>
            </div>
            <a href="{{ route('supplier.index') }}" class="small-box-footer">Lebih Banyak <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Grafik Keuangan {{ tanggal_indonesia($tanggal_awal, false) }} s/d {{ tanggal_indonesia($tanggal_akhir, false) }}</h5>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-wrench"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated link</a>
                        </div>
                    </div>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <p class="text-center">
                            <strong>Sales: {{ tanggal_indonesia($tanggal_awal, false) }} - {{ tanggal_indonesia($tanggal_akhir, false) }}</strong>
                        </p>
                        <div class="chart">
                            <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="text-center">
                            <strong>Bersusah-susah dahulu!</strong>
                        </p>
                        <div class="col-md-12">
                            <div class="card bg-dark text-white">
                                <h3 class="card-title text-center">
                                    <div class="d-flex flex-wrap justify-content-center mt-2">
                                        <a><span class="badge hours"></span></a> :
                                        <a><span class="badge min"></span></a> :
                                        <a><span class="badge sec"></span></a>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-sm-3 col-6">
                        <div class="description-block border-right">
                            <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                            <h5 class="description-header">RP. {{ format_uang($total_penjualan_bulan_ini, 2) }}</h5>
                            <span class="description-text">TOTAL PENDAPATAN</span>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="description-block border-right">
                            <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                            <h5 class="description-header">RP. {{ format_uang($total_keuangan, 2) }}</h5>
                            <span class="description-text">TOTAL PEMBELIAN</span>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="description-block border-right">
                            <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                            <h5 class="description-header">RP. {{ format_uang($total_keuntungan, 2) }}</h5>
                            <span class="description-text">TOTAL KEUNTUNGAN</span>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="description-block">
                            <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                            <h5 class="description-header">1200</h5>
                            <span class="description-text">GOAL COMPLETIONS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    $(function () {
        var ctx = document.getElementById('salesChart').getContext('2d');
        var salesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($data_tanggal),
                datasets: [{
                    label: 'Pendapatan',
                    data: @json($data_pendapatan),
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    fill: false
                }]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                scales: {
                    x: {
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    });
    $(document).ready(function() {
setInterval( function() {
var hours = new Date().getHours();
$(".hours").html(( hours < 10 ? "0" : "" ) + hours);
}, 1000);
setInterval( function() {
var minutes = new Date().getMinutes();
$(".min").html(( minutes < 10 ? "0" : "" ) + minutes);
},1000);
setInterval( function() {
var seconds = new Date().getSeconds();
$(".sec").html(( seconds < 10 ? "0" : "" ) + seconds);
},1000);
});
</script>
@endpush
