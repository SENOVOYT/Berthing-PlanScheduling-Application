
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




        






            <div class="row">
                <div class="col">
                    <div class="card" style="border-style: none;">
                        <div class="card-body" style="background: rgb(248,249,252);border-style: none;border-color: rgb(255,255,255);">
                            <p class="card-text"></p><a class="btn btn-primary text-uppercase" role="button" style="border-radius: 50px;border-width: 0px;width: 250px;text-align: center;height: 40px;color: var(--bs-blue);" href="/delay/create"><i class="fas fa-plus-circle" style="width: 20px;height: 20px;color: var(--bs-body-bg);"></i><small class="form-text" style="color: var(--bs-body-bg);font-weight: bold;">&nbsp; Add New Delay</small></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Delay Type</th>
                            <th>Delay_start</th>
                            <th>Delay_end</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($delay as $d )
                        <tr>
                            <td>{{ $d->type }}</td>
                            <td>{{ $d->Delay_start  }}</td>
                            <td>{{ $d->Delay_end }}</td>
                            <td><form action="/delay/{{ $d->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-primary" type="submit">Finish</button></form></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

                   
                 
                    
                    
                  
                  


                  
                   
                    
                    
                
            
        </div>
        @include('layouts.fotter')
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
@endsection