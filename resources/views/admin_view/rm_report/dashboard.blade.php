@extends('admin_view.admin_layout.layout')
@section('content')
    <main>
        <!-- Main dashboard content-->
        <div class="container-xl p-5">
            <div class="row justify-content-between align-items-center mb-5">
                <div class="col flex-shrink-0 mb-5 mb-md-0">
                    <h1 class="display-4 mb-0">My Dashboard</h1>
                    {{-- <div class="text-muted"> Details</div> --}}
                </div>
                {{-- <div class="col-12 col-md-auto">
                <div class="d-flex flex-column flex-sm-row gap-3">
                    <mwc-select class="mw-50 mb-2 mb-md-0" outlined="" label="select report">
                        <mwc-list-item value="1">Deposit Cabal</mwc-list-item>
                        <mwc-list-item value="2">Risk Asset Cabal</mwc-list-item>
                        <mwc-list-item value="2">Account Position</mwc-list-item>
                    </mwc-select>
                </div>
            </div> --}}
            </div>

            <div class="row gx-5">
                <!-- Revenue breakdown chart example-->
                <div class="col-lg-12 mb-5">
                    <div class="card card-raised h-100">
                        <div class="card-header company_primary_color_bg text-white px-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-4">
                                    <h2 class="card-title text-white mb-0">Relatioship Manager</h2>
                                    <span class="card-subtitle text-white">Details</span>
                                </div>
                                <div class="d-flex gap-2 me-n2">
                                    <img class="rounded-circle pr-3" src="{{ 'assets/img/Adedeji-olumide.png' }}"
                                        style="height: 50px;" />
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-5">
                            {{-- @if (session()->has('rm_details'))
                        @php
                            $rm_details = session('rm_details');
                        @endphp --}}
                            @if (isset($rm_details))
                                <table class="table table-sm mb-0" width: 100px>
                                    <tbody>
                                        <tr>
                                            <th>NAME:</th>
                                            <td>{{ $rm_details->rm_firstName . ' ' . $rm_details->rm_middleName . " " . $rm_details->rm_lastName }}</td>
                                        </tr>
                                        <tr>
                                            <th>STAFF ID:</th>
                                            <td>{{ $rm_details->rm_staffId }}</td>
                                        </tr>
                                        <tr>
                                            <th>RM CODE:</th>
                                            <td>{{ $rm_details->rm_code }}</td>
                                        </tr>
                                        <tr>
                                            <th>UNIT:</th>
                                            <td>{{ $rm_details->rm_unitName }} </td>
                                        </tr>
                                        <tr>
                                            <th>POSITION:</th>
                                            <td>{{ $rm_details->rm_jobTitle }}</td>
                                        </tr>
                                        <tr>
                                            <th>GRADE:</th>
                                            <td>{{ $rm_details->rm_grade }}</td>
                                        </tr>
                                        {{-- <tr>
                                            <th>Lat Login:</th>
                                            <td>{{ $rm_details->rm_staffId }}</td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
