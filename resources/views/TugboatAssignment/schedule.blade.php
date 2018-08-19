@extends('Templates.newTemplate')

@section('assets')
    {{-- @include('Berth.scripts') --}}
@endsection
@section('assets2')
@endsection
@section('content')
<br>
<br>
{!! Form::open(['action' => 'TugboatAssignmentController@store', 'method' => 'POST']) !!}

        @if(count($Schedules) > 0)
        @foreach($Schedules as $S)
        {{-- {{Form::label('ContractTitle', 'Contract Title')}} --}}
    <input type="hidden" name="Schedule" value={{$S->intScheduleID}} id="Schedule">
    <input type="hidden" name="tmETA" value={{$S->tmETA}} id="tmETA">
    <input type="hidden" name="tmETD" value={{$S->tmETD}} id="tmETD">
    {{-- {{Form::hidden('Schedule', $S->intScheduleID)}}
    {{Form::hidden('ETA', $S->tmETA)}}
    {{Form::hidden('ETD', $S->tmETD)}} --}}
                    {{-- <input type="hidden" value="{{$S->intSchedID}}" name="Schedule"> --}}
                        <h1>{{$S->strSchedDesc}}</h1>
                        <p>
                            ETA   {{$S->tmETA}}
                        </p>
                        <p>
                            ETD   {{$S->tmETD}}
                        </p>
                    @endforeach
                @endif
                
        @if(count($TugboatAssign) > 0)
        <label for="TA">Assign a Tugboat</label>
            <select name="TA" id="TA">
                @foreach($TugboatAssign as $TA)
                    <option name="TA" id="TA" value="{{$TA->intTAssignID}}">{{$TA->strTADesc}}</option>
                @endforeach
            </select>
        @endif
<br>
<button onclick="ScheduleSubmit()" class="btn btn-primary float-left font-weight-bold">Submit</button>
{!! Form::close() !!}

<section class="section">
    
</section>
@endsection
