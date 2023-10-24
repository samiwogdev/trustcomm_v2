<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author"content="" />
    <title>Dashboard - Material Admin Pro</title>
    <!-- Load Favicon-->
    <link href="{{ asset('assets/front_landing/img/livingtrust-logo.png') }}" rel="shortcut icon" type="image/x-icon" />
    <!-- Load Simple DataTables Stylesheet-->
    <link href="{{ asset('assets/css/simple-datatables.css') }}" rel="stylesheet" />
    <!-- Roboto and Roboto Mono fonts from Google Fonts-->
    <link href="{{ asset('assets/css/google-roboto.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/google-roboto-mono.css') }}" rel="stylesheet" />
    <!-- Load main stylesheet-->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <!-- Load Material Icons from Google Fonts-->
    <link href="{{ asset('assets/css/google-font.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/style.css" rel="stylesheet" />
    {{-- <link href="{{ asset('assets/library/bootstrap-5/bootstrap.min.css') }}" rel="stylesheet" /> --}}
    <style>
        .form-select {
            line-height: 2.8 !important;
        }
    </style>
</head>

<body class="nav-fixed bg-light">
    <!-- navigation Bar-->
    <nav class="top-app-bar navbar navbar-expand navbar-dark company_secondary_color">
        <div class="container-fluid px-4">
            <!-- Drawer toggle button-->
            <button class="btn btn-lg btn-icon order-1 order-lg-0" id="drawerToggle" href="javascript:void(0);"><i
                    class="material-icons">menu</i></button>
            <!-- Navbar brand-->
            <a class="navbar-brand me-auto" href="index.html">
                <div class="text-uppercase font-monospace">TRUSTCOMM</div>
            </a>
            <!-- Navbar items-->
            <div class="d-flex align-items-center mx-3 me-lg-0">
                <!-- Navbar buttons-->
                <div class="d-flex">
                    <!-- User profile dropdown-->
                    <div class="dropdown">
                        <button class="btn btn-lg btn-icon dropdown-toggle" id="dropdownMenuProfile" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                class="material-icons">person</i></button>
                        <ul class="dropdown-menu dropdown-menu-end mt-3" aria-labelledby="dropdownMenuProfile">
                            <li>
                                <a class="dropdown-item" href="app-dashboard-default.html#!">
                                    <i class="material-icons leading-icon">person</i>
                                    <div class="me-3">Profile</div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="app-dashboard-default.html#!">
                                    <i class="material-icons leading-icon">logout</i>
                                    <div class="me-3">Logout</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End navigation Bar-->
    <div id="layoutDrawer">
        <!-- Sidebar-->
        <div id="layoutDrawer_nav">
            <nav class="drawer accordion drawer-light bg-white" id="drawerAccordion">
                <div class="drawer-menu">
                    <div class="nav">
                        <div class="drawer-menu-heading font-weight-bold">Overview</div>
                        <a class="nav-link collapsed" href="{{ route('dashboard') }}">
                            <div class="nav-link-icon"><i
                                    class="material-icons company_secondary_color_txt">dashboard</i></div>
                            Dashboard
                        </a>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="nav-link-icon"><i
                                    class="material-icons company_secondary_color_txt">group_add</i>
                            </div>
                            CRM Report
                            <div class="drawer-collapse-arrow company_secondary_color_txt"><i
                                    class="material-icons">expand_more</i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#drawerAccordion">
                            <nav class="drawer-menu-nested nav">
                                <a class="nav-link company_primary_color" href="{{ route('rm_position') }}">RM
                                    Position</a>
                                <a class="nav-link company_primary_color" href="{{ route('rm_position_avg') }}">RM
                                    Position
                                    (Average)</a>
                            </nav>
                        </div>
                        <div class="drawer-menu-divider" style="margin-top:5px"></div>

                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                            <div class="nav-link-icon"><i
                                    class="material-icons company_secondary_color_txt">insights</i>
                            </div>
                            Finance Report
                            <div class="drawer-collapse-arrow company_secondary_color_txt"><i
                                    class="material-icons">expand_more</i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts1" aria-labelledby="headingtwo"
                            data-bs-parent="#drawerAccordion">
                            <nav class="drawer-menu-nested nav">
                                <a class="nav-link company_primary_color" href="layout-dark.html">MFP Summary</a>
                                <a class="nav-link company_primary_color" href="layout-light.html">MFP Breakdown</a>
                            </nav>
                        </div>
                        <div class="drawer-menu-divider" style="margin-top:5px"></div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts2" aria-expanded="false"
                            aria-controls="collapseLayouts2">
                            <div class="nav-link-icon"><i
                                    class="material-icons company_secondary_color_txt">account_balance</i></div>
                            Credit Report
                            <div class="drawer-collapse-arrow company_secondary_color_txt"><i
                                    class="material-icons">expand_more</i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts2" aria-labelledby="headingthree"
                            data-bs-parent="#drawerAccordion">
                            <nav class="drawer-menu-nested nav">
                                <a class="nav-link company_primary_color" href="layout-dark.html">Provisioning</a>
                            </nav>
                        </div>
                        <div class="drawer-menu-divider" style="margin-top:5px"></div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts3" aria-expanded="false"
                            aria-controls="collapseLayouts3">
                            <div class="nav-link-icon"><i
                             class="material-icons company_secondary_color_txt">person_add_disabled</i></div>
                            Operations Report
                            <div class="drawer-collapse-arrow company_secondary_color_txt"><i
                                    class="material-icons">expand_more</i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts3" aria-labelledby="headingfour"
                            data-bs-parent="#drawerAccordion">
                            <nav class="drawer-menu-nested nav">
                                <a class="nav-link company_primary_color" href="layout-dark.html">AML Sanctioned List</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Drawer footer  -->
                <div class="drawer-footer border-top">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle pr-3" src="{{ 'assets/img/Adedeji-olumide.jpg' }}"
                            style="height: 30px;" />
                        <div class="ms-3">
                            <div class="caption">Logged in as:</div>
                            <div class="small fw-500">Samuel Ogunbodede</div>
                        </div>
                    </div>
                </div>
                <!-- End Drawer footer  -->
            </nav>
        </div>
        <!-- End Sidebar-->
        <!-- Layout content-->
        <div id="layoutDrawer_content">

            <!-- Main page content-->
            @yield('content')
            <!-- End Main page content-->

            <!-- Footer-->
            <!-- Min-height is set inline to match the height of the drawer footer-->
            <footer class="py-4 mt-auto border-top" style="min-height: 74px">
                <div class="container-xl px-5">
                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-sm-between small">
                        <div class="me-sm-2 company_secondary_color_txt">Copyright © LTMB 2023</div>
                        <div class="d-flex ms-sm-2">
                            <a class="text-decoration-none company_secondary_color_txt"
                                href="app-dashboard-default.html#!">Trustcomm</a>
                            <div class="mx-1">·</div>
                            <a class="text-decoration-none company_secondary_color_txt"
                                href="app-dashboard-default.html#!">v 2.0</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>



    <!-- Load Bootstrap JS bundle-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('assets/js/bootstrap-5.3.1/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script> --}}
    <!-- Load global scripts-->
    <script type="module" src="{{ asset('assets/js/material.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!--  Load Chart.js via CDN-->
    <script src="{{ asset('assets/js/chart.min.js') }}" crossorigin="anonymous"></script>
    <!--  Load Chart.js customized defaults-->
    <script src="{{ asset('assets/js/charts/chart-defaults.js') }}"></script>
    <!--  Load chart demos for this page-->
    {{-- <script src="{{ asset('assets/js/charts/demos/chart-pie-demo.js') }}"></script> --}}
    <script src="{{ asset('assets/js/charts/demos/dashboard-chart-bar-grouped-demo.js') }}"></script>
    <!-- Load Simple DataTables Scripts-->
    <script src="{{ asset('assets/js/simple-datatables.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/datatables/datatables-simple-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/js/main.nocss.js" crossorigin="anonymous"></script>
    <script src="https://assets.startbootstrap.com/js/sb-customizer.js"></script>
    <script src="{{ asset('assets/js/litepicker.js') }}"></script>
    <script src="{{ asset('assets/js/prism.js') }}"></script>
    {{-- <script src="{{ asset('assets/library/bootstrap-5/bootstrap.bundle.min.js') }}"></script> --}}
    <script src="{{ asset('assets/library/dselect.js') }}"></script>
    {{-- <script defer src="{{ asset('assets/js/beacon.min.js') }}"></script> --}}
    @if (isset($apiData))
    <script>
        var ctx = document.getElementById('myPieChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [ 'Loan: '+@json(number_format($loan)), 'Deposit: '+@json(number_format($deposit))],
                datasets: [{
                    data: [{{ $loan }}, {{ $deposit }}],
                    backgroundColor: [infoColor, warningColor],
                }],
            },
        });
    </script>
    @endif
    <!-- litepicker instance-->
    <script>
        const picker1 = new Litepicker({
            element: document.getElementById('datePicker1'),
            format: 'YYYY-MM-DD',
            // Additional options for the first date picker
        });

        // const picker2 = new Litepicker({
        //     element: document.getElementById('datePicker2'),
        //     format: 'YYYY-MM-DD',
        //     // Additional options for the second date picker
        // });

        // const picker3 = new Litepicker({
        //     element: document.getElementById('datePicker3'),
        //     format: 'YYYY-MM-DD',
        //     // Additional options for the second date picker
        // });

        // const picker4 = new Litepicker({
        //     element: document.getElementById('datePicker4'),
        //     format: 'YYYY-MM-DD',
        //     // Additional options for the second date picker
        // });

        // const picker5 = new Litepicker({
        //     element: document.getElementById('datePicker5'),
        //     format: 'YYYY-MM-DD',
        //     // Additional options for the second date picker
        // });

        const picker6 = new Litepicker({
            element: document.getElementById('datePicker6'),
            format: 'YYYY-MM-DD',
            // Additional options for the second date picker
        });
    </script>
    <!-- end litepicker instance-->

    <!-- bootstrap select box-->
    <script>
        var select_box_element = document.querySelector('#select_box');
        dselect(select_box_element, {
            search: true
        });
        var select_box_element = document.querySelector('#select_box2');
        dselect(select_box_element, {
            search: true
        });
        var select_box_element = document.querySelector('#select_box3');
        dselect(select_box_element, {
            search: true
        });
    </script>
</body>

</html>
