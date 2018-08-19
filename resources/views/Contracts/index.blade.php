@extends('Templates.newTemplate')

@section('assets')
    @include('Contracts.styles')
    @include('Contracts.scripts')
@endsection

@section('content')
<section class="section">
    <h1 class="section-header">
        <div>
            Consignee Contract
            <small class="ml-1 smCat">
                Transactions
            </small>
        </div>
    </h1>
    <div class="container">
            <h5 class="section-header text-center" style="text-transform: uppercase;">
          Consignee w/o Contract
        </h5>
        </div>
    @if(count($Company) > 0)
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
                        <a class="btn btn-default" href="/contract-create/{{$Comp->intCompanyID}}">Create</a>
                        <a class="btn btn-default" href="/contracts/{{$Comp->intCompanyID}}">View</a>
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

    <div class="container">
            <h5 class="section-header text-center" style="text-transform: uppercase;">
          Consignee w/ Contract
        </h5>
        </div>
    @if(count($Company2) > 0)
    <div class="container">
        </div>
        <table class="detailedTable table table-striped text-center table-bordered mainTable" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th>Company Name</th>
                        <th class="noSortAction">Action</th>
                    </tr>
                </thead>  
        
        @foreach($Company2 as $Comp)
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
@include('Contracts.info')
@include('Contracts.edit')
@endsection