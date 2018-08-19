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
                        <label for="editLastName">Last Name<sup class="text-primary">&#10033;</sup></label>
                        <input type="text" class="form-control" id="editLastName" name="editLastName" placeholder="Last Name">
                    </div>
                </div>
                <div class="col">    
                    <div class="form-group">
                        <label for="editFirstName">First Name<sup class="text-primary">&#10033;</sup></label>
                        <input type="text" class="form-control" id="editFirstName" name="editFirstName" placeholder="First Name">
                    </div>
                </div>
                <div class="col">    
                    <div class="form-group">
                        <label for="editMiddleName">Middle Name<sup class="text-primary">&#10033;</sup></label>
                        <input type="text" class="form-control" id="editMiddleName" name="editMiddleName" placeholder="Middle Name">
                    </div>
                </div>
            </div>
            <input type="hidden" id="empID">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="editPositionSelect">Position<sup class="text-primary">&#10033;</sup></label>
                        <select class="form-control" name="editPositionSelect" id="editPositionSelect">
                            <option>Select Position</option>
                            @foreach($positions as $positions)
                                <option value="{{$positions->intPositionID}}">{{$positions->strPositionName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="editEmpType">Employee Type<sup class="text-primary">&#10033;</sup></label>
                        <input type="text" class="form-control" id="editEmpType" name="editEmpType" placeholder="Employee Type">
                    </div>
                </div>
            </div>
            <button onclick="editEmployeeSubmit()" class="btn btn-primary float-right font-weight-bold">Submit</button>
            <br>
        </div>
    </div>
</div>