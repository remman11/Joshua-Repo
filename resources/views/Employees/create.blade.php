<!-- Add View -->
<div class="addLayout" id="addLayout">
    <form id="employeeForm">
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
                            <label for="addLastName">Last Name<sup class="text-primary">&#10033;</sup></label>
                            <input type="text" class="form-control" id="addLastName" name="addLastName" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col">    
                        <div class="form-group">
                            <label for="addFirstName">First Name<sup class="text-primary">&#10033;</sup></label>
                            <input type="text" class="form-control" id="addFirstName" name="addFirstName" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col">    
                        <div class="form-group">
                            <label for="addMiddleName">Middle Name<sup class="text-primary">&#10033;</sup></label>
                            <input type="text" class="form-control" id="addMiddleName" name="addMiddleName" placeholder="Middle Name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="positionSelect">Position<sup class="text-primary">&#10033;</sup></label>
                            <select name="positionSelect" class="form-control" id="positionSelect">
                                <option>Select Position</option>
                                @foreach($positions as $positions)
                                    <option value="{{$positions->intPositionID}}">{{$positions->strPositionName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="addEmpType">Employee Type<sup class="text-primary">&#10033;</sup></label>
                            <input type="text" class="form-control" id="addEmpType" name="addEmpType" placeholder="Employee Type">
                        </div>
                    </div>
                </div>
                <br>
                <button onclick="postEmployee()" role="button" class="btn btn-primary float-right font-weight-bold">Submit</button>
            </div>
        </div>
    </form>
</div>  