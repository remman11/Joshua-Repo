@extends('templates.tugboatbase')

@section('section1')
    <section class="content">
        <h1>{{$about}}</h1>
        <h2>{{$create}}</h2>
    </section>
@endsection

@section('scripts')
    <script>
        var active = document.getElementById("dash");
        active.classList.add("active");
    </script>
@endsection