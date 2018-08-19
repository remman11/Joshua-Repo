<div class="row mb-3">
    <div class="col">
        <div class="form-group">
            <label>Quotations<sup class="text-primary">&#10033;</sup></label>
            <div>
                <select class="form-control" id="editQuotes">
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
                <select class="wide" id="editStandard">
                    <option value="0">Select Standard Rates</option>
                    @foreach($standard as $standard)
                        <option value="{{$standard->intStandardID}}"> {{$standard->strStandardDesc}} </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>