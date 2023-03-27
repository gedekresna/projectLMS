<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
            <i class="bi bi-house" class="align-text-bottom"></i>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard/posts') ? 'active' : ''}}" href="/dashboard/posts">
            <i class="bi bi-file-text" class="align-text-bottom"></i>
            My Posts
          </a>
        </li>

      </ul>

    </div>
  </nav>