@extends('layouts.dashboard.app')

@section('links')

    <!-- Bootstrap Select CSS -->
	<link rel="stylesheet" href="{{asset('dashboard_files/vendor/bs-select/bs-select.css')}}" />

    <link rel="stylesheet" href="{{ asset('dashboard_files/css/pickadate/classic.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_files/css/pickadate/classic.date.css') }}">
    @if(config('app.locale') == 'ar')
        <link rel="stylesheet" href="{{ asset('dashboard_files/css/pickadate/rtl.css') }}">
    @endif

@endsection
@section('content')

    <div class="page-wrapper pinned">
        <div id="body"></div>
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
                                        <a href="{{route('dashboard.index')}}">@lang('site.dashboard') </a>
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
                        <li >
                            <a href="{{route('dashboard.clients.index')}}">
                                <i class="icon-documents"></i>
                                <span class="menu-text">@lang('site.folders')</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown active">
                            <a href="#">
                                <i class="icon-dollar-sign"></i>
                                <span class="menu-text">@lang('site.bills')</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a style="background: #8796af94;" href="{{route('dashboard.sales.index')}}">@lang('site.sale_invoices')</a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.return-sales.index')}}"> @lang('site.return_sale') </a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.purchase.index')}}">@lang('site.purchase_bill')</a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.return-purchase.index')}}"> @lang('site.return_purchase') </a>
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
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="icon-line-graph"></i>
                                <span class="menu-text">@lang('site.reports')</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
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
                                        <a href="{{route('dashboard.offer-doc-report.index')}}">@lang('site.offer_document_report') </a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.capital-items-report.index')}}">@lang('site.capital_items_report')</a>
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
                    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">@lang('site.dashboard')</a></li>
                    <li class="breadcrumb-item"><a href="{{route('dashboard.sales.index')}}">@lang('site.sale_invoices')</a></li>
                    <li class="breadcrumb-item active">@lang('site.sale_bill')</li>
                </ol>
            </div>
            <!-- Page header end -->

            <!-- Main container start -->
            <div class="main-container fixed-height">
                <!-- Setting vertical scroll start -->
                <div class="fixedBodyScroll">
                    <!-- Content wrapper start -->
                    <div class="content-wrapper">
                        <form action="{{route('dashboard.sales.store')}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('post')}}

                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card" id="customer_details">
                                        <div class="card-header">
                                            <div class="card-title">@lang('site.invoice_info')</div>
                                            <div class="card-sub-title">
                                                <div class="row gutters">
                                                    <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                                        <div class="form-group">
                                                            <label for="">@lang('site.invoice_date')</label>
                                                            <input type="text" class="form-control form-control-sm pickdate"  name="invoice_date">
                                                        </div>
                                                        @if($errors->has('invoice_date'))
                                                            <div class="error">{{ $errors->first('invoice_date') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                                        <div class="form-group">
                                                            <label for="">@lang('site.payment_method')</label>
                                                            <select name="payment_method" id="" class="form-control form-control-sm">
                                                                <option value="">choose...</option>
                                                                <option value="1">@lang('site.cash')</option>
                                                                <option value="2">@lang('site.masterCard')</option>
                                                            </select>
                                                        </div>
                                                        @if($errors->has('payment_method'))
                                                            <div class="error">{{ $errors->first('payment_method') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                                        <div class="form-group">
                                                            <label for="">@lang('site.sale_type')</label>
                                                            <select name="sale_type" id="saleType" class="form-control form-control-sm">
                                                                <option value="">choose...</option>
                                                                <option value="1">Order</option>
                                                                <option value="2">Cash</option>
                                                            </select>
                                                        </div>
                                                        @if($errors->has('sale_type'))
                                                            <div class="error">{{ $errors->first('sale_type') }}</div>
                                                        @endif
                                                    </div>

                                                    <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12 sale-type-cash">
                                                        <div class="form-group">
                                                            <label for="">@lang('site.name')</label>
                                                            <input type="text" class="form-control form-control-sm "  name="client_name_manual">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12 sale-type-cash">
                                                        <div class="form-group">
                                                            <label for="">@lang('site.phone')</label>
                                                            <input type="text" class="form-control form-control-sm " name="phone_manual">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12 sale-type-cash">
                                                        <div class="form-group">
                                                            <label for="">@lang('site.tax_no')</label>
                                                            <input type="text" class="form-control form-control-sm " name="tax_no_manual">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                                        <div class="form-group">
                                                            <label for="">@lang('site.client_name')</label>
                                                            <input class="form-control form-control-sm name" name="client_name"  type="text" value="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                                        <div class="form-group">
                                                            <label for="">@lang('site.phone_no')</label>
                                                            <input class="form-control form-control-sm phone" name="phone" type="text"  placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                                        <div class="form-group">
                                                            <label for="">@lang('site.tax_no')</label>
                                                            <input class="form-control form-control-sm tax_no" name="tax_no" type="text"  placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body" id="getClient">

                                            <div class="row gutters">
                                                <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                                    <div class="form-group">
                                                        <label for="">@lang('site.bill_no')</label>
                                                        <input class="form-control form-control-sm" type="text" readonly value="{{$nextSaleId}}">
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                                    <div class="form-group">
                                                        <label for="">@lang('site.client_no')</label>
                                                        <select name="client_no" type="text" id="client_no" class="form-control form-control-sm selectpicker client_no"  data-live-search="true">
                                                            <option value="">choose...</option>
                                                            @foreach ($clients as $client)
                                                                <option
                                                                    data-tax_no="{{ $client->tax_no }}"
                                                                    data-phone="{{ $client->phone }}"
                                                                    data-name="{{ $client->name }}"
                                                                    data-client_gold_price="{{ $client->gold_price }}"
                                                                    data-client_dimaond1_price="{{ $client->dimaond1_price }}"
                                                                    data-client_dimaond2_price="{{ $client->dimaond2_price }}"
                                                                    data-client_dimaond3_price="{{ $client->dimaond3_price }}"
                                                                    data-client_dimaond4_price="{{ $client->dimaond4_price }}"
                                                                    data-client_dimaond5_price="{{ $client->dimaond5_price }}"
                                                                    data-client_baguette_price="{{ $client->baguette_price }}"
                                                                    data-client_marquis_price="{{ $client->marquis_price }}"
                                                                    data-client_big_stone_price="{{ $client->big_stone_price }}"
                                                                    data-client_princess_price="{{ $client->princess_price }}"
                                                                    data-client_colored_price="{{ $client->colored_price }}"
                                                                    value="{{ $client->id }}">
                                                                    {{$client->name}} -  {{$client->id}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12 sale-type-order">
                                                    <div class="form-group">
                                                        <label for="">@lang('site.client_name')</label>
                                                        <input class="form-control form-control-sm name" name="client_name" readonly type="text" value="" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12 sale-type-order">
                                                    <div class="form-group">
                                                        <label for="">@lang('site.phone_no')</label>
                                                        <input class="form-control form-control-sm phone" name="phone" type="text" readonly placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12 sale-type-order">
                                                    <div class="form-group">
                                                        <label for="">@lang('site.tax_no')</label>
                                                        <input class="form-control form-control-sm tax_no" name="tax_no" type="text" readonly placeholder="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row gutters">
                                                <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                                    <div class="form-group">
                                                        <label for="">@lang('site.item_no')</label>
                                                        <select name="get_ids"  type="number" id="get_ids" class="form-control form-control-sm selectpicker get_ids"  data-live-search="true">
                                                            <option value=""></option>
                                                            @foreach ($products as $product)
                                                                <option
                                                                    data-id="{{$product->id}}"
                                                                    data-category_id="{{ $product->category->name }}"
                                                                    data-supplier_id="{{ $product->supplier->name }}"
                                                                    data-extra_no="{{ $product->extra_no }}"
                                                                    data-item_type="{{ $product->item_type }}"
                                                                    data-gold="{{ $product->gold }}"
                                                                    data-dimaond_1="{{ $product->dimaond_1 }}"
                                                                    data-dimaond_2="{{ $product->dimaond_2 }}"
                                                                    data-dimaond_3="{{ $product->dimaond_3 }}"
                                                                    data-dimaond_4="{{ $product->dimaond_4 }}"
                                                                    data-dimaond_5="{{ $product->dimaond_5 }}"
                                                                    data-baguette="{{ $product->baguette }}"
                                                                    data-marquis="{{ $product->marquis }}"
                                                                    data-big_stone="{{ $product->big_stone }}"
                                                                    data-princess="{{ $product->princess }}"
                                                                    data-colored="{{ $product->colored }}"
                                                                    data-color="{{ $product->color }}"
                                                                    data-purity="{{ $product->purity }}"
                                                                    data-description="{{ $product->description }}"
                                                                    data-purchase_price="{{ $product->purchase_price }}"
                                                                    data-sale_price="{{ $product->sale_price }}"
                                                                    data-status="{{ $product->status }}"
                                                                    value="{{ $product->id }}">
                                                                    {{$product->id}} -  G.W {{$product->gold}} - {{$product->category->name}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row gutters">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-light table-sm" id="invoice_details">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>@lang('site.select')</th>
                                                                <th>@lang('site.item_no')</th>
                                                                <th>@lang('site.extra_no')</th>
                                                                <th>@lang('site.description')</th>
                                                                <th>@lang('site.category_type')</th>
                                                                <th>@lang('site.purity')</th>
                                                                <th>@lang('site.color')</th>
                                                                <th>@lang('site.gold')</th>
                                                                <th>@lang('site.dimaond_1')</th>
                                                                <th>@lang('site.dimaond_2')</th>
                                                                <th>@lang('site.dimaond_3')</th>
                                                                <th>@lang('site.dimaond_4')</th>
                                                                <th>@lang('site.dimaond_5')</th>
                                                                <th>@lang('site.baguette')</th>
                                                                <th>@lang('site.princess')</th>
                                                                <th>@lang('site.marquis')</th>
                                                                <th>@lang('site.big_stone')</th>
                                                                <th>@lang('site.colored')</th>
                                                                <!-- <th> الماس 4 </th> -->
                                                                <th>@lang('site.sale_price')</th>
                                                                <th>@lang('site.action')</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="cloning_row" id="0">

                                                            </tr>
                                                        </tbody>

                                                        <tfoot>
                                                            <tr>
                                                                <td colspan="2">Total</td>
                                                                <td colspan="6"><label for="" class="text-bold text-danger count_item">0</label></td>
                                                                <td><label for="" class="text-bold text-danger total_gold">0.00</label></td>
                                                                <td><label for="" class="text-bold text-danger total_dimaond_1">0.00</label></td>
                                                                <td><label for="" class="text-bold text-danger total_dimaond_2">0.00</label></td>
                                                                <td><label for="" class="text-bold text-danger total_dimaond_3">0.00</label></td>
                                                                <td><label for="" class="text-bold text-danger total_dimaond_4">0.00</label></td>
                                                                <td><label for="" class="text-bold text-danger total_dimaond_5">0.00</label></td>
                                                                <td><label for="" class="text-bold text-danger total_baguette">0.00</label></td>
                                                                <td><label for="" class="text-bold text-danger total_princess">0.00</label></td>
                                                                <td><label for="" class="text-bold text-danger total_marquis">0.00</label></td>
                                                                <td><label for="" class="text-bold text-danger total_bigStone">0.00</label></td>
                                                                <td><label for="" class="text-bold text-danger total_colored">0.00</label></td>
                                                                <td><label for="" class="text-bold text-danger total_price">0.00</label></td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row start -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="accordion" id="withIconsAccordion">
                                        <div class="accordion-container">
                                            <div class="accordion-header" id="withIconOne">
                                                <a  href="" class="collapsed" data-toggle="collapse" data-target="#collapseWithIconOne" aria-expanded="false" aria-controls="collapseWithIconOne">
                                                    <i class="icon icon-tag1"></i>Summary Invoice Prices and Qty
                                                </a>
                                            </div>
                                            <div id="collapseWithIconOne" class="collapse" aria-labelledby="withIconOne" data-parent="#withIconsAccordion">
                                                <div class="accordion-body">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="card h-100" id="summary_invoice" >
                                                            <div class="card-header">
                                                                <div class="card-title">@lang('site.summary_invoice')</div>
                                                            </div>
                                                            <div class="card-body" >
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered table-light table-sm">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>@lang('site.category_type')</th>
                                                                                <th> @lang('site.quantity')</th>
                                                                                <th>@lang('site.total_price')</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="summary">


                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row gutters">
                                                            <div class="form-inline">
                                                                <div class="form-check mb-2">
                                                                    <input class="form-check-input mb-2 mr-sm-2" type="checkbox" value="" id="defaultCheck1">
                                                                    <label class="form-check-label mb-2 mr-sm-2" for="defaultCheck1">
                                                                        @lang('site.includeTax')
                                                                    </label>
                                                                </div>
                                                                <div class="form-check mb-2">
                                                                    <input class="form-check-input mb-2 mr-sm-2" type="checkbox" value="" id="defaultCheck2">
                                                                    <label class="form-check-label mb-2 mr-sm-2" for="defaultCheck2">
                                                                        @lang('site.notiIncludeTax')
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row gutters">
                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                <div class="form-group">
                                                                    <label>@lang('site.total_price')</label>
                                                                    <input type="number" step="0.01" name="sub_total" id="sub_total" readonly class="form-control sub_total">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                <div class="form-group">
                                                                    <label for="">@lang('site.total_descount')</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <select name="discount_type" id="discount_type" class="form-control discount_type">
                                                                                <option value="fixed">SAR</option>
                                                                                <option value="percentage">%</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="number" step="0.01"  name="discount_value" id="discount_value" value="0.00" class="form-control discount_value" placeholder="Number">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                                <div class="form-group">
                                                                    <label>@lang('site.tax_amount')</label>
                                                                    <input type="number" name="vat_value" id="vat_value" readonly class="form-control vat_value ">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                                <div class="form-group">
                                                                    <label>@lang('site.final_total')</label>
                                                                    <input type="number" step="0.01" name="final_total" id="final_total" readonly value="" class="form-control final_total ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-container">
                                            <div class="accordion-header" id="withIconTwo">
                                                <a  href="" class="collapsed" data-toggle="collapse" data-target="#collapseWithIconTwo" aria-expanded="false" aria-controls="collapseWithIconTwo">
                                                    <i class="icon icon-tag1"></i>Sale Price Auto show
                                                </a>
                                            </div>

                                            <div id="collapseWithIconTwo" class="collapse" aria-labelledby="withIconTwo" data-parent="#withIconsAccordion">
                                                <div class="accordion-body">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <!--Accordion wrapper-->
                                                        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                                                            <!-- Accordion card Fixed, Percentage, and multiple the Cost -->
                                                            <div class="card">

                                                                <!-- Card header -->
                                                                <div class="card-header" role="tab" id="headingOne1">
                                                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                                                                    aria-controls="collapseOne1">
                                                                    <h5 class="mb-0">
                                                                        Sale Prices (by Fixed, Percentage, and multiple the Cost) <i class="fas fa-angle-down rotate-icon"></i>
                                                                    </h5>
                                                                </a>
                                                                </div>

                                                                <!-- Card body -->
                                                                <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1"
                                                                data-parent="#accordionEx">
                                                                    <div class="card-body">

                                                                        <div class="row gutters">
                                                                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                                                                <div class="form-group">
                                                                                    <div class="input-group">
                                                                                        <div class="input-group-prepend">
                                                                                            <select name="edit_salePrice" id="edit_salePrice" class="form-control edit_salePrice">
                                                                                                <option value="">Select</option>
                                                                                                <option value="multiple">multiple</option>
                                                                                                <option value="fixed">SAR</option>
                                                                                                <option value="percentage">%</option>
                                                                                            </select>

                                                                                        </div>
                                                                                        <input type="number" name="sale_value" id="sale_value" class="form-control sale_value" placeholder="Number">
                                                                                    </div>
                                                                                    <div id="edit_salePrice_error" class="text-danger text-left mt-2"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                            <div class="text-right">
                                                                                <button type="button" id="edit_all_products_purchase" name="edit" class="btn btn-success">Edit to All Items</button>
                                                                                <button type="button" id="edit_selected_products_purchase" class="btn btn-danger">Edit to the selected Item Only</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <!-- End Accordion card -->

                                                            <!-- Accordion card Auto -->
                                                            <div class="card">

                                                                <!-- Card header -->
                                                                <div class="card-header" role="tab" id="headingTwo2">
                                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                                                                        aria-expanded="false" aria-controls="collapseTwo2">
                                                                        <h5 class="mb-0">
                                                                        Sale Price (by Client's Weights) <span class="text-danger">default</span> <i class="fas fa-angle-down rotate-icon"></i>
                                                                        </h5>
                                                                    </a>
                                                                </div>

                                                                <!-- Card body -->
                                                                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                                                                    data-parent="#accordionEx">
                                                                    <div class="card-body">
                                                                        <div class="row gutters">
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.gold_price')</label>
                                                                                    <input type="number" id="gold_price_default" step="0.01" name="gold_price_default" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div  style="border-left: ridge;" class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.gold_total')</label>
                                                                                    <input type="number" step="0.01" id="gold_total_default" name="gold_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.big_stone_price')</label>
                                                                                    <input type="number" step="0.01" id="big_stone_price_default" name="big_stone_price_default" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: ridge;" class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.big_stone_total')</label>
                                                                                    <input type="number" step="0.01" id="big_stone_total_default" name="big_stone_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.baguette_price')</label>
                                                                                    <input type="number" step="0.01" id="baguette_price_default" name="baguette_price_default" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.baguette_total')</label>
                                                                                    <input type="number" step="0.01" id="baguette_total_default" name="baguette_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row gutters">
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.marquis_price')</label>
                                                                                    <input type="number" step="0.01" id="marquis_price_default" name="marquis_price_default" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: ridge;" class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.marquis_total')</label>
                                                                                    <input type="number" step="0.01" id="marquis_total_default" name="marquis_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.princess_price')</label>
                                                                                    <input type="number" step="0.01" id="princess_price_default" name="princess_price_default" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: ridge;" class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.princess_total')</label>
                                                                                    <input type="number" step="0.01" id="princess_total_default" name="princess_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.colored_price')</label>
                                                                                    <input type="number" step="0.01" id="colored_price_default" name="colored_price_default" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.colored_total')</label>
                                                                                    <input type="number" step="0.01" id="colored_total_default" name="colored_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row gutters">
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond1_price')</label>
                                                                                    <input type="number" step="0.01" id="dimaond1_price_default" name="dimaond1_price_default" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: ridge;" class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond1_total')</label>
                                                                                    <input type="number" step="0.01" id="dimaond1_total_default" name="dimaond1_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond2_price')</label>
                                                                                    <input type="number" step="0.01" id="dimaond2_price_default" name="dimaond2_price_default" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: ridge;" class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond2_total')</label>
                                                                                    <input type="number" step="0.01" id="dimaond2_total_default" name="dimaond2_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond3_price')</label>
                                                                                    <input type="number" step="0.01" id="dimaond3_price_default"  name="dimaond3_price_default" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond3_total')</label>
                                                                                    <input type="number" step="0.01" id="dimaond3_total_default" name="dimaond3_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row gutters">
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond4_price')</label>
                                                                                    <input type="number" step="0.01" id="dimaond4_price_default" name="dimaond4_price_default" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div  style="border-left: ridge;" class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond4_total')</label>
                                                                                    <input type="number" step="0.01" id="dimaond4_total_default" name="dimaond4_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond5_price')</label>
                                                                                    <input type="number" step="0.01" id="dimaond5_price_default" name="dimaond5_price_default" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: ridge;" class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond5_total')</label>
                                                                                    <input type="number" step="0.01" id="dimaond5_total_default" name="dimaond5_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Accordion card  Manually-->
                                                            <div class="card">

                                                                <!-- Card header -->
                                                                <div class="card-header" role="tab" id="headingThree3">
                                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                                                                        aria-expanded="false" aria-controls="collapseThree3">
                                                                        <h5 class="mb-0">
                                                                        Sale Price Manually<i class="fas fa-angle-down rotate-icon"></i>
                                                                        </h5>
                                                                    </a>
                                                                </div>

                                                                <!-- Card body -->
                                                                <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                                                                    data-parent="#accordionEx">
                                                                    <div class="card-body sale-price-manual">
                                                                        <div class="row gutters">
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.gold_price')</label>
                                                                                    <input type="number" step="0.01" id="gold_price_manual" name="gold_price_manual" placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: ridge;" class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.gold_total')</label>
                                                                                    <input type="number" step="0.01" name="gold_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.big_stone_price')</label>
                                                                                    <input type="number" step="0.01" id="big_stone_price_manual" name="big_stone_price_manual" placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: ridge;" class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.big_stone_total')</label>
                                                                                    <input type="number" step="0.01" name="big_stone_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.baguette_price')</label>
                                                                                    <input type="number" step="0.01" id="baguette_price_manual" name="baguette_price_manual" placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.baguette_total')</label>
                                                                                    <input type="number" step="0.01" name="baguette_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row gutters">
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.marquis_price')</label>
                                                                                    <input type="number" step="0.01" id="marquis_price_manual" name="marquis_price_manual" placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: ridge;" class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.marquis_total')</label>
                                                                                    <input type="number" step="0.01" name="marquis_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.princess_price')</label>
                                                                                    <input type="number" step="0.01" id="princess_price_manual" name="princess_price_manual" placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: ridge;" class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.princess_total')</label>
                                                                                    <input type="number" step="0.01" name="princess_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.colored_price')</label>
                                                                                    <input type="number" step="0.01" id="colored_price_manual" name="colored_price_manual" placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.colored_total')</label>
                                                                                    <input type="number" step="0.01" name="colored_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row gutters">
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond1_price')</label>
                                                                                    <input type="number" step="0.01" id="dimaond1_price_manual" name="dimaond1_price_manual" placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: ridge;" class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond1_total')</label>
                                                                                    <input type="number" step="0.01" name="dimaond1_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond2_price')</label>
                                                                                    <input type="number" step="0.01" id="dimaond2_price_manual" name="dimaond2_price_manual" placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: ridge;" class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond2_total')</label>
                                                                                    <input type="number" step="0.01" name="dimaond2_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond3_price')</label>
                                                                                    <input type="number" step="0.01" id="dimaond3_price_manual" name="dimaond3_price_manual" placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond3_total')</label>
                                                                                    <input type="number" step="0.01" name="dimaond3_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row gutters">
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond4_price')</label>
                                                                                    <input type="number" step="0.01" id="dimaond4_price_manual" name="dimaond4_price_manual" placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: ridge;" class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond4_total')</label>
                                                                                    <input type="number" step="0.01" name="dimaond4_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond5_price')</label>
                                                                                    <input type="number" step="0.01" id="dimaond5_price_manual" name="dimaond5_price_manual" placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: ridge;" class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond5_total')</label>
                                                                                    <input type="number" step="0.01" name="dimaond5_total" readonly placeholder="0.00" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-footer">
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                            <div class="text-right">
                                                                                <button type="button" id="updateAllManualSP" name="edit" class="btn btn-success">Edit to All Items</button>
                                                                                <button type="button" id="updateSelectedItemManualSP" class="btn btn-danger">Edit to the selected Item Only</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-container">
                                            <div class="accordion-header" id="withIconFour">
                                                <a  href="" class="collapsed" data-toggle="collapse" data-target="#collapseWithIconFour" aria-expanded="false" aria-controls="collapseWithIconFour">
                                                    <i class="icon icon-triangle"></i>Change Color and Purity
                                                </a>
                                            </div>
                                            <div id="collapseWithIconFour" class="collapse" aria-labelledby="withIconFour" data-parent="#withIconsAccordion">
                                                <div class="accordion-body">
                                                    <div class="card h-100">
                                                        <div class="card-header">
                                                            <div class="card-title">Change Purity and Color</div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row gutters">
                                                                <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4    col-12">
                                                                    <div class="form-group">
                                                                        <label for=""> @lang('site.color') </label>
                                                                        <input type="text" name="color" class="form-control" id="color">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                                                    <div class="form-group">
                                                                        <label for=""> @lang('site.purity') </label>
                                                                        <input type="text" name="purity" class="form-control" id="purity">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div id="edit_color_purity" class="text-danger text-left mt-2"></div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                <div class="text-right">
                                                                    <button type="button" id="edit_all_items_purity" name="edit" class="btn btn-success">Edit to All Items</button>
                                                                    <button type="button" id="edit_selected_purity" class="btn btn-danger">Edit to the selected Item Only</button>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <!-- Row end -->
                            {{-- <div class="row gutters pt-2">

                                <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <label for="" class="pl-2"> @lang('site.users') </label>

                                            <select name="" class="form-control" id="">
                                                <option value="">Ahmed</option>
                                                <option value="">Nacer</option>
                                                <option value="">Khaled</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row gutters pt-2">
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">

                                    <div class="form-group">
                                        <label for="">@lang('site.user_name')</label>
                                        <select name="" id="" class="form-control form-control-sm">
                                            <option value="">choose...</option>
                                            <option value="1">Ahmed</option>
                                            <option value="2">Yaser</option>
                                        </select>
                                    </div>

                                </div>
                                {{-- important --}}

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="text-right">
                                        <a href="{{route('dashboard.sales.index')}}" class="btn btn-dark">@lang('site.close')</a>
                                        {{-- <a href="#" class="btn btn-danger">@lang('site.draft_invoice')</a> --}}
                                        <button type="submit" id="make_invoice" class="btn btn-success disabled">@lang('site.invoice')</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Main container end -->

        </div>
        <!-- Page content end -->
    </div>

@endsection

@section('scripts')

    <!-- Bootstrap Select JS -->
    <script src="{{ asset('dashboard_files/vendor/bs-select/bs-select.min.js')}}"></script>
    <script src="{{ asset('dashboard_files/js/pickadate/picker.js') }}"></script>
    <script src="{{ asset('dashboard_files/js/pickadate/picker.date.js') }}"></script>

    @if(config('app.locale') == 'ar')
        <script src="{{ asset('dashboard_files/js/pickadate/ar.js') }}"></script>
    @endif

    <script>
        $(document).ready(function(){

        window.onbeforeunload = function() {
            return 'Your changes will be lost!';
        };
            // For invoice Date
            $('.pickdate').pickadate({
                format: 'yyyy-mm-dd',
                selectMonth: true,
                selectYear: true,
                clear: 'Clear',
                close: 'Ok',
                closeOnSelect: true
            });

            var notification = new Noty({
                text: "updated successfully",
                timeout:2000,
                type: "success",

                });

            // Add Item
            $('#customer_details').on('change', '.get_ids',   function(){


                var no = $(this).val();
                if (no != '') {
                    var id = $('#customer_details').find('#get_ids option:selected').attr('data-id');
                    var check = false;
                     $('input[name^="all_products[]"]').each(function() {

                       if(id == $(this).val()){
                           check = true;
                           return false;
                        }
                     });
                    if(check){
                        return false;
                    }

                    var item_no = $('#customer_details').find('#get_ids option:selected').attr('data-id');
                    var category_name = $('#customer_details').find('#get_ids option:selected').attr('data-category_id');
                    var supplier_name = $('#customer_details').find('#get_ids option:selected').attr('data-supplier_id');
                    var extra_no = $('#customer_details').find('#get_ids option:selected').attr('data-extra_no');
                    var item_type = $('#customer_details').find('#get_ids option:selected').attr('data-item_type');
                    var gold = $('#customer_details').find('#get_ids option:selected').attr('data-gold');
                    var dimaond_1 = $('#customer_details').find('#get_ids option:selected').attr('data-dimaond_1');
                    var dimaond_2 = $('#customer_details').find('#get_ids option:selected').attr('data-dimaond_2');
                    var dimaond_3 = $('#customer_details').find('#get_ids option:selected').attr('data-dimaond_3');
                    var dimaond_4 = $('#customer_details').find('#get_ids option:selected').attr('data-dimaond_4');
                    var dimaond_5 = $('#customer_details').find('#get_ids option:selected').attr('data-dimaond_5');
                    var baguette = $('#customer_details').find('#get_ids option:selected').attr('data-baguette');
                    var marquis = $('#customer_details').find('#get_ids option:selected').attr('data-marquis');
                    var big_stone = $('#customer_details').find('#get_ids option:selected').attr('data-big_stone');
                    var princess = $('#customer_details').find('#get_ids option:selected').attr('data-princess');
                    var colored = $('#customer_details').find('#get_ids option:selected').attr('data-colored');
                    var color = $('#customer_details').find('#get_ids option:selected').attr('data-color');
                    var purity = $('#customer_details').find('#get_ids option:selected').attr('data-purity');
                    var description = $('#customer_details').find('#get_ids option:selected').attr('data-description');
                    var purchase_price = $('#customer_details').find('#get_ids option:selected').attr('data-purchase_price');
                    var sale_price = $('#customer_details').find('#get_ids option:selected').attr('data-sale_price');
                    var status = $('#customer_details').find('#get_ids option:selected').attr('data-status');



                    let trCount = $('#invoice_details').find('tr.cloning_row:last').length;
                    let numberIncr = trCount > 0 ? parseInt($('#invoice_details').find('tr.cloning_row:last').attr('id')) + 1 : 0;

                    $('#invoice_details').find('tbody').append($('' +
                    '<tr class="cloning_row" id="' + numberIncr + '" data-id="'+id+'">' +

                        '<td><label class="count" for="">' + numberIncr + '</label></td>' +
                        '<td><input type="checkbox" for="" value="'+id+'" name="product_ids['+ id +']"><input name="all_products[]" value='+id+' class="product_ids" hidden></label></td>' +
                        '<td><label for="" name="id['+ numberIncr +']">' + item_no + '</label></td>' +
                        '<td><label for="" name="extra_no['+ numberIncr +']">' + extra_no +'</label></td>' +
                        '<td><label for="" name="description['+ numberIncr +']">' + description + '</label></td>'+
                        '<td><label for="" class="category" name="category_name['+ numberIncr +']">' + category_name + '</label></td>'+
                        '<td><label for="" class="purity" name="purity['+ numberIncr +']">' + purity + '</label></td>'+
                        '<td><label for="" class="color" name="color['+ numberIncr +']">' + color + '</label></td>'+
                        '<td><label for="" class="gold" name="gold['+ numberIncr +']">' + gold + '</label></td>'+
                        '<td><label for="" class="dimaond_1" name="dimaond_1['+ numberIncr +']">' + dimaond_1 + '</label></td>'+
                        '<td><label for="" class="dimaond_2" name="dimaond_2['+ numberIncr +']">' + dimaond_2 + '</label></td>'+
                        '<td><label for="" class="dimaond_3" name="dimaond_3['+ numberIncr +']">' + dimaond_3 + '</label></td>'+
                        '<td><label for="" class="dimaond_4" name="dimaond_4['+ numberIncr +']">' + dimaond_4 + '</label></td>'+
                        '<td><label for="" class="dimaond_5" name="dimaond_5['+ numberIncr +']">' + dimaond_5 + '</label></td>'+
                        '<td><label for="" class="baguette" name="baguette['+ numberIncr +']">' + baguette + '</label></td>'+
                        '<td><label for="" class="princess" name="princess['+ numberIncr +']">' + princess + '</label></td>'+
                        '<td><label for="" class="marquis" name="marquis['+ numberIncr +']">' + marquis + '</label></td>'+
                        '<td><label for="" class="bigStone" name="big_stone['+ numberIncr +']">' + big_stone + '</label></td>'+
                        '<td><label for="" class="colored" name="colored['+ numberIncr +']">' + colored + '</label></td>'+
                        '<td><label for="" id="sale_price_original_'+ id +'" class="item_price item_priceByPurchase" name="sale_price['+ numberIncr +']">' + $.number(sale_price, 2) +'</label></td><input type="hidden" name="sale_price_original_'+ id +'_value" id="sale_price_original_'+ id +'_value" value="'+ sale_price +'"><input type="hidden" class="purchase-price" value="'+ purchase_price +'">'+
                        '<td><a class="btn btn-sm btn-danger delegated-btn"><i class="icon-remove_circle"></i></a>' +
                        '</td>'+
                    '</tr>'));
                    updateLatestSPCW();
                    calSalesPrice();
                    calculateTotal();
                    count_items();
                    cal_colored();
                    cal_gold();
                    cal_dimaond_1();
                    cal_dimaond_2();
                    cal_dimaond_3();
                    cal_dimaond_4();
                    cal_dimaond_5();
                    cal_baguette();
                    cal_princess();
                    cal_marquis();
                    cal_bigStone();
                    summaryInvoice();
                }



            });

            // Delete Row
            $(document).on('click', '.delegated-btn', function (e) {
                e.preventDefault();
                $(this).parent().parent().remove();
                calSalesPrice();
                calculateTotal();
                count_items();
                cal_colored();
                cal_gold();
                cal_dimaond_1();
                cal_dimaond_2();
                cal_dimaond_3();
                cal_dimaond_4();
                cal_dimaond_5();
                cal_baguette();
                cal_princess();
                cal_marquis();
                cal_bigStone();
                summaryInvoice();
            });


            //Cal_salePrice
            function calSalesPrice(){
                    // Gold
                    var gold = $('#customer_details').find('#get_ids option:selected').attr('data-gold');
                    var gold_price = $('#SalePrice_byWeight').find('.gold_price').val();
                    let gold_total_price = gold * gold_price;
                    $('.gold_total_price').val($.number(gold_total_price, 3));

                    // Dimaond
                    var dimaond = $('#customer_details').find('#get_ids option:selected').attr('data-dimaond');
                    var dimaond_price = $('#SalePrice_byWeight').find('.dimaond_price').val();
                    var dimaond_total_price = dimaond * dimaond_price;
                    $('.dimaond_total_price').val($.number(dimaond_total_price, 3));

                    // Baguette
                    var baguette = $('#customer_details').find('#get_ids option:selected').attr('data-baguette');
                    var baguette_price = $('#SalePrice_byWeight').find('.baguette_price').val();
                    var baguette_total_price = baguette * baguette_price;
                    $('.baguette_total_price').val($.number(baguette_total_price, 3));

                    // Marquis
                    var marquis = $('#customer_details').find('#get_ids option:selected').attr('data-marquis');
                    var marquis_price = $('#SalePrice_byWeight').find('.marquis_price').val();
                    var marquis_total_price = marquis * marquis_price;
                    $('.marquis_total_price').val($.number(marquis_total_price, 3));

                    // Big Stone
                    var big_stone = $('#customer_details').find('#get_ids option:selected').attr('data-big_stone');
                    var bigStone_price = $('#SalePrice_byWeight').find('.bigStone_price').val();
                    var bigStone_total_price = big_stone * bigStone_price;
                    $('.bigStone_total_price').val($.number(bigStone_total_price, 3));

                    // Princess
                    var princess = $('#customer_details').find('#get_ids option:selected').attr('data-princess');
                    var princess_price =$('#SalePrice_byWeight').find('.princess_price').val();
                    var princess_total_price = princess * princess_price;
                    $('.princess_total_price').val($.number(princess_total_price, 3));

                    var sale_price = princess_total_price + bigStone_total_price
                                + gold_total_price + dimaond_total_price + baguette_total_price +
                                marquis_total_price;
                    // alert(sale_price);
                    $('.item_priceWeights').html($.number(sale_price, 2));

            }

            $('#client_no,#saleType').on('change', function (e) {
                $("#invoice_details tbody tr").each(function() {
                    updateSPCW($(this));
                });
                updateItemSalesPrice('default');
            });

            function updateLatestSPCW() {
                var thisObj = $("#invoice_details").find("tbody tr").last();
                updateSPCW(thisObj);
            }

            $("#invoice_details").delegate("tr", "click", function(){
                updateSPCW($(this),'false');
            });

            function updateSPCW(thisObj,updatePrice = 'true') {
                var salesType = $('#saleType').val();
                var client_gold_price;
                var client_dimaond1_price;
                var client_dimaond2_price;
                var client_dimaond3_price;
                var client_dimaond4_price;
                var client_dimaond5_price;
                var client_baguette_price
                var client_marquis_price;
                var client_big_stone_price
                var client_princess_price;
                var client_colored_price;
                if(salesType == 1) {
                    client_gold_price = $('#getClient').find('.client_no option:selected').attr('data-client_gold_price');
                    $('#gold_price_default').val(client_gold_price);

                    client_dimaond1_price = $('#getClient').find('.client_no option:selected').attr('data-client_dimaond1_price');
                    $('#dimaond1_price_default').val(client_dimaond1_price);

                    client_dimaond2_price = $('#getClient').find('.client_no option:selected').attr('data-client_dimaond2_price');
                    $('#dimaond2_price_default').val(client_dimaond2_price);

                    client_dimaond3_price = $('#getClient').find('.client_no option:selected').attr('data-client_dimaond3_price');
                    $('#dimaond3_price_default').val(client_dimaond3_price);

                    client_dimaond4_price = $('#getClient').find('.client_no option:selected').attr('data-client_dimaond4_price');
                    $('#dimaond4_price_default').val(client_dimaond4_price);

                    client_dimaond5_price = $('#getClient').find('.client_no option:selected').attr('data-client_dimaond5_price');
                    $('#dimaond5_price_default').val(client_dimaond5_price);

                    client_baguette_price = $('#getClient').find('.client_no option:selected').attr('data-client_baguette_price');
                    $('#baguette_price_default').val(client_baguette_price);

                    client_marquis_price = $('#getClient').find('.client_no option:selected').attr('data-client_marquis_price');
                    $('#marquis_price_default').val(client_marquis_price);

                    client_big_stone_price = $('#getClient').find('.client_no option:selected').attr('data-client_big_stone_price');
                    $('#big_stone_price_default').val(client_big_stone_price);

                    client_princess_price = $('#getClient').find('.client_no option:selected').attr('data-client_princess_price');
                    $('#princess_price_default').val(client_princess_price);

                    client_colored_price = $('#getClient').find('.client_no option:selected').attr('data-client_colored_price');
                    $('#colored_price_default').val(client_colored_price);
                } else {
                    client_gold_price = 0;
                    $('#gold_price_default').val('0.00');
                    client_dimaond1_price = 0;
                    $('#dimaond1_price_default').val('0.00');
                    client_dimaond2_price = 0;
                    $('#dimaond2_price_default').val('0.00');
                    client_dimaond3_price = 0;
                    $('#dimaond3_price_default').val('0.00');
                    client_dimaond4_price = 0;
                    $('#dimaond4_price_default').val('0.00');
                    client_dimaond5_price = 0;
                    $('#dimaond5_price_default').val('0.00');
                    client_baguette_price = 0;
                    $('#baguette_price_default').val('0.00');
                    client_marquis_price = 0;
                    $('#marquis_price_default').val('0.00');
                    client_big_stone_price = 0;
                    $('#big_stone_price_default').val('0.00');
                    client_princess_price = 0;
                    $('#princess_price_default').val('0.00');
                    client_colored_price = 0;
                    $('#colored_price_default').val('0.00');
                }

                var gold_price = parseFloat(thisObj.find("td .gold").html());
                let gold_total_price = client_gold_price * gold_price;
                $('#gold_total_default').val($.number(gold_total_price, 3));

                var dimaond1_price = parseFloat(thisObj.find("td .dimaond_1").html());
                let dimaond1_total_price = client_dimaond1_price * dimaond1_price;
                $('#dimaond1_total_default').val($.number(dimaond1_total_price, 3));

                var dimaond2_price = parseFloat(thisObj.find("td .dimaond_2").html());
                let dimaond2_total_price = client_dimaond2_price * dimaond2_price;
                $('#dimaond2_total_default').val($.number(dimaond2_total_price, 3));

                var dimaond3_price = parseFloat(thisObj.find("td .dimaond_3").html());
                let dimaond3_total_price = client_dimaond3_price * dimaond3_price;
                $('#dimaond3_total_default').val($.number(dimaond3_total_price, 3));

                var dimaond4_price = parseFloat(thisObj.find("td .dimaond_4").html());
                let dimaond4_total_price = client_dimaond4_price * dimaond4_price;
                $('#dimaond4_total_default').val($.number(dimaond4_total_price, 3));

                var dimaond5_price = parseFloat(thisObj.find("td .dimaond_5").html());
                let dimaond5_total_price = client_dimaond5_price * dimaond5_price;
                $('#dimaond5_total_default').val($.number(dimaond5_total_price, 3));

                var baguette_price = parseFloat(thisObj.find("td .baguette").html());
                let baguette_total_price = client_baguette_price * baguette_price;
                $('#baguette_total_default').val($.number(baguette_total_price, 3));

                var marquis_price = parseFloat(thisObj.find("td .marquis").html());
                let marquis_total_price = client_marquis_price * marquis_price;
                $('#marquis_total_default').val($.number(marquis_total_price, 3));

                var big_stone_price = parseFloat(thisObj.find("td .bigStone").html());
                let big_stone_total_price = client_big_stone_price * big_stone_price;
                $('#big_stone_total_default').val($.number(big_stone_total_price, 3));

                var princess_price = parseFloat(thisObj.find("td .princess").html());
                let princess_total_price = client_princess_price * princess_price;
                $('#princess_total_default').val($.number(princess_total_price, 3));

                var colored_price = parseFloat(thisObj.find("td .colored").html());
                let colored_total_price = client_colored_price * colored_price;
                $('#colored_total_default').val($.number(colored_total_price, 3));

                if(updatePrice == 'true') {
                    updateItemSalesPrice('default',thisObj);
                }
            }


            $('#updateAllManualSP').click(function () {
                $("#invoice_details tbody tr").each(function() {
                    updateItemSalesPrice('manual',$(this));
                });
            });

            $('#updateSelectedItemManualSP').click(function () {
                $("#invoice_details tbody tr").each(function() {
                    var $chkbox = $(this).find('input[type="checkbox"]');
                    var status = $chkbox.prop('checked');
                    if(status) {
                        updateItemSalesPrice('manual',$(this));
                    }

                });
            });

            //type can be 'default' or 'manual'
            function updateItemSalesPrice(type, thisObj ='false') {
                var salesType = $('#saleType').val();
                if(salesType == 1) {
                    var counter = 0;
                    $("#invoice_details tbody tr").each(function() {
                        //skipping first row as it is part of plugin/sticky header

                        if(counter !=0) {
                            if(thisObj.attr('id') == $(this).attr('id') || thisObj == 'false') {
                                var itemSalePrice = 0;
                                var item_gold_weight = parseFloat($(this).find('.gold').html());
                                var client_gold_price = $('#gold_price_'+type).val();
                                var item_gold_price = item_gold_weight * client_gold_price;
                                itemSalePrice = itemSalePrice + item_gold_price;

                                var item_diamond1_weight = parseFloat($(this).find('.dimaond_1').html());
                                var client_diamond1_price = $('#dimaond1_price_'+type).val();
                                var item_diamond1_price = item_diamond1_weight * client_diamond1_price;
                                itemSalePrice = itemSalePrice + item_diamond1_price;

                                var item_diamond2_weight = parseFloat($(this).find('.dimaond_2').html());
                                var client_diamond2_price = $('#dimaond2_price_'+type).val();
                                var item_diamond2_price = item_diamond2_weight * client_diamond2_price;
                                itemSalePrice = itemSalePrice + item_diamond2_price;

                                var item_diamond3_weight = parseFloat($(this).find('.dimaond_3').html());
                                var client_diamond3_price = $('#dimaond3_price_'+type).val();
                                var item_diamond3_price = item_diamond3_weight * client_diamond3_price;
                                itemSalePrice = itemSalePrice + item_diamond3_price;

                                var item_diamond4_weight = parseFloat($(this).find('.dimaond_4').html());
                                var client_diamond4_price = $('#dimaond4_price_'+type).val();
                                var item_diamond4_price = item_diamond4_weight * client_diamond4_price;
                                itemSalePrice = itemSalePrice + item_diamond4_price;

                                var item_diamond5_weight = parseFloat($(this).find('.dimaond_5').html());
                                var client_diamond5_price = $('#dimaond5_price_'+type).val();
                                var item_diamond5_price = item_diamond5_weight * client_diamond5_price;
                                itemSalePrice = itemSalePrice + item_diamond5_price;

                                var item_baguette_weight = parseFloat($(this).find('.baguette').html());
                                var client_baguette_price = $('#baguette_price_'+type).val();
                                var item_baguette_price = item_baguette_weight * client_baguette_price;
                                itemSalePrice = itemSalePrice + item_baguette_price;

                                var item_princess_weight = parseFloat($(this).find('.princess').html());
                                var client_princess_price = $('#princess_price_'+type).val();
                                var item_princess_price = item_princess_weight * client_princess_price;
                                itemSalePrice = itemSalePrice + item_princess_price;

                                var item_marquis_weight = parseFloat($(this).find('.marquis').html());
                                var client_marquis_price = $('#marquis_price_'+type).val();
                                var item_marquis_price = item_marquis_weight * client_marquis_price;
                                itemSalePrice = itemSalePrice + item_marquis_price;

                                var item_big_stone_weight = parseFloat($(this).find('.bigStone').html());
                                var client_big_stone_price = $('#big_stone_price_'+type).val();
                                var item_big_stone_price = item_big_stone_weight * client_big_stone_price;
                                itemSalePrice = itemSalePrice + item_big_stone_price;

                                var item_colored_weight = parseFloat($(this).find('.colored').html());
                                var client_colored_price = $('#colored_price_'+type).val();
                                var item_colored_price = item_colored_weight * client_colored_price;
                                itemSalePrice = itemSalePrice + item_colored_price;


                                itemSalePrice = parseFloat(itemSalePrice,2);
                                var item_id = $(this).find('.product_ids').val();
                                $(this).find('.item_price').html($.number(itemSalePrice, 2));
                                $('#sale_price_original_'+item_id+'_value').val(itemSalePrice);
                            }
                        }

                        counter++;
                    });
                } else {
                    var counter = 0;
                    $("#invoice_details tbody tr").each(function() {
                        //skipping first row as it is part of plugin/sticky header
                        if(counter !=0) {
                            var item_id = $(this).find('.product_ids').val();
                            var item_purchase_price = 0;
                            var item_purchase_price = parseFloat($(this).find('.purchase-price').val());
                            $(this).find('.item_price').html($.number(item_purchase_price, 2));
                            $('#sale_price_original_'+item_id+'_value').val(item_purchase_price);
                        }

                        counter++;
                    });
                }
                updateInvoiceDetails();
                calculateTotal();
            }

            function updateInvoiceDetails() {
                var category = '';
                var counter = 0;
                var categoryValue = 0;
                $("#summary tr").each(function() {
                    if(counter !=0) {
                        category = $(this).find('.group_category').html();
                        categoryValue = 0;
                        $("#invoice_details tbody tr").each(function() {
                            if($(this).find('.category').html() == category) {
                                categoryValue = categoryValue + parseFloat($(this).find('.item_price').html(),2);
                            }
                        });
                        $("#total_price_"+category).html(categoryValue);
                        $("#total_price_"+category+"_value").val(categoryValue);
                    }
                    counter++;
                });
            }
            // هنا القيمه في الخصم اذا كان بالريال يتغير بسعر ثابت اما اذا كان البنسبه فيتغير بالنسبه المئاويه
            $('body').on('keyup blur', '.discount_value', function(){
                calculateTotal();
            });

            $('#edit_all_products_purchase').on('click',function(){
                var counter = 0;
                $("#invoice_details tbody tr").each(function() {
                    if(counter != 0) {
                        updateItemSalesPriceOptional($(this));
                    }
                    counter ++;
                });
                calculateTotal();
            });

            $('#edit_selected_products_purchase').on('click',function(){
                var counter = 0;
                $("#invoice_details tbody tr").each(function() {
                    if(counter != 0) {
                        var $chkbox = $(this).find('input[type="checkbox"]');
                        var status = $chkbox.prop('checked');
                        if(status) {
                            updateItemSalesPriceOptional($(this));
                        }
                    }
                    counter ++;
                });
                calculateTotal();
            });

            function updateItemSalesPriceOptional(thisObj) {
                var unit = $('#edit_salePrice').val();
                var price = parseInt($('#sale_value').val());
                var updatedPrice = parseFloat(thisObj.find('.item_price').html(),2);
                var item_id = thisObj.find('.product_ids').val();
                if(unit == 'fixed') {
                    updatedPrice = price;
                } else if (unit == 'percentage') {
                    updatedPrice = parseInt(updatedPrice + parseInt((updatedPrice/100)*price));
                } else if (unit == 'multiple') {
                    updatedPrice = parseInt (updatedPrice * price);
                }
                thisObj.find('.item_price').html($.number(updatedPrice, 2));
                $('#sale_price_original_'+item_id+'_value').val($.number(updatedPrice, 2));
            }

            let calculate_vat = function () {
                var defaultCheck1 = $('#defaultCheck1').is(":checked");
                var defaultCheck2 = $('#defaultCheck2').is(":checked");
                let sub_totalVal = parseFloat($('.sub_total').val()) || 0;
                let vatVal = 0;
                if(defaultCheck1 && defaultCheck2) {
                    vatVal = sub_totalVal * 0.15;
                } else if (defaultCheck1) {
                    vatVal = 0;
                }

                let discount_type = $('.discount_type').val();
                let discount_value = parseFloat($('.discount_value').val()) || 0;
                let discountVal = discount_value != 0 ? discount_type == 'percentage' ? sub_totalVal * (discount_value / 100) : discount_value : 0;

                if(!defaultCheck1 && defaultCheck2) {
                    vatVal = (sub_totalVal - discountVal) * 0.15;
                }

                return vatVal.toFixed(2);
            }

            // يتغير الاجمالي الاخير لجميع العمليات من قيمة شحن + الضريبه + الخصم + سعر القطع
            let sum_due_total = function () {
                let sum = 0;
                let sub_totalVal = $('.sub_total').val() || 0;
                let discount_type = $('.discount_type').val();
                let discount_value = parseFloat($('.discount_value').val()) || 0;
                let discountVal = discount_value != 0 ? discount_type == 'percentage' ? sub_totalVal * (discount_value / 100) : discount_value : 0;

                let vatVal = parseFloat($('.vat_value').val()) || 0;
                let shippingVal = parseFloat($('.shipping').val()) || 0;

                sum += sub_totalVal;
                sum -= discountVal;
                sum += vatVal;
                return sum.toFixed(2);
            }

            // Apply tax as per the selected option
            $('#defaultCheck1,#defaultCheck2').click(function () {
                calculateTotal();
            });

            //  Count Total sale_prices (class="item_price" and class="total_price")
            function calculateTotal() {

                var price = 0;
                var priceLessTax = 0;
                var priceWithTax = 0;
                var defaultCheck1 = $('#defaultCheck1').is(":checked");
                var defaultCheck2 = $('#defaultCheck2').is(":checked");

                $('#invoice_details .item_price').each(function(index) {
                    originalPriceID = $(this).prop('id');
                    priceWithTax = parseFloat($('#'+originalPriceID+'_value').val());
                    if(defaultCheck1 && defaultCheck2) {
                        priceLessTax = 0;
                        priceLessTax = (priceWithTax / 1.15);
                        $(this).html($.number(priceLessTax, 2));
                        price += parseFloat(priceLessTax);
                    } else {
                        price += priceWithTax;
                        $(this).html($.number(priceWithTax, 2));
                    }

                });//end of product price total_price-input

                $('.total_price').html($.number(price, 2));
                $('.sub_total').val(price.toFixed(2));
                $('#vat_value').val(calculate_vat());
                $('#final_total').val(sum_due_total());
                $('.total_price_summary').html($.number(price, 2));

                $('.total_item_price').each(function(index) {
                    originalPriceID = $(this).prop('id');
                    priceWithTax = parseFloat($('#'+originalPriceID+'_value').val());
                    if(defaultCheck1 && defaultCheck2) {
                        priceLessTax = 0;
                        priceLessTax = (priceWithTax / 1.15);
                        $(this).html($.number(priceLessTax, 2));
                    } else {
                        $(this).html($.number(priceWithTax, 2));
                    }
                });
                //check if price > 0
                if (price > 0) {

                    $('#make_invoice').removeClass('disabled')

                } else {

                    $('#make_invoice').addClass('disabled')

                }//end of else

            }//end of calculate total

            //  Count Item (class="count_item" and class="count")
            function count_items() {

                var count = 0;

                $('#invoice_details .count').each(function(index) {


                    count = parseFloat($(this).html().replace(/,/g, ''));

                });//end of count

                $('.count_item').html(' item ' + count);
                $('.count_item_summary').html(count);

            }//end of Count Items

            //  total colored (class="total_colored" and class="colored")
            function cal_colored() {

                var colored = 0.00;

                $('#invoice_details .colored').each(function(index) {


                    colored += parseFloat($(this).html().replace(/,/g, ''));

                });//end of product price

                $('.total_colored').html($.number(colored, 2));


            }//end of total color

            //  total gold (class="total_gold" and class="gold")
            function cal_gold() {

                var gold = 0.00;

                $('#invoice_details .gold').each(function(index) {


                    gold += parseFloat($(this).html().replace(/,/g, ''));

                });//end of product price

                $('.total_gold').html($.number(gold, 2));


            }//end of total gold

            //  total dimaond_1 (class="total_dimaond_1" and class="dimaond_1")
            function cal_dimaond_1() {

                var dimaond_1 = 0.00;

                $('#invoice_details .dimaond_1').each(function(index) {


                    dimaond_1 += parseFloat($(this).html().replace(/,/g, ''));

                });//end of

                $('.total_dimaond_1').html($.number(dimaond_1, 2));


            }//end of total dimaond_1

            //  total dimaond_2 (class="total_dimaond_2" and class="dimaond_2")
            function cal_dimaond_2() {

                var dimaond_2 = 0.00;

                $('#invoice_details .dimaond_2').each(function(index) {


                    dimaond_2 += parseFloat($(this).html().replace(/,/g, ''));

                });//end of

                $('.total_dimaond_2').html($.number(dimaond_2, 2));


            }//end of total dimaond

            //  total dimaond_3 (class="total_dimaond_3" and class="dimaond_3")
            function cal_dimaond_3() {

                var dimaond_3 = 0.00;

                $('#invoice_details .dimaond_3').each(function(index) {


                    dimaond_3 += parseFloat($(this).html().replace(/,/g, ''));

                });//end of

                $('.total_dimaond_3').html($.number(dimaond_3, 2));


            }//end of total dimaond_3

            //  total dimaond_4 (class="total_dimaond_4" and class="dimaond_4")
            function cal_dimaond_4() {

                var dimaond_4 = 0.00;

                $('#invoice_details .dimaond_4').each(function(index) {


                    dimaond_4 += parseFloat($(this).html().replace(/,/g, ''));

                });//end of

                $('.total_dimaond_4').html($.number(dimaond_4, 2));


            }//end of total dimaond_4

            //  total dimaond_5 (class="total_dimaond_5" and class="dimaond_5")
            function cal_dimaond_5() {

                var dimaond_5 = 0.00;

                $('#invoice_details .dimaond_5').each(function(index) {


                    dimaond_5 += parseFloat($(this).html().replace(/,/g, ''));

                });//end of

                $('.total_dimaond_5').html($.number(dimaond_5, 2));


            }//end of total dimaond_5


            //  total baguette (class="total_baguette" and class="baguette")
            function cal_baguette() {

                var baguette = 0.00;

                $('#invoice_details .baguette').each(function(index) {


                    baguette += parseFloat($(this).html().replace(/,/g, ''));

                });//end of product price

                $('.total_baguette').html($.number(baguette, 2));


            }//end of total baguette

            //  total princess (class="total_princess" and class="princess")
            function cal_princess() {

                var princess = 0.00;

                $('#invoice_details .princess').each(function(index) {


                    princess += parseFloat($(this).html().replace(/,/g, ''));

                });//end of product price

                $('.total_princess').html($.number(princess, 2));


            }//end of total total princess

            //  total marquis (class="total_marquis" and class="marquis")
            function cal_marquis() {

                var marquis = 0.00;

                $('#invoice_details .marquis').each(function(index) {


                    marquis += parseFloat($(this).html().replace(/,/g, ''));

                });//end of product price

                $('.total_marquis').html($.number(marquis, 2));


            }//end of total total marquis

            //  total bigStone (class="total_bigStone" and class="bigStone")
            function cal_bigStone() {

                var bigStone = 0.00;

                $('#invoice_details .bigStone').each(function(index) {


                    bigStone += parseFloat($(this).html().replace(/,/g, ''));

                });//end of product price

                $('.total_bigStone').html($.number(bigStone, 2));


            }//end of total total bigStone


            // Get Clietn Information
            $('#getClient').delegate('.client_no','change', function() {

                // e.preventDefault();
                var id = $(this).val();
                var name = $('#getClient').find('.client_no option:selected').attr('data-name');
                var phone = $('#getClient').find('.client_no option:selected').attr('data-phone');
                var tax_no = $('#getClient').find('.client_no option:selected').attr('data-tax_no');
                // alert('id is ' + id + ' name is ' + name);
                $('.name').val(name);
                $('.phone').val(phone);
                $('.tax_no').val(tax_no);
            });

            $('#edit_selected_purity').on('click',function(){
                var ids = selectedRowId("selected");
                   if(ids == false){
                       return false;
                   }
                   var color = $('#color');
                   var purity = $('#purity');
                   colorPurityValidation(color,purity);
                  $.ajax({
                      url : "{{route('dashboard.update.color_purity')}}",
                      method : "POST",
                      data : {
                        "_token": "{{ csrf_token() }}",
                        'ids' : ids,
                        'color': color.val(),
                        'purity' : purity.val(),
                      },
                      success : function(data){

                        if(data.success){
                            reloadProducts();
                            notification.show();
                             clearPurity(color,purity);
                        }
                      }
                });
            });


            $('#edit_all_items_purity').on('click',function(){
                var ids = selectedRowId("all");
                   if(ids == false){
                       return false;
                   }
                   var color = $('#color');
                   var purity = $('#purity');
                   colorPurityValidation(color,purity);
                  $.ajax({
                      url : "{{route('dashboard.update.color_purity')}}",
                      method : "POST",
                      data : {
                        "_token": "{{ csrf_token() }}",
                        'ids' : ids,
                        'color': color.val(),
                        'purity' : purity.val(),
                      },
                      success : function(data){
                        if(data.success){
                            reloadProducts();
                            notification.show();
                            summaryInvoice();
                            clearPurity(color,purity);
                        }
                      }

                });
            });

            function reloadProducts()
            {
                var ids = [];
                  $('input[name^="all_products[]"]').each(function() {
                    ids.push($(this).val());
                   });

                $.ajax({
                      url : "{{route('dashboard.show.products')}}",
                      method : "POST",
                      data : {
                        "_token": "{{ csrf_token() }}",
                        'ids' :  ids
                      },
                      success : function(data){
                        if(data.success){
                            var html = "";

                            var numberIncr = 1;
                         $.each(data.products,function(index,value){
                            html +=  '<tr class="cloning_row" id="' + numberIncr + '">';
                            html +=  '<td><label class="count"for="">' + numberIncr + '</label></td>';
                            html +=  '<td><input type="checkbox" for="" value="'+value.id+'" name="product_ids['+ value.id +']"><input name="all_products[]" value="'+value.id+'" hidden></label></td>';
                            html += '<td><label for="" name="id['+ numberIncr +']">' + value.id + '</label></td>';
                            html +=  '<td><label for="" name="extra_no['+ numberIncr +']">' + value.extra_no +'</label></td>';
                            html += '<td><label for="" name="description['+ numberIncr +']">' + value.description + '</label></td>';
                            html +=  '<td><label for="" class="category" name="category_name['+ numberIncr +']">' + value.category.name + '</label></td>';
                            html +=  '<td><label for="" class="purity" name="purity['+ numberIncr +']">' + value.purity + '</label></td>';
                            html +=   '<td><label for="" class="color" name="color['+ numberIncr +']">' + value.color + '</label></td>';
                            html +='<td><label for="" class="gold" name="gold['+ numberIncr +']">' + value.gold + '</label></td>';
                            html += '<td><label for="" class="dimaond_1" name="dimaond_1['+ numberIncr +']">' + value.dimaond_1 + '</label></td>';
                            html += '<td><label for="" class="dimaond_2" name="dimaond_2['+ numberIncr +']">' + value.dimaond_2 + '</label></td>';
                            html += '<td><label for="" class="dimaond_3" name="dimaond_3['+ numberIncr +']">' + value.dimaond_3 + '</label></td>';
                            html += '<td><label for="" class="dimaond_4" name="dimaond_4['+ numberIncr +']">' + value.dimaond_4 + '</label></td>';
                            html += '<td><label for="" class="dimaond_5" name="dimaond_5['+ numberIncr +']">' + value.dimaond_5 + '</label></td>';
                            html +='<td><label for="" class="baguette" name="baguette['+ numberIncr +']">' + value.baguette + '</label></td>';
                            html +='<td><label for="" class="princess" name="princess['+ numberIncr +']">' + value.princess + '</label></td>';
                            html += '<td><label for="" class="marquis" name="marquis['+ numberIncr +']">' + value.marquis + '</label></td>';
                            html +='<td><label for="" class="bigStone" name="big_stone['+ numberIncr +']">' + value.big_stone + '</label></td>';
                            html +=   '<td><label for="" class="colored" name="colored['+ numberIncr +']">' + value.colored + '</label></td>';
                            html += '<td><label for="" id="sale_price_original_'+ value.id +'" class="item_price item_priceByPurchase" name="sale_price['+ numberIncr +']">' + $.number(value.sale_price, 2) +'</label></td><input type="hidden" name="sale_price_original_'+ value.id +'_value" id="sale_price_original_'+ value.id +'_value" value="'+ value.sale_price +'"><input type="hidden" class="purchase-price" value="'+ value.purchase_price +'">';
                            html += '<td><a class="btn btn-sm btn-danger delegated-btn"><i class="icon-remove_circle"></i></a>';
                            html +=  '</tr>';

                            numberIncr++;
                        });
                        $('#invoice_details').find('tbody').html(html);
                    calculateTotal();
                    count_items();
                    cal_colored();
                    cal_gold();
                    cal_dimaond_1();
                    cal_dimaond_2();
                    cal_dimaond_3();
                    cal_dimaond_4();
                    cal_dimaond_5();
                    cal_baguette();
                    cal_princess();
                    cal_marquis();
                    cal_bigStone();
                    summaryInvoice();
                       }
                      }
                });
            }

            function selectedRowId(option)
            {
                var ids = [];
                var html = "";
                if(option == "all"){
                    $('input[name^="all_products[]"]').each(function() {
                    ids.push($(this).val());
                    html += '<input type="hidden" name="selectedProducts[]" id="selected_products" value="'+$(this).val()+'">';
                   });
                }else{
                    $('input[name^="product_ids"]:checked').each(function() {
                    ids.push($(this).val());
                    html += '<input type="hidden" name="selectedProducts[]" id="selected_products" value="'+$(this).val()+'">';
                   });
                }
                if(ids.length == 0)
                   {
                       if(option == "all"){
                          var error = new Noty({
                             text: "select one product at least",
                             timeout:5000,
                             type: "error",

                            });
                       }else{
                           var error = new Noty({
                             text: "check one product at least",
                             timeout:5000,
                             type: "error",

                            });
                       }

                       error.show();
                       return false;
                   }
                   $('#body').html(html);
                return ids;
            }

            function salePriceValidation(unit,price)
            {
                if(unit.val() == ""){
                    $('#edit_salePrice_error').html("unit is required");
                    unit.addClass("is-invalid");
                    return false;
                  }else{
                    $('#edit_salePrice_error').html("");
                    unit.removeClass("is-invalid");
                  }

                  if(price.val() == ""){
                    $('#edit_salePrice_error').html("price is required");
                    price.addClass("is-invalid");
                    return false;
                  }else{
                    $('#edit_salePrice_error').html("");
                    price.removeClass("is-invalid");
                  }

            }

            function clearPrice(unit,price)
            {
                 unit.val("");
                 price.val("");
            }
            function  clearPurity(color,purity)
            {
                color.val("");
                purity.val("");
            }

            function colorPurityValidation(color,purity)
            {
                if(color.val() == "" && purity.val() == ""){
                    $('#edit_color_purity').html("color or purity is required");
                    color.addClass("is-invalid");
                    purity.addClass("is-invalid");
                    return false;
                  }else{
                    $('#edit_color_purity').html("");
                    color.removeClass("is-invalid");
                    purity.removeClass("is-invalid");

                  }



            }

            function summaryInvoice()
            {
                var ids = [];
                  $('input[name^="all_products"]').each(function() {
                    ids.push($(this).val());
                   });

                $.ajax({
                      url : "{{route('dashboard.summary.invoice')}}",
                      method : "POST",
                      data : {
                        "_token": "{{ csrf_token() }}",
                        'ids' :  ids
                      },
                      success : function(data){
                        var html = null;
                        if(data.success){
                          $.each(data.products,function(index,value){
                             if(index == 0){
                                html += '<tr class="addCategory_row" id="0" style="color: red;">';
                                html += '<td class="group_category">'+value.category_name+'</td>';
                                html += '<td class="count_item_summary">'+value.qty+'</td>';
                                html += '<td class="total_price_summary" id="total_price_' + value.category_name + '">'+value.sale_price+'</td><input type="hidden" name="total_price_'+ value.category_name +'_value" id="total_price_'+ value.category_name +'_value" value="'+ value.sale_price +'">';
                                html += '</tr>';
                              }else{
                                if(value.sale_price == null) {
                                    value.sale_price = 0;
                                }
                                html += '<tr>';
                                html += '<td class="group_category">'+value.category_name+'</td>';
                                html += '<td>'+value.qty+'</td>';
                                html += '<td class="total_item_price" id="total_price_' + value.category_name + '">'+ value.sale_price +'</td><input type="hidden" name="total_price_'+ value.category_name +'_value" id="total_price_'+ value.category_name +'_value" value="'+ value.sale_price +'">';
                                html += '</tr>';
                             }
                          });
                          $('#summary').html(html);
                          updateInvoiceDetails();
                          calculateTotal();

                        } else {
                            $('#summary').html(html);
                            updateInvoiceDetails();
                            calculateTotal();
                        }

                      }
                });

            }

            $("#saleType").change(function(){
                var saleType = $('#saleType').val();
                if(saleType == '1') {
                    $(".sale-type-cash").hide();
                    $(".sale-type-order").show();
                } else if (saleType == '2') {
                    $(".sale-type-cash").show();
                    $(".sale-type-order").hide();
                } else {
                    $(".sale-type-cash").hide();
                    $(".sale-type-order").hide();
                }
            });

        });
    </script>

@endsection
