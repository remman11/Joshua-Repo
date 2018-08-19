<div id="addLayout">
    <div class="card animated bounceInLeft">
        <div class="card-header">
            <spanstyle="height:50px;">
                <a id="btnAddgoBack" href="tugboat.html" class="btn btn-lg btn-link float-left mt-1" data-toggle="tooltip" title="Back" role="button">
                    <i class="ion-chevron-left custSize"></i>
                </a>
                <button class="btn btn-lg btn-link float-right" disabled></button>
                <h3 class="text-center">ADD</h3>
                </span>
        </div>
        <div class="card-body">
            <div id="smartwizard">
                <ul>
                    <li><a href="#step-1">Tugboat Pictures<br /><small>First Step</small></a></li>
                    <li><a href="#step-2">Main Information<br /><small>Second Step</small></a></li>
                    <li><a href="#step-3">Tugboat Specification<br /><small>Third Step</small></a></li>
                    <li><a href="#step-4">Tugboat Classification<br /><small>Fourth Step</small></a></li>
                </ul>

                <div>
                    <div id="step-1" class="ml-3 mt-3 mr-3">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <img src="/others/stisla_admin_v1.0.0/dist/img/example-image.jpeg" class="img-thumbnail" id="AddfPic">
                                    <br>
                                    <br>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" accept='image/*' id="AddfirstPic" onchange="ValidateSingleInput(this);">
                                        <label class="custom-file-label" for="AddfirstPic" id="addLblfirstPic">First Picture<sup class="text-primary">&#10033;</sup></label>
                                        <small id="AddfirstFileChosen" class="form-text text-muted lblifValid">No First Picture chosen.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <img src="/others/stisla_admin_v1.0.0/dist/img/example-image.jpeg" class="img-thumbnail" id="AddsPic">
                                    <br>
                                    <br>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" accept='image/*' id="AddsecPic" onchange="ValidateSingleInput(this);">
                                        <label class="custom-file-label" for="AddsecPic" id="addLblsecPic">Second Picture<sup class="text-primary">&#10033;</sup></label>
                                        <small id="AddsecFileChosen" class="form-text text-muted lblifValid">No Second Picture chosen.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <img src="/others/stisla_admin_v1.0.0/dist/img/example-image.jpeg" class="img-thumbnail" id="AddtPic">
                                    <br>
                                    <br>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" accept='image/*' id="AddthirdPic" onchange="ValidateSingleInput(this);">
                                        <label class="custom-file-label" for="AddthirdPic" id="addLblthirdPic">Third Picture<sup class="text-primary">&#10033;</sup></label>
                                        <small id="AddthirdFileChosen" class="form-text text-muted lblifValid">No Third Picture chosen.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step-2" class="ml-3 mt-3 mr-3">
                        <form id="AddformInfo">
                            <!-- First Row w/ 3 Columns-->
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddName">Name<sup class="text-primary">&#10033;</sup></label>
                                        <input type="text" class="form-control" id="AddName" name="AddName" placeholder="Tugboat Name">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddLength">Length<sup class="text-primary">&#10033;</sup></label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="AddLength" name="AddLength" placeholder="Tugboat Length">
                                            <div class="input-group-append">
                                                <span class="input-group-text">m</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddBreadth">Breadth<sup class="text-primary">&#10033;</sup></label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="AddBreadth" name="AddBreadth" placeholder="Tugboat Breadth">
                                            <div class="input-group-append">
                                                <span class="input-group-text">m</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Second Row w/ 3 Columns-->
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddDepth">Depth<sup class="text-primary">&#10033;</sup></label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="AddDepth" name="AddDepth" placeholder="Tugboat Depth">
                                            <div class="input-group-append">
                                                <span class="input-group-text">m</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddHorsePower">Horse Power<sup class="text-primary">&#10033;</sup></label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="AddHorsePower" name="AddHorsePower" placeholder="Tugboat Horse Power">
                                            <div class="input-group-append">
                                                <span class="input-group-text">HP</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddMaxSpeed">Maximum Speed<sup class="text-primary">&#10033;</sup></label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="AddMaxSpeed" name="AddMaxSpeed" placeholder="Tugboat Max Speed">
                                            <div class="input-group-append">
                                                <span class="input-group-text">knots</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Third Row w/ 3 Columns-->
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddBollardPull">Bollard Pull<sup class="text-primary">&#10033;</sup></label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="AddBollardPull" name="AddBollardPull" placeholder="Tugboat Bollard Pull">
                                            <div class="input-group-append">
                                                <span class="input-group-text">tons</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddGrossTonnage">Gross Tonnage<sup class="text-primary">&#10033;</sup></label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="AddGTonnage" name="AddGTonnage" placeholder="Tugboat Gross Tonnage">
                                            <div class="input-group-append">
                                                <span class="input-group-text">tons</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddNetTonnage">Net Tonnage<sup class="text-primary">&#10033;</sup></label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="AddNTonnage" name="AddNTonnage" placeholder="Tugboat Net Tonnage">
                                            <div class="input-group-append">
                                                <span class="input-group-text">tons</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fourth Row w/ 3 Columns-->
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddLastDryDocked">Last Dry Docked<sup class="text-primary">&#10033;</sup></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                            </div>
                                            <input id="AddLastDryDocked" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddLicenseNum">License Number<sup class="text-primary">&#10033;</sup></label>
                                        <input type="text" class="form-control" id="AddLicenseNum" name="AddLicenseNum" placeholder="Tugboat License Number">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddLicenseExpDate">License Expiration Date<sup class="text-primary">&#10033;</sup></label>
                                        <input class="form-control" id="AddLicenseExpDate" name="AddLicenseExpDate" placeholder="YYYY-MM-DD">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="step-3" class="ml-3 mt-3 mr-3">
                        <form id="AddformSpec">
                            <!-- First Row w/ 4 Columns-->
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddLocBuilt">Location Built<sup class="text-primary">&#10033;</sup></label>
                                        <input type="text" class="form-control" id="AddLocBuilt" name="AddLocBuilt" placeholder="Tugboat Location Built">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddDateBuilt">Date Built<sup class="text-primary">&#10033;</sup></label>
                                        <input class="form-control" id="AddDateBuilt" name="AddDateBuilt" placeholder="YYYY-MM-DD">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddBuilder">Builder<sup class="text-primary">&#10033;</sup></label>
                                        <input type="text" class="form-control" id="AddBuilder" name="AddBuilder" placeholder="Tugboat Builder">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddMakerPower">Maker Power<sup class="text-primary">&#10033;</sup></label>
                                        <input type="text" class="form-control" id="AddMakerPower" name="AddMakerPower" placeholder="Tugboat Maker Power">
                                    </div>
                                </div>
                            </div>
                            <!-- Second Row w/ 4 Columns-->
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="HullMaterial">Hull Material<sup class="text-primary">&#10033;</sup></label>
                                        <input type="text" class="form-control" id="AddHullMaterial" name="AddHullMaterial" placeholder="Tugboat Hull Material">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddDrive">Drive<sup class="text-primary">&#10033;</sup></label>
                                        <input type="text" class="form-control" id="AddDrive" name="AddDrive" placeholder="Tugboat Drive">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddCylperCircle">Cylinder per Circle<sup class="text-primary">&#10033;</sup></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="AddCylinder" name="AddCyl" placeholder="Cylinder">
                                            <div class="input-group-append">
                                                <span class="input-group-text">/</span>
                                            </div>
                                            <input type="text" class="form-control" id="AddCycle" name="AddCircle" placeholder="Circle">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddAuxEngine">Auxiliary Engine<sup class="text-primary">&#10033;</sup></label>
                                        <input type="text" class="form-control" id="AddAuxEngine" name="AddAuxEngine" placeholder="Tugboat Auxiliary Engine">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="step-4" class="ml-3 mt-3 mr-3">
                        <form id="AddformClass">
                            <!-- First Row w/ 4 Columns-->
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddClassNum">Classification Number<sup class="text-primary">&#10033;</sup></label>
                                        <input type="text" class="form-control" id="AddClassNum" name="AddClassNum" placeholder="Tugboat Classification Number">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddOfficialNum">Official Number<sup class="text-primary">&#10033;</sup></label>
                                        <input type="text" class="form-control" id="AddOfficialNum" name="AddOfficialNum" placeholder="Tugboat Official Number">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddIMONum">IMO Number<sup class="text-primary">&#10033;</sup></label>
                                        <input type="text" class="form-control" id="AddIMONum" name="AddIMONum" placeholder="Tugboat IMO Number">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Flag<sup class="text-primary">&#10033;</sup></label>
                                        <div id="AddFlag" class="niceCountryInputSelector form-control" style="width: 300px;" data-selectedcountry="PH" data-showspecial="false" data-showflags="true" data-i18nall="All selected" data-i18nnofilter="No selection" data-i18nfilter="Filter" data-onchangecallback="onChangeCallback">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Second Row w/ 3 Columns-->
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddType">Type<sup class="text-primary">&#10033;</sup></label>
                                        <input type="text" class="form-control" id="AddType" name="AddType" placeholder="Tugboat Type">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddTradingArea">Trading Area<sup class="text-primary">&#10033;</sup></label>
                                        <input type="text" class="form-control" id="AddTradingArea" name="AddTradingArea" placeholder="Tugboat Trading Area">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddHomePort">Home Port<sup class="text-primary">&#10033;</sup></label>
                                        <input type="text" class="form-control" id="AddHomePort" name="AddHomePort" placeholder="Tugboat Home Port">
                                    </div>
                                </div>
                            </div>
                            <!-- Third Row w/ 3 Columns-->
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>ISPS Code Compliance<sup class="text-primary">&#10033;</sup></label>
                                        <br>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="addISPSComplianceYes" name="addISPSCompliance" value="Yes" class="custom-control-input" checked>
                                            <label class="custom-control-label" for="addISPSComplianceYes">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="addISPSComplianceNo" name="addISPSCompliance" value="No" class="custom-control-input">
                                            <label class="custom-control-label" for="addISPSComplianceNo">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>ISM Code Standard<sup class="text-primary">&#10033;</sup></label>
                                        <br>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="addCStandardYes" name="addCStandard" value="Yes" class="custom-control-input" checked>
                                            <label class="custom-control-label" for="addCStandardyes">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="addCStandardNo" name="addCStandard" value="No" class="custom-control-input">
                                            <label class="custom-control-label" for="addCStandardNo">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="AddInsurance1">Insurance # 1<sup class="text-primary">&#10033;</sup></label>
                                        <input type="text" class="form-control" id="AddInsurance1" name="AddInsurance[]" placeholder="Tugboat Insurance # 1">
                                        <button type="button" id="btnAddInsuranceAdd" class="btn btn-primary float-right mt-2 btn-lg" data-toggle="tooltip" title="Add field for another Insurance"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group" id="AddTClassInsurance1">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group" id="AddTClassInsurance2">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group" id="AddTClassInsurance3">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="hideFlag">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>