@extends('admin_view.admin_layout.layout')
@section('content')
<main>
    <!-- Main dashboard content-->
    <div class="container-xl p-5">
        <div class="row justify-content-between align-items-center mb-5">
            <div class="col flex-shrink-0 mb-5 mb-md-0">
                <h1 class="display-4 mb-0">Relationship Manager</h1>
                <div class="text-muted"> Account Cabal Report</div>
            </div>
            <div class="col-12 col-md-auto">
                <div class="d-flex flex-column flex-sm-row gap-3">
                    <mwc-select class="mw-50 mb-2 mb-md-0" outlined="" label="select report">
                        <mwc-list-item value="1">Deposit Cabal</mwc-list-item>
                        <mwc-list-item value="2">Risk Asset Cabal</mwc-list-item>
                        <mwc-list-item value="2">Account Position</mwc-list-item>
                    </mwc-select>
                </div>
            </div>
        </div>

        <div class="row gx-5">
            <!-- Revenue breakdown chart example-->
            <div class="col-lg-6 mb-5">
                <div class="card card-raised h-100">
                    <div class="card-header company_primary_color_bg text-white px-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-4">
                                <h2 class="card-title text-white mb-0">Relatioship Manager</h2>
                                <span class="card-subtitle text-white">Details</span>
                            </div>
                            <div class="d-flex gap-2 me-n2">
                                <img class="rounded-circle pr-3" src="{{'assets/img/Adedeji-olumide.png'}}" style="height: 50px;"/>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-5">
                        <table class="table table-sm mb-0" width: 100px>
                            <tbody>
                                <tr>
                                    <th>NAME:</th>
                                    <td>Ogunbodede Samuel</td>
                                </tr>
                                <tr>
                                    <th>STAFF ID:</th>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <th>RM CODE:</th>
                                    <td>IT-105</td>
                                </tr>
                                <tr>
                                    <th>UNIT:</th>
                                    <td>IT </td>
                                </tr>
                                <tr>
                                    <th>POSITION:</th>
                                    <td>IT, Programer</td>
                                </tr>
                                <tr>
                                    <th>GRADE:</th>
                                    <td>BO 1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Report pie chart -->
            <div class="col-lg-6 mb-5">
                <div class="card card-raised h-100">
                    <div class="card-header company_primary_color_bg text-white px-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-4">
                                <h2 class="card-title text-white mb-0">Deposit</h2>
                                <div class="card-subtitle">Performance Summary</div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-lg btn-text-light btn-icon me-n2 dropdown-toggle"
                                    id="segmentsDropdownButton" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="material-icons">more_vert</i></button>
                                <ul class="dropdown-menu" aria-labelledby="segmentsDropdownButton">
                                    <li><a class="dropdown-item"
                                            href="app-dashboard-default.html#!">Action</a></li>
                                    <li><a class="dropdown-item"
                                            href="app-dashboard-default.html#!">Another action</a></li>
                                    <li><a class="dropdown-item"
                                            href="app-dashboard-default.html#!">Something else here</a>
                                    </li>
                                    {{-- <li>
                                        <hr class="dropdown-divider" />
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex h-100 w-100 align-items-center justify-content-center">
                            <div class="w-100" style="max-width: 20rem"><canvas
                                    id="myPieChart"></canvas></div>
                        </div>
                    </div>
                    {{-- <div class="card-footer bg-transparent position-relative ripple-gray">
                        <table class="table table-sm table-borderless mb-0" style="width:100%">
                            <tbody>
                                <tr>
                                    <th style="width:40%">EXPECTED TARGET:</th>
                                    <td>1,000</td>
                                </tr>
                                <tr>
                                    <th style="width:40%">ACHIEVED TARGET:</th>
                                    <td>100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Report summary -->
        <div class="card card-raised">
            <div class="card-header company_primary_color_bg text-white px-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-4">
                        <h2 class="card-title text-white mb-0">Deposit</h2>
                        <div class="card-subtitle">Performance Summary</div>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-lg btn-text-white btn-icon" type="button"><i
                                class="material-icons">download</i></button>
                        <button class="btn btn-lg btn-text-white btn-icon" type="button"><i
                                class="material-icons">print</i></button>
                    </div>
                </div>
            </div>
            <div class="card-body p-4">
                <!-- Simple DataTables example-->
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Ext.</th>
                            <th>City</th>
                            <th data-type="date" data-format="YYYY/MM/DD">Start Date</th>
                            <th>Completion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Unity Pugh</td>
                            <td>9958</td>
                            <td>Curicó</td>
                            <td>2005/02/11</td>
                            <td>37%</td>
                        </tr>
                        <tr>
                            <td>Theodore Duran</td>
                            <td>8971</td>
                            <td>Dhanbad</td>
                            <td>1999/04/07</td>
                            <td>97%</td>
                        </tr>
                        <tr>
                            <td>Kylie Bishop</td>
                            <td>3147</td>
                            <td>Norman</td>
                            <td>2005/09/08</td>
                            <td>63%</td>
                        </tr>
                        <tr>
                            <td>Willow Gilliam</td>
                            <td>3497</td>
                            <td>Amqui</td>
                            <td>2009/29/11</td>
                            <td>30%</td>
                        </tr>
                        <tr>
                            <td>Blossom Dickerson</td>
                            <td>5018</td>
                            <td>Kempten</td>
                            <td>2006/11/09</td>
                            <td>17%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection

