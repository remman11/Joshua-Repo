@extends('Templates.newTemplate')

@section('assets')
    @include('DispatchTicket.styles')
    @include('DispatchTicket.scripts')
@endsection

@section('content')
<section class="section">
    <h1 class="section-header">
        <div>
            Dispatch Ticket
            <small class="ml-1 smCat">
                Transactions
            </small>
        </div>
    </h1>
        <div class="container">
                <h5 class="section-header text-center" style="text-transform: uppercase;">
              Dispatch Ticket
            </h5>
            </div>
            <table class="detailedTable table table-striped text-center table-bordered mainTable" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>Dispatch Ticket No.</th>
                            <th>Company Name</th>
                            <th>Date</th>
                            <th>Service</th>
                            <th class="noSortAction">Action</th>
                        </tr>
                    </thead>  
            @if(count($DispatchT) > 0)
            @foreach($DispatchT as $DT)
                <tbody>
                        <td class="span2">{{$DT->intDispatchTicketID}}</td>
                        <td class="span2">{{$DT->strCompanyName}}</td>
                        <td class="span2">{{$DT->dttmETA}}</td>
                        <td class="span2">{{$DT->strServicesName}}</td>
                        <td class="span2">
                                {{-- <span data-target="#infoModal">
                                        <button type="button" onclick="showData({{$DT->intDispatchTicketID}})"class="btn btn-primary" data-toggle="tooltip" title="View">
                                        <i class="fas fa-view"></i>
                                        </button>
                                    </span> --}}
                            <a class="btn btn-default" href="/DispatchTicket/{{$DT->intDispatchTicketID}}">View</a>
                            {{-- <input type="hidden" id="addcompanyid" value="{{$Comp->intCompanyID}}">
                            <button onclick="postRequest()" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Accept" role="button">
                                <i class="miniIcon fas fa-check custSize"></i>
                            </button> --}}
                        </td>
                </tbody>
        @endforeach
            </table>
        @else
            <p>No Dispatch history found</p>
        @endif
</section>
@include('DispatchTicket.info')
@include('DispatchTicket.edit')
@endsection