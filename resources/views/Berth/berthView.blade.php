@extends('templates.tugboatbase')

@section('section1')
    
    <section class="content">
        <h2> Berths Maintenance </h2>
        <small>{{$berths->intBerthID}}</small>
        
    </section>
@endsection
@section('scripts') 
    <script>
        var eo = document.getElementById("maintenance");
        var et = document.getElementById("berth");
        eo.classList.add("active");
        et.classList.add("active");
    </script>
@endsection
