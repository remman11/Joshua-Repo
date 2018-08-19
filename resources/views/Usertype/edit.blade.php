<!-- Edit View -->
<div id="editLayout" class="editLayout">
    <div class="card animated bounceInLeft">
        <div class="card-header">
            <spanstyle="height:50px;">
                <button id="backButtonEdit" class="btn btn-lg btn-link float-left mt-1" data-toggle="tooltip" title="Back" role="button">
                    <i class="ion-chevron-left custSize"></i>
                </button>
                <button class="btn btn-lg btn-link float-right"></button>
                <h3 class="text-center">EDIT</h3>
            </span>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="editUserType">User Type Name<sup class="text-primary">&#10033;</sup></label>
                        <input type="text" class="form-control" id="editUserType" name="editUserType" placeholder="User Type Name">
                        <input type="hidden" id="editIDhide">
                    </div>
                </div>
            </div>
            <button onclick="editUserTypeSubmit()" class="btn btn-primary float-right font-weight-bold">Submit</button>
            <br>
        </div>
    </div>
</div>