@extends('templates.tugboatbase')

@section('section1')
    
    <section class="content">
        <h2> Add New Berth</h2>
        <small></small>
        @include('Alerts.validate')
        {!! Form::open(['action' => 'BerthController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('name','Title')}}
                {{Form::text('name','',['class'=>'form-control','placeholder' => 'Berth Name'])}}
            </div>
            {{Form::submit('Submit',['class' => 'btn btn-success'])}}
        {!! Form::close() !!}   
        
    </section>
@endsection
@section('scripts') 
    <script>
        var eo = document.getElementById("maintenance");
        var et = document.getElementById("contracts");
        eo.classList.add("active");
        et.classList.add("active");
    </script>
@endsection
