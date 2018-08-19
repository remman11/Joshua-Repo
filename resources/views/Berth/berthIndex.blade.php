@extends('templates.tugboatbase')

@section('section1')
    
    <section class="content">
        <h2> Berths Maintenance </h2>
        <button class="btn btn-success"><a href="/berth/create">Add Berth</a></button>
        @if(count($berths)>0)
            @foreach($berths as $berths)
                <div class="well">
                    <h3><a href="/berth/{{$berths->intBerthID}}">{{$berths->strBerthName}}</a></h3>
                </small>{{$berths->intBerthID}}</small>
                </div>
            @endforeach
        @else
            <h1>no results found</h1>
        @endif
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
