@extends('Templates.newTemplate')

@section('assets')
    @include('Agreements.scripts')
    @include('Agreements.styles')
@endsection
@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>
                Agreements
                <small>Maintenance</small>
            </div>
        </h1>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <section class="sectionDark">
                        <div class="container">
                            <h5 class="section-header text-center" style="text-transform: uppercase;">
                          Create
                        </h5>
                        </div>
                        <div class="row ml-1 mr-1">
                            <div class="col">
                                <form class="needs-validation" novalidate="">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="addAgreementTitle">Title<sup class="text-primary">&#10033;</sup></label>
                                                <input type="text" name="addAgreementTitle" id="addAgreementTitle" class="form-control" required>
                                                <div class="invalid-feedback">
                                                    Please fill in the title.
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Quotations<sup class="text-primary">&#10033;</sup></label>
                                                        <div>
                                                            <select class="form-control wide" id="addQuotations">
                                                                <option value="0">Select Quotations</option>
                                                                @foreach($quotations as $quotations)
                                                                    <option value="{{$quotations->intQuotationID}}">{{$quotations->strQuotationDesc}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Standard Rates<sup class="text-primary">&#10033;</sup></label>
                                                        <div>
                                                            <select class="wide" id="addStandard">
                                                                <option value="0">Select Standard Rates</option>
                                                                @foreach($standard as $standard)
                                                                    <option value="{{$standard->intStandardID}}"> {{$standard->strStandardDesc}} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Content<sup class="text-primary">&#10033;</sup></label>
                                                <textarea class="summernoteContract" id="addContractDetails"></textarea>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button onclick="createAgreements()" type="button" class="float-right btn btn-primary waves-effect">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <section class="sectionDark">
                        <div class="container">
                            <h5 class="section-header text-center" style="text-transform: uppercase;">
                          Agreements List  
                        </h5>
                        </div>
                        @if(count($agreements) > 0)
                            @foreach($agreements as $agreements)
                            <div class="container">
                                    <div class="card text-center">
                                        <div class="card-header bg-primary text-white">
                                            <h4>{{$agreements->strAgreementTitle}}</h4>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" onclick="getAgreements({{$agreements->intAgreementID}})" class="float-left mt-2"> <!--data-toggle="modal" data-target="#viewContractInfo"-->
                                                More Info <i class="ion ion-ios-arrow-right"></i>
                                            </a>
                                            <button onclick="deleteContracts({{$agreements->intAgreementID}})" type="button" class="btn btn-sm btn-danger waves-effect waves-circle float-right" data-toggle="tooltip" title="Delete">
                                                <i class="miniIcon fas fa-trash"></i>
                                            </button>
                                            <button onclick="editAgreements({{$agreements->intAgreementID}})" type="button" class="btn btn-sm btn-secondary waves-effect waves-circle float-right mr-2" data-tooltip="tooltip" title="Edit"> <!--data-toggle="modal" data-target="#editContractInfo"-->
                                                <i class="miniIcon ion ion-edit"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                        @endif
                    </section>
                </div>
            </div>
        </div>
    </section>
    @include('Agreements.edit')
    @include('Agreements.info')
@endsection
