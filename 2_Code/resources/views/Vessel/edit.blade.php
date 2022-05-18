
@extends('layouts.app')
{{-- // written by: Driane PPerez
  // tested by: Driane Perez
  // debugged by: Driane Perez --}}

@section('content')

<div id="wrapper">
    @include('layouts.link')
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            @include('layouts.nav')
            <div class="container-fluid">
                <h3 class="text-dark mb-1">Add Voyage</h3>
            </div>
            <form action="/vessels/{{ $v->id }}" method="POST" style="margin: 49px;padding-left: 1px;">
              
              
                <div class="container" style="padding-left: 0px;">
                   
                    <div class="row" style="padding-bottom: 20px;width: 599px;">
                        <div class="col-md-6"><label class="form-label" for="ata-date"><strong>ATA</strong></label><input  class="form-control" id="ata-date" type="datetime-local" name="ata-date"></div>
                        <div class="col-md-6"><label class="form-label" for="atd-date"><strong>ATD </strong></label><input  class="form-control" id="atd-date" type="datetime-local" name="atd-date"></div>
                    </div>
                    @csrf
                    @method('PUT')
                  
                   
                    
                    
                  
                </div><button class="btn btn-primary btn-sm" type="submit" style="margin: 12px;">Submit</button>




            </form>
            
        </div>
        @include('layouts.fotter')
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>


@endsection