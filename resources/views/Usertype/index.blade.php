@extends('Templates.newTemplate')

@section('assets')
    @include('Usertype.scripts')
@endsection
@section('content')
<section class="section">
    <h1 class="section-header">
        <div>
        User Type
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
           @if(count($usertypes)>0)
                <table class="detailedTable table table-striped text-center table-bordered mainTable" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>User Type</th>
                            <th class="noSortAction">Action</th>
                        </tr>
                    </thead>  
                    <tbody>
                        @foreach($usertypes as $usertypes) 
                            <tr>  
                                <td>{{$usertypes->strUserTypeName}}</td>
                                <td>
                                    <div class="ml-1 mr-1">
                                        <button onclick="getUserType({{$usertypes->intUserTypeID}})"class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit" role="button">
                                            <i class="miniIcon fas fa-edit custSize"></i>
                                        </button>
                                        <button onclick="deleteUserType({{$usertypes->intUserTypeID}})"class="btn btn-sm btn btn-danger" data-toggle="tooltip" title="Delete">
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
                            <th>User Type</th>
                            <th class="noSortAction">Action</th>
                        </tr>
                    </thead>  
                    <tbody>
                    </tbody>
                </table>

            @endif
        </div>
    </div>
    @include('Usertype.create')
    @include('Usertype.edit')
</section>
@endsection
