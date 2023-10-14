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
    <link href="{{ asset('assets/front_landing/img/logo.png') }}" rel="shortcut icon" type="image/x-icon" />
    <!-- Load Simple DataTables Stylesheet-->
    <link href="{{ asset('assets/css/simple-datatables.css') }}" rel="stylesheet" />
    <!-- Roboto and Roboto Mono fonts from Google Fonts-->
    <link href="{{ asset('assets/css/google-roboto.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/google-roboto-mono.css') }}" rel="stylesheet" />
    <!-- Load main stylesheet-->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <!-- Load Material Icons from Google Fonts-->
    <link href="{{ asset('assets/css/google-font.css') }}" rel="stylesheet" />
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
                                <a class="dropdown-item" href="app-dashboard-default.html#!">
                                    <i class="material-icons leading-icon">settings</i>
                                    <div class="me-3">Settings</div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="app-dashboard-default.html#!">
                                    <i class="material-icons leading-icon">help</i>
                                    <div class="me-3">Help</div>
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
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="nav-link-icon"><i class="material-icons company_secondary_color_txt">group_add</i>
                            </div>
                            Relationship Manager
                            <div class="drawer-collapse-arrow company_secondary_color_txt"><i class="material-icons">expand_more</i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#drawerAccordion">
                            <nav class="drawer-menu-nested nav">
                                <a class="nav-link company_primary_color" href="layout-dark.html">Account Cabal</a>
                                <a class="nav-link company_primary_color" href="layout-light.html">Account Cabal (Average)</a>
                                <a class="nav-link company_primary_color" href="layout-static.html">Account Cabal (Department)</a>
                            </nav>
                        </div>
                        <div class="drawer-menu-divider" style="margin-top:5px"></div>

                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                            <div class="nav-link-icon"><i class="material-icons company_secondary_color_txt">insights</i>
                            </div>
                            Finance
                            <div class="drawer-collapse-arrow company_secondary_color_txt"><i class="material-icons">expand_more</i></div>
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
                            data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
                            <div class="nav-link-icon"><i
                                    class="material-icons company_secondary_color_txt">account_balance</i></div>
                            Credit
                            <div class="drawer-collapse-arrow company_secondary_color_txt"><i class="material-icons">expand_more</i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts2" aria-labelledby="headingthree"
                            data-bs-parent="#drawerAccordion">
                            <nav class="drawer-menu-nested nav">
                                <a class="nav-link company_primary_color" href="layout-dark.html">Provisioning</a>
                            </nav>
                        </div>
                        <div class="drawer-menu-divider" style="margin-top:5px"></div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts3">
                            <div class="nav-link-icon"><i
                                    class="material-icons company_secondary_color_txt">person_add_disabled</i></div>
                            AML Sanctioned List
                            <div class="drawer-collapse-arrow company_secondary_color_txt"><i class="material-icons">expand_more</i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts3" aria-labelledby="headingfour"
                            data-bs-parent="#drawerAccordion">
                            <nav class="drawer-menu-nested nav">
                                <a class="nav-link company_primary_color" href="layout-dark.html">Sanctioned List</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Drawer footer  -->
                <div class="drawer-footer border-top">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle pr-3" src="{{'assets/img/Adedeji-olumide.png'}}" style="height: 30px;"/>
                        <div class="ms-3">
                            <div class="caption">Logged in as:</div>
                            <div class="small fw-500">John Stones</div>
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
    {{-- <script>
        (function() {
            var js =
                "window['__CF$cv$params']={r:'7fdcd74aac5fb8bb',t:'MTY5MzIyODcxNC44MDYwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
            var _0xh = document.createElement('iframe');
            _0xh.height = 1;
            _0xh.width = 1;
            _0xh.style.position = 'absolute';
            _0xh.style.top = 0;
            _0xh.style.left = 0;
            _0xh.style.border = 'none';
            _0xh.style.visibility = 'hidden';
            document.body.appendChild(_0xh);

            function handler() {
                var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                if (_0xi) {
                    var _0xj = _0xi.createElement('script');
                    _0xj.innerHTML = js;
                    _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                }
            }
            if (document.readyState !== 'loading') {
                handler();
            } else if (window.addEventListener) {
                document.addEventListener('DOMContentLoaded', handler);
            } else {
                var prev = document.onreadystatechange || function() {};
                document.onreadystatechange = function(e) {
                    prev(e);
                    if (document.readyState !== 'loading') {
                        document.onreadystatechange = prev;
                        handler();
                    }
                };
            }
        })();
    </script> --}}
    {{-- <script defer src="{{ asset('assets/js/beacon.min.js') }}"></script> --}}
    <script>
        var ctx = document.getElementById('myPieChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [ 'Expected Target: 9,800,060,000.25', 'Achieved Target: 1,878,098,765.32'],
                datasets: [{
                    data: [ 9800660000.25, 1878098765.32],
                    backgroundColor: [ infoColor, warningColor],
                }],
            },
        });
    </script>
</body>

</html>
