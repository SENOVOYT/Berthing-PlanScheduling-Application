{{-- // written by: Driane PPerez
  // tested by: Driane Perez
  // debugged by: Driane Perez --}}
<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="color: var(--bs-blue);--bs-primary: #401f88;--bs-primary-rgb: 64,31,136;">
    <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon rotate-n-15"></div><img src="{{ asset('img/download.png') }}" style="height: 52px;width: 52px;">
            <div class="sidebar-brand-text mx-3"><span>BERTH</span></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item"><a class="nav-link" href="/vessels"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
            <li class="nav-item"></li>
            <li class="nav-item"><a class="nav-link" href="/ship"><i class="fas fa-table"></i><span>Ship Information view</span></a></li>
            <li class="nav-item"></li>
            <li class="nav-item"><a class="nav-link" href="/ship"><i class="fas fa-table"></i><span>Ship Schedule</span></a></li>
            <li class="nav-item"></li>
            <li class="nav-item"><a class="nav-link" href="/delay"> <i class="fas fa-exclamation-circle"></i><span> Delays </span></a></li>
            <li class="nav-item"></li>
            <li class="nav-item"><a class="nav-link" href="/delay"> <i class="fas fa-exclamation-circle"></i><span> Notifiaction </span></a></li>
            <li class="nav-item"></li>
            <li class="nav-item"></li>
        </ul>
        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
    </div>
</nav>