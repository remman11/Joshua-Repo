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
  <br>
        @if(count($DispatchT) > 0)
            @foreach($DispatchT as $DT)
                <p>Ticket No. {{$DT->intDispatchTicketID}}</p>
                <p>From: TugMaster</p>
                <p>To: {{$DT->strCompanyName}}</p>
                <p>Towed: {{$DT->strVesselName}}</p>
                <p>Date: {{$DT->dttmETD}}</p>
                <p>Tugboat Used: {{$DT->strName}}</p>
                <p>From: Port Are</p>
                <p>To: {{$DT->strLocationDesc}}</p>
                <p>Time Arrived: {{$DT->dttmETA}}</p>
                <p>Service: {{$DT->strServicesName}}</p>
                <p>Subtotal: soon</p>
                <p>No. of hours soon</p>
                <p>Total soon</p>
            @endforeach

        @else
            {{-- <p>No Dispatch history found</p> --}}
        @endif
</section>
@include('DispatchTicket.info')
@include('DispatchTicket.edit')
@endsection