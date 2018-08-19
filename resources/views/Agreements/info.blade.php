<div class="modal fade" id="viewAgreementInfo" tabindex="-1" role="dialog" aria-labelledby="viewContractInfoTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewContractInfoTitle">Contract 2</h5>
                <button type="button" class="close modalClose waves-effect" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modalBody">
                
                <h1 class="agreementTitle"></h1>
                <p id="agreementDetails"></p>
                <h5 id="agreementStandard"></h5>
                <p id="agreementDet">
            </div>
            <input type="hidden" id="contractsInfoID">
            <div class="modal-footer">
                <button onclick="editContractDetailsModal()" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#editContractInfo">Edit Contract</button>
            </div>
        </div>
    </div>
</div>