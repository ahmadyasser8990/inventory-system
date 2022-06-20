@extends('layouts.dashboard.app')

@section('content')
    <div class="page-wrapper pinned">

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
                                        <a href="{{route('dashboard.sales.index')}}">@lang('site.sale_invoices')</a>
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
                    <li class="breadcrumb-item"><a href="{{route('dashboard.return-sales.index')}}">@lang('site.return_sale')</a></li>
                    <li class="breadcrumb-item active">@lang('site.invoice')</li>
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
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="invoice-container" id="print-area">
                                            <div class="invoice-header">

                                                <!-- Row start -->
                                                <div class="row gutters">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                        <div class="custom-actions-btns mb-5">
                                                            <a href="{{route('dashboard.return-sales.index')}}" class="btn btn-primary">
                                                                <i class="icon-arrow_back"></i> @lang('site.back')
                                                            </a>
                                                            <a href="#" class="btn btn-dark print-btn">
                                                                <i class="icon-printer"></i> @lang('site.print')
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Row end -->

                                                <!-- Row start -->
                                                <div class="row gutters">
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                                        <div class="text-left">
                                                            <img src="{{asset('dashboard_files/img/qrcode1.png')}}" class="img-fluid  float-left" style="max-width: 80px;">

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                                        <h4 class="text-center">@lang('site.return_sale')</h4>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                                        <div class="text-left">
                                                            <img src="{{asset('dashboard_files/img/logo.jpg')}}" class="img-fluid  float-right" style="max-width: 258px;">

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Row end -->

                                                <!-- Row start -->
                                                <div class="row gutters">
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="invoice-details">
                                                            <h5>@lang('site.invoice_to') </h5>
                                                            <address>
                                                                     {{$return_sale->client_name}} <br />
                                                                    {{$return_sale->client_phone}}
                                                                </address>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="invoice-details">
                                                            <h5>@lang('site.invoice_from') </h5>
                                                            <address>
                                                                    @lang('site.company_name')<br />
                                                                    +966580891057
                                                                </address>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Row end -->
                                                <!-- Row start -->
                                                <div class="row gutters">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="bill-details">
                                                            <h5>@lang('site.invoice_no') </h5>
                                                            <address>
                                                                    {{$return_sale->id}}<br />
                                                                    {{$return_sale->invoice_date}}
                                                                </address>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Row end -->

                                            </div>

                                            <div class="invoice-body">

                                                <!-- Row start -->
                                                <div class="row gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-sm">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
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
                                                                        <th>@lang('site.sale_price')</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($return_sale_details as $index=>$return_sale_detail )
                                                                        <tr>
                                                                            <td>{{$index + 1}}</td>
                                                                            <td>{{$return_sale_detail->product->id}}</td>
                                                                            <td>{{$return_sale_detail->product->extra_no}}</td>
                                                                            <td>{{$return_sale_detail->product->description}}</td>
                                                                            <td>{{$return_sale_detail->product->category->name}} </td>
                                                                            <td>{{$return_sale_detail->product->purity}}</td>
                                                                            <td>{{$return_sale_detail->product->color}}</td>
                                                                            <td>{{$return_sale_detail->product->gold}}</td>
                                                                            <td>{{$return_sale_detail->product->dimaond_1}}</td>
                                                                            <td>{{$return_sale_detail->product->dimaond_2}}</td>
                                                                            <td>{{$return_sale_detail->product->dimaond_3}}</td>
                                                                            <td>{{$return_sale_detail->product->dimaond_4}}</td>
                                                                            <td>{{$return_sale_detail->product->dimaond_5}}</td>
                                                                            <td>{{$return_sale_detail->product->baguette}}</td>
                                                                            <td>{{$return_sale_detail->product->princess}}</td>
                                                                            <td>{{$return_sale_detail->product->marquis}}</td>
                                                                            <td>{{$return_sale_detail->product->big_stone}}</td>
                                                                            <td>{{$return_sale_detail->product->colored}}</td>
                                                                            <td>{{$return_sale_detail->product->sale_price}}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                    <tr>
                                                                        <td colspan="18">
                                                                            <p>
                                                                                @lang('site.total')<br> @lang('site.total_descount') <br> @lang('site.tax_amount')
                                                                                <br>
                                                                            </p>
                                                                            <h5 class="text-danger"><strong>@lang('site.final_total')</strong></h5>
                                                                        </td>
                                                                        <td>
                                                                            <p>
                                                                                {{$return_sale->sub_total}} @lang('site.riyal')<br> {{$return_sale->discount_value}} @lang('site.riyal')
                                                                                <br> {{$return_sale->vat_value}} @lang('site.riyal') <br>
                                                                            </p>
                                                                            <h5 class="text-danger"><strong>{{$return_sale->final_total}} @lang('site.riyal')</strong></h5>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Row end -->

                                            </div>

                                            <div class="invoice-footer">
                                                نسعد بخدمتكم
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->
                    </div>
                </div>

            </div>
            <!-- Main container end -->

        </div>
        <!-- Page content end -->

    </div>

@endsection
@section('scripts')
    {{--print this--}}
    <script src="{{ asset('dashboard_files/js/printThis.js') }}"></script>

    <script>

        //print
        $(document).on('click', '.print-btn', function() {

            $('#print-area').printThis();

        }); //end of click function


    </script>
@endsection
