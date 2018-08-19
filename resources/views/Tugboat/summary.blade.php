<div class="modal fade " id="viewSummaryModal" tabindex="-1" role="dialog" aria-labelledby="viewSummaryLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewSummaryLabel"><i class="fas fa-ship"></i></h5>
                <button type="button" class="close modalClose"></button>
                <span aria-hidden="true"><i class="ion-close-round"></i></span>
                </button>
            </div>
            <div class="modal-body modalBody">
                <!-- Carousel -->
                <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#imageCarousel" data-slide-to="1"></li>
                        <li data-target="#imageCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/others/stisla_admin_v1.0.0`/dist/img/tb1.JPG" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/others/stisla_admin_v1.0.0`/dist/img/tb2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/others/stisla_admin_v1.0.0`/dist/img/tb3.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col align-self-center">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Name</th>
                                        <td id="sumName"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Length</th>
                                        <td id="sumLength"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Breadth</th>
                                        <td id="sumBreadth"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Depth</th>
                                        <td id="sumDepth"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Horse Power</th>
                                        <td id="sumHorsePower"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Maximum Speed</th>
                                        <td id="sumMaxSpeed"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Bollard Pull</th>
                                        <td id="sumBollardPull"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Gross Tonnage</th>
                                        <td id="sumGrossTonnage"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Net Tonnage</th>
                                        <td id="sumNetTonnage"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Last Dry Docked</th>
                                        <td id="sumDryDocked"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">License Number</th>
                                        <td id="sumLicenseNum"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">License Expiration Date</th>
                                        <td id="sumLicenseExp"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Boat Specification</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Built In</th>
                                        <td id="sumBuilt"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Builder</th>
                                        <td id="sumBuilder"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Maker Power</th>
                                        <td id="sumMakerPower"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Hull Material</th>
                                        <td id="sumHullMaterial"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Drive</th>
                                        <td id="sumDrive"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Cylinder per Cycle</th>
                                        <td id="sumCylCycle"></td>
                                        <input type="hidden" id="sumCylinder">
                                        <input type="hidden" id="sumCycle">
                                    </tr>
                                    <tr>
                                        <th scope="row">Auxiliary Engine</th>
                                        <td id="sumAuxEngine"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col">
                            <table class="table table-striped">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Boat Classification</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Classification Number</th>
                                        <td id="sumClassNum"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Official Number</th>
                                        <td id="sumOffNum"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">IMO Number</th>
                                        <td id="sumIMONum"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Flag</th>
                                        <td id="sumFlag"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Type</th>
                                        <td id="sumType"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Trading Area</th>
                                        <td id="sumTradingArea"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Home Port</th>
                                        <td id="sumHomeport"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ISPS Code Compliance</th>
                                        <td id="sumISPS"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ISM Code Standard</th>
                                        <td id="sumISMCode"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Insurances</th>
                                        <td id="sumInsurances"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button onclick="postData()" class="btn btn-primary" role="button">Add</button>
            </div>
        </div>
    </div>
</div>