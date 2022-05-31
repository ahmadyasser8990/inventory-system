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
                        <li class="sidebar-dropdown ">
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
                                    <li>
                                        <a href="{{route('dashboard.items-report.index')}}">@lang('site.items_report')</a>
                                    </li>
                                    <li >
                                        <a  href="{{route('dashboard.customer-statment.index')}}">@lang('site.Customer_account_statement')</a>
                                    </li>
                                    <li>
                                        <a  href="{{route('dashboard.delegates-commissions-report.index')}}">@lang('site.delegates_commissions_report')</a>
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
                                        <a href="{{route('dashboard.offer-doc-report.index')}}">@lang('site.offer_document_report') </a>
                                    </li>
                                    <li class="active">
                                        <a style="background: #8796af94;" href="{{route('dashboard.capital-items-report.index')}}">@lang('site.capital_items_report')</a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.exchange-bond-report.index')}}">@lang('site.exchange_bond_report')</a>
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
                                        <a href="{{route('dashboard.debit-movement.index')}}">@lang('site.debit_movement')</a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.credit-movement.index')}}">@lang('site.credit_movement')</a>

                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.client-balance.index')}}">@lang('site.client_balance')</a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.daily-movement.index')}}">@lang('site.daily_movement')</a>
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
                    <li class="breadcrumb-item active">@lang('site.capital_items_report')</li>
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
                        {{-- <div class="row gutters">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="info-tiles">
                                    <div class="info-icon">
                                        <i class="icon-dns"></i>
                                    </div>
                                    <div class="stats-detail">
                                        <h3>152</h3>
                                        <p>@lang('site.total_invoice_offer')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="info-tiles">
                                    <div class="info-icon secondary">
                                        <i class="icon-dns"></i>
                                    </div>
                                    <div class="stats-detail">
                                        <h3>14500 ريال</h3>
                                        <p>@lang('site.total_items_avaliable')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="info-tiles">
                                    <div class="info-icon">
                                        <i class="icon-dns"></i>
                                    </div>
                                    <div class="stats-detail">
                                        <h3>14500 ريال</h3>
                                        <p>@lang('site.total_items_sold')</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- Row ends -->
                        <!-- Row starts -->
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">@lang('site.capital_items_report')</div>
                                    </div>
                                    <hr>
                                    <div class="card-body pt-0" >
                                        <div class="raw">
                                            <p>@lang('site.reports')</p>
                                        </div>

                                        <div class="raw">
                                            <!-- Checkbox general report -->
                                            <div class="form-inline">
                                                <div class="form-check custom-control custom-radio mb-2 mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox_general_report">
                                                    <label class="custom-control-label" for="checkbox_general_report">@lang('site.general_report')</label>
                                                </div>

                                                <!-- Checkbox private_report -->
                                                <div class="form-check custom-control custom-radio mb-2 mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox_private_report">
                                                    <label class="custom-control-label" for="checkbox_private_report">@lang('site.private_report')</label>
                                                </div>
                                                <input type="number" class="form-control mb-2 mr-sm-2" id="" placeholder="@lang('site.client_no')">
                                                <input type="number" class="form-control mb-2 mr-sm-2" id="" placeholder="@lang('site.client_name')">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="raw">

                                            <div class="form-inline">
                                                <!-- Checkbox statment_with_detials -->
                                                <div class="form-check custom-control custom-radio mb-2 mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox_statment_with_detials">
                                                    <label class="custom-control-label" for="checkbox_statment_with_detials">@lang('site.statment_with_detials')</label>
                                                </div>
                                                <!-- Checkbox general_statment -->
                                                <div class="form-check custom-control custom-radio mb-2 mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox_general_statment">
                                                    <label class="custom-control-label" for="checkbox_general_statment">@lang('site.general_statment')</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="raw">
                                            <p>@lang('site.choose_invoices')</p>
                                        </div>

                                        <!-- Checkbox invoice_no -->
                                        <div class="form-inline">
                                            <div class="form-check custom-control custom-radio mb-2 mr-sm-2">
                                                <input class="custom-control-input" type="checkbox" id="checkbox_invoice_no">
                                                <label class="custom-control-label" for="checkbox_invoice_no">
                                                     @lang('site.invoice_no')
                                                </label>
                                                <input type="number" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="@lang('site.invoice_no')">
                                            </div>
                                            <!-- Checkbox select_invoice_seprate -->
                                            <div class="form-check custom-control custom-radio mb-2 mr-sm-2">
                                                <input class="custom-control-input" type="checkbox" id="checkbox_select_invoice_seprate">
                                                <label class="custom-control-label" for="checkbox_select_invoice_seprate">
                                                     @lang('site.select_invoice_seprate')
                                                </label>
                                                <textarea name="" id="" class="form-control mb-2 mr-sm-2"  cols="50" rows="2">

                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-inline">
                                            <!-- Checkbox select_invoice_between_invoice_no -->
                                            <div class="form-check custom-control custom-radio mb-2 mr-sm-2">
                                                <input class="custom-control-input" type="checkbox" id="checkbox_select_invoice_between_invoice_no">
                                                <label class="custom-control-label" for="checkbox_select_invoice_between_invoice_no">
                                                    @lang('site.select_invoice_between_invoice_no')
                                                </label>
                                            </div>
                                            <label class="mb-2 mr-2" for="inlineFormCustomSelectPref">@lang('site.from')</label>
                                            <input type="number" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="@lang('site.invoice_no')">
                                            <label class="mb-2 mr-2" for="inlineFormCustomSelectPref">@lang('site.to')</label>
                                            <input type="number" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="@lang('site.invoice_no')">
                                        </div>
                                        <hr>

                                        <div class="raw">
                                            <p>@lang('site.select_date')</p>
                                        </div>

                                        <div class="form-inline">
                                            <!-- Checkbox select_invoice_between_date -->
                                            <div class="form-check custom-control custom-radio mb-2 mr-sm-2">
                                                <input class="custom-control-input" type="checkbox" id="checkbox_select_invoice_between_date">
                                                <label class="custom-control-label" for="checkbox_select_invoice_between_date">
                                                    @lang('site.select_invoice_between_date')
                                                </label>
                                            </div>
                                            <label class="mb-2 mr-2" for="inlineFormCustomSelectPref">@lang('site.from')</label>
                                            <input type="date" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="@lang('site.date')">
                                            <label class="mb-2 mr-2" for="inlineFormCustomSelectPref">@lang('site.to')</label>
                                            <input type="date" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="@lang('site.date')">
                                        </div>


                                        <!-- Checkbox current month -->
                                        <div class="form-inline">
                                            <div class="form-check custom-control custom-radio mb-2 mr-sm-2">
                                                <input class="custom-control-input" type="checkbox" id="checkbox_current_month_statment">
                                                <label class="custom-control-label" for="checkbox_current_month_statment">
                                                     @lang('site.current_month_statment')
                                                </label>
                                            </div>
                                        </div>

                                        <!-- Checkbox last 3 month -->
                                        <div class="form-inline">
                                            <div class="form-check custom-control custom-radio mb-2 mr-sm-2">
                                                <input class="custom-control-input" type="checkbox" id="checkbox_last_3_month_statment">
                                                <label class="custom-control-label" for="checkbox_last_3_month_statment">
                                                     @lang('site.last_3_month_statment')
                                                </label>
                                            </div>
                                        </div>

                                        <!-- Checkbox last 6 month -->
                                        <div class="form-inline">
                                            <div class="form-check custom-control custom-radio mb-2 mr-sm-2">
                                                <input class="custom-control-input" type="checkbox" id="checkbox_last_6_month_statment">
                                                <label class="custom-control-label" for="checkbox_last_6_month_statment">
                                                     @lang('site.last_6_month_statment')
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row gutters pt-2">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="text-right">
                                                    <a href="#" class="btn btn-primary mb-3">@lang('site.print')</a>

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
