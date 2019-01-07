
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover, user-scalable=0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/ico" href="/favicon.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />


    <!-- Mobile favicon -->
    {{--<link rel="icon" sizes="114x114" href="{{$PUBLIC_PATH}}images/favicon-114.png">--}}
    {{--<link rel="icon" sizes="72x72" href="{{$PUBLIC_PATH}}images/favicon-72.png">--}}
    {{--<link rel="icon" sizes="144x144" href="{{$PUBLIC_PATH}}images/favicon-144.png">--}}
    {{--<link rel="icon" sizes="60x60" href="{{$PUBLIC_PATH}}images/favicon-60.png">--}}
    {{--<link rel="icon" sizes="120x120" href="{{$PUBLIC_PATH}}images/favicon-120.png">--}}
    {{--<link rel="icon" sizes="76x76" href="{{$PUBLIC_PATH}}images/favicon-76.png">--}}
    {{--<link rel="icon" sizes="152x152" href="{{$PUBLIC_PATH}}images/favicon-152.png">--}}
    {{--<link rel="icon" sizes="180x180" href="{{$PUBLIC_PATH}}images/favicon-180.png">--}}

    {{--<!-- Apple touch icons -->--}}
    {{--<link rel="apple-touch-icon" href="{{$PUBLIC_PATH}}images/favicon-57.png">--}}
    {{--<link rel="apple-touch-icon" sizes="114x114" href="{{$PUBLIC_PATH}}images/favicon-114.png">--}}
    {{--<link rel="apple-touch-icon" sizes="72x72" href="{{$PUBLIC_PATH}}images/favicon-72.png">--}}
    {{--<link rel="apple-touch-icon" sizes="144x144" href="{{url('/')}}}/public/images/favicon-144.png">--}}
    {{--<link rel="apple-touch-icon" sizes="60x60" href="{{$PUBLIC_PATH}}images/favicon-60.png">--}}
    {{--<link rel="apple-touch-icon" sizes="120x120" href="{{$PUBLIC_PATH}}images/favicon-120.png">--}}
    {{--<link rel="apple-touch-icon" sizes="76x76" href="{{$PUBLIC_PATH}}images/favicon-76.png">--}}
    {{--<link rel="apple-touch-icon" sizes="152x152" href="{{$PUBLIC_PATH}}images/favicon-152.png">--}}
    {{--<link rel="apple-touch-icon" sizes="180x180" href="{{$PUBLIC_PATH}}images/favicon-180.png">--}}

    <title>Billing - Vultr.com</title>
    <link href="css/global.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/site.css') }}">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
</head>
<body>

<div id="header0v_0">
    <a href="/">
    </a>
    <a href="/deploy/" >
        Servers
    </a>
    <a href="/billing/" class="active">
        Billing
    </a>
    <a href="/support/" >
        Support
    </a>
    <a aria-label="Affiliate" href="/affiliate/" class="star">
        A<span>f</span>filiate
    </a>
    <a href="/settings/" >
        Account
    </a>
</div>


<div id="header0h_0">
    <div id="header0h_1" onclick="menusidebarShow(); event.preventDefault(); event.stopPropagation();">
    </div>
    <a id="header0h_2" href="/">
    </a>
    &nbsp;
</div>



<div id="header1_session">
    <div>
        <span class="glyph"></span>
        <span class="inactivity_message">Your session will expire soon due to inactivity</span> <a class="button" href="#" onclick="inactivity_continue(); return false;">Continue Session</a>
    </div>
</div>

<div id="header1_0">


    <a href="#" class="hide_on_mobile" id="header1_2" data-offset-x="43" data-offset-y="10" data-dropdownpopup="CgkJPGEgaHJlZj0iIyIgYXJpYS1sYWJlbD0iUG9wdXAgTWVudSIgb25jbGljaz0icmV0dXJuIGZhbHNlOyIgc3R5bGU9Im91dGxpbmUtd2lkdGg6IDBweDsgaGVpZ2h0OiAwcHg7IHBhZGRpbmc6IDBweDsgbWFyZ2luOiAwcHg7Ij48L2E+CgkJPGEgaHJlZj0iL3NldHRpbmdzLyNzZXR0aW5nc3Byb2ZpbGUiIG9uY2xpY2s9ImNoYW5nZVRhYlN1Ym1lbnUoJ3NldHRpbmdzcHJvZmlsZScpIj5Qcm9maWxlPC9hPgoJCTxhIGhyZWY9Ii9zZXR0aW5ncy8jc2V0dGluZ3NhdXRoZW50aWNhdGlvbiIgb25jbGljaz0iY2hhbmdlVGFiU3VibWVudSgnc2V0dGluZ3NhdXRoZW50aWNhdGlvbicpIj5BdXRoZW50aWNhdGlvbjwvYT4KCQk8YSBocmVmPSIvc2V0dGluZ3MvI3NldHRpbmdzYXBpIiBvbmNsaWNrPSJjaGFuZ2VUYWJTdWJtZW51KCdzZXR0aW5nc2FwaScpIj5BUEk8L2E+CgkJPGEgaHJlZj0iL3NldHRpbmdzLyNzZXR0aW5nc3VzZXJzIiBvbmNsaWNrPSJjaGFuZ2VUYWJTdWJtZW51KCdzZXR0aW5nc3VzZXJzJykiPlVzZXJzPC9hPgoJCTxhIGhyZWY9Ii9zZXR0aW5ncy8jc2V0dGluZ3Nub3RpZmljYXRpb25zIiBvbmNsaWNrPSJjaGFuZ2VUYWJTdWJtZW51KCdzZXR0aW5nc25vdGlmaWNhdGlvbnMnKSI+Tm90aWZpY2F0aW9uczwvYT4KCQk8aHIvPgoJCTxhIGhyZWY9Ii8/bG9nb3V0PTEiPkxvZ291dDwvYT4=">
        Welcome back, Thanh Pham Minh!
    </a>
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
</div>

<div id="header2_wrap">
    <div id="header2_left">
        <h1>
            Billing
        </h1>
    </div>
    <div id="header2_right">
    </div>
</div>




<div class="block1290 block1290deploy">
    <div class="tabs-responsive">
        <div class="tabs-container">
            <ul class="nav nav-tabs">
                <li id="tabl_billingaddfunds"><a href="/billing/#billingaddfunds" onclick="changeTabSubmenu('billingaddfunds'); hidePostMessages();">Make Payment</a></li>
            </ul>
        </div>
    </div>
    <a class="deploy_floating" href="/deploy/" title="Deploy New Server" aria-label="Deploy New Server" data-popup2="RGVwbG95IE5ldyBTZXJ2ZXI=">
        <span class="fonticon_plus"></span>
    </a>
</div>

<div id="header4_0">
</div>



<div class="block1290">

    <div class="info_message">You are almost ready to deploy servers - please link a payment method to get started!</div>






    <div class="flex3column submenutabcontent" id="tabc_billingaddfunds" style="display:none;">

        <div class="container-fluid w100p">
            <div class="row">
                <div class="col-md-2">

                    <label class="floatinglabel mobile-submenu-container flexwidth100">
                        <span>Payment Type</span>
                        <select name="mobile-submenu" class="mobile-submenu no-search" style="display:none;" data-xselect2="yes" data-minimum-results-for-search="-1"></select>
                    </label>

                    <div class="flex3column_left submenu" style="margin: 0px;">
                        <input type="radio" name="paymenttype" value="" id="paymenttype_creditcard" class="tabmenu_radio" onchange="changeSideTabCustom(this);" data-tab="creditcard"/>
                        <label for="paymenttype_creditcard">
                            Credit Card
                        </label>
                        <input type="radio" name="paymenttype" value="" id="paymenttype_paypal" class="tabmenu_radio" onchange="changeSideTabCustom(this);" data-tab="paypal"/>
                        <label for="paymenttype_paypal">
                            Paypal
                        </label>
                        <input type="radio" name="paymenttype" value="" id="paymenttype_bitpay" class="tabmenu_radio" onchange="changeSideTabCustom(this);" data-tab="bitpay"/>
                        <label for="paymenttype_bitpay">
                            Bitcoin
                        </label>
                        <input type="radio" name="paymenttype" value="" id="paymenttype_alipay" class="tabmenu_radio" onchange="changeSideTabCustom(this);" data-tab="alipay"/>
                        <label for="paymenttype_alipay">
                            Alipay
                        </label>
                        <input type="radio" name="paymenttype" value="" id="paymenttype_wechat" class="tabmenu_radio" onchange="changeSideTabCustom(this);" data-tab="wechat"/>
                        <label for="paymenttype_wechat">
                            WeChat Pay
                        </label>
                    </div>

                </div>


                <div class="col-md-6">
                    <div class="block520center">


                        <div class="error_message form_error" style="display:none;"></div>

                        <div id="block_content_creditcard">
                            <h3>
                                Make a Credit Card Payment
                            </h3>
                            <div data-panel="processor" data-processor="verisign">
                                <form method="post" action="/billing/" id="cc_form_unfunded" class="flexlayoutform flexlayout100p" data-billing_type="credit_card">
                                    <input type="hidden" name="csrf_token" value="rwomY1BiQzSut3APyOYQXdnjKglGu183a7IW/xt4iik=">
                                    <input type="hidden" name="action" value="authorizecard">
                                    <input type="hidden" name="payment_method" value="cc">
                                    <input type="hidden" name="cpadt" value="n">
                                    <label class="floatinglabel flexwidth100">
                                        <span>Your Name</span>
                                        <input class="form-control" type="text" name="cc_name" value="" autocomplete="off" placeholder="Your Name" required="required">
                                    </label>
                                    <label class="floatinglabel flexwidth100">
                                        <span>Billing Address</span>
                                        <input class="form-control" type="text" name="cc_address" value="" placeholder="Billing Address" required="required">
                                    </label>
                                    <label class="floatinglabel flexwidth1thirdcc responsiveccfullwidth">
                                        <span>Billing City</span>
                                        <input class="form-control" type="text" name="cc_city" value="" placeholder="Billing City" required="required">
                                    </label>
                                    <label class="floatinglabel flexwidth1thirdcc responsiveccfullwidth">
                                        <span>Billing Postal Code</span>
                                        <input class="form-control" type="text" name="cc_zip" value="" placeholder="Billing Postal Code" required="required">
                                    </label>
                                    <label class="floatinglabel flexwidth1thirdcc responsiveccfullwidth">
                                        <span>Billing Country/Region</span>
                                        <select name="cc_country" data-xselect2="yes">
                                            <option value="ZM" >Zambia</option>
                                            <option value="ZW" >Zimbabwe</option>
                                        </select>
                                    </label>
                                    <hr class="hr10">
                                    <h4 class="flexwidth100">
                                        Credit Card Details
                                    </h4>
                                    <label class="floatinglabel flexwidthhalfcc responsiveccfullwidth card-number card-number-color">
                                        <span>Card Number</span>
                                        <input class="form-control valid_cc_number" type="text" name="cc_number" value="" autocomplete="off" placeholder="Card Number" required>
                                        <i></i>
                                        <div class="input-validation-error">Invalid Card Number</div>
                                    </label>
                                    <label class="floatinglabel flexwidthquartercc responsiveccfullwidth expiry-date">
                                        <span>MM/YY</span>
                                        <input class="form-control valid_inputCardExpiry" type="text" name="cc_expiry" value="" placeholder="MM/YY" autocomplete="off" maxlencc_expirygth="7" required>
                                        <i></i>
                                        <div class="input-validation-error">Invalid Date</div>
                                    </label>
                                    <label class="floatinglabel flexwidthquartercc responsiveccfullwidth cvv-number">
                                        <span>CVV</span>
                                        <input class="form-control valid_cc_cscv integers_only" type="text" name="cc_cscv" value="" autocomplete="off" placeholder="CVV" maxlength="4" required>
                                        <i></i>
                                        <div class="input-validation-error">Invalid CVV</div>
                                    </label>
                                    <hr class="hr10">
                                    <h4 class="flexwidth100">
                                        Choose Amount
                                    </h4>
                                    <input type="checkbox" name="link_credit_card" id="link_credit_card" class="checkboxcheckmark" onchange="initialize_unfunded_cc_link();"/>
                                    <label for="link_credit_card">I just want to link my credit card - <b>$0.00 deposit</b></label>
                                    <hr class="hr20">
                                    <input type="radio" name="amount" value="10" id="cce10" class="radiolabelbutton" onchange="unfundedccupdate();" />
                                    <label for="cce10" class="flexwidth1sixth">
                                        $10
                                    </label>
                                    <input type="radio" name="amount" value="25" id="cce25" class="radiolabelbutton" onchange="unfundedccupdate();" />
                                    <label for="cce25" class="flexwidth1sixth">
                                        $25
                                    </label>
                                    <input type="radio" name="amount" value="50" id="cce50" class="radiolabelbutton" onchange="unfundedccupdate();" />
                                    <label for="cce50" class="flexwidth1sixth">
                                        $50
                                    </label>
                                    <input type="radio" name="amount" value="100" id="cce100" class="radiolabelbutton" onchange="unfundedccupdate();" />
                                    <label for="cce100" class="flexwidth1sixth">
                                        $100
                                    </label>
                                    <input type="radio" name="amount" value="250" id="cce250" class="radiolabelbutton" onchange="unfundedccupdate();" />
                                    <label for="cce250" class="flexwidth1sixth">
                                        $250
                                    </label>
                                    <input type="radio" name="amount" value="other" id="cceother" class="radiolabelbutton" onchange="unfundedccupdate();">
                                    <label for="cceother" class="flexwidth1sixth">
                                        <i class="zmdi zmdi-plus-circle-o"></i>
                                        <span class="hide_on_mobile">Other</span>
                                    </label>
                                    <div id="unfunded-other-amount-block" class="form-group form-select-input m-t-20 m-b-0 w100p other-amount" style="display:none;">
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input name="amountcustom" type="text" id="cc-unfunded-amount" class="form-control numbers_only" placeholder="Enter amount" maxlength="8" autocomplete="off">
                                        </div>
                                    </div>
                                    <hr class="hr20"/>
                                    <div>
                                        <input type="checkbox" name="agree_tos" id="agree_tos_creditcard" class="checkboxcheckmark"/>
                                        <label for="agree_tos_creditcard" class="flexwidth100">I Agree to the <a href="https://www.vultr.com/legal/tos.php" target="_blank">Terms of Service</a></label>
                                    </div>
                                    <hr class="hr30"/>
                                    <button type="submit" class="flexwidth100 button nodisabled">Link Credit Card</button>
                                </form>
                                <iframe width=1 height=1 frameborder=0 scrolling=no src='https://my.vultr.com/billing/frame.php?m=165400&s=1544782448gKo1X'><img width=1 height=1 src='https://my.vultr.com/billing/framelogo.php?m=165400&s=1544782448gKo1X'></iframe>
                            </div>
                            <div data-panel="no_processor" data-processor="verisign" style="display:none;">
                                <div class="error_message">
                                </div>
                            </div>
                        </div>

                        <div id="block_content_paypal" style="display:none;">




                            <h3>
                                Make a PayPal Payment
                            </h3>
                            <div data-panel="processor" data-processor="paypal">
                                <form method="post" name="paypal_form" id="paypal_form" class="flexlayoutform flexlayout100p" action="/billing/paypal.php" data-billing_type="paypal">
                                    <input type="hidden" name="csrf_token" value="rwomY1BiQzSut3APyOYQXdnjKglGu183a7IW/xt4iik=">


                                    <input type="radio" name="amount" value="10" class="radiolabelbutton" id="paypal10" onchange="paypalamountchange();">
                                    <label for="paypal10" class="flexwidth1sixth">
                                        $10
                                    </label>
                                    <input type="radio" name="amount" value="25" class="radiolabelbutton" id="paypal25" onchange="paypalamountchange();">
                                    <label for="paypal25" class="flexwidth1sixth">
                                        $25
                                    </label>
                                    <input type="radio" name="amount" value="50" class="radiolabelbutton" id="paypal50" onchange="paypalamountchange();">
                                    <label for="paypal50" class="flexwidth1sixth">
                                        $50
                                    </label>
                                    <input type="radio" name="amount" value="100" class="radiolabelbutton" id="paypal100" onchange="paypalamountchange();">
                                    <label for="paypal100" class="flexwidth1sixth">
                                        $100
                                    </label>
                                    <input type="radio" name="amount" value="250" class="radiolabelbutton" id="paypal250" onchange="paypalamountchange();">
                                    <label for="paypal250" class="flexwidth1sixth">
                                        $250
                                    </label>

                                    <input type="radio" name="amount" value="other" id="paypalother" class="radiolabelbutton" onchange="paypalamountchange();" >
                                    <label for="paypalother" class="flexwidth1sixth">
                                        <i class="zmdi zmdi-plus-circle-o"></i>
                                        <span class="hide_on_mobile">Other</span>
                                    </label>
                                    <div id="other-amount-block-paypal" class="form-group form-select-input m-t-20 m-b-0 w100p other-amount" style="display:none;">
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input name="amountcustom" type="text" id="paypal-custom-amount" class="form-control numbers_only" value="" placeholder="Enter amount" maxlength="8" autocomplete="off">
                                        </div>
                                    </div>

                                    <hr class="hr20"/>
                                    <div>
                                        <input type="checkbox" name="agree_tos" id="agree_tos_paypal" class="checkboxcheckmark"/>
                                        <label for="agree_tos_paypal" class="flexwidth100">I Agree to the <a href="https://www.vultr.com/legal/tos.php" target="_blank">Terms of Service</a></label>
                                    </div>

                                    <hr class="hr30"/>
                                    <button type="submit" class="button flexwidth100" onclick="submitPayment($(this)); return false;">Pay with PayPal</button>
                                </form>
                            </div>
                            <div data-panel="no_processor" data-processor="paypal" style="display:none;">
                                <div class="error_message">
                                </div>
                            </div>
                        </div>

                        <div id="block_content_bitpay" style="display:none;">
                            <h3>
                                Make a Bitcoin Payment
                            </h3>
                            <div data-panel="processor" data-processor="bitpay">

                                <ul>
                                    <li>Bitcoin (BTC) and Bitcoin Cash (BCH) are accepted.</li>
                                    <li>No refunds available for Bitcoin deposits.</li>
                                    <li>Bitcoin deposits may take up to 120 minutes to process.</li>
                                </ul>

                                <hr class="hr30"/>
                                <form method="post" name="bitpay_form" id="bitpay_form" class="flexlayoutform flexlayout100p" action="/billing/bitpay.php" data-billing_type="bitpay">
                                    <input type="hidden" name="action" value="makepayment">
                                    <input type="hidden" name="csrf_token" value="rwomY1BiQzSut3APyOYQXdnjKglGu183a7IW/xt4iik=">

                                    <input type="radio" name="amount" value="10" class="radiolabelbutton" id="bitcoin10" onchange="bitcoinamountchange();" >
                                    <label for="bitcoin10" class="flexwidth1sixth">
                                        $10
                                    </label>
                                    <input type="radio" name="amount" value="25" class="radiolabelbutton" id="bitcoin25" onchange="bitcoinamountchange();" >
                                    <label for="bitcoin25" class="flexwidth1sixth">
                                        $25
                                    </label>
                                    <input type="radio" name="amount" value="50" class="radiolabelbutton" id="bitcoin50" onchange="bitcoinamountchange();" >
                                    <label for="bitcoin50" class="flexwidth1sixth">
                                        $50
                                    </label>
                                    <input type="radio" name="amount" value="100" class="radiolabelbutton" id="bitcoin100" onchange="bitcoinamountchange();" >
                                    <label for="bitcoin100" class="flexwidth1sixth">
                                        $100
                                    </label>
                                    <input type="radio" name="amount" value="250" class="radiolabelbutton" id="bitcoin250" onchange="bitcoinamountchange();" >
                                    <label for="bitcoin250" class="flexwidth1sixth">
                                        $250
                                    </label>

                                    <input type="radio" name="amount" value="other" id="bitcoinother" class="radiolabelbutton" onchange="bitcoinamountchange();" >
                                    <label for="bitcoinother" class="flexwidth1sixth">
                                        Other
                                    </label>

                                    <div id="other-amount-block-bitcoin" class="form-group form-select-input m-t-20 m-b-0 w100p other-amount" style="display:none;">
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input name="amountcustom" type="text" id="bitcoin-custom-amount" class="form-control numbers_only" value="" placeholder="Enter amount" maxlength="8" autocomplete="off">
                                        </div>
                                    </div>

                                    <hr class="hr30"/>
                                    <button type="submit" class="button flexwidth100" onclick="submitPayment($(this)); return false;">Pay with Bitcoin</button>
                                </form>
                            </div>
                            <div data-panel="no_processor" data-processor="bitpay" style="display:none;">
                                <div class="error_message">
                                </div>
                            </div>
                        </div>


                        <div id="block_content_alipay" style="display:none;">
                            <h3>
                                Make an Alipay Payment
                            </h3>
                            <div data-panel="processor" data-processor="stripe">
                                <form method="post" name="alipay_form" id="alipay_form" class="flexlayoutform flexlayout100p" action="/billing/alipay.php" data-billing_type="alipay">
                                    <input type="hidden" name="method" value="alipay">
                                    <input type="hidden" name="action" value="makepayment">
                                    <input type="hidden" name="csrf_token" value="rwomY1BiQzSut3APyOYQXdnjKglGu183a7IW/xt4iik=">

                                    <input type="radio" name="amount" value="10" class="radiolabelbutton" id="alipay10" onchange="alipayamountchange();">
                                    <label for="alipay10" class="flexwidth1sixth">
                                        $10
                                    </label>
                                    <input type="radio" name="amount" value="25" class="radiolabelbutton" id="alipay25" onchange="alipayamountchange();">
                                    <label for="alipay25" class="flexwidth1sixth">
                                        $25
                                    </label>
                                    <input type="radio" name="amount" value="50" class="radiolabelbutton" id="alipay50" onchange="alipayamountchange();">
                                    <label for="alipay50" class="flexwidth1sixth">
                                        $50
                                    </label>
                                    <input type="radio" name="amount" value="100" class="radiolabelbutton" id="alipay100" onchange="alipayamountchange();">
                                    <label for="alipay100" class="flexwidth1sixth">
                                        $100
                                    </label>
                                    <input type="radio" name="amount" value="250" class="radiolabelbutton" id="alipay250" onchange="alipayamountchange();">
                                    <label for="alipay250" class="flexwidth1sixth">
                                        $250
                                    </label>

                                    <input type="radio" name="amount" value="other" id="alipayother" class="radiolabelbutton" onchange="alipayamountchange();" >
                                    <label for="alipayother" class="flexwidth1sixth">
                                        <i class="zmdi zmdi-plus-circle-o"></i>
                                        <span class="hide_on_mobile">Other</span>
                                    </label>

                                    <div id="other-amount-block-alipay" class="form-group form-select-input m-t-20 m-b-0 w100p other-amount" style="display:none;">
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input name="amountcustom" type="text" id="alipay-custom-amount" class="form-control numbers_only" value="" placeholder="Enter amount" maxlength="8" autocomplete="off">
                                        </div>
                                    </div>

                                    <hr class="hr20"/>
                                    <div>
                                        <input type="checkbox" name="agree_tos" id="agree_tos_alipay" class="checkboxcheckmark"/>
                                        <label for="agree_tos_alipay">I Agree to the <a href="https://www.vultr.com/legal/tos.php" target="_blank">Terms of Service</a></label>
                                    </div>

                                    <hr class="hr30"/>
                                    <button type="submit" class="button flexwidth100" onclick="submitPayment($(this)); return false;">Pay with Alipay</button>
                                </form>
                            </div>
                            <div data-panel="no_processor" data-processor="stripe" style="display:none;">
                                <div class="error_message">
                                </div>
                            </div>
                        </div>

                        <div id="block_content_wechat" style="display:none;">
                            <h3 >
                                Make a WeChat Payment
                            </h3>
                            <div data-panel="processor" data-processor="stripe">
                                <form method="post" name="wechat_form" id="wechat_form" class="flexlayoutform flexlayout100p" action="/billing/wechat.php" data-billing_type="wechat">
                                    <input type="hidden" name="method" value="wechat">
                                    <input type="hidden" name="action" value="makepayment">
                                    <input type="hidden" name="csrf_token" value="rwomY1BiQzSut3APyOYQXdnjKglGu183a7IW/xt4iik=">

                                    <input type="radio" name="amount" value="10" class="radiolabelbutton" id="wechat10" onchange="wechatamountchange();">
                                    <label for="wechat10" class="flexwidth1sixth" >
                                        $10
                                    </label>
                                    <input type="radio" name="amount" value="25" class="radiolabelbutton" id="wechat25" onchange="wechatamountchange();">
                                    <label for="wechat25" class="flexwidth1sixth" >
                                        $25
                                    </label>
                                    <input type="radio" name="amount" value="50" class="radiolabelbutton" id="wechat50" onchange="wechatamountchange();">
                                    <label for="wechat50" class="flexwidth1sixth" >
                                        $50
                                    </label>
                                    <input type="radio" name="amount" value="100" class="radiolabelbutton" id="wechat100" onchange="wechatamountchange();">
                                    <label for="wechat100" class="flexwidth1sixth" >
                                        $100
                                    </label>
                                    <input type="radio" name="amount" value="250" class="radiolabelbutton" id="wechat250" onchange="wechatamountchange();">
                                    <label for="wechat250" class="flexwidth1sixth" >
                                        $250
                                    </label>

                                    <input type="radio" name="amount" value="other" id="wechatother" class="radiolabelbutton" onchange="wechatamountchange();" >
                                    <label for="wechatother" class="flexwidth1sixth" >
                                        <i class="zmdi zmdi-plus-circle-o"></i>
                                        <span class="hide_on_mobile">Other</span>
                                    </label>

                                    <div id="other-amount-block-wechat" class="form-group form-select-input m-t-20 m-b-0 w100p other-amount" style="display:none;">
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input name="amountcustom" type="text" id="wechat-custom-amount" class="form-control numbers_only" value="" placeholder="Enter amount" maxlength="8" autocomplete="off">
                                        </div>
                                    </div>

                                    <hr class="hr20"/>
                                    <div>
                                        <input type="checkbox" name="agree_tos" id="agree_tos_wechat" class="checkboxcheckmark"/>
                                        <label for="agree_tos_wechat">I Agree to the <a href="https://www.vultr.com/legal/tos.php" target="_blank">Terms of Service</a></label>
                                    </div>

                                    <hr class="hr30"/>
                                    <button type="submit" class="button flexwidth100" onclick="submitPayment($(this)); return false;">Generate QR Code</button>
                                    <hr class="hr30"/>

                                    <div class="panel panel-bordered qrcode-panel" style="display:none;">
                                        <div class="panel-body">
                                            <div class="tab-section tab-section-sm">
                                                <h3 class="back_button_header">
                                                    <a class="btn btn-icon btn-link" href="/billing/?wechat">
                                                        <i class="zmdi zmdi-arrow-left"></i>
                                                    </a>
                                                    Scan QR Code
                                                </h3>
                                                <div class="panel">
                                                    <div class="panel-body">
                                                        <h6 class="panel-title title-faded" align="center">Scan the QR code with your app to make a <b>$0.00</b> WeChat payment</h6>
                                                        <div id="qrcode" align="center"></div>
                                                    </div>
                                                </div>
                                                <a class="button btn-primary btn-block m-b-15" href="/billing/?wechat">Cancel</a>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div data-panel="no_processor" data-processor="stripe" style="display:none;">
                                <div class="error_message" id="wechat_error_message">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div id="block_right_creditcard">
                        <h3>Summary</h3>
                        <div data-id="cart_credit_card" style="position: relative">

                            <div data-id="cart_container">
                                <div class="cart">

                                    <span class="spinner spinner-lg spinner-white" data-id="spinner" style="display: none;"></span>

                                    <table class="billingcart">
                                        <tbody>
                                        <tr class="billingcartform">
                                            <td>
                                                <input type="text" class="alternate flexwidth100" name="gift_code" value="" placeholder="Enter Code">
                                            </td>
                                            <td>
                                                <input type="button" class="btn-light" name="add_code" value="Apply">
                                            </td>
                                        </tr>
                                        <tr data-id="row_error" style="display:none;" class="billingcarterror">
                                            <td data-id="col_error" colspan="2">
                                            </td>
                                        </tr>
                                        <tr class="billingcarttotal">
                                            <td>
                                                Total Billed to Credit Card
                                            </td>
                                            <td>
                                                +$<span data-id="total_billed">0.00</span>
                                            </td>
                                        </tr>
                                        <tr class="billingcartcredit">
                                            <td>
                                                Total Available Credit
                                            </td>
                                            <td>
                                                $<span data-id="total_credit">0.00</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <div class="billingcart_bl" style="display: none;">
                                        This payment method is not eligible for promotions at the current time. You may use our promo codes with other payment methods.
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="block_right_paypal" style="display:none;">
                        <h3>Summary</h3>
                        <div data-id="cart_paypal" style="position: relative">

                            <div data-id="cart_container">
                                <div class="cart">

                                    <span class="spinner spinner-lg spinner-white" data-id="spinner" style="display: none;"></span>

                                    <table class="billingcart">
                                        <tbody>
                                        <tr class="billingcartform">
                                            <td>
                                                <input type="text" class="alternate flexwidth100" name="gift_code" value="" placeholder="Enter Code">
                                            </td>
                                            <td>
                                                <input type="button" class="btn-light" name="add_code" value="Apply">
                                            </td>
                                        </tr>
                                        <tr data-id="row_error" style="display:none;" class="billingcarterror">
                                            <td data-id="col_error" colspan="2">
                                            </td>
                                        </tr>
                                        <tr class="billingcarttotal">
                                            <td>
                                                Total Billed to PayPal
                                            </td>
                                            <td>
                                                +$<span data-id="total_billed">0.00</span>
                                            </td>
                                        </tr>
                                        <tr class="billingcartcredit">
                                            <td>
                                                Total Available Credit
                                            </td>
                                            <td>
                                                $<span data-id="total_credit">0.00</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <div class="billingcart_bl" style="display: none;">
                                        This payment method is not eligible for promotions at the current time. You may use our promo codes with other payment methods.
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="block_right_bitpay" style="display:none;">
                        <h3>Summary</h3>
                        <div data-id="cart_bitpay" style="position: relative">

                            <div data-id="cart_container">
                                <div class="cart">

                                    <span class="spinner spinner-lg spinner-white" data-id="spinner" style="display: none;"></span>

                                    <table class="billingcart">
                                        <tbody>
                                        <tr class="billingcartform">
                                            <td>
                                                <input type="text" class="alternate flexwidth100" name="gift_code" value="" placeholder="Enter Code">
                                            </td>
                                            <td>
                                                <input type="button" class="btn-light" name="add_code" value="Apply">
                                            </td>
                                        </tr>
                                        <tr data-id="row_error" style="display:none;" class="billingcarterror">
                                            <td data-id="col_error" colspan="2">
                                            </td>
                                        </tr>
                                        <tr class="billingcarttotal">
                                            <td>
                                                Total Billed to Bitcoin
                                            </td>
                                            <td>
                                                +$<span data-id="total_billed">0.00</span>
                                            </td>
                                        </tr>
                                        <tr class="billingcartcredit">
                                            <td>
                                                Total Available Credit
                                            </td>
                                            <td>
                                                $<span data-id="total_credit">0.00</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <div class="billingcart_bl" style="display: none;">
                                        This payment method is not eligible for promotions at the current time. You may use our promo codes with other payment methods.
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="block_right_alipay" style="display:none;">
                        <h3>Summary</h3>
                        <div data-id="cart_alipay" style="position: relative">

                            <div data-id="cart_container">
                                <div class="cart">

                                    <span class="spinner spinner-lg spinner-white" data-id="spinner" style="display: none;"></span>

                                    <table class="billingcart">
                                        <tbody>
                                        <tr class="billingcartform">
                                            <td>
                                                <input type="text" class="alternate flexwidth100" name="gift_code" value="" placeholder="Enter Code">
                                            </td>
                                            <td>
                                                <input type="button" class="btn-light" name="add_code" value="Apply">
                                            </td>
                                        </tr>
                                        <tr data-id="row_error" style="display:none;" class="billingcarterror">
                                            <td data-id="col_error" colspan="2">
                                            </td>
                                        </tr>
                                        <tr class="billingcarttotal">
                                            <td>
                                                Total Billed to Alipay
                                            </td>
                                            <td>
                                                +$<span data-id="total_billed">0.00</span>
                                            </td>
                                        </tr>
                                        <tr class="billingcartcredit">
                                            <td>
                                                Total Available Credit
                                            </td>
                                            <td>
                                                $<span data-id="total_credit">0.00</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <div class="billingcart_bl" style="display: none;">
                                        This payment method is not eligible for promotions at the current time. You may use our promo codes with other payment methods.
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="block_right_wechat" style="display:none;">
                        <h3>Summary</h3>
                        <div data-id="cart_wechat" style="position: relative">

                            <div data-id="cart_container">
                                <div class="cart">

                                    <span class="spinner spinner-lg spinner-white" data-id="spinner" style="display: none;"></span>

                                    <table class="billingcart">
                                        <tbody>
                                        <tr class="billingcartform">
                                            <td>
                                                <input type="text" class="alternate flexwidth100" name="gift_code" value="" placeholder="Enter Code">
                                            </td>
                                            <td>
                                                <input type="button" class="btn-light" name="add_code" value="Apply">
                                            </td>
                                        </tr>
                                        <tr data-id="row_error" style="display:none;" class="billingcarterror">
                                            <td data-id="col_error" colspan="2">
                                            </td>
                                        </tr>
                                        <tr class="billingcarttotal">
                                            <td>
                                                Total Billed to WeChat
                                            </td>
                                            <td>
                                                +$<span data-id="total_billed">0.00</span>
                                            </td>
                                        </tr>
                                        <tr class="billingcartcredit">
                                            <td>
                                                Total Available Credit
                                            </td>
                                            <td>
                                                $<span data-id="total_credit">0.00</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <div class="billingcart_bl" style="display: none;">
                                        This payment method is not eligible for promotions at the current time. You may use our promo codes with other payment methods.
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="block_right_giftcode" style="display:none;">
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

<script>

    // Mobile default variables.
    var mobile_threshold             = 415;
    var tablet_threshold             = 841;
    var mobile_view                  = ($(window).width() < mobile_threshold);
    var tablet_view                  = $(window).width() > mobile_threshold && $(window).width() <= tablet_threshold;
    var mobile_default_position      = 'fixed';
    var mobile_default_top_position  = '20%';
    var mobile_default_left_position = 'initial';

    // Close popups on window resize.
    var resizeDebounce = false;
    $(window).resize(function()
    {
        if (!resizeDebounce)
        {
            resizeDebounce = true;
            if (!mobile_view)
            {
                if (!($(window).width() == 812 && $(window).height() == 375))
                {
                    hideDropdowns();
                }
            }
            if ($('#DROPDOWNPOPUP').css('display') == 'block')
            {
                $('#DROPDOWNPOPUP').animate(
                    {
                        'opacity':'0',
                        'margin-top':'20px'
                    }, 200, function()
                    {
                        resizeDebounce = false;
                        $(this).hide();
                    });
            } else {
                resizeDebounce = false;
            }
        }
    });

    // Close the dropdowns on a click anywhere outside of the dropdown.
    $(document).click(function(e)
    {
        if (e.target.className.indexOf('has-dropdown') < 0)
        {
            if (e.target == null)
            {
                hideDropdowns();
            }
            else if (e.target.offsetParent == null)
            {
                hideDropdowns();
            }
            else if (e.target.offsetParent.className == null)
            {
                hideDropdowns();
            }
            else if (e.target.offsetParent.className.indexOf('dropdown-confirmation') < 0)
            {
                hideDropdowns();
            }
        }
    });

    $(document).ready(function()
    {
        // Animate/Actionize buttons on click.
        var loading_icon = '<i class="sp-white"></i>';

        $('a.btn-confirmation-blue').click(function()
        {
            var enabled = $(this).attr('disabled') !== 'disabled';
            if (enabled)
            {
                var new_label = loading_icon + actionize_label($(this).html());
                $(this).html(new_label);
            }
        });

        $('a.btn-confirmation-red').click(function()
        {
            var enabled = $(this).attr('disabled') !== 'disabled';
            if (enabled)
            {
                var new_label = loading_icon + actionize_label($(this).html());
                $(this).html(new_label);
            }
        });

        // Close dropdown on esc keypress.
        $(document).keyup(function(e)
        {
            var esc_keypress = (e.keyCode === 27);
            if (esc_keypress)
            {
                hideDropdowns();
            }
        });
    });

    // Verb tense button labels, i.e. Delete Network -> Deleting Network.
    function actionize_label(label)
    {
        var first_word = label.split(' ')[0];
        var last_letter = first_word[first_word.length - 1];
        var label_appendage = label.substr(label.indexOf(' ') + 1);

        if (label.indexOf(',') != -1)
        {
            return 'Please wait...';
        }

        if (last_letter == 'e')
        {
            var first_word = first_word.slice(0, -1);
        }

        if (last_letter == 'p')
        {
            var first_word  = first_word + 'p';
        }

        var first_word = first_word + 'ing';
        var tensed_string = first_word + ' ' + label_appendage;

        return tensed_string;
    }

    function showConfirmationDropdown(e, main_table, type)
    {
        var main_table  = main_table || false;
        var type        = type || 'vps';
        var dropdown    = $('div.dropdown-confirmation-blue');
        var dropdowns   = $('div.dropdown-confirmation');
        var disclaimer  = e.attr('dropdown-disclaimer');
        var label       = e.attr('aria-label');
        var info        = Base64.decode(e.attr('dropdown-info'));
        var action      = e.attr('dropdown-action');
        var fn          = e.attr('dropdown-function');
        var position    = e.position();
        var width       = e.outerWidth();
        var show_serverinfo = e.data('show-serverinfo');

        // Hide tooltip on toggle.
        $('.tooltip').hide();

        // Dynamically add info to the dropdown.
        if (action == 'add-ipv4')
        {
            fn = 'if ($(this).attr("disabled") !== "disabled"){'+e.attr('dropdown-function')+'}';
            dropdown = $('div.dropdown-confirmation-blue-checkbox');
            dropdown.find('#action-label').html(' add and restart ');
            dropdown.find('.server-info').html('Server: <b>' + info + '</b>');
        }

        dropdown.find('.server-info').html('Server: <b>'+info+'</b>');
        dropdown.find('#dropdown-label').html(label);
        dropdown.find('a.btn-confirmation').html(label);
        dropdown.find('a.btn-confirmation').attr('name', action);
        dropdown.find('a.btn-confirmation').addClass('btn-'+action);
        dropdown.find('#dropdown-disclaimer').html(disclaimer);
        dropdown.find('input[type=checkbox]').attr('name', action);
        dropdown.removeClass('arrow-change');

        if ($.inArray(action, ['api-allow-ipv6', 'api-allow-ipv4', 'delete-block-storage', 'dcid-notify']) !== -1)
        {
            dropdown.find('.server-info').html('');
        }
        else
        {
            dropdown.find('.server-info').html(label.substr(label.indexOf(' ') + 1) + ': <b>' + info + '</b>');
        }

        if (show_serverinfo === 'no')
        {
            dropdown.find('.server-info').hide();
        }
        else
        {
            dropdown.find('.server-info').show();
        }

        // These subs require an additional param ( SUBID ),
        // append the value here before binding the submit function to the button.
        if (main_table)
        {
            var position = e.parent().position();
            var subid    = e.attr('dropdown-subid');

            if (type == 'vps')
            {
                var form        = $('#vpsform'+action);
                var form_action = $('#vpsform'+action+ ' input[name=SUBID]');

                form_action.val(subid);
                form.attr('action', '/subs/?SUBID='+subid);
            }

            if (type == 'baremetal')
            {
                var bm_action = action.replace('-bm', '');
                $('#serveractionbm input[name=SUBID]').val(subid);
                $('#serveractionbm input[name=action]').val(bm_action);
                $('#serveractionbm').attr('action', '/subs/?SUBID=' + subid);
            }
        }

        // Bind the passed through function to the submit button.
        dropdown.find('a.btn-confirmation').attr('onclick', fn);

        var dropdowns = $('.dropdown-confirmation-red');

        if (dropdowns.is(':visible'))
        {
            dropdowns
                .animate({
                    'margin-top' : '0px',
                    'opacity'    : '0',
                }, 200, function()
                {
                    $(this).hide();
                });
            ;
        }

        // Some of the dropdowns require a bit of fine tuning to render on the correct spot on the page.
        // If on mobile, render the dropdown as a modern-style popup.
        if (mobile_view)
        {
            var position_type = 'fixed';
            var top_position  = '20%';
            var left_position = 'initial';
        }
        else if (main_table)
        {
            var position_type = 'absolute';
            var top_position  = (position.top - 40) + 'px';
            var left_position = (position.left + width - 265) + 'px';
        }
        else if ($.inArray(action, ['dcid-notify']) !== -1)
        {
            dropdown.find('a.btn-confirmation').html('Yes, notify me!');

            var position = $('label[for=DCID' + e.val() + ']').offset();
            var position_type = 'absolute';
            var top_position  = (position.top + 60) + 'px';
            var left_position = (position.left - 30) + 'px';
        }
        else if ($.inArray(action, ['remove-domain', 'remove-firewall-group', 'remove-iso', 'remove-network', 'delete-user', 'remove-snapshot', 'delete-ssh-key', 'delete-startup-script', 'remove-ip']) !== -1)
        {
            var position_type = 'absolute';
            var top_position  = (position.top) + 'px';
            var left_position = (position.left - 233) + 'px';
        }
        else if ($.inArray(action, ['remove-snapshot-header', 'delete-startup-script-header', 'delete-ssh-key-header', 'remove-domain-header', 'delete-block-storage', 'remove-ip-header', 'remove-firewall-group-header', 'remove-network-header']) !== -1)
        {
            var position_type = 'absolute';
            var top_position  = e.offset().top + e.height() - 20;
            var left_position = e.offset().left - 233;
        }
        else if ($.inArray(action, ['mass-restart', 'mass-stop']) !== -1)
        {
            var position_type = 'absolute';
            var top_position  = e.offset().top + e.height();
            var left_position = e.offset().left - 170;

            if (left_position < 0)
            {
                left_position = 0;
            }
        }
        else if ($.inArray(action, ['api-allow-ipv6', 'api-allow-ipv4']) !== -1)
        {
            var position_type = 'absolute';
            var top_position  = (position.top + 20) + 'px';
            var left_position = (position.left - 170) + 'px';
        }
        else if ($(window).width() > mobile_threshold && $(window).width() <= tablet_threshold && !main_table && $.inArray(action, ['stop', 'restart']) !== -1)
        {
            var position_type = 'absolute';
            var top_position  = (e.parent().offset().top + e.height()) - 60;
            var left_position = e.parent().offset().left - 100;
        }
        else
        {
            var position_type = 'absolute';
            var top_position  = (position.top + 20) + 'px';
            var left_position = (position.left + width - 265) + 'px';
            if (left_position.replace('px', '') < 0)
            {
                left_position = 0;
                dropdown.addClass('arrow-change');
            }
        }

        showDropdown(dropdown, position_type, top_position, left_position, main_table);
    }

    function showCheckConfirmationDropdown(e, main_table , type)
    {
        var main_table = main_table || false;
        var type       = type || 'vps';
        var dropdown   = $('div.dropdown-confirmation-red');
        var dropdowns  = $('div.dropdown-confirmation');
        var disclaimer = e.attr('dropdown-disclaimer');
        var label      = e.attr('aria-label');
        var info       = Base64.decode(e.attr('dropdown-info'));
        var action     = e.attr('dropdown-action');
        var fn         = 'if ($(this).attr("disabled") !== "disabled"){'+e.attr('dropdown-function')+'}';
        var position   = e.position();
        var width      = e.outerWidth();

        // Hide tooltip on toggle.
        $('.tooltip').hide();

        // Dynamically add info to the dropdown.

        if (label == 'Change OS' || label == 'Change Application')
        {
            dropdown.find('.server-info').html('Server: <b>' + info + '</b>');
        }
        else
        {
            dropdown.find('.server-info').html(label.substr(label.indexOf(' ') + 1) + ': <b>' + info + '</b>');
        }

        dropdown.find('#dropdown-label').html(label);
        dropdown.find('a.btn-confirmation').html(label);
        dropdown.find('a.btn-confirmation').attr('name', action);
        dropdown.find('a.btn-confirmation').addClass('btn-'+action);
        dropdown.find('input[type=checkbox]').attr('name', action);
        dropdown.find('#action-label').html(action);
        dropdown.find('#dropdown-disclaimer').html(disclaimer);

        if (action.match (/-bm$/))
        {
            dropdown.find('#action-label').html(action.replace('-bm', ''));
        }

        if (action.indexOf('change-') >= 0)
        {
            var new_action = action.replace('-', ' the ');
            new_action = new_action + ' on ';
            dropdown.find('#action-label').html(new_action);
            if (action == 'change-hostname')
            {
                dropdown.find('#action-label').html('change the hostname and reinstall');
            }
        }

        if (main_table)
        {
            var position = e.parent().position();
            var subid    = e.attr('dropdown-subid');

            if (type == 'vps')
            {
                var form        = $('#vpsform'+action);
                var form_action = $('#vpsform'+action+ ' input[name=SUBID]');
                form_action.val(subid);
                form.attr('action', '/subs/?SUBID='+subid);
            }

            if (type == 'baremetal')
            {
                var bm_action = action.replace('-bm', '');
                dropdown.find('#action-label').html(bm_action);
                $('#serveractionbm input[name=SUBID]').val(subid);
                $('#serveractionbm input[name=action]').val(bm_action);
                $('#serveractionbm').attr('action', '/subs/?SUBID=' + subid);
            }
        }

        dropdown.find('a.btn-confirmation').attr('onclick', fn).attr('disabled', true);

        var dropdowns = $('.dropdown-confirmation-blue,.dropdown-confirmation-blue-checkbox');

        if (dropdowns.is(':visible'))
        {
            dropdowns
                .animate({
                    'margin-top' : '0px',
                    'opacity'    : '0',
                }, 200, function()
                {
                    $(this).hide();
                });
            ;
        }

        if (mobile_view)
        {
            var position_type = mobile_default_position;
            var top_position  = mobile_default_top_position;
            var left_position = mobile_default_left_position;
        }
        else if (main_table)
        {
            var position_type = 'absolute';
            var top_position  = (position.top - 40) + 'px';
            var left_position = (position.left + width - 265) + 'px';
        }
        else if (action == 'snapshot-restore')
        {
            var position_type = 'absolute';
            var top_position  = (position.top) + 'px';
            var left_position = (position.left + width - 232) + 'px';
        }
        else if ($(window).width() > mobile_threshold && $(window).width() <= tablet_threshold && !main_table && $.inArray(action, ['reinstall', 'destroy']) !== -1)
        {
            var position_type = 'absolute';
            var top_position  = (e.parent().offset().top + e.height()) - 60;
            var left_position = e.parent().offset().left - 100;
        }
        else
        {
            var position_type = 'absolute';
            var top_position  = (position.top + 20) + 'px';
            var left_position = (position.left + width - 265) + 'px';
        }

        showDropdown(dropdown, position_type, top_position, left_position, main_table);
    }

    function showDisclaimerDropdown(e)
    {
        var dropdown   = $('div.dropdown-confirmation-red');
        var disclaimer = e.attr('dropdown-disclaimer');
        var label      = e.attr('aria-label');
        var info       = Base64.decode(e.attr('dropdown-info'));
        var action     = e.attr('dropdown-action');
        var position   = e.position();
        var width      = e.outerWidth();

        // Hide tooltip on toggle.
        $('.tooltip').hide();

        // Dynamically add info to the dropdown.
        dropdown.find('.server-info').html('Server: <b>'+info+'</b>');
        dropdown.find('#question-mark').hide();
        dropdown.find('div.checkbox').hide();
        dropdown.find('div.dropdown-actions').hide();
        dropdown.find('#dropdown-label').html(label);
        dropdown.find('#dropdown-disclaimer').html(disclaimer);

        hideDropdowns();

        if (mobile_view)
        {
            var position_type = mobile_default_position;
            var top_position  = mobile_default_top_position;
            var left_position = mobile_default_left_position;
        }
        else
        {
            var position_type = 'absolute';
            var top_position  = (position.top + 20) + 'px';
            var left_position = (position.left + width - 265) + 'px';
        }

        showDropdown(dropdown, position_type, top_position, left_position);
    }

    function showDropdown(dropdown, position_type, top_position, left_position, main_table)
    {
        var main_table = main_table || false;

        dropdown
            .css({
                'position' : position_type,
                'top'      : top_position,
                'left'     : left_position,
            })
            .show()
            .animate({
                'margin-top' : '20px',
                'opacity'    : '1',
            }, 200)
        ;

        if (!main_table && !mobile_view && !tablet_view)
        {
            if (!isScrolledIntoView(dropdown))
            {
                $('html, body').animate({
                    scrollTop: top_position
                }, 1500);
            }
        }
    }

    function hideDropdowns()
    {
        var dropdowns = $('.dropdown-confirmation');

        if (dropdowns.is(':visible'))
        {
            dropdowns
                .animate({
                    'margin-top' : '0px',
                    'opacity'    : '0',
                }, 200, function()
                {
                    $(this).hide();
                });
            ;
        }

        var checkboxes = ['reinstall', 'destroy'];
        $.each(checkboxes, function(index)
        {
            var checkbox = checkboxes[index];

            $('input[type=checkbox][name='+checkbox+']').attr('checked', false);
        });
    }

    function enableButton(checkbox)
    {
        var name = checkbox.attr('name');

        if (checkbox.is(':checked'))
        {
            $('.btn-'+name).attr('disabled', false);
        }
        else
        {
            $('.btn-'+name).attr('disabled', true);
        }
    }
</script>

<div class="dropdown-confirmation dropdown-confirmation-blue">
    <div class="dropdown-body">
        <h5 class="dropdown-title text-info">
            <i class="zmdi zmdi-info-outline"></i>
            <span id="dropdown-label"></span><span id="question-mark">?</span>
        </h5>
        <div class="server-info"></div>
        <p>
            <span id="dropdown-disclaimer"></span>
        </p>
    </div>
    <div class="dropdown-actions">
        <a class="btn btn-xs btn-primary btn-block btn-confirmation btn-confirmation-blue"></a>
        <button class="btn btn-xs btn-default btn-outline btn-block" data-dismiss="drop" onclick="hideDropdowns();">Cancel</button>
    </div>
</div>

<div class="dropdown-confirmation dropdown-confirmation-blue-checkbox">
    <div class="dropdown-body">
        <h5 class="dropdown-title text-info">
            <i class="zmdi zmdi-info-outline"></i>
            <span id="dropdown-label"></span>?
        </h5>
        <div class="server-info"></div>
        <p>
            <span id="dropdown-disclaimer"></span>
        </p>
        <div class="checkbox">
            <label>
                <input type="checkbox" class="confirm" onchange="enableButton($(this));">
                Yes, <span id="action-label"></span> this <span id="dropdown-object">server</span>.
            </label>
        </div>
    </div>
    <div class="dropdown-actions">
        <a class="btn btn-xs btn-dropdown-blue btn-primary btn-block btn-confirmation btn-confirmation-blue" disabled></a>
        <button class="btn btn-xs btn-default btn-outline btn-block" data-dismiss="drop" onclick="hideDropdowns();">Cancel</button>
    </div>
</div>

<div class="dropdown-confirmation dropdown-confirmation-red">
    <div class="dropdown-body">
        <h5 class="dropdown-title text-danger"><i class="zmdi zmdi-alert-circle-o"></i>
            <span id="dropdown-label"></span><span id="question-mark">?</span>
        </h5>
        <div class="server-info"></div>
        <p>
            <span id="dropdown-disclaimer"></span>
        </p>
        <div class="checkbox">
            <label>
                <input type="checkbox" class="confirm" onchange="enableButton($(this));">
                Yes, <span id="action-label"></span> this <span id="dropdown-object">server</span>.
            </label>
        </div>
    </div>
    <div class="dropdown-actions">
        <a class="btn btn-xs btn-dropdown-danger btn-block btn-confirmation btn-confirmation-red" disabled></a>
        <button class="btn btn-xs btn-default btn-outline btn-block" data-dismiss="drop" onclick="hideDropdowns();">Cancel</button>
    </div>
</div>

<div id="menusidebar_block" onclick="event.stopPropagation();">
    <div id="menusidebar_hide" onclick="menusidebarHide();">
    </div>
    <div id="menusidebar_container">
        <a href="/" >
            Servers
        </a>
        <a href="/billing/" class="active">
            Billing
        </a>
        <a href="/support/" >
            Support
        </a>
        <a href="/affiliate/" >
            Affiliate
        </a>
        <a href="/settings/" >
            Account
        </a>
        <a href="/?logout=1">
            Logout
        </a>
    </div>
</div>

<div class="body-bg"></div>

<div id="notifications_block" onclick="event.stopPropagation();">
    <div id="notifications_hide" onclick="notificationsHide();">
    </div>
    <div id="notifications_header">
        Notifications
        <a href="/settings/#settingsnotifications">
            Edit Preferences
        </a>
    </div>
</div>






</body>
</html>
