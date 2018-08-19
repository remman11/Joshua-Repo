@extends('Templates.newTemplate')

@section('assets')
    @include('ConsigneeReq.styles')
    @include('ConsigneeReq.scripts')
@endsection

@section('content')
<section class="section">
        <h1 class="section-header">
                <div>
                    Contracts
                    <small class="ml-1 smCat">
                        Transactions
                    </small>
                </div>
            </h1>
        @if(count($Company) > 0)
        <div class="container">
                <h5 class="section-header text-center" style="text-transform: uppercase;">
              Request
            </h5>
            </div>
            <table class="detailedTable table table-striped text-center table-bordered mainTable" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>Company Name</th>
                            <th class="noSortAction">Action</th>
                        </tr>
                    </thead>  
            
            @foreach($Company as $Comp)
                <tbody>
                        <td class="span2">{{$Comp->strCompanyName}}</td>
                        <td class="span2">
                            {{-- {!! Form::open(['action' => ['RequestController@accept', $Comp->intCompanyID], 'method' => 'POST']) !!}
                                {{Form::hidden('_method','PUT')}}
                                {{Form::submit('Accept', ['class' =>'btn btn-primary'])}}
                            {!! Form::close() !!} --}}
                            <a class="btn btn-default" href="/Requests/{{$Comp->intCompanyID}}">View</a>
                            {{-- {!!Form::open(['action' => ['RequestController@destroy', $Comp->intCompanyID], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-default'])}}
                                    {!!Form::close()!!} --}}
                            <input type="hidden" id="addcompanyid" value="{{$Comp->intCompanyID}}">
                            <button onclick="postRequest()" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Accept" role="button">
                                <i class="miniIcon fas fa-check custSize"></i>
                            </button>
                        </td>
                </tbody>
        @endforeach
            </table>
        @else
            <p>No Request found</p>
        @endif


        @if(count($Contract) > 0)
        <div class="container">
            <h5 class="section-header text-center" style="text-transform: uppercase;">
              Active
            </h5>
            </div>
            <table class="detailedTable table table-striped text-center table-bordered mainTable" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>Company Name</th>
                            <th class="noSortAction">Action</th>
                        </tr>
                    </thead>  
            
            @foreach($Contract as $Comp)
                <tbody>
                        <td class="span2">{{$Comp->strCompanyName}}</td>
                        <td class="span2">
                            <a class="btn btn-default" href="/Requests/{{$Comp->intCompanyID}}">View</a>
                            {!!Form::open(['action' => ['RequestController@destroy', $Comp->intCompanyID], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-default'])}}
                            {!!Form::close()!!}
                        </td>
                </tbody>
        @endforeach
            </table>
        @else
            <p>No Request found</p>
        @endif
</section>
@include('ConsigneeReq.info')
@include('ConsigneeReq.edit')
@endsection