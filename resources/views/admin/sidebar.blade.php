<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <h2 class="text-center brand-link">Admin Tamvan :v</h2>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('img/logo-pilar-wisata.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block text-uppercase">Pilar Wisata</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
              <a href="{{ url('/admin/dashboard') }}" class="nav-link">
                <i class="fas fa-home nav-icon"></i>
                <p>Dashboard</p>
              </a>
            </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-map-marker-alt"></i>
                <p>
                    Wisata
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/wisata/add') }}" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add new Tour</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/wisata/all') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All 3B</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/wisata/bali') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bali</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/wisata/banyuwangi') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banyuwangi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/wisata/bromo') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bromo</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/cars') }}" class="nav-link">
            <i class="nav-icon fas fa-car"></i>
              <p>
                Cars
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/gallery') }}" class="nav-link">
            <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/testimonials') }}" class="nav-link">
            <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Testimonials
              </p>
            </a>
          </li>
          <li class="nav-item" style="position: fixed; bottom: 0; width: 17.3%">
            <a href="{{ url('/admin/logout') }}" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Logout
                </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>