@extends('Templates.newTemplate')

@section('assets')
    @include('ConsigneeReq.styles')
    @include('ConsigneeReq.scripts')
@endsection

@section('content')
<section class="section">
        <h1 class="section-header">
                <div>
                    View
                    <small class="ml-1 smCat">
                        Request
                    </small>
                </div>
            </h1>
            @if(count($Company) > 0)
            @foreach($Company as $Comp)
                
                <h1>{{$Comp->strCompanyName}}</h1>
    
                            <small class="ml-1 smCat">Address: {{$Comp->strCompanyAddress}}</small> <br>
                            <small class="ml-1 smCat">Contact No. {{$Comp->strCompanyContactPNum}}</small> <small class="ml-1 smCat">{{$Comp->strCompanyContactTNum}}</small> <br>
                            <small class="ml-1 smCat">{{$Comp->strCompanyEmail}}</small> <br>
                            <small class="ml-1 smCat">{{$Comp->strGoodsName}}</small> <br>
                            <small class="ml-1 smCat">{{$Comp->strGoodsDesc}}</small> <br>
            
                            {{-- <div class="bottom-right link">
                                {!! Form::open(['action' => ['ConsigneeReqController@update', $Comp->intCompanyID], 'method' => 'POST']) !!}
                                    {{Form::hidden('_method','PUT')}}
                                    {{Form::submit('Accept', ['class' =>'float-right btn btn-primary'])}}
                                {!! Form::close() !!}
                            </div> --}}
    
    
            @endforeach
                </table>
            @else
                <p>No Request found</p>
            @endif
</section>
@include('ConsigneeReq.info')
@include('ConsigneeReq.edit')
@endsection