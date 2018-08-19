<div class="modal fade" id="editContractInfo" tabindex="-1" role="dialog" aria-labelledby="editContractInfoTitle" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editContractInfoTitle"><small class="smCat2">Edit Contract</small></h5>
                <button type="button" class="close modalClose waves-effect" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modalBody">
                <div class="form-group">
                    <label for="editContractTitle">Title<sup class="text-primary">&#10033;</sup></label>
                    <input type="text" id="editAgreementTitle" name="editAgreementTitle" class="form-control" required>
                    <div class="invalid-feedback">
                        Please fill in the title.
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="form-group">
                            <label>Quotations<sup class="text-primary">&#10033;</sup></label>
                            <div>
                                <select class="wide selectUpdate" id="editQuotes">
                                    <option value="0">Select Quotations</option>
                                    @foreach($quotations2 as $quotations2)
                                        <option value="{{$quotations2->intQuotationID}}">{{$quotations2->strQuotationDesc}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Standard Rates<sup class="text-primary">&#10033;</sup></label>
                            <div>
                                <select class="wide selectUpdate" id="editStandard">
                                    <option value="0">Select Standard Rates</option>
                                    @foreach($standard2 as $standard2)
                                        <option value="{{$standard2->intStandardID}}"> {{$standard2->strStandardDesc}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Content<sup class="text-primary">&#10033;</sup></label>
                    <textarea class="summernoteContract" name="editContractDetails" id="editAgreementDetails"></textarea>
                </div>
                <input type="hidden" id="hideAgreementsID">
            </div>
            <div class="modal-footer">
                <button onclick="editAgreementSubmit()" id="editAgreementsButton" type="button" class="btn btn-primary waves-effect">Save Changes</button>
            </div>
        </div>
    </div>
</div>