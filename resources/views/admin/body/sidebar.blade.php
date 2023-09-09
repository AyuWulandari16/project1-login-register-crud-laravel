<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link " href="{{ route('product.view') }}">
          <i class="bi-layout-text-window-reverse"></i>
          <span>Product</span>
        </a>
      </li><!-- End Product Nav -->

      <li class="nav-item">
        <a class="nav-link " href="{{ route('user.view') }}">
          <i class="bi-bar-chart"></i>
          <span>Manage User</span>
        </a>
      </li><!-- End Manage User Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/profile">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

    </ul>

  </aside>