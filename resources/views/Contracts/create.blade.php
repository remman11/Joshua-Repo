@extends('Templates.newTemplate')

@section('assets')
    @include('Contracts.styles')
    @include('Contracts.scripts')
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
    
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <section class="sectionDark">
                    <div class="container">
                        <h5 class="section-header text-center" style="text-transform: uppercase;">
                      Create
                    </h5>
                    </div>
                    @if(count($contracts) > 0)
                    @foreach($contracts as $c)
                    <input type="hidden" id="addCompanyID" value="{{$c->intCCompanyID}}">
                    @endforeach
                    @endif
                    <div class="row ml-1 mr-1">
                        <div class="col">
                            {{-- {!! Form::open(['action'=>'ContractsController@store','method'=>'POST','class'=>'needs-validation','novalidate'=>'']) !!} --}}
                            {{-- <form class="needs-validation" novalidate=""> --}}
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="addContractTitle">Title<sup class="text-primary">&#10033;</sup></label>
                                            <input type="text" name="addContractTitle" id="addContractTitle" placeholder="Title" class="form-control" required>
                                            <div class="invalid-feedback">
                                                Please fill in the title.
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Terms &amp; Conditions<sup class="text-primary">&#10033;</sup></label>
                                                    <div>
                                                        <select class="wide" id="addTermsandCondition">
                                                            <option value="">Select Terms and Condition</option>
                                                            @foreach($terms as $terms)
                                                                <option value="{{$terms->intTermsConditionsID}}">{{$terms->strTermsConditionDesc}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Agreement Description<sup class="text-primary">&#10033;</sup></label>
                                                    <div>
                                                        
                                                            <input type="text" class="wide form-control" id="addAgreement" placeholder="Agrement Description">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Quotation<sup class="text-primary">&#10033;</sup></label>
                                                    <input type="number" min="0" placeholder="1500" class="form-control" id="addQuotation">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Quotation Description<sup class="text-primary">&#10033;</sup></label>
                                                    <input type="text" class="form-control" placeholder="Quotation" id="addQuotationDesc">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Standard Rate<sup class="text-primary">&#10033;</sup></label>
                                                        <select class="wide" id="addStandard">
                                                                <option value="">Select Standard</option>
                                                        @foreach($standard as $standards)
                                                                <option value="{{$standards->intStandardID}}">
                                                                    {{$standards->strStandardDesc}} - {{$standards->fltSDeliveryRate}}
                                                                </option>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Standard Description<sup class="text-primary">&#10033;</sup></label>
                                                        <input type="hidden" class="form-control wide" id="addStandardDesc">
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                            <label>Content<sup class="text-primary">&#10033;</sup></label>
                                            <textarea class="summernoteContract" id="addContractDetails" name="addContractDetails"></textarea>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button onclick="createContract()" role="button" class="float-right btn btn-primary waves-effect">Save</button>
                                    </div>
                                </div>
                            {{-- </form> --}}
                            {{-- {!! Form::close() !!} --}}
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
                            Contract List  
                        </h5>
                    </div>
                    @if(count($contracts)>0)
                        @foreach($contracts as $contracts)
                            
                        @endforeach
                    @endif
                </section>
            </div>
        </div>
    </div>
    
</section>
@include('Contracts.info')
@include('Contracts.edit')
@endsection