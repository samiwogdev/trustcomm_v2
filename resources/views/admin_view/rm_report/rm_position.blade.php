@extends('admin_view.admin_layout.layout')
@section('content')
    <main>
        <!-- Main dashboard content-->
        <div class="container-xl p-5">
            <div class="row justify-content-between align-items-center mb-5">
                <div class="col flex-shrink-0 mb-5 mb-md-0">
                    <h1 class="display-4 mb-0">Relationship Manager</h1>
                    <div class="text-muted"> Customer Account Balances Report</div>
                </div>
                <div class="col-12 col-md-auto">
                    <div class="d-flex flex-column flex-sm-row gap-3">
                        <mwc-select class="mw-50 mb-2 mb-md-0" outlined="" label="select report">
                            <mwc-list-item value="default" type="button" data-bs-toggle="modal"
                                data-bs-target="#default">Default (Me)</mwc-list-item>
                            <mwc-list-item value="rm" type="button" data-bs-toggle="modal"
                                data-bs-target="#rm">Relationship Manager</mwc-list-item>
                            <mwc-list-item value="branch" type="button" data-bs-toggle="modal"
                                data-bs-target="#branch">Branch/Unit</mwc-list-item>
                        </mwc-select>
                    </div>
                </div>
            </div>
            <!-- Start Body Div -->
            @if (isset($apiData['data']))
                <div>
                    <!-- Start Report Summary -->
                    <div class="row gx-5">
                        <!-- rm details-->
                        @if (isset($apiData['status']))
                        <div class="col-lg-6 mb-5">
                            <div class="card card-raised h-100">
                                <div class="card-header company_primary_color_bg text-white px-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="me-4">
                                            <h2 class="card-title text-white mb-0">Relatioship Manager</h2>
                                            <span class="card-subtitle text-white">Details</span>
                                        </div>
                                        <div class="d-flex gap-2 me-n2">
                                            <img class="rounded-circle pr-3" src="{{ 'assets/img/Adedeji-olumide.jpg' }}"
                                                style="height: 50px;" />
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-5">
                                    <table class="table table-sm mb-0" width: 100px>
                                        <tbody>
                                            @if ($apiData['status'])
                                            @foreach ( $apiData['status'] as $rm_detail)
                                            <tr>
                                                <th>NAME:</th>
                                                <td style="font-size: 13px">{{ $rm_detail->rm_firstName . " ". $rm_detail->rm_lastName . " ". $rm_detail->rm_middleName }}</td>
                                            </tr>
                                            <tr>
                                                <th>STAFF ID:</th>
                                                <td style="font-size: 13px">{{ $rm_detail->rm_staffId }}</td>
                                            </tr>
                                            <tr>
                                                <th>RM CODE:</th>
                                                <td style="font-size: 13px">{{ $rm_detail->rm_code }}</td>
                                            </tr>
                                            <tr>
                                                <th>UNIT:</th>
                                                <td style="font-size: 13px">{{ $rm_detail->rm_unitName }} </td>
                                            </tr>
                                            <tr>
                                                <th>POSITION:</th>
                                                <td style="font-size: 13px">{{ $rm_detail->rm_jobTitle }}</td>
                                            </tr>
                                            <tr>
                                                <th>GRADE:</th>
                                                <td style="font-size: 13px">{{ $rm_detail->rm_grade }}</td>
                                            </tr>
                                            @endforeach
                                           @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endif
                        <!-- end rm details-->

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
                                                <li><a class="dropdown-item" href="app-dashboard-default.html#!">Preview Breakdown</a>
                                                </li>
                                                <li><a class="dropdown-item" href="app-dashboard-default.html#!">Print</a></li>
                                                <li><a class="dropdown-item" href="app-dashboard-default.html#!">Download</a></li>
                                                <li><a class="dropdown-item" href="app-dashboard-default.html#!">Send to Email</a></li>
                                                {{-- <li>
                                        <hr class="dropdown-divider" />
                                    </li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-4">
                                    <div class="d-flex h-100 w-100 align-items-center justify-content-center">
                                        <div class="w-100" style="max-width: 20rem"><canvas id="myPieChart"></canvas></div>
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
                    <!-- End Report Summary -->

                    <!-- Start Report Breakdown -->
                    {{-- @if (isset($apiData['data'])) --}}
                    <div class="card card-raised">
                        <div class="card-header company_primary_color_bg text-white px-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-4">
                                    <h2 class="card-title text-white mb-0">Deposit</h2>
                                    <div class="card-subtitle">Performance Summary</div>
                                </div>

                                <div class="d-flex gap-2">
                                    {{-- <button class="btn btn-lg btn-text-white btn-icon" type="button"><i
                                            class="material-icons">download</i></button>
                                    <button class="btn btn-lg btn-text-white btn-icon" type="button"><i
                                            class="material-icons">print</i></button> --}}
                                            <div class="dropdown">
                                                <button class="btn btn-lg btn-text-light btn-icon me-n2 dropdown-toggle"
                                                    id="segmentsDropdownButton" type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false"><i class="material-icons">more_vert</i></button>
                                                    <ul class="dropdown-menu" aria-labelledby="segmentsDropdownButton">
                                                        <li><a class="dropdown-item" href="app-dashboard-default.html#!">Preview Breakdown</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="app-dashboard-default.html#!">Print</a></li>
                                                        <li><a class="dropdown-item" href="app-dashboard-default.html#!">Download</a></li>
                                                        <li><a class="dropdown-item" href="app-dashboard-default.html#!">Send to Email</a></li>
                                                        {{-- <li>
                                                <hr class="dropdown-divider" />
                                            </li> --}}
                                                    </ul>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <!-- Simple DataTables example-->
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Book Balance (&#8358)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($apiData['data'] as $item)
                                        @if (!Str::contains($item['ProdName'], 'PAST DUE'))
                                            @php
                                                $totalBal = $item['TotalBookBal'];
                                            @endphp
                                            @if (Str::contains($totalBal, '-'))
                                                @php
                                                    $totalBal = str_replace('-', '', $item['TotalBookBal']);
                                                @endphp
                                            @endif
                                            <tr>
                                                <td>{{ $item['ProdName'] }}</td>
                                                <td>{{ number_format($totalBal) }}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            @php
                                $loan= 0;
                                $deposit = 0;
                            @endphp
                            @foreach ( $apiData['data'] as $data)
                            @if (!Str::contains($data['ProdName'], 'PAST DUE'))
                            @php
                            $totalBookBal = $data['TotalBookBal'];
                            @endphp
                            @if (Str::contains($totalBookBal, '-'))
                            @php
                            $totalBookBal = str_replace('-', '', $totalBookBal);
                            @endphp
                            @endif
                            @if ($data['ProdCode'] > 700)
                            @php
                                $loan+= $totalBookBal;
                            @endphp
                            @else
                            @php
                                $deposit+= $totalBookBal;
                            @endphp
                            @endif
                            @endif
                            @endforeach
                        </div>
                    </div>
                    {{-- @endif --}}
                    <!-- End Report Breakdown -->
                </div>
            @endif
            <!-- End Body Div -->
        </div>
        <!-- End Main Div -->
    </main>

    <!-- modal section -->
    <!-- Defaul modal -->
    <div class="modal fade" id="default" tabindex="-1" aria-labelledby="defaultLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="defaultLabel">Default Report</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('rm_position_data') }}" method="POST">@csrf
                        <div class="row mb-5">
                            <div class="w-100 mb-3" style="max-width: 50%">
                                <select name="name" class="form-select mb-3" id="select_box2">
                                    <option value="">Select Relationship Manager</option>
                                    <option value="Ogunbodede, Samuel/samuel.ogunbodede@livingtrustng.com">Ogunbodede, Samuel</option>
                                </select>
                            </div>

                            <div class="w-100 mb-3" style="max-width: 21.875rem">
                                <input type="submit" value="Preview" class="btn btn-primary p-3">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End defaul modal -->

    <!-- RM modal -->
    <div class="modal fade" id="rm" tabindex="-1" aria-labelledby="rmLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="rmLabel">RM Report</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('rm_position_data') }}" method="POST">@csrf
                        <div class="row mb-2">
                            <div class="w-100 mb-3" style="max-width: 50%">
                                <select name="name" class="form-select mb-3" id="select_box">
                                    <option value="">Select Relationship Manager</option>
                                    <option value="Ogunbodede, Samuel/samuel.ogunbodede@livingtrustng.com">Ogunbodede, Samuel</option>
                                    <option value="Adewole, Adekunle/adekunle.adewole@livingtrustng.com">Adewole, Adekunle</option>
                                    <option value="Adedeji, Olumide/olumide.adedeji@livingtrustng.com">Adedeji, Olumide </option>
                                    <option value="Olaluwoye, Charles/charles.olaluwoye@livingtrustng.com">Olaluwoye, Charles</option>
                                    <option value="ezeja, Sunday/sunday.ezeja@livingtrustng.com">Ezeja, Sunday </option>
                                    <option value="Badru, yinka/yinka.badru@livingtrustng.com">Badru, Olayinka</option>
                                    <option value="OLAYANJU, ABIMBOLA/bimbola.olayanju@livingtrustng.com">Olayanju, Abimbola </option>
                                    <option value="ADERANTI, ADEWOLE/adewole.aderanti@livingtrustng.com">Aderanti, Adewole</option>
                                </select>
                            </div>

                            <div class="w-100 mb-3" style="max-width: 21.875rem">
                                <input type="submit" value="Preview" class="btn btn-primary p-3">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End RM modal -->

    <!-- Start Branch modal -->
    <div class="modal fade" id="branch" tabindex="-1" aria-labelledby="branchLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="branchLabel">Branch Report</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('rm_branch_data') }}" method="POST">@csrf
                        <div class="row mb-2">
                            <div class="w-100 mb-3" style="max-width: 50%">
                                <input name="date" class="form-control p-3" id="datePicker1" placeholder="select date..." />
                            </div>
                            <div class="w-100 mb-3" style="max-width: 50%">
                                <select name="branch" class="form-select mb-3" id="select_box3">
                                    <option value="">Select Branch</option>
                                    <option value="101">Head Office</option>
                                    <option value="102">Oshogbo</option>
                                    <option value="103">Ejigbo</option>
                                    <option value="104">Ilesha</option>
                                    <option value="105">Lagos</option>
                                    <option value="106">Abuja</option>
                                    <option value="106">Abuja</option>
                                    <option value="107">Akure</option>
                                    <option value="108">Ibadan</option>
                                    <option value="109">Ila Orangun</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="w-100 mb-3" style="max-width: 21.875rem">
                                <input type="submit" value="Preview" class="btn btn-primary p-3">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Branch modal -->
@endsection
