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
                                    <a href="{{route('dashboard.sales.index')}}">@lang('site.sale_invoices')</a>
                                </li>
                                <li>
                                    <a href="{{route('dashboard.return-sales.index')}}"> @lang('site.return_sale') </a>
                                </li>
                                <li class="active">
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
                <li class="breadcrumb-item"><a href="{{route('dashboard.purchase.index')}}">@lang('site.purchase_bill')</a></li>
                <li class="breadcrumb-item active">@lang('site.purchase_bill')</li>
            </ol>
        </div>
        <!-- Page header end -->

        <!-- Main container start -->
        <div class="main-container fixed-height">
            <!-- Setting vertical scroll start -->
            <div class="fixedBodyScroll">
                <!-- Content wrapper start -->
                <div class="content-wrapper">
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
                                            </div>
                                            <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                                <div class="form-group">
                                                    <label for="">@lang('site.payment_method')</label>
                                                    <select name="" id="" class="form-control form-control-sm">
                                                        <option value="">choose...</option>
                                                        <option value="1">@lang('site.cash')</option>
                                                        <option value="2">@lang('site.masterCard')</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                                <div class="form-group">
                                                    <label for="">@lang('site.purchase_type')</label>
                                                    <select name="purchase_type" id="" class="form-control form-control-sm purchase_type required">
                                                        <option value="">choose...</option>
                                                        <option value="order" @if(!empty(old('purchase_type')) && old('purchase_type') == 'order') selected @endif>Order</option>
                                                        <option value="cash" @if(!empty(old('purchase_type')) && old('purchase_type') == 'cash') selected @endif>Cash</option>
                                                    </select>
                                                    @error('purchase_type')
                                                    <div class="text-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                </div>
                                                <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                                <div class="form-group">
                                                    <label for="" class="cash">@lang('site.supplier_name')</label>
                                                    <input class="form-control form-control-sm cash"  type="text" value="" placeholder="" name="supplier_name">
                                                </div>
                                                </div>
                                                <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                                <div class="form-group">
                                                    <label for="" class="cash">@lang('site.phone_no')</label>
                                                    <input class="form-control form-control-sm cash"  type="text"  placeholder="" name="supplier_phone_no">
                                                </div>
                                                </div>
                                                <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                                <div class="form-group">
                                                    <label for="" class="cash">@lang('site.tax_no')</label>
                                                    <input class="form-control form-control-sm cash" type="text"  placeholder="" name="supplier_tax_no">
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
                                                <input class="form-control form-control-sm" type="text" readonly placeholder="120">
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                            <div class="form-group">
                                                <label for="" class="order">@lang('site.supplier_id')</label>
                                                <select name="supplier_id" type="text" id="supplier_id" class="form-control form-control-sm selectpicker order supplier_id_order">
                                                <option value="">Select</option>
                                                @foreach ($suppliers as $supplier)
                                                <option value="{{$supplier->id}}">
                                                    {{$supplier->name}}
                                                </option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                            <div class="form-group">
                                                <label for="" class="order">@lang('site.supplier_name')</label>
                                                <input class="form-control form-control-sm supplier_name_order order" name="" readonly type="text" value="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                            <div class="form-group">
                                                <label for="" class="order">@lang('site.phone_no')</label>
                                                <input class="form-control form-control-sm supplier_phone_no_order order" name="" type="text" readonly placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                            <div class="form-group">
                                                <label for="" class="order">@lang('site.tax_no')</label>
                                                <input class="form-control form-control-sm supplier_tax_no_order order" name="" type="text" readonly placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="raw">
                                        <p>Add New Product</p>
                                    </div>
                                    <div id="products">
                                        <div class="row gutters product-row">
                                            <div class="row gutters">
                                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                <div class="user-avatar">
                                                    <img src="{{asset('uploads/product_images/default.png')}}" class="img-fluid float-center image-preview" alt="Wafi Admin" />
                                                </div>
                                                <div class="form-group">
                                                    <label>@lang('site.image')</label>
                                                    <input type="file" name="image" id="img" class="form-control image product"  accept="image/*" >
                                                </div>
                                                <div class="form-group">
                                                    <label>@lang('site.sale_price')</label>
                                                    <input type="number" step="0.01" value="{{ old('sale_price')}}" name="sale_price" class="form-control product" value>
                                                </div>
                                                <div class="form-group">
                                                    <label>@lang('site.category_type')</label>
                                                    <select name="category_id" class="form-control product form-control-lg">
                                                        <option value="">Select</option>
                                                        @foreach($categories as $category)
                                                        <option value="{{$category->id}}" @if(!empty(old('category_id')) && old('category_id') == $category->id) selected @endif>{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('category_id')
                                                    <div class="text-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                <div class="form-group">
                                                    <label>@lang('site.extra_no')</label>
                                                    <input type="text" name="extra_no" value="{{ old('extra_no')}}" class="form-control product">
                                                    @error('extra_no')
                                                    <div class="text-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>@lang('site.item_type')</label>
                                                    <select name="item_type" class="form-control product form-control-lg">
                                                    <option value="new" class="" @if(!empty(old('item_type')) && old('item_type') == 'new') selected @endif> @lang('site.new')</option>
                                                    <option value="used" class="" @if(!empty(old('item_type')) && old('item_type') == 'used') selected @endif>@lang('site.used')</option>
                                                    </select>
                                                    @error('item_type')
                                                    <div class="text-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="docTitle">@lang('site.supplier')</label>
                                                    <select name="product_supplier" class="form-control product form-control-lg">
                                                        <option value="">Select</option>
                                                        @foreach($suppliers as $supplier)
                                                        <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('product_supplier')
                                                    <div class="text-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                <div class="form-group">
                                                    <label>@lang('site.design_no')</label>
                                                    <input type="text" name="design_no" value="{{ old('design_no')}}" class="form-control product">
                                                </div>
                                                <div class="form-group">
                                                    <label>@lang('site.purchase_price')</label>
                                                    <input type="number" step="0.01" name="purchase_price" value="{{ old('purchase_price')}}" class="form-control product">
                                                    @error('purchase_price')
                                                    <div class="text-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label">@lang('site.description')</label>
                                                    <textarea class="form-control product" name="description" maxlength="140" rows="4"> {{ old('description')}}</textarea>
                                                    <div class="form-text text-muted">
                                                        <p id="characterLeft" class="help-block ">140 characters left</p>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12"></div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                <div class="form-group">
                                                    <label>@lang('site.gold')</label>
                                                    <input type="number" name="gold" step="0.01" value="{{ old('gold')}}"  class="form-control product">
                                                    @error('gold')
                                                    <div class="text-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>@lang('site.marquis')</label>
                                                    <input type="number" name="marquis" step="0.01" value="{{ old('marquis')}}" class="form-control product">
                                                </div>
                                                <div class="form-group">
                                                    <label>@lang('site.baguette')</label>
                                                    <input type="number" name="baguette" step="0.01" value="{{ old('baguette')}}"  class="form-control product">
                                                </div>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                <div class="form-group">
                                                    <label>@lang('site.big_stone')</label>
                                                    <input type="number" name="big_stone" step="0.01" value="{{ old('big_stone')}}" class="form-control product">
                                                </div>
                                                <div class="form-group">
                                                    <label>@lang('site.princess')</label>
                                                    <input type="number" name="princess" step="0.01" value="{{ old('princess')}}" class="form-control product">
                                                </div>
                                                <div class="form-group">
                                                    <label>@lang('site.colored')</label>
                                                    <input type="number" name="colored" value="{{ old('colored')}}" class="form-control product">
                                                </div>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                <div class="form-group">
                                                    <label>@lang('site.dimaond_1')</label>
                                                    <input type="number" name="dimaond_1" step="0.01" value="{{ old('dimaond_1')}}" class="form-control product">
                                                </div>
                                                <div class="form-group">
                                                    <label>@lang('site.dimaond_2')</label>
                                                    <input type="number" name="dimaond_2" step="0.01" value="{{ old('dimaond_2')}}" class="form-control product">
                                                </div>
                                                <div class="form-group">
                                                    <label>@lang('site.dimaond_3')</label>
                                                    <input type="number" name="dimaond_3" step="0.01" value="{{ old('dimaond_3')}}" class="form-control product">
                                                </div>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                <div class="form-group">
                                                    <label>@lang('site.dimaond_4')</label>
                                                    <input type="number" name="dimaond_4" step="0.01" value="{{ old('dimaond_4')}}" class="form-control product">
                                                </div>
                                                <div class="form-group">
                                                    <label>@lang('site.dimaond_5')</label>
                                                    <input type="number" name="dimaond_5" step="0.01" value="{{ old('dimaond_5')}}" class="form-control product">
                                                </div>
                                                <div class="form-group">
                                                    <label>@lang('site.purity')</label>
                                                    <input type="text" name="purity"  value="{{ old('purity')}}" class="form-control product">
                                                </div>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                <div class="form-group">
                                                    <label>@lang('site.color')</label>
                                                    <input type="text" name="color"  value="{{ old('color')}}" class="form-control product">
                                                </div>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                <div class="form-group">
                                                    <label>Qty</label>
                                                    <input type="number" name="qty"  value="{{ old('qty')}}" class="form-control product">
                                                    @error('qty')
                                                    <div class="text-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="text-right">
                                                    <button type="button" class="btn btn-primary mr-3 save-product">@lang('site.add')</button>
                                                </div>
                                                <!-- <div class="text-left">
                                                    <a class="btn btn-outline-primary mr-3">@lang('site.import_by_excel')</a>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row gutters">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-light table-sm" id="invoice_details">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <!-- <th>@lang('site.select')</th> -->
                                                    <th>Item Type</th>
                                                    <th>@lang('site.extra_no')</th>
                                                    <th>@lang('site.design_no')</th>
                                                    <th>@lang('site.category_type')</th>
                                                    <th>@lang('site.description')</th>
                                                    <th>@lang('site.gold')</th>
                                                    <th>@lang('site.dimaond')</th>
                                                    <th>@lang('site.baguette')</th>
                                                    <th>@lang('site.princess')</th>
                                                    <th>@lang('site.marquis')</th>
                                                    <th>@lang('site.big_stone')</th>
                                                    <th>@lang('site.colored')</th>
                                                    <th>@lang('site.cost')</th>
                                                    <th>@lang('site.status')</th>
                                                    <th>@lang('site.action')</th>
                                                </tr>
                                                </thead>
                                                <tbody id="product-table">
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td colspan="2">Total</td>
                                                    <td colspan="4"><label for="" class="text-bold text-danger count_item"></label></td>
                                                    <td><label for="" class="text-bold text-danger product_gold_total">0.00</label></td>
                                                    <td><label for="" class="text-bold text-danger product_diamond_1_total">0.00</label></td>
                                                    <td><label for="" class="text-bold text-danger product_baguette_total">0.00</label></td>
                                                    <td><label for="" class="text-bold text-danger product_princess_total">0.00</label></td>
                                                    <td><label for="" class="text-bold text-danger product_marquis_total">0.00</label></td>
                                                    <td><label for="" class="text-bold text-danger product_big_stone_total">0.00</label></td>
                                                    <td><label for="" class="text-bold text-danger product_colored_total">0.00</label></td>
                                                    <td><label for="" class="text-bold text-danger purchase_price_total">0.00</label></td>
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
                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
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
                            </div>
                        </div>
                        <!-- Row end -->
                    </div>
                    <div class="row gutters pt-2">
                        {{-- important --}}
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-right">
                            <a href="{{route('dashboard.purchase.index')}}" class="btn btn-dark">@lang('site.close')</a>
                            {{-- <a href="#" class="btn btn-danger">@lang('site.draft_invoice')</a> --}}
                            <button type="submit" onClick="submitFormPurchase(event)" id="purchase_invoice" class="btn btn-success purchase_invoice">@lang('site.invoice')</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main container end -->
</div>
<!-- Page content end -->
@endsection
@push('scriptsJs')
<!-- Bootstrap Select JS -->
<script src="{{ asset('dashboard_files/vendor/bs-select/bs-select.min.js')}}"></script>
<script src="{{ asset('dashboard_files/js/pickadate/picker.js') }}"></script>
<script src="{{ asset('dashboard_files/js/pickadate/picker.date.js') }}"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
@if(config('app.locale') == 'ar')
<script src="{{ asset('dashboard_files/js/pickadate/ar.js') }}"></script>
@endif
<script>
    function submitFormPurchase(event){
     event.preventDefault();
            $.ajax({
                   url:"/dashboard/purchase",
                   type:"POST",
                   data:$('#purchase_form').serialize(),
                   success: function(response){
                    if(response.success == 1){

            var msg = new Noty({
                        text: "purchase added",
                        timeout:5000,
                        type: "success",

                       });
            msg.show();
            window.location.href = "/dashboard/purchase?="+response.type;
       }else if(response.success == 0){
           $.each(response.errors, function(index, value)
               {
               if (value.length !== 0)
                   {

                       var error = new Noty({
                        text: value,
                        timeout:5000,
                        type: "error",

                       });
                   error.show();
                       }
                   });
       }
                 }
               });
    }

   $(document).ready(function(){

    //submit form


    //
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

                   '<td><label class="count"for="">' + numberIncr + '</label></td>' +
                   '<td><input type="checkbox" for="" value="'+id+'" name="product_ids['+ id +']"><input name="all_products[]" value='+id+' class="product_ids" hidden></label></td>' +
                   '<td><label for="" name="id['+ numberIncr +']">' + item_no + '</label></td>' +
                   '<td><label for="" name="extra_no['+ numberIncr +']">' + extra_no +'</label></td>' +
                   '<td><label for="" name="description['+ numberIncr +']">' + description + '</label></td>'+
                   '<td><label for="" name="category_name['+ numberIncr +']">' + category_name + '</label></td>'+
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
                   '<td><label for="" class="item_price item_priceByPurchase" name="sale_price['+ numberIncr +']">' + $.number(sale_price, 2) +'</label></td>'+
                   '<td><a class="btn btn-sm btn-danger delegated-btn"><i class="icon-remove_circle"></i></a>' +
                   '</td>'+
               '</tr>'));

               // cal_Weights();
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
           // cal_Weights();
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
       function cal_Weights(){
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

       $('body').on('keyup blur', '.discount_type', function () {
           $('#vat_value').val(calculate_vat());
           $('#final_total').val(sum_due_total());
       });
       // هنا القيمه في الخصم اذا كان بالريال يتغير بسعر ثابت اما اذا كان البنسبه فيتغير بالنسبه المئاويه
       $('body').on('keyup blur', '.discount_value', function(){
           $('#vat_value').val(calculate_vat());
           $('#final_total').val(sum_due_total());
       });

       let calculate_vat = function () {
           let sub_totalVal = parseFloat($('.sub_total').val()) || 0;
           let discount_type = $('.discount_type').val();
           let discount_value = parseFloat($('.discount_value').val()) || 0;
           let discountVal = discount_value != 0 ? discount_type == 'percentage' ? sub_totalVal * (discount_value / 100) : discount_value : 0;

           let vatVal = (sub_totalVal - discountVal) * 0.15;

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

       //  Count Total sale_prices (class="item_price" and class="total_price")
       function calculateTotal() {

           var price = 0;

           $('#invoice_details .item_price').each(function(index) {


               price += parseFloat($(this).html().replace(/,/g, ''));

           });//end of product price total_price-input

           $('.total_price').html($.number(price, 2));
           $('.sub_total').val(price.toFixed(2));
           $('#vat_value').val(calculate_vat());
           $('#final_total').val(sum_due_total());
           $('.total_price_summary').html($.number(price, 2));

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

       $('#edit_all_products_purchase').on('click',function(){
              var ids = selectedRowId("all");
              if(ids == false){
                  return false;
              }
              var unit = $('#edit_salePrice');
              var price = $('#sale_value');
              salePriceValidation(unit,price);

             $.ajax({
                 url : "{{route('dashboard.update.sale_price')}}",
                 method : "POST",
                 data : {
                   "_token": "{{ csrf_token() }}",
                   'ids' : ids,
                   'unit': unit.val(),
                   'price' : price.val()
                 },
                 success : function(data){
                   if(data.success){
                       reloadProducts();
                       notification.show();
                       clearPrice(unit,price);

                   }
                 }

           });
       });

       $('#edit_selected_products_purchase').on('click',function(){
              var ids = selectedRowId("selected");
              if(ids == false){
                  return false;
              }
              var unit = $('#edit_salePrice');
              var price = $('#sale_value');
              salePriceValidation(unit,price);
             $.ajax({
                 url : "{{route('dashboard.update.sale_price')}}",
                 method : "POST",
                 data : {
                   "_token": "{{ csrf_token() }}",
                   'ids' : ids,
                   'unit': unit.val(),
                   'price' : price.val()
                 },
                 success : function(data){

                   if(data.success){
                       reloadProducts();
                       notification.show();
                       clearPrice(unit,price);
                   }
                 }
           });
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
                       html +=  '<td><label for="" name="category_name['+ numberIncr +']">' + value.category.name + '</label></td>';
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
                       html += '<td><label for="" class="item_price item_priceByPurchase" name="sale_price['+ numberIncr +']">' + $.number(value.sale_price, 2) +'</label></td>';
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
                   if(data.success){
                     var html = null;
                     $.each(data.products,function(index,value){

                        if(index == 0){
                           html += '<tr class="addCategory_row" id="0" style="color: red;">';
                           html += '<td>'+value.category_name+'</td>';
                           html += '<td class="count_item_summary">'+value.qty+'</td>';
                           html += '<td class="total_price_summary">'+value.sale_price+'</td>';
                           html += '</tr>';
                         }else{
                           html += '<tr>';
                           html += '<td>'+value.category_name+'</td>';
                           html += '<td>'+value.qty+'</td>';
                           html += '<td>'+value.sale_price+'</td>';
                           html += '</tr>';
                        }
                     });
                     $('#summary').html(html);


                   };

                 }
           });

       }

   });

   $('.purchase_type').change(function(){
   var purchase_type = $(this).val();
   if(purchase_type == 'cash'){
      $('.cash').removeClass('d-none');
      $('.cash').removeAttr('disabled');
      $('.cash').attr('required');
      $('.order').addClass('d-none');
      $('.order').attr('disabled','disabled');
      $('.order').removeAttr('required');
   }else{
      $('.order').removeClass('d-none');
      $('.order').removeAttr('disabled');
      $('.order').attr('required');
      $('.cash').addClass('d-none');
      $('.cash').attr('disabled','disabled');
      $('.cash').removeAttr('required');
   }
   })

   $('.supplier_id_order').change(function(){
   var supplier_id = $(this).val();
   $.ajax({
                 url : "/dashboard/supplier/get-data/"+supplier_id,
                 method : "GET",
                 success:function(data)
                 {
                    if(data)
                    {
                       $('.supplier_name_order').val(data.name);
                       $('.supplier_phone_no_order').val(data.phone);
                       $('.supplier_tax_no_order').val(data.tax_no);
                    }
                 }
   })
   });

   $('.save-product').click(function(){
   let formData = new FormData();

   formData.append('_token', "{{ csrf_token() }}");


   if($("#img").val() != ""){
   formData.append('image', $("#img")[0].files[0]);
   }

   formData.append('sale_price', $("input[name=sale_price]").val());

   formData.append('category_id', $("select[name=category_id]").val());

   formData.append('extra_no', $("input[name=extra_no]").val());

   formData.append('item_type', $("select[name=item_type]").val());

   formData.append('supplier_id', $("select[name=product_supplier]").val());

   formData.append('design_no', $("input[name=design_no]").val());

   formData.append('purchase_price', $("input[name=purchase_price]").val());

   formData.append('description', $("textarea[name=description]").val());

   formData.append('gold', $("input[name=gold]").val());

   formData.append('marquis', $("input[name=marquis]").val());

   formData.append('baguette', $("input[name=baguette]").val());

   formData.append('big_stone', $("input[name=big_stone]").val());

   formData.append('princess', $("input[name=princess]").val());

   formData.append('colored', $("input[name=colored]").val());

   formData.append('dimaond_1', $("input[name=dimaond_1]").val());

   formData.append('dimaond_2', $("input[name=dimaond_2]").val());

   formData.append('dimaond_3', $("input[name=dimaond_3]").val());

   formData.append('dimaond_4', $("input[name=dimaond_4]").val());

   formData.append('dimaond_5', $("input[name=dimaond_5]").val());

   formData.append('purity', $("input[name=purity]").val());

   formData.append('color', $("input[name=color]").val());

   formData.append('qty', $("input[name=qty]").val());




   $.ajax({
   type : "POST",
   cache:false,
   processData: false,
   contentType: false,
   url : "{{route('dashboard.products.store')}}",
   data : formData,
   success:function(response){

       if(response.success == 1){
            addProduct(response.data);
            var msg = new Noty({
                        text: "product added",
                        timeout:5000,
                        type: "success",

                       });
            msg.show();
           clearProductForm();
       }else if(response.success == 0){
           $.each(response.errors, function(index, value)
               {
               if (value.length !== 0)
                   {

                       var error = new Noty({
                        text: value,
                        timeout:5000,
                        type: "error",

                       });
                   error.show();
                       }
                   });
       }

   }
   });



   function addProduct(product)
   {
   var html = "<tr>";
   html += "<td>"+product.id+"<input type='hidden' value='"+product.id+"' name='added_product_id[]'></td>";
   html += "<td>"+product.item_type+"</td>";
   html += "<td>"+product.extra_no+"</td>";
   html += "<td>"+product.design_no+"</td>";
   html += "<td>"+product.category_id+"</td>";
   html += "<td>"+product.description+"</td>";
   html += "<td>"+product.gold+"<input type='hidden' value="+product.gold+" class='product_gold'></td>";
   html += "<td>"+product.dimaond_1+"<input type='hidden' value="+product.dimaond_1+" class='product_dimaond_1'></td>";
   html += "<td>"+product.baguette+"<input type='hidden' value="+product.baguette+" class='product_baguette'></td>";
   html += "<td>"+product.princess+"<input type='hidden' value="+product.princess+" class='product_princess'></td>";
   html += "<td>"+product.marquis+"<input type='hidden' value="+product.marquis+" class='product_marquis'></td>";
   html += "<td>"+product.big_stone+"<input type='hidden' value="+product.big_stone+" class='product_big_stone'></td>";
   html += "<td>"+product.colored+"<input type='hidden' value="+product.colored+" class='product_colored'></td>";
   html += "<td>"+product.purchase_price+"<input type='hidden' value="+product.purchase_price+" class='purchase_price'></td>";
   html += "<td>"+product.status+"</td>";
   html += "<td><button class='btn btn-danger delete_btn' type='button'>Delete</button><input type='hidden' value="+product.id+" class='delete_id'></td>";
   html += "</tr>";
   $('#product-table').append(html);
   totalRow('product_gold','product_gold_total');
   totalRow('product_dimaond_1','product_diamond_1_total');
   totalRow('product_baguette','product_baguette_total');
   totalRow('product_princess','product_princess_total');
   totalRow('product_marquis','product_marquis_total');
   totalRow('product_big_stone','product_big_stone_total');

   totalRow('product_colored','product_colored_total');
   totalRow('purchase_price','purchase_price_total');
   summaryProductInvoice();

   }

   $('tbody').delegate('.delete_btn','click',function(event){
   event.stopPropagation();
   event.stopImmediatePropagation();
   var delete_product = confirm("are you sure ?");
   if(!delete_product){
       return false;
   }
   var parentTr = $(this).parents('tr');
   var id = parentTr.find('.delete_id').val();
   $.ajax({
       url:'/dashboard/products/'+id,
       type:'DELETE',
       data:{
          '_token':'{{csrf_token()}}'
       },
       success:function(response){
          if(response.success == 1){
           var msg = new Noty({
                        text: "product deleted",
                        timeout:5000,
                        type: "success",

                       });
           msg.show();
           parentTr.remove();

          }
          else{
           var error = new Noty({
                        text: value,
                        timeout:5000,
                        type: "something went wrong",

                       });
                   error.show();
          }
       }
   })



   });

   function clearProductForm()
   {
   $("input[name=sale_price]").val("");

   $("select[name=category_id]").val("");

   $("input[name=extra_no]").val("");

   $("select[name=item_type]").val("");

   $("select[name=product_supplier]").val("");

   $("input[name=design_no]").val("");

   $("input[name=purchase_price]").val("");
   $("textarea[name=description]").val("");
   $("input[name=gold]").val("");

   $("input[name=marquis]").val("");

   $("input[name=baguette]").val("");
   $("input[name=big_stone]").val("");

   $("input[name=princess]").val("");

   $("input[name=colored]").val("");

   $("input[name=dimaond_1]").val("");

   $("input[name=dimaond_2]").val("");

    $("input[name=dimaond_3]").val("");

   $("input[name=dimaond_4]").val("");

   $("input[name=dimaond_5]").val("");

    $("input[name=purity]").val("");

   $("input[name=color]").val("");

   $("input[name=qty]").val("");
   $("#img").val("");

   }

   function totalRow(input,total) {

   var initial = 0.00;

   $('.'+input).each(function(index) {


   initial += parseFloat($(this).val().replace(/,/g, ''));

   });//end of

   $('.'+total).html($.number(initial, 2));


   }

   function summaryProductInvoice()
       {
           var ids = [];
             $('input[name^="added_product_id"]').each(function() {
               ids.push($(this).val());
              });

           $.ajax({
                 url : "{{route('dashboard.purchase.summary.invoice')}}",
                 method : "POST",
                 data : {
                   "_token": "{{ csrf_token() }}",
                   'ids' :  ids
                 },
                 success : function(data){
                   if(data.success){
                     var html = null;
                     $.each(data.products,function(index,value){

                        if(index == 0){
                           html += '<tr class="addCategory_row" id="0" style="color: red;">';
                           html += '<td>'+value.category_name+'</td>';
                           html += '<td class="count_item_summary">'+value.qty+'</td>';
                           html += '<td class="total_price_summary">'+value.purchase_price+'</td>';
                           html += '</tr>';
                         }else{
                           html += '<tr>';
                           html += '<td>'+value.category_name+'</td>';
                           html += '<td>'+value.qty+'</td>';
                           html += '<td>'+value.purchase_price+'<input type="hidden" value="'+value.purchase_price+'" class="total_added_product_price"></td>';
                           html += '</tr>';
                        }
                     });
                     $('#summary').html(html);
                     totalRow('total_added_product_price','final_total');
                     var final_total_product = 0;

   $('.total_added_product_price').each(function(index) {


   final_total_product += parseFloat($(this).val());

   });//end of

   $('.final_total').val(final_total_product);


                   };

                 }
           });

       }






   });
</script>
@endpush
