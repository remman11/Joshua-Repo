@extends('Templates.newTemplate')
@section('assets')
    @include('TeamAssignment.style')
    @include('TeamAssignment.scripts')
@endsection
@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>
              Dispatch &amp; Hauling
              <small class="smCat">Team Builder</small>
            </div>
        </h1>
        <!-- Team Assignment -->
        <div class="teamAssignment animated fadeIn">
            <div class="row">
                <div class="col-lg-5">
                    <div class="card">
                        <section class="sectionDark">
                            <div class="container">
                                <h5 class="section-header text-center" style="text-transform: uppercase;">
                                Team List 
                                <button class="float-right btn-sm btn btn-primary waves-effect" data-toggle="modal" data-target="#addTeam" data-tooltip="tooltip" title="Add New Team">
                                <i class="fas fa-plus"></i>
                                </button>
                            </h5>
                            </div>
                            @if(count($tugboatassign)>0)
                                @foreach($tugboatassign as $tugboatassign)
                                    <div class="row">
                                        <div class="col mr-3 ml-3">
                                            <a href="#">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h6 class="float-left mt-2"> {{$tugboatassign->strTeamName}} 
                                                            <div>
                                                                <small>{{$tugboatassign->strPositionName}} : {{$tugboatassign->strLName}} {{$tugboatassign->strFName}} {{$tugboatassign->strMName}}</small></h6>
                                                            
                                                        <button type="button" class="delItem btn btn-sm btn-danger waves-effect waves-circle float-right mt-2" data-toggle="tooltip" title="Delete">
                                                            <i class="miniIcon fas fa-trash"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-sm btn-secondary waves-effect waves-circle float-right mr-2 mt-2" data-toggle="modal" data-target="#editTeam" data-tooltip="tooltip" title="Edit">
                                                            <i class="miniIcon ion ion-edit"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </section>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <section class="sectionDark">
                            <div class="container">
                                <h5 class="section-header text-center" style="text-transform: uppercase;">
                                Tugboats List  
                            </h5>
                            </div>
                            <div class="container">
                                <div class="card">
                                    <div class="card-header bg-success text-white">
                                        <div class="float-right">
                                            <a data-collapse="#availableTugboat" class="btn btn-icon"><i class="ion ion-minus"></i></a>
                                        </div>
                                        <h4 class="text-center ml-5">Available</h4>
                                    </div>
                                    <div class="collapse show" id="availableTugboat">
                                        <div class="card-body">
                                            <div class="card card-success">
                                                <div class="card-header text-center">
                                                    <h4>Energy Sun</h4>
                                                </div>
                                                <div class="card-body text-white">
                                                    <div class="card bg-success">
                                                        <div class="card-header" id="dismissTeam">
                                                            Team Energy Sun
                                                            <div class="float-right">
                                                                <a data-dismiss="#dismissTeam" class="btn btn-icon"><i class="ion ion-close"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header bg-info text-white">
                                        <div class="float-right">
                                            <a data-collapse="#occupiedTugboat" class="btn btn-icon"><i class="ion ion-minus"></i></a>
                                        </div>
                                        <h4 class="text-center ml-5">Occupied</h4>
                                    </div>
                                    <div class="collapse show" id="occupiedTugboat">
                                        <div class="card-body">
                                            <div class="card card-success">
                                                <div class="card-header text-center">
                                                    <h4>Energy Sun</h4>
                                                </div>
                                                <div class="card-body text-white">
                                                    <div class="card bg-success">
                                                        <div class="card-header" id="dismissTeam">
                                                            Team Energy Sun
                                                            <div class="float-right">
                                                                <a data-dismiss="#dismissTeam" class="btn btn-icon"><i class="ion ion-close"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header bg-danger text-white">
                                        <div class="float-right">
                                            <a data-collapse="#underRepairTugboat" class="btn btn-icon"><i class="ion ion-minus"></i></a>
                                        </div>
                                        <h4 class="text-center ml-5">Under Repair</h4>
                                    </div>
                                    <div class="collapse show" id="underRepairTugboat">
                                        <div class="card-body">
                                            <div class="card card-success">
                                                <div class="card-header text-center">
                                                    <h4>Energy Sun</h4>
                                                </div>
                                                <div class="card-body text-white">
                                                    <div class="card bg-success">
                                                        <div class="card-header" id="dismissTeam">
                                                            Team Energy Sun
                                                            <div class="float-right">
                                                                <a data-dismiss="#dismissTeam" class="btn btn-icon"><i class="ion ion-close"></i></a>
                                                            </div>
                                                        </div>
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
    @include('TeamAssignment.create')
    @include('TeamAssignment.edit')
    {{-- @include('TeamAssignment.info') --}}
@endsection