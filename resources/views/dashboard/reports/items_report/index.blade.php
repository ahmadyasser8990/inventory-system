@extends('layouts.dashboard.app')


@section('content')

    <div class="page-wrapper">


        <!-- Sidebar wrapper start -->
        <nav id="sidebar" class="sidebar-wrapper">
            <!-- Sidebar brand start  -->
            <div class="sidebar-brand">
                <a href="{{route('dashboard.index')}}" class="logo" style="justify-content: center;">
                    <img src="{{asset('dashboard_files/img/logo.jpg')}}" />
                </a>
                <a href="{{route('dashboard.index')}}" class="logo-sm">
                    <img src="{{asset('dashboard_files/img/logo-sm.png')}}" alt="" />
                </a>
            </div>
            <!-- Sidebar brand end  -->

            <!-- Sidebar content start -->
            <div class="sidebar-content">

                <!-- sidebar menu start -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">@lang('site.general')</li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="icon-devices_other"></i>
                                <span class="menu-text">@lang('site.dashboard')</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="{{route('dashboard.index')}}">@lang('site.main_page') </a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.salesSummary.index')}}">@lang('site.sales_summary')</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="{{route('dashboard.messages.index')}}">
                                <i class="icon-message-circle"></i>
                                <span class="menu-text">@lang('site.messages')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('dashboard.clients.index')}}">
                                <i class="icon-documents"></i>
                                <span class="menu-text">@lang('site.folders')</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="icon-dollar-sign"></i>
                                <span class="menu-text">@lang('site.bills')</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="{{route('dashboard.sales.index')}}">@lang('site.sale_invoices')</a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.return-sales.index')}}"> @lang('site.return_sale') </a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.purchase.index')}}">@lang('site.purchase_bill')</a>
                                    </li>
                                    <li>
                                        <a href="return-purchase.html"> @lang('site.return_purchase') </a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.secure-bonds.index')}}">@lang('site.security_bond') </a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.return-secure-bonds.index')}}">@lang('site.return_security_bond')</a>
                                    </li>
                                    <li>
                                        <a href="switch-security-to-sales.html"> @lang('site.change_security_bond_to_sale_bill') </a>
                                    </li>
                                    <li>
                                        <a href="offer-document.html"> @lang('site.offer_document') </a>
                                    </li>
                                    <li>
                                        <a href="return-offer-document.html"> @lang('site.return_offer_document')  </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="icon-book-open"></i>
                                <span class="menu-text">@lang('site.items')</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="{{route('dashboard.products.index')}}">@lang('site.all_item')</a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.inquiryProducts')}}">@lang('site.inquiry_about_item')</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="icon-edit1"></i>
                                <span class="menu-text">@lang('site.bond')</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="{{route('dashboard.exchange-doc.index')}}">@lang('site.exchange_doc')</a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.customer-exchange.index')}}">@lang('site.customer_exchange')</a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.catch-receipt.index')}}">@lang('site.catch_receipt')</a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.deposit-doc.index')}}">@lang('site.deposit_doc')</a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.maintenance-doc.index')}}">@lang('site.maintenance_doc')</a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.adding-money-to-capital.index')}}">@lang('site.adding_amount_to_capital') </a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.withdraw-money-of-capital.index')}}">@lang('site.withdraw_amount_of_capital') </a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.payment-and-amount-due.index')}}">@lang('site.payments_and_amounts_due') </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown active">
                            <a href="#">
                                <i class="icon-line-graph"></i>
                                <span class="menu-text">@lang('site.reports')</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li class="active">
                                        <a href="{{route('dashboard.items-report.index')}}">@lang('site.items_report')</a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.customer-statment.index')}}">@lang('site.Customer_account_statement')</a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.delegates-commissions-report.index')}}">@lang('site.delegates_commissions_report')</a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.sales-report.index')}}">@lang('site.sales_report')</a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.return-sale-report.index')}}">@lang('site.sales_return_report') </a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.security-bond-report.index')}}">@lang('site.security_bond_report') </a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.return-security-bond-report.index')}}">@lang('site.return_security_bond_report') </a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.purchase-report.index')}}">@lang('site.purchases_report') </a>
                                    </li>
                                    <li>
                                        <a href="pie-graphs.html">@lang('site.offer_document_report') </a>
                                    </li>
                                    <li>
                                        <a href="radial-chart.html">@lang('site.capital_items_report')</a>
                                    </li>
                                    <li>
                                        <a href="radial-chart2.html">@lang('site.exchange_bond_report')</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="icon-dollar-sign"></i>
                                <span class="menu-text">@lang('site.movements') </span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="account-settings122.html">@lang('site.daily_movement')</a>
                                    </li>
                                    <li>
                                        <a href="blog12333.html">@lang('site.customer_balances')</a>
                                    </li>
                                    <li>
                                        <a href="blog12333323.html">@lang('site.customer_traffic')</a>
                                    </li>
                                    <li>
                                        <a href="cards1221.html">@lang('site.total_fund_movement')</a>
                                    </li>
                                    <li>
                                        <a href="datepickers2344.html">@lang('site.detailed_box_movement')</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- sidebar menu end -->

            </div>
            <!-- Sidebar content end -->
        </nav>
        <!-- Sidebar wrapper end -->

        <!-- Page content start  -->
        <div class="page-content">

            <!-- Header start -->
            <header class="header">
                <div class="toggle-btns">
                    <a id="toggle-sidebar" href="#">
                        <i class="icon-list"></i>
                    </a>
                    <a id="pin-sidebar" href="#">
                        <i class="icon-list"></i>
                    </a>
                </div>
                <div class="header-items">
                    <!-- Custom search start -->
                    <!-- <div class="custom-search">
                        <input type="text" class="search-query" placeholder="Search here ...">
                        <i class="icon-search1"></i>
                    </div> -->
                    <!-- Custom search end -->

                    <!-- Header actions start -->
                    <ul class="header-actions">
                        <li class="dropdown">
                            <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                                <i class="icon-font_download"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                                <div class="dropdown-menu-header">
                                    @lang('site.language')
                                </div>
                                <ul class="header-tasks">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                                <i class="icon-box"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                                <div class="dropdown-menu-header">
                                    @lang('site.actions') (05)
                                </div>
                                <ul class="header-tasks">
                                    <li>
                                        <p>اظافة عميل<span>قبل ساعتين </span></p>
                                    </li>
                                    <li>
                                        <p>حذف قطعه رقم 1005<span>قبل 2 يوم</span></p>
                                    </li>
                                    <li>
                                        <p>اظافة فاتورة مشتريات<span>قبل اسبوع</span></p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                                <i class="icon-bell"></i>
                                <span class="count-label">8</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                                <div class="dropdown-menu-header">
                                    @lang('site.messages') (40)
                                </div>
                                <ul class="header-notifications">
                                    <li>
                                        <a href="#">
                                            <div class="user-img away">
                                                <img src="{{asset('dashboard_files/img/user21.png')}}" alt="User">
                                            </div>
                                            <div class="details">
                                                <div class="user-title">احمد ياسر</div>
                                                <div class="noti-details">ارسل لي احصائيات الشهر الماضي</div>
                                                <div class="noti-date">Oct 20, 07:30 pm</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="user-img busy">
                                                <img src="{{asset('dashboard_files/img/user10.png')}}" alt="User">
                                            </div>
                                            <div class="details">
                                                <div class="user-title">ياسر</div>
                                                <div class="noti-details">متى وقت الاجتماع</div>
                                                <div class="noti-date">Oct 10, 12:00 am</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="user-img online">
                                                <img src="{{asset('dashboard_files/img/user6.png')}}" alt="User">
                                            </div>
                                            <div class="details">
                                                <div class="user-title">محمد</div>
                                                <div class="noti-details">تراني ظفة قطعه جديده</div>
                                                <div class="noti-date">Oct 15, 04:00 pm</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                                <span class="user-name">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</span>
                                <span class="avatar">ZF<span class="status busy"></span></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                                <div class="header-profile-actions">
                                    <div class="header-user-profile">
                                        <div class="header-user">
                                            <img src="{{ auth()->user()->image_path }}">
                                        </div>
                                        <h5>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h5>
                                        <p> @lang('site.manager')</p>
                                    </div>
                                    <a href="user-profile.html"><i class="icon-user1"></i> @lang('site.my_profile')</a>
                                    <a href="account-settings.html"><i class="icon-settings1"></i> @lang('site.settings')</a>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="icon-log-out1"></i> @lang('site.logout')
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- Header actions end -->
                </div>
            </header>
            <!-- Header end -->

            <!-- Page header start -->
            <div class="page-header">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">@lang('site.dashboard')</li>
                    <li class="breadcrumb-item active">@lang('site.items_report')</li>
                </ol>
            </div>
            <!-- Page header end -->

            <!-- Main container start -->
            <div class="main-container fixed-height">

                <!-- Setting vertical scroll start -->
                <div class="fixedBodyScroll">

                    <!-- Content wrapper start -->
                    <div class="content-wrapper">

                        <!-- Row start -->
                        <div class="row gutters">
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6">
                                <div class="info-tiles">
                                    <div class="info-icon">
                                        <i class="icon-dns"></i>
                                    </div>
                                    <div class="stats-detail">
                                        <h3>14500 ريال</h3>
                                        <p>@lang('site.total_items')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6">
                                <div class="info-tiles">
                                    <div class="info-icon secondary">
                                        <i class="icon-dns"></i>
                                    </div>
                                    <div class="stats-detail">
                                        <h3>14500 ريال</h3>
                                        <p>@lang('site.total_sold_items')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6">
                                <div class="info-tiles">
                                    <div class="info-icon">
                                        <i class="icon-dns"></i>
                                    </div>
                                    <div class="stats-detail">
                                        <h3>14500 ريال</h3>
                                        <p>@lang('site.total_avaliable_items')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6">
                                <div class="info-tiles">
                                    <div class="info-icon secondary">
                                        <i class="icon-dns"></i>
                                    </div>
                                    <div class="stats-detail">
                                        <h3>14500 ريال</h3>
                                        <p>@lang('site.total_items_offer')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6">
                                <div class="info-tiles">
                                    <div class="info-icon">
                                        <i class="icon-dns"></i>
                                    </div>
                                    <div class="stats-detail">
                                        <h3>14500 ريال</h3>
                                        <p>@lang('site.total_items_secure')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6">
                                <div class="info-tiles">
                                    <div class="info-icon secondary">
                                        <i class="icon-dns"></i>
                                    </div>
                                    <div class="stats-detail">
                                        <h3>14500 ريال</h3>
                                        <p>@lang('site.total_purchase_items')</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Row ends -->
                        <!-- Row starts -->
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">@lang('site.select_report_type_then_sort_it_then_print') (@lang('site.you_can_select_one_type_of_report_only'))</div>
                                    </div>
                                    <hr>
                                    <div class="card-body pt-0" >
                                        <div class="raw">
                                            <p>Select Type 1</p>
                                        </div>

                                        <div class="raw">
                                            <!-- Checkbox report_basic_data -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="checkbox_report_basic_data">
                                                <label class="custom-control-label" for="checkbox_report_basic_data">@lang('site.report_basic_data')</label>
                                            </div>
                                            <!-- Checkbox report_status_items -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="checkbox_report_status_items">
                                                <label class="custom-control-label" for="checkbox_report_status_items">@lang('site.report_status_items')</label>
                                            </div>
                                            <!-- Checkbox last report_sold_items -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="checkbox_report_sold_items">
                                                <label class="custom-control-label" for="checkbox_report_sold_items">@lang('site.report_sold_items')</label>
                                            </div>
                                            <!-- Checkbox report_avaliable_items -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="checkbox_report_avaliable_items">
                                                <label class="custom-control-label" for="checkbox_report_avaliable_items">@lang('site.report_avaliable_items')</label>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="raw">
                                            <p>Or Select Type 2</p>
                                        </div>
                                        <!-- Checkbox report_client_items -->
                                        <div class="form-inline">
                                            <div class="form-check custom-control custom-radio mb-2 mr-sm-2">
                                                <input class="custom-control-input" type="checkbox" id="checkbox_report_client_items">
                                                <label class="custom-control-label" for="checkbox_report_client_items">
                                                     @lang('site.report_client_items')
                                                </label>
                                            </div>
                                            <input type="number" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="@lang('site.client_no')">
                                            <div class="input-group mb-2 mr-sm-2">
                                                <input type="text" class="form-control"  placeholder="@lang('site.client_name')">
                                            </div>
                                        </div>
                                        <!-- Checkbox report_last_items -->
                                        <div class="form-inline">
                                            <div class="form-check custom-control custom-radio mb-2 mr-sm-2">
                                                <input class="custom-control-input" type="checkbox" id="checkbox_report_last_items">
                                                <label class="custom-control-label" for="checkbox_report_last_items">
                                                     @lang('site.report_last_items')
                                                </label>
                                            </div>
                                            <input type="number" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="@lang('site.item_no')">
                                        </div>

                                        <!-- Checkbox report_select_items -->
                                        <div class="form-inline">
                                            <div class="form-check custom-control custom-radio mb-2 mr-sm-2">
                                                <input class="custom-control-input" type="checkbox" id="checkbox_report_select_items">
                                                <label class="custom-control-label" for="checkbox_report_select_items">
                                                     @lang('site.report_select_items')
                                                </label>
                                            </div>
                                            <label class="mb-2 mr-2" for="inlineFormCustomSelectPref">@lang('site.select_type')</label>
                                            <select class="custom-select mb-2 mr-sm-2" id="inlineFormCustomSelectPref">
                                                <option selected>Choose...</option>
                                                <option value="1">@lang('site.item_no')</option>
                                                <option value="2">@lang('site.extra_no')</option>
                                            </select>
                                            <input type="number" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="@lang('site.item_no_or_extra_no')">
                                        </div>

                                        <!-- Checkbox report_between_items -->
                                        <div class="form-inline">
                                            <div class="form-check custom-control custom-radio mb-2 mr-sm-2">
                                                <input class="custom-control-input" type="checkbox" id="checkbox_report_between_items">
                                                <label class="custom-control-label" for="checkbox_report_between_items">
                                                     @lang('site.report_between_items')
                                                </label>
                                            </div>
                                            <label class="mb-2 mr-2" for="inlineFormCustomSelectPref">@lang('site.from')</label>
                                            <input type="number" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="@lang('site.item_no')">
                                            <label class="mb-2 mr-2" for="inlineFormCustomSelectPref">@lang('site.to')</label>
                                            <input type="number" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="@lang('site.item_no')">
                                        </div>

                                        <!-- Checkbox report_all_items -->
                                        <div class="form-inline">
                                            <div class="form-check custom-control custom-radio mb-2 mr-sm-2">
                                                <input class="custom-control-input" type="checkbox" id="checkbox_report_all_items">
                                                <label class="custom-control-label" for="checkbox_report_all_items">
                                                     @lang('site.report_all_items')
                                                </label>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="raw">
                                            <p>Or Select Type 3</p>
                                        </div>

                                        <!-- Checkbox report_selected_bills -->
                                        <div class="form-inline">
                                            <div class="form-check custom-control custom-radio mb-2 mr-sm-2">
                                                <input class="custom-control-input" type="checkbox" id="checkbox_report_selected_bills">
                                                <label class="custom-control-label" for="checkbox_report_selected_bills">
                                                     @lang('site.report_selected_bills')
                                                </label>
                                            </div>
                                            <label class="mb-2 mr-2" for="inlineFormCustomSelectPref">@lang('site.select_bill')</label>
                                            <select class="custom-select mb-2 mr-sm-2" id="inlineFormCustomSelectPref">
                                                <option selected>Choose...</option>
                                                <option value="1">@lang('site.purchase')</option>
                                                <option value="2">@lang('site.offer')</option>
                                            </select>
                                            <input type="number" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="@lang('site.invoice_no')">
                                        </div>

                                        <!-- Checkbox report_between_bills -->
                                        <div class="form-inline">
                                            <div class="form-check custom-control custom-radio mb-2 mr-sm-2">
                                                <input class="custom-control-input" type="checkbox" id="checkbox_report_between_bills">
                                                <label class="custom-control-label" for="checkbox_report_between_bills">
                                                     @lang('site.report_between_bills')
                                                </label>
                                            </div>
                                            <label class="mb-2 mr-2" for="inlineFormCustomSelectPref">@lang('site.select_bills')</label>
                                            <select class="custom-select mb-2 mr-sm-2" id="inlineFormCustomSelectPref">
                                                <option selected>Choose...</option>
                                                <option value="1">@lang('site.purchase')</option>
                                                <option value="2">@lang('site.offer')</option>
                                            </select>
                                            <label class="mb-2 mr-2" for="inlineFormCustomSelectPref">@lang('site.from')</label>
                                            <input type="number" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="@lang('site.invoice_no')">
                                            <label class="mb-2 mr-2" for="inlineFormCustomSelectPref">@lang('site.to')</label>
                                            <input type="number" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="@lang('site.invoice_no')">
                                        </div>

                                        <!-- Checkbox report_all_bills -->
                                        <div class="form-inline">
                                            <div class="form-check custom-control custom-radio mb-2 mr-sm-2">
                                                <input class="custom-control-input" type="checkbox" id="checkbox_report_all_bills">
                                                <label class="custom-control-label" for="checkbox_report_all_bills">
                                                     @lang('site.report_all_bills')
                                                </label>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-inline">
                                            <label class="mb-2 mr-2" for="inlineFormCustomSelectPref">@lang('site.sort_by')</label>
                                            <select class="custom-select mb-2 mr-sm-2" id="inlineFormCustomSelectPref">
                                                <option selected>Choose...</option>
                                                <option value="1">@lang('site.purchase_bill')</option>
                                                <option value="2">@lang('site.sell_bill')</option>
                                                <option value="2">@lang('site.added_date')</option>
                                                <option value="2">@lang('site.item_no')</option>
                                                <option value="2">@lang('site.extra_no')</option>
                                                <option value="2">@lang('site.price_cost')</option>
                                                <option value="2">@lang('site.price_card')</option>
                                            </select>
                                        </div>
                                        <div class="row gutters pt-2">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="text-right">
                                                    <a href="#" class="btn btn-primary mb-3">@lang('site.print')</a>
                                                    <a href="#" class="btn btn-primary mb-3">@lang('site.print_image')</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content wrapper end -->

                </div>
                <!-- Setting vertical scroll end -->

            </div>
            <!-- Main container end -->

        </div>
        <!-- Page content end -->


    </div>

@endsection
