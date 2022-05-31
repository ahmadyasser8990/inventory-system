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
                        <li class="sidebar-dropdown active">
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
                                    <li class="active">
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
                    <li class="breadcrumb-item">@lang('site.dashboard')</li>
                    <li class="breadcrumb-item active">@lang('site.catch_receipt')</li>
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
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="info-tiles">
                                    <div class="info-icon secondary">
                                        <i class="icon-archive"></i>
                                    </div>
                                    <div class="stats-detail">
                                        <h3>14500 @lang('site.riyal')</h3>
                                        <p>@lang('site.catch_receipt')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row grutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-left mb-3">
                                    <!-- Button add new sale -->
                                    <a href="{{route('dashboard.catch-receipt.create')}}" class="btn btn-primary">@lang('site.new_catch_receipt')</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-light table-sm">
                                        <thead>
                                            <tr>
                                                <th>@lang('site.catch_receipt_no')</th>
                                                <th>@lang('site.client_name')</th>
                                                <th>@lang('site.amount')</th>
                                                <th>@lang('site.payment_method')</th>
                                                <th>@lang('site.description')</th>
                                                <th class="text-center">@lang('site.action')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>125</td>
                                                <td>Mohammed</td>
                                                <td>1500 @lang('site.riyal')</td>
                                                <td>@lang('site.cash')</td>
                                                <td>Spend it on fixing laptops</td>
                                                <td class="text-center">
                                                    <div class="task-list">
                                                        <div class="task-block" style="flex-direction: row; padding: 0; border-bottom: 0">
                                                            <ul class="task-actions">
                                                                <li>
                                                                    <a href="#" class="star" data-toggle="tooltip" data-placement="top" title="@lang('site.delete')">
                                                                        <i class="icon-delete"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="star" data-toggle="modal" data-placement="top" data-target=".show" title="@lang('site.show')">
                                                                        <i class="icon-eye"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="star" data-toggle="modal" data-placement="top" data-target=".edit" title="@lang('site.edit')">
                                                                        <i class="icon-edit"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="star" data-toggle="tooltip" data-placement="top" title="@lang('site.print')">
                                                                        <i class="icon-print"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                            {{-- modal show product --}}
                                            <div class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="showModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="showModalLabel">@lang('site.catch_receipt_info')</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                        </div>
                                                        <form class="" action="" method="" enctype="">

                                                            <div class="modal-body">
                                                                <div class="row gutters">
                                                                    <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                                                        <div class="form-group">
                                                                            <label class="col-form-label">@lang('site.catch_receipt_no')</label>
                                                                            <input type="number" class="form-control" readonly value="12">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row gutters">
                                                                    <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                                                        <div class="form-group">
                                                                            <label class="col-form-label">@lang('site.amount')</label>
                                                                            <input type="number" class="form-control" placeholder="@lang('site.amount')">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3 col-lg col-md-3 col-sm-3 col-12">
                                                                        <div class="form-group">
                                                                            <label  class="col-form-label">@lang('site.document_date')</label>
                                                                            <input type="date" class="form-control"  placeholder="@lang('site.document_date')">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3 col-lg col-md-3 col-sm-3 col-12">
                                                                        <div class="form-group">
                                                                            <label  class="col-form-label">@lang('site.recieve_date')</label>
                                                                            <input type="date" class="form-control"  placeholder="@lang('site.recieve_date')">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3 col-lg col-md-3 col-sm-3 col-12">
                                                                        <div class="form-group">
                                                                            <label class="col-form-label">@lang('site.payment_method')</label>
                                                                            <select class="form-control" name="method_type" id="">
                                                                                <option value="">@lang('site.payment_method')</option>
                                                                                <option value="cash">@lang('site.cash')</option>
                                                                                <option value="credit_card">@lang('site.credit_card')</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row gutters">
                                                                    <label class="col-sm-2 col-form-label text-right">@lang('site.customer_no')</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="number" name="customer_id" class="form-control" placeholder="@lang('site.customer_no')">
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <input type="text" name="customer_name" class="form-control" readonly placeholder="@lang('site.customer_name')">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row gutters">
                                                                    <label class="col-sm-2 col-form-label text-right">@lang('site.amount_as_string')</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" name="amountString" class="form-control" readonly placeholder="@lang('site.amount_as_string')">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row gutters">
                                                                    <label class="col-sm-2 col-form-label text-right">@lang('site.description')</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" name="description" class="form-control" placeholder="@lang('site.description')">
                                                                    </div>
                                                                </div>
                                                                <!-- Row end -->

                                                                <!-- Row start -->
                                                                <div class="row gutters">
                                                                    <div class="col-xl-12">
                                                                        <button type="button" id="submit" name="submit" class="btn btn-danger float-right">@lang('site.close')</button>
                                                                    </div>
                                                                </div>
                                                                <!-- Row end -->

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- modal edit product --}}
                                            <div class="modal fade edit" tabindex="-1" role="dialog" aria-labelledby="showModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="showModalLabel">@lang('site.catch_receipt_edit')</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                        </div>
                                                        <form class="" action="" method="" enctype="">

                                                            <div class="modal-body">
                                                                <div class="row gutters">
                                                                    <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                                                        <div class="form-group">
                                                                            <label class="col-form-label">@lang('site.catch_receipt_no')</label>
                                                                            <input type="number" class="form-control" readonly value="12">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row gutters">
                                                                    <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                                                        <div class="form-group">
                                                                            <label class="col-form-label">@lang('site.amount')</label>
                                                                            <input type="number" class="form-control" placeholder="@lang('site.amount')">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3 col-lg col-md-3 col-sm-3 col-12">
                                                                        <div class="form-group">
                                                                            <label  class="col-form-label">@lang('site.document_date')</label>
                                                                            <input type="date" class="form-control"  placeholder="@lang('site.document_date')">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3 col-lg col-md-3 col-sm-3 col-12">
                                                                        <div class="form-group">
                                                                            <label  class="col-form-label">@lang('site.recieve_date')</label>
                                                                            <input type="date" class="form-control"  placeholder="@lang('site.recieve_date')">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3 col-lg col-md-3 col-sm-3 col-12">
                                                                        <div class="form-group">
                                                                            <label class="col-form-label">@lang('site.payment_method')</label>
                                                                            <select class="form-control" name="method_type" id="">
                                                                                <option value="">@lang('site.payment_method')</option>
                                                                                <option value="cash">@lang('site.cash')</option>
                                                                                <option value="credit_card">@lang('site.credit_card')</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row gutters">
                                                                    <label class="col-sm-2 col-form-label text-right">@lang('site.customer_no')</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="number" name="customer_id" class="form-control" placeholder="@lang('site.customer_no')">
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <input type="text" name="customer_name" class="form-control" readonly placeholder="@lang('site.customer_name')">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row gutters">
                                                                    <label class="col-sm-2 col-form-label text-right">@lang('site.amount_as_string')</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" name="amountString" class="form-control" readonly placeholder="@lang('site.amount_as_string')">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row gutters">
                                                                    <label class="col-sm-2 col-form-label text-right">@lang('site.description')</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" name="description" class="form-control" placeholder="@lang('site.description')">
                                                                    </div>
                                                                </div>
                                                                <!-- Row end -->

                                                                <!-- Row start -->
                                                                <div class="row gutters">
                                                                    <div class="col-xl-12">
                                                                        <button type="button" id="submit" name="submit" class="btn btn-danger float-right mr-2">@lang('site.close')</button>
                                                                        <button type="button" id="submit" name="submit" class="btn btn-primary float-right">@lang('site.save')</button>
                                                                    </div>
                                                                </div>
                                                                <!-- Row end -->

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </tbody>
                                    </table>
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
