<!-- Add View -->
<div class="addLayout" id="addLayout">
    <div class="card animated bounceInLeft">
        <div class="card-header">
            <span>
                <button id="backButton" class="btn btn-lg btn-link float-left mt-1" data-toggle="tooltip"  title="Back" role="button">
                <i class="ion-chevron-left custSize"></i>
                </button>
                <button class="btn btn-lg btn-link float-right" disabled></button>
                <h3 class="text-center">ADD</h3>
            </span>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="addUserType">User Type Name<sup class="text-primary">&#10033;</sup></label>
                        <input type="text" class="form-control" id="addUserType" name="addUserType" placeholder="User Type Name">
                    </div>
                </div>
            </div>
            <button onclick="postUserType()"class="btn btn-primary float-right font-weight-bold">Submit</button>
            <br>
        </div>
    </div>
</div>