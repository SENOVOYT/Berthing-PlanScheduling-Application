
@extends('layouts.app')

@section('content')

<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="color: var(--bs-blue);--bs-primary: #401f88;--bs-primary-rgb: 64,31,136;">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon rotate-n-15"></div><img src="{{ asset('img/bg-oc1.svg') }}" style="height: 52px;width: 52px;">
                <div class="sidebar-brand-text mx-3"><span>OCTOPI</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link active" href="dashboard.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li class="nav-item"></li>
                <li class="nav-item"><a class="nav-link" href="shipschedule.html"><i class="fas fa-table"></i><span>Ship Schedule</span></a><a class="nav-link" href="delays.html"> <i class="fas fa-exclamation-circle"></i>Delays </a><a class="nav-link" href="reports.html"><span><i class="fas fa-file-excel"></i>Reports</span></a></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content" style="--bs-primary-rgb: 64,31,136;--bs-primary: #401f88;">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <ul class="navbar-nav flex-nowrap ms-auto">
                        <li class="nav-item dropdown d-sm-none no-arrow">
                            <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="me-auto navbar-search w-100">
                                    <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                        <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">
                                
                                3+
                                
                            </span><i class="fas fa-bell fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                    <h6 class="dropdown-header">Notification center</h6>
                                        
                                    
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 2, 2019</span>
                                            <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                        </div>
                                    </a><a class="dropdown-item text-center small text-gray-500" href="#">Alerts</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                    <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle" src="{{ URL('assets/img/avatars/avatar4.jpeg') }}">
                                            <div class="bg-success status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                            <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle" src="{{ URL('img/avatars/avatar2.jpeg') }}">
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                            <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle" src="{{ asset('img/avatars/avatar3.jpeg') }}">
                                            <div class="bg-warning status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                            <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle" src="{{ asset('img/avatars/avatar5.jpeg') }}">
                                            <div class="bg-success status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                            <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                        </div>
                                    </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                </div>
                            </div>
                            <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                        </li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Dashboard</h3>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3" style="height: 300px;width: 400px;text-align: left;padding-top: 70px;">
                        <div class="card" style="border-style: none;">
                            <div class="card-body" style="background: rgb(248,249,252);border-style: none;border-color: rgb(255,255,255);">
                                <h4 class="card-title" style="color: rgb(0,0,0);">Add New Voyage</h4>
                                <h6 class="text-muted card-subtitle mb-2" style="font-size: 12px;">Create a new voyage through the Berth App that everyone in your organization can track.</h6>
                                <p class="card-text"></p><a class="btn btn-primary text-uppercase" role="button" style="border-radius: 50px;border-width: 0px;width: 250px;text-align: center;height: 40px;color: var(--bs-blue);" href="addvoyage.html"><i class="fas fa-plus-circle" style="width: 20px;height: 20px;color: var(--bs-body-bg);"></i><small class="form-text" style="color: var(--bs-body-bg);font-weight: bold;">&nbsp; &nbsp;Create New Voyage</small></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="width: 250px;">
                        <div class="card shadow" data-bss-hover-animate="tada" style="border-radius: 59px;height: 347.984px;border-style: none;background: #82c6e2;">
                            <div class="card-body" style="text-align: center;border-radius: 0px;border-style: none;"><img src="{{ asset('img/vessels/ship-icon.png')}}" style="width: 80px;text-align: center;">
                                <h4 class="card-title" style="color: var(--bs-body-bg);">Caribe Mariner</h4>
                                <h6 class="text-muted card-subtitle mb-2">Voyage #: 1018</h6>
                                <p class="card-text"></p>
                                <h1 style="font-size: 17px;color: var(--bs-body-bg);">Vessel Completion</h1>
                                <div class="progress">
                                    <div class="progress-bar bg-success progress-bar-animated" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                                </div>
                                <div class="btn-group" role="group" style="margin-top: 27px;font-size: 4px;height: 45px;width: 174px;"><button class="btn btn-primary" type="button" style="font-size: 10px;background: var(--bs-blue);font-weight: bold;">VIEW TEAM</button><button class="btn btn-primary" type="button" style="font-size: 10px;background: var(--bs-pink);font-weight: bold;">VOYAGE INFO</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="width: 250px;">
                        <div class="card shadow" data-bss-hover-animate="tada" style="border-radius: 59px;height: 347.984px;border-style: none;background: #f4e287;">
                            <div class="card-body" style="text-align: center;border-radius: 0px;border-style: none;"><img src="{{ asset('img/vessels/ship-icon.png')}}" style="width: 80px;text-align: center;">
                                <h4 class="card-title" style="color: var(--bs-body-bg);">Jan Caribe</h4>
                                <h6 class="text-muted card-subtitle mb-2">Voyage #: 845</h6>
                                <h1 style="font-size: 17px;color: var(--bs-body-bg);">Vessel Completion</h1>
                                <p class="card-text"></p>
                                <div class="progress">
                                    <div class="progress-bar bg-warning progress-bar-animated" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">30%</div>
                                </div>
                                <div class="btn-group" role="group" style="margin-top: 27px;font-size: 4px;height: 45px;width: 174px;"><button class="btn btn-primary" type="button" style="font-size: 10px;background: var(--bs-blue);font-weight: bold;">VIEW TEAM</button><button class="btn btn-primary" type="button" style="font-size: 10px;background: var(--bs-pink);font-weight: bold;">VOYAGE INFO</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="width: 250px;">
                        <div class="card shadow" data-bss-hover-animate="tada" style="border-radius: 59px;height: 347.984px;border-style: none;background: #84e2a8;">
                            <div class="card-body" style="text-align: center;border-radius: 0px;border-style: none;"><img src="{{ asset('assets/img/vessels/ship-icon.png')}}" style="width: 80px;text-align: center;">
                                <h4 class="card-title" style="color: var(--bs-body-bg);">Aries</h4>
                                <h6 class="text-muted card-subtitle mb-2">Voyage #: 13</h6>
                                <h1 style="font-size: 17px;color: var(--bs-body-bg);">Vessel Completion</h1>
                                <p class="card-text"></p>
                                <div class="progress">
                                    <div class="progress-bar bg-info progress-bar-animated" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">0%</div>
                                </div>
                                <div class="btn-group" role="group" style="margin-top: 27px;font-size: 4px;height: 45px;width: 174px;"><button class="btn btn-primary" type="button" style="font-size: 10px;background: var(--bs-blue);font-weight: bold;">VIEW TEAM</button><button class="btn btn-primary" type="button" style="font-size: 10px;background: var(--bs-pink);font-weight: bold;">VOYAGE INFO</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive" style="padding-top: 100px;padding-right: 50px;padding-left: 50px;">
                <table class="table">
                    <thead>
                        <tr style="color: rgb(0,0,0);font-weight: bold;">
                            <th>UPCOMING VOYAGES</th>
                            <th>ETA</th>
                            <th>PILOT</th>
                            <th>ATA</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="color: rgb(54,92,205);">
                            <td>Caribe Mariner #1018</td>
                            <td>Thursday, 26thOct</td>
                            <td>Christian Mathew</td>
                            <td>Thursday, 26th Oct</td>
                            <td>In Progress</td>
                        </tr>
                        <tr style="color: var(--bs-blue);">
                            <td>Jan Caribe # 845</td>
                            <td>Thursday, 26th Oct</td>
                            <td>Arthur Cook</td>
                            <td>Thursday, 26th Oct<br></td>
                            <td>In Progress</td>
                        </tr>
                        <tr style="color: var(--bs-blue);">
                            <td>Aries #13</td>
                            <td>Friday 27th Oct</td>
                            <td>Henry Locke</td>
                            <td>-</td>
                            <td>In Transit</td>
                        </tr>
                        <tr style="color: var(--bs-blue);">
                            <td>Jan Caribe # 845</td>
                            <td>Sunday, 30th Oct</td>
                            <td>Paul Sabal</td>
                            <td>-<br></td>
                            <td>In Transit</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © OCTOPI 2022</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
@endsection