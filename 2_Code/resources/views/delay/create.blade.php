
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
                <h3 class="text-dark mb-1">Add Delay</h3>
            </div>
            <form action="/delay" method="POST" style="margin: 49px;padding-left: 1px;">
                @csrf
                <input type="hidden" name="finish" value="false">
                <div class="container" style="padding-left: 0px;">
                    <div class="row" style="padding-bottom: 20px;width: 599px;">
                       
                        <div class="col-md-6"><label class="form-label" for="voyage-no"><strong>Enter Delay Type</strong></label><input class="form-control" type="text" id="voyage-no" required="" name="type_name"></div>
                    </div>
                </div>
                <div class="container" style="padding-left: 0px;">
                    <div class="row" style="padding-bottom: 20px;width: 599px;">
                        <div class="col-md-6"><label class="form-label" for="eta-date"><strong>Delay start</strong></label><input class="form-control" id="eta-date" type="datetime-local" name="Delay_start" required=""></div>
                        <div class="col-md-6"><label class="form-label" for="etd-date"><strong>Delay_end</strong></label><input class="form-control" id="etd-date" type="datetime-local" name="Delay_end" required=""></div>
                    </div>
                    
                   
                    
                    
                </div><button class="btn btn-primary btn-sm" type="submit" style="margin: 12px;">Submit</button>




            </form>
            
        </div>
        @include('layouts.fotter')
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>


@endsection