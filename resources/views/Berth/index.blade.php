@extends('Templates.newTemplate')

@section('assets')
    @include('Berth.scripts')
@endsection
@section('assets2')
    
@endsection
@section('content')
<section class="section">
    <h1 class="section-header">
        <div>
        Berths
        <small class="ml-1 smCat">
            Maintenance
        </small>
        </div>
    </h1>
    <div id="detLayout" class="detLayout mt-3">
        <button id="addButton" class="detAdd btn btn-primary text-center border-dark bounceIn animated">
            Add
        </button>
        <div class="mt-3">
            @if(count($berths)>0)    
                <table class="detailedTable table table-striped text-center table-bordered mainTable" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>Berths</th>
                            <th>Pier</th>
                            <th class="noSortAction">Action</th>
                        </tr>
                    </thead>  
                    <tbody>
                        @foreach($berths as $berths)
                            <tr>
                                <td>{{$berths->strBerthName}}</td>
                                <td>{{$berths->strPierName}}</td>
                                <td>
                                    <div class="ml-1 mr-1">
                                        <button onclick="getBerth({{$berths->intBerthID}})" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit" role="button">
                                            <i class="miniIcon fas fa-edit custSize"></i>
                                        </button>
                                        <button onclick="deleteBerth({{$berths->intBerthID}})" class="btn btn-sm btn btn-danger" data-toggle="tooltip" title="Delete">
                                            <i class="miniIcon fas fa-trash custSize"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <table class="detailedTable table table-striped text-center table-bordered mainTable" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>Berths</th>
                            <th class="noSortAction">Action</th>
                        </tr>
                    </thead>  
                    <tbody>
                    </tbody>
                </table>
            @endif
        </div>
    </div>
    @include('Berth.create')
    @include('Berth.edit')
</section>
@endsection
