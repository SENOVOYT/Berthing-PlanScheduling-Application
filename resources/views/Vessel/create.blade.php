
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
            <form action="/vessels" method="POST" style="margin: 49px;padding-left: 1px;">
                @csrf
                <input type="hidden" name="finish" value="false">
                <div class="container" style="padding-left: 0px;">
                    <div class="row" style="padding-bottom: 20px;width: 599px;">
                        <div class="col-md-6"><label class="form-label" for="vessel-name"><strong>Select Vessel</strong></label><select class="form-select" id="vessel-name" required="" name="vessel-name">
                                <optgroup label="Vessels">
                                    <option value="Aries">Aries</option>
                                    <option value="Caribe Mariner">Caribe Mariner</option>
                                    <option value="Jan Caribe">Jan Caribe</option>
                                    <option value="Contship Pro">Contship Pro</option>
                                    <option value="Midnight Star">Midnight Star</option>
                                    <option value="Tropical">Tropical</option>
                                    <option value="Contship Eve">Contship Eve</option>
                                    <option value="Sawtooth">Sawtooth</option>
                                    <option value="Silver Moon">Silver Moon</option>
                                    <option value="Royal Princess">Royal Princess</option>
                                    <option value="Pacific Venus">Pacific Venus</option>
                                </optgroup>
                            </select></div>
                        <div class="col-md-6"><label class="form-label" for="voyage-no"><strong>Enter Voyage Number#</strong></label><input class="form-control" type="text" id="voyage-no" required="" name="voyage-no"></div>
                    </div>
                </div>
                <div class="container" style="padding-left: 0px;">
                    <div class="row" style="padding-bottom: 20px;width: 599px;">
                        <div class="col-md-6"><label class="form-label" for="eta-date"><strong>ETA</strong></label><input class="form-control" id="eta-date" type="datetime-local" name="eta-date" required=""></div>
                        <div class="col-md-6"><label class="form-label" for="etd-date"><strong>ETD</strong></label><input class="form-control" id="etd-date" type="datetime-local" name="etd-date" required=""></div>
                    </div>
                    <div class="row" style="padding-bottom: 20px;width: 599px;">
                        <div class="col-md-6"><label class="form-label" for="ata-date"><strong>ATA</strong></label><input class="form-control" id="ata-date" type="datetime-local" name="ata-date"></div>
                        <div class="col-md-6"><label class="form-label" for="atd-date"><strong>ATD</strong></label><input class="form-control" id="atd-date" type="datetime-local" name="atd-date" required=""></div>
                    </div>
                    <div class="row" style="padding-bottom: 20px;width: 599px;">
                        <div class="col-md-6"><label class="form-label" for="pilot-name"><strong>Pilot Name</strong></label><select class="form-select" id="pilot-name" name="pilot-name" required="">
                                <optgroup label="Pilots">
                                    <option value="Ralph Locke">Ralph Locke</option>
                                    <option value="Paul Sabal">Paul Sabal</option>
                                    <option value="Kyler Jones">Kyler Jones</option>
                                    <option value="Mauricio Gonzalez">Mauricio Gonzalez</option>
                                    <option value="Larry Mortis">Larry Mortis</option>
                                    <option value="Albert Cacho">Albert Cacho</option>
                                    <option value="Branden Wade">Branden Wade</option>
                                </optgroup>
                            </select></div>
                        <div class="col-md-6"><label class="form-label" for="operations-supervisor"><strong>Operations Supervisor</strong></label><select class="form-select" id="operations-supervisor" name="operations-supervisor" required="">
                                <optgroup label="Supervisors">
                                    <option value="Tara Waight">Tara Waight</option>
                                    <option value="Ameera Marin">Ameera Marin</option>
                                    <option value="Matt Young">Matt Young</option>
                                    <option value="Kevin Pitts">Kevin Pitts</option>
                                    <option value="Rudy August">Rudy August</option>
                                </optgroup>
                            </select></div>
                    </div>
                    <div class="row" style="padding-bottom: 20px;width: 599px;">
                        <div class="col-md-6"><label class="form-label" for="gang-foreman"><strong>Gang Foreman</strong></label><select class="form-select" id="gang-foreman" name="gang-forman" required="">
                                <optgroup label="Foreman">
                                    <option value="Ken Young">Ken Young</option>
                                    <option value="Mike Ayuso">Mike Ayuso</option>
                                    <option value="Ian Dawson">Ian Dawson</option>
                                </optgroup>
                            </select></div>
                        <div class="col-md-6"><label class="form-label" for="gang-number"><strong>Stevedore Gang</strong></label><select class="form-select" id="gang-number" name="gang-number" required="">
                                <optgroup label="Gangs">
                                    <option value="Gang 1">Gang 1</option>
                                    <option value="Gang 2">Gang 2</option>
                                    <option value="Gang 3">Gang 3</option>
                                    <option value="Gang 4">Gang 4</option>
                                    <option value="Gang 5">Gang 5</option>
                                    <option value="Gang 6">Gang 6</option>
                                    <option value="Gang 7">Gang 7</option>
                                </optgroup>
                            </select></div>
                    </div>
                    <div class="row" style="padding-bottom: 20px;width: 599px;">
                        <div class="col-md-6"><label class="form-label" for="crane-operator"><strong>Crane Operator</strong></label><select class="form-select" id="crane-operator" name="crane-operator" required="">
                                <optgroup label="Crane Operators">
                                    <option value="Andy Lane">Andy Lane</option>
                                    <option value="Kenrick Richards">Kenrick Richards</option>
                                    <option value="Efrain Cowo">Efrain Cowo</option>
                                </optgroup>
                            </select></div>
                        <div class="col-md-6"><label class="form-label" for="tow-head-operator"><strong>Tow head Operator</strong></label>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="towhead-1" name="towhead[]" value="Frank Cho"><label class="form-check-label" for="towhead-1">Frank Cho</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="towhead-2" name="towhead[]" value="Charlie August"><label class="form-check-label" for="towhead-2">Charlie August</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="towhead-3" name="towhead[]" value="Fabio Carbaillo"><label class="form-check-label" for="towhead-3">Fabio Carbaillo</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="towhead-4" name="towhead[]" value="Juan Chan"><label class="form-check-label" for="towhead-4">Juan Chan</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="towhead-5" name="towhead[]" value="Guy Morris"><label class="form-check-label" for="towhead-5">Guy Morris</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="towhead-6" name="towhead[]" value="Raymond Singh"><label class="form-check-label" for="towhead-6">Raymond Singh</label></div>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 20px;width: 599px;">
                        <div class="col-md-6"><label class="form-label" for="histacker-operator"><strong>HiStacker Operator</strong></label><select class="form-select" id="histacker-operator" name="histacker-operator" required="">
                                <optgroup label="HiStacker Operators">
                                    <option value="Erick Mackenzie">Erick Mackenzie</option>
                                    <option value="Clive Hodge">Clive Hodge</option>
                                    <option value="Lindon Samuels">Lindon Samuels</option>
                                    <option value="Greg Moguel">Greg Moguel</option>
                                    <option value="Lindy Grinage">Lindy Grinage</option>
                                    <option value="Kirk Mckenzie">Kirk Mckenzie</option>
                                </optgroup>
                            </select></div>
                    </div>
                    <div class="row" style="padding-bottom: 20px;width: 599px;">
                        <div class="col-md-6"><label class="form-label" for="machines-needed"><strong>Machines Needed</strong></label>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="machine-1" name="machine[]" value="Link Belt Crane"><label class="form-check-label" for="machine-1">Link Belt Crane</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="machine-2" name="machine[]" value="Tow head Truck"><label class="form-check-label" for="machine-2">Tow Head Truck</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="machine-3" name="machine[]" value="Suzuki Truck"><label class="form-check-label" for="machine-3">Suzuki Truck</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="machine-4" name="machine[]" value="Hi Stacker"><label class="form-check-label" for="machine-4">HI Stacker&nbsp;</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="machine-5" name="machine[]" value="Lady Frantz"><label class="form-check-label" for="machine-5">Lady Frantz Transportation Boat</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="machine-6" name="machine[]" value="Oliver"><label class="form-check-label" for="machine-6">Oliver Transportation Boat</label></div>
                        </div>
                    </div>
                </div><button class="btn btn-primary btn-sm" type="submit" style="margin: 12px;">Submit</button>




            </form>
            
        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © OCTOPI 2022</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>


@endsection