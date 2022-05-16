
@extends('layouts.app')
{{-- // written by: Driane PPerez
  // tested by: Driane Perez
  // debugged by: Driane Perez --}}

@section('content')

<div id="wrapper">
    @include('layouts.link')
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content" style="--bs-primary-rgb: 64,31,136;--bs-primary: #401f88;">
           
            @include('layouts.nav')




        






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
                                <p class="card-text"></p><a class="btn btn-primary text-uppercase" role="button" style="border-radius: 50px;border-width: 0px;width: 250px;text-align: center;height: 40px;color: var(--bs-blue);" href="/vessels/create"><i class="fas fa-plus-circle" style="width: 20px;height: 20px;color: var(--bs-body-bg);"></i><small class="form-text" style="color: var(--bs-body-bg);font-weight: bold;">&nbsp; &nbsp;Create New Voyage</small></a>
                            </div>
                        </div>
                    </div>



                    @foreach ($Vessel as $vesse )
                    
                    <div class="col-md-3" style="width: 250px;  margin-bottom: 20px;">
                        <div class="card shadow" data-bss-hover-animate="tada" style="border-radius: 59px;height: 347.984px;border-style: none;background: #82c6e2;">
                            <div class="card-body" style="text-align: center;border-radius: 0px;border-style: none;"><img src="{{ asset('img/vessels/ship-icon.png')}}" style="width: 80px;text-align: center;">


                                <h4 class="card-title" style="color: var(--bs-body-bg);">{{ $vesse->Vessel }}</h4>


                                <h6 class="text-muted card-subtitle mb-2">Voyage #: {{ $vesse->voyage_number }}</h6>

                                <p class="card-text"></p>
                                <h1 style="font-size: 17px;color: var(--bs-body-bg);">Estimated time of arrival</h1>
                                <h6 class="text-muted card-subtitle mb-2">{{ $vesse->ETA }}</h6>
                                
                                <div class="btn-group" role="group" style="margin-top: 27px;font-size: 4px;height: 45px;width: 174px;"><button class="btn btn-primary" type="button" style="font-size: 10px;background: var(--bs-blue);font-weight: bold;">VIEW TEAM</button><button class="btn btn-primary" type="button" style="font-size: 10px;background: var(--bs-pink);font-weight: bold;">VOYAGE INFO</button></div>
                            </div>
                        </div>
                    </div>
                        
                    @endforeach


                   
                 
                    
                    
                  
                  


                  
                   
                    
                    
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