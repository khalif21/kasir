<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ url(auth()->user()->foto) }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="pull-left info">
        <a href="{{ route('user.profil') }}" class="d-block"></a>
        <p>{{ auth()->user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

             <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dasboard</p>
                </a>
              </li>
              @if(auth()->user()->level == 1)
             <li class="nav-item menu-close">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-th"></i>
                  <p>
                    Master
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('kategori.index') }}" class="nav-link active">
                <i class="fa fa-cube" aria-hidden="true"></i>
                <p>Kategori</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('produk.index') }}" class="nav-link active">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                  <p>Produk</p>
                </a>
                <li class="nav-item">
                    <a href="{{ route('member.index') }}" class="nav-link active">
                        <i class="fa fa-users" aria-hidden="true"></i>
                      <p>Pegawai</p>
                    </a>
                    <li class="nav-item">
                        <a href="{{ route('supplier.index') }}" class="nav-link active">
                            <i class="fa fa-truck" aria-hidden="true"></i>
                          <p>Supplier</p>
                        </a>
                </ul>

        <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
                <i class="fa fa-credit-card" aria-hidden="true"></i>
              <p>
                Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('pengeluaran.index') }}" class="nav-link active">
                    <i class="fa fa-chevron-up" aria-hidden="true"></i>
                  <p>Pengeluaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('pembelian.index') }}" class="nav-link active">
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                  <p>Pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('penjualan.index') }}" class="nav-link active">
                    <i class="fa fa-exchange-alt" aria-hidden="true"></i>
                  <p>Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('transaksi.index') }}" class="nav-link active">
                    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                  <p>Transaksi Aktif</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('transaksi.baru') }}" class="nav-link active">
                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                  <p>Transaksi Baru</p>
                </a>
              </li>
            </ul>
            <li class="nav-item menu-close">
                <a href="#" class="nav-link active">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                  <p>
                    Report
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('laporan.index') }}" class="nav-link active">
                        <i class="fa fa-file-alt" aria-hidden="true"></i>
                      <p>Laporan</p>
                    </a>
                  </li>
                </ul>
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link active">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                      <p>
                        System
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link active">
                            <i class="fa fa-user" aria-hidden="true"></i>
                          <p>User</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('setting.index') }}" class="nav-link active">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                          <p>Setting</p>
                        </a>
                      </li>
            @else
              <li class="nav-item menu-close">
                <a href="#" class="nav-link active">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                  <p>
                    Transaksi
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('transaksi.index') }}" class="nav-link active">
                    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                  <p>Transaksi Aktif</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('transaksi.baru') }}" class="nav-link active">
                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                  <p>Transaksi Baru</p>
                </a>
              </li>
              @endif
            </ul>
        </ul>
          </li>

    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
