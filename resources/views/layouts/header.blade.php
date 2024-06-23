 <!-- Navbar -->
 <header class="main-header">
     <nav class="main-header navbar navbar-expand navbar-light">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
             <li class="nav-item active">
                 <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
             </li>
         </ul>

         <!-- Right navbar links -->
         <ul class="navbar-nav ml-auto">
             <li class="nav-item dropdown user user-menu">
                 <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <img src="{{ url(auth()->user()->foto ?? '') }}" class="user-image img-profil" alt="User Image">
                     <span class="hidden-sm">{{ auth()->user()->name }}</span>
                 </a>
            <ul class="dropdown-menu">
             <li class="user-header">
                 <img src="{{ url(auth()->user()->foto ?? '') }}" class="img-circle img-profil" alt="User Image">
                 <p>
                    Selamat Datang!<br>
                     {{ auth()->user()->name }} - {{ auth()->user()->email }}
                 </p>
             </li>
             <!-- Menu Footer-->
             <li class="user-footer">
                 <div class="float-left">
                     <a href="{{ route('user.profil') }}" type="button" class="btn btn-outline-success">Profil</a>
                 </div>
                 <div class="float-right">
                    <button type="button" class="btn btn-outline-danger" onclick="$('#logout-form').submit()">Keluar</button>
                 </div>
             </li>
                 </ul>
             </li>
         </ul>
     </nav>
 </header>
 <!-- /.navbar -->

 <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
     @csrf
 </form>
