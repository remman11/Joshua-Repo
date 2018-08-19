<div id="editLayout">
    <div class="card animated bounceInLeft">
        <div class="card-header">
            <spanstyle="height:50px;">
                <a id="btnEditgoBack" href="tugboat.html" class="btn btn-lg btn-link float-left mt-1" data-toggle="tooltip" title="Back" role="button">
                    <i class="ion-chevron-left custSize"></i>
                </a>
                <button class="btn btn-lg btn-link float-right"></button>
                <h3 class="text-center">EDIT</h3>
                </span>
        </div>
        <div class="card-body">
            <div class="row">
                <!--Tabs for the SmartWizard-->
                <div class="col-12 col-sm-12 col-md-4">
                    <ul class="nav nav-pills flex-column" id="editTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active tabEdit" id="editPicTab" data-toggle="tab" href="#editPicContent" role="tab" aria-controls="picAControl" aria-selected="true">Pictures</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tabEdit" id="editMinfoTab" data-toggle="tab" href="#editMinfoContent" role="tab" aria-controls="minfoAControl" aria-selected="false">Main Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tabEdit" id="editTSpecTab" data-toggle="tab" href="#editTSpecContent" role="tab" aria-controls="tSpecAControl" aria-selected="false">Tugboat Specification</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tabEdit" id="editTClassTab" data-toggle="tab" href="#editTClassContent" role="tab" aria-controls="tClassAControl" aria-selected="false">Tugboat Classification</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-8">
                    <div class="tab-content" id="editTabContent">
                        <!-- Picture tab -->
                        <div class="tab-pane fade show active" id="editPicContent" role="tabpanel" aria-labelledby="editPicTab">
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <img src="/others/stisla_admin_v1.0.0/dist/img/example-image.jpeg" class="img-thumbnail" id="editfPic">
                                            <br>
                                            <br>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" accept='image/*' id="editFirstPic" onchange="ValidateSingleInput(this);">
                                                <label class="custom-file-label" for="editFirstPic" id="editLblfirstPic">First Picture<sup class="text-primary">&#10033;</sup></label>
                                                <small id="editFirstFileChosen" class="form-text text-muted">No First Picture chosen.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <img src="/others/stisla_admin_v1.0.0/dist/img/example-image.jpeg" class="img-thumbnail" id="editsPic">
                                            <br>
                                            <br>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" accept='image/*' id="editSecPic" onchange="ValidateSingleInput(this);">
                                                <label class="custom-file-label" for="editSecPic" id="editLblsecPic">Second Picture<sup class="text-primary">&#10033;</sup></label>
                                                <small id="editSecFileChosen" class="form-text text-muted">No Second Picture chosen.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <img src="/others/stisla_admin_v1.0.0/dist/img/example-image.jpeg" class="img-thumbnail" id="edittPic">
                                            <br>
                                            <br>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" accept='image/*' id="editThirdPic" onchange="ValidateSingleInput(this);">
                                                <label class="custom-file-label" for="editThirdPic" id="editLblthirdPic">Third Picture<sup class="text-primary">&#10033;</sup></label>
                                                <small id="editThirdFileChosen" class="form-text text-muted">No Third Picture chosen.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <button type="button" onclick="editPictureSubmit()" class="btn btn-primary float-right font-weight-bold">Submit</button>
                                <br>
                            </form>
                        </div>
                        <!-- Main Info Tab -->
                        <div class="tab-pane fade" id="editMinfoContent" role="tabpanel" aria-labelledby="editMinfoTab">
                            <form id="editFormInfo" class="needs-validation" novalidate>
                                <!-- First Row w/ 2 Columns-->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editName">Name<sup class="text-primary">&#10033;</sup></label>
                                            <input type="text" class="form-control" id="editName" placeholder="Tugboat Name" required>
                                            <div class="invalid-feedback">
                                                Please enter a Name.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editLength">Length<sup class="text-primary">&#10033;</sup></label>
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" id="editLength" placeholder="Tugboat Length" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">m</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Second Row w/ 2 Columns-->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editBreadth">Breadth<sup class="text-primary">&#10033;</sup></label>
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" id="editBreadth" placeholder="Tugboat Breadth" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">m</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editDepth">Depth<sup class="text-primary">&#10033;</sup></label>
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" id="editDepth" placeholder="Tugboat Depth" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">m</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Third Row w/ 2 Columns-->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editHorsePower">Horse Power<sup class="text-primary">&#10033;</sup></label>
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" id="editHorsePower" placeholder="Tugboat Horse Power" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">HP</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editMaxSpeed">Maximum Speed*</label>
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" id="editMaxSpeed" placeholder="Tugboat Max Speed" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">knots</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fourth Row w/ 2 Columns-->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editBollardPull">Bollard Pull<sup class="text-primary">&#10033;</sup></label>
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" id="editBollardPull" placeholder="Tugboat Bollard Pull" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">tons</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editGrossTonnage">Gross Tonnage<sup class="text-primary">&#10033;</sup></label>
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" id="editGrossTonnage" placeholder="Tugboat Gross Tonnage" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">tons</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fifth Row w/ 2 Columns-->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editNetTonnage">Net Tonnage<sup class="text-primary">&#10033;</sup></label>
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" id="editNetTonnage" placeholder="Tugboat Net Tonnage" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">tons</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editLastDryDocked">Last Dry Docked<sup class="text-primary">&#10033;</sup></label>
                                            <input class="form-control" id="editLastDryDocked" placeholder="YYYY-MM-DD">
                                        </div>
                                    </div>
                                </div>
                                <!-- Sixth Row w/ 3 Columns-->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editLicenseNum">License Number<sup class="text-primary">&#10033;</sup></label>
                                            <input type="text" class="form-control" id="editLicenseNumber" placeholder="Tugboat License Number">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editLicenseExpDate">License Expiration Date<sup class="text-primary">&#10033;</sup></label>
                                            <input class="form-control" id="editLicenseExpDate" placeholder="YYYY-MM-DD">
                                        </div>
                                    </div>
                                </div>
                                <button onclick="editMainInformationSubmit()" type="button" class="btn btn-primary float-right font-weight-bold">Submit</button>
                            </form>
                        </div>
                        <!--Specifications Tab-->
                        <div class="tab-pane fade" id="editTSpecContent" role="tabpanel" aria-labelledby="editTSpecTab">
                            <form id="editFormSpec">
                                <!-- First Row w/ 2 Columns-->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editLocBuilt">Location Built<sup class="text-primary">&#10033;</sup></label>
                                            <input type="text" class="form-control" id="editLocBuilt" placeholder="Tugboat Location Built">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editDateBuilt">Date Built<sup class="text-primary">&#10033;</sup></label>
                                            <input class="form-control" id="editDateBuilt" placeholder="YYYY-MM-DD">
                                        </div>
                                    </div>
                                </div>
                                <!-- Second Row w/ 2 Columns-->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editBuilder">Builder<sup class="text-primary">&#10033;</sup></label>
                                            <input type="text" class="form-control" id="editBuilder" placeholder="Tugboat Builder">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editMakerPower">Maker Power<sup class="text-primary">&#10033;</sup></label>
                                            <input type="text" class="form-control" id="editMakerPower" placeholder="Tugboat Maker Power">
                                        </div>
                                    </div>
                                </div>
                                <!-- Third Row w/ 2 Columns-->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editHullMaterial">Hull Material<sup class="text-primary">&#10033;</sup></label>
                                            <input type="text" class="form-control" id="editHullMaterial" placeholder="Tugboat Hull Material">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editDrive">Drive<sup class="text-primary">&#10033;</sup></label>
                                            <input type="text" class="form-control" id="editDrive" placeholder="Tugboat Drive">
                                        </div>
                                    </div>
                                </div>
                                <!-- Fourth Row w/ 2 Columns-->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Cylinder per Cycle<sup class="text-primary">&#10033;</sup></label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="editCylinder" name="editCyl" placeholder="Cylinder">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">/</span>
                                                </div>
                                                <input type="text" class="form-control" id="editCycle" name="editCycle" placeholder="Cycle">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editAuxEngine">Auxiliary Engine<sup class="text-primary">&#10033;</sup></label>
                                            <input type="text" class="form-control" id="editAuxEngine" placeholder="Tugboat Auxiliary Engine">
                                        </div>
                                    </div>
                                </div>
                                <button onclick="editSpecificationSubmit()" type="button" class=" btn btn-primary float-right font-weight-bold">Submit</button>
                            </form>
                        </div>
                        <!--Classification Tab-->
                        <div class="tab-pane fade" id="editTClassContent" role="tabpanel" aria-labelledby="editTClassTab">
                            <form id="editFormClass">
                                <!-- First Row w/ 2 Columns-->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editClassNum">Classification Number<sup class="text-primary">&#10033;</sup></label>
                                            <input type="text" class="form-control" id="editClassNum" placeholder="Tugboat Classification Number">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editOfficialNum">Official Number<sup class="text-primary">&#10033;</sup></label>
                                            <input type="text" class="form-control" id="editOfficialNum" placeholder="Tugboat Official Number">
                                        </div>
                                    </div>
                                </div>
                                <!-- Second Row w/ 2 Columns-->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editIMONum">IMO Number<sup class="text-primary">&#10033;</sup></label>
                                            <input type="text" class="form-control" id="editIMONum" placeholder="Tugboat IMO Number">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Flag<sup class="text-primary">&#10033;</sup></label>
                                            <br>

                                        </div>
                                    </div>
                                </div>
                                <!-- Third Row w/ 2 Columns-->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editType">Type<sup class="text-primary">&#10033;</sup></label>
                                            <input type="text" class="form-control" id="editType" placeholder="Tugboat Type">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editTradingArea">Trading Area<sup class="text-primary">&#10033;</sup></label>
                                            <input type="text" class="form-control" id="editTradingArea" placeholder="Tugboat Trading Area">
                                        </div>
                                    </div>
                                </div>
                                <!-- Fourth Row w/ 2 Columns-->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editHomePort">Home Port<sup class="text-primary">&#10033;</sup></label>
                                            <input class="form-control" id="editHomePort" placeholder="Tugboat Home Port">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group editISPSForm">
                                            <label>ISPS Code Compliance<sup class="text-primary">&#10033;</sup></label>
                                            <br>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="editISPSComplianceYes" name="editISPSCompliance" value="yes" class="custom-control-input">
                                                <label class="custom-control-label" for="editISPSComplianceYes">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="editISPSComplianceNo" name="editISPSCompliance" value="no" class="custom-control-input">
                                                <label class="custom-control-label" for="editISPSComplianceNo">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fifth Row w/ 2 Columns-->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group editISMForm">
                                            <label>ISM Code Standard<sup class="text-primary">&#10033;</sup></label>
                                            <br>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="editCStandardYes" name="editCStandard" value="yes" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="editCStandardYes">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="editCStandardNo" name="editCStandard" value="no" class="custom-control-input">
                                                <label class="custom-control-label" for="editCStandardNo">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="editInsurance1">Insurance # 1<sup class="text-primary">&#10033;</sup></label>
                                            <input type="text" class="form-control" id="editInsurance1" name="editInsurance1" placeholder="Tugboat Insurance # 1">
                                            <button type="button" id="btnEditInsuranceAdd" class="btn btn-primary float-right mt-2 btn-lg" data-toggle="tooltip" title="Add field for another Insurance"><i class="fas fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sixth Row w/ 2 Columns-->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group" id="editTClassInsurance1">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group" id="editTClassInsurance2">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group" id="editTClassInsurance3">
                                        </div>
                                    </div>
                                </div>
                                <button onclick="editClassificationSubmit()" type="button" class="btn btn-primary float-right font-weight-bold">Submit</button>
                                <input type="hidden" id="editTugID">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>