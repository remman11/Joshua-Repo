@extends('Templates.newTemplate')

@section('assets')
    {{-- @include('Berth.scripts') --}}
@endsection
@section('assets2')
     {{-- <div id="app">
    <div class="main-wrapper"> --}}
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>
              Dispatch &amp; Hauling
              <small class="smCat">Tugboat Assignment</small>
            </div>
          </h1>
          <!-- Tugboat Assignment -->
          <div class="tugboatAssignment animated fadeIn">
            <div class="row">
              <div class="col-lg-5">
                <div class="card">
                  <section class="sectionDark">
                    <div class="container">
                      <h5 class="section-header text-center" style="text-transform: uppercase;">
                        Tugboat List 
                        <a href="tugboat.html" class="float-right btn-sm btn btn-primary waves-effect"data-toggle="tooltip" title="Add new Tugboat"><i class="fas fa-plus"></i></a>
                      </h5>
                    </div>
                    {{--  --}}
                    @if(count($Tugboat) > 0)
                    @foreach($Tugboat as $Tugboat)
                    <div class="row">
                      <div class="col mr-3 ml-3">
                        <a href="#">
                        <div class="card">
                          <div class="card-header">
                            {{-- Tugboatlist lagay mo dyan --}}
                          <h6 class="text-center mt-2">{{$Tugboat->strName}}</h6>
                          </div>
                        </div>
                        </a>
                      </div>
                    </div>
                    @endforeach
                    @else
                        <p>No Schedule found</p>
                    @endif
                    {{--  --}}
                  </section>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="card">
                  <section class="sectionDark">
                        <div class="container">
                                <div class="card">
                                  <div class="card-header bg-success text-white">
                                    <div class="float-right">
                                      <a data-collapse="#availableSched" class="btn btn-icon"><i class="ion ion-minus"></i></a>
                                    </div>
                                    <h4 class="text-center ml-5">Schedule List</h4>
                                  </div>
                                  <div class="collapse show" id="availableSched">
                                    <div class="card-body">
                                      <div class="card card-success">
                                        <div class="card-body text-white">
                                          <div class="card bg-success">
        {{--  --}}
        
                                    @if(count($Schedules) > 0)
                                        @foreach($Schedules as $Schedules)
                                            {{-- laman --}}
                                            <div class="card-header" id="dismissSched">
                                              <a href="/TugboatAssignment-Assign/{{$Schedules->intScheduleID}}">
                                                {{-- Orders --}}
                                                {{$Schedules->strSchedDesc}}
                                                {{-- dito ko na din lagay yung function --}}
                                              </a>
                                              <div class="float-right">
                                                <a data-dismiss="#dismissSched" class="btn btn-icon"><i class="ion ion-close"></i></a>
                                              </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <p>No Schedule found</p>
                                    @endif
        {{--  --}}
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                    <div class="container">
                      <div class="card">
                        <div class="card-header bg-success text-white">
                          <div class="float-right">
                            <a data-collapse="#availableSched" class="btn btn-icon"><i class="ion ion-minus"></i></a>
                          </div>
                          <h4 class="text-center ml-5">Available</h4>
                        </div>
                        <div class="collapse show" id="availableSched">
                          <div class="card-body">
                            <div class="card card-success">
                              <div class="card-header text-center">
                                  {{-- date --}}
                                <h4>Soon</h4>
                              </div>
                              <div class="card-body text-white">
                                <div class="card bg-success">
                        @if(count($TugboatAssign) > 0)
                            @foreach($TugboatAssign as $ta)
                                  <div class="card-header" id="dismissSched">
                                    {{$ta->strTADesc}}
                                    <div class="float-right">
                                      <a data-dismiss="#dismissSched" class="btn btn-icon"><i class="ion ion-close"></i></a>
                                    </div>
                                  </div>
                            @endforeach
                        @else
                            <p>No Tugboat found</p>
                        @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
          
        </section>
      </div>
    {{-- </div>
  </div> --}}
@endsection
@section('content')
<section class="section">
    
</section>
@endsection
