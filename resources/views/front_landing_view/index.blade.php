@extends('front_landing_view.front_landing_layout.layout')
@section('content')
        <div id="right-sidebar" class="right-sidebar-notifcations nav-collapse">
            <div class="bs-example bs-example-tabs right-sidebar-tab-notification" data-example-id="togglable-tabs">

                <div id="w3lDemoBar" class="w3l-demo-bar shadow">
                    <div class="demo-btns">
                        <a href="https://livingtrust.strideerp.com/home" target="_blank">
                            {{-- <span class="w3l-icon -back">
                                <span class="far fa-envelope-open" style="color:red">Quick Links</span>
                            </span> --}}
                            <span class="w3l-text" style="color: #0cb9d5">Quick Links</span>
                        </a>
                        <a href="https://livingtrust.strideerp.com/home" style="border-top: 2px solid #9181c7; padding-top: 5px" target="_blank">
                            <span class="w3l-icon -back">
                                <span class="far fa-envelope-open" style="color:red"></span>
                            </span>
                            <span class="w3l-text" >Email</span>
                        </a>
                        <a href="https://livingtrust.strideerp.com/home" style="border-top: 2px solid #9181c7; padding-top: 5px" target="_blank">
                            <span class="w3l-icon -back">
                                <span class="fab fa-accessible-icon" style="color:red"></span>
                            </span>
                            <span class="w3l-text" >Stride ERP</span>
                        </a>
                        <a href="https://livingtrustng.com/" style="border-top: 2px solid #9181c7; padding-top: 5px" target="_blank">
                            <span class="w3l-icon -download">
                                <span class="fas fa-globe" style="color:red"></span>
                            </span>
                            <span class="w3l-text" >LTMB Web</span>
                        </a>
                    </div>
                </div>
                <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
                     style="overflow: hidden; outline: none;">
                </div>
            </div>
        </div>
    <div class="w3layouts-main">
        <div class="bg-layer">
            <h1>TRUSTCOMM
            </h1>
            <div class="header-main">
                <div class="main-icon" style="margin-bottom: 22px">
                    <span >
                        <img src="{{ asset('assets/front_landing/img/livingtrust-logo.png') }}" style="height:70px">
                    </span>
                </div>
                @if (Session::has("error_message"))
                <div class="alert alert-danger alert-dismissible fade show alert-danger-custom" role="alert">
                  <p>  {{ Session::get('error_message') }} </p>
                    {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button> --}}
                  </div>
                @endif
                @if (count($errors) > 0)
                  <div class="alert alert-danger alert-dismissible fade show alert-danger-custom" role="alert">
                    @foreach ( $errors->all()  as $error )
                 <p> {{ $error }}</p>
                    {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button> --}}
                    @endforeach
                  </div>

                @endif

                <div class="header-left-bottom">
                    <form action="{{ route('login') }}" method="POST">@csrf
                        <div class="icon1">
                            <span class="fas fa-user"></span>
                            <input name="email" type="text" placeholder="Username" required/>
                        </div>
                        <div class="icon1">
                            <span class="fas fa-lock"></span>
                            <input name="password" type="password" placeholder="Password" required/>
                        </div>
                        <div class="`-check">
                          <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Keep me logged in</label></a>
                        </div>
                        <div class="bottom">
                            <button  class="btn" name="log_but" style="background-color: #0100a4 !important">Log In</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <p> LTMB PLC. All rights reserved © 2023 <a href="" target="_blank"></a></p>
            </div>
        </div>
    </div>
@endsection
