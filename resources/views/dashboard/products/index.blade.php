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
                        <li class="sidebar-dropdown active">
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
                    <li class="breadcrumb-item active">@lang('site.products')</li>
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
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="text-left mb-3">
                                    <!-- Extra large modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">@lang('site.add_new_product')</button>
                                </div>

                                <!-- Modal add new product  -->

                                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myExtraLargeModalLabel">@lang('site.add_new_product')</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
                                            </div>
                                            <form class="" action="{{route('dashboard.products.store')}}" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                {{ method_field('post')}}

                                                <div class="modal-body">
                                                    <div class="row gutters">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <div class="account-settings">
                                                                <div class="user-profile">
                                                                    <div class="user-avatar">
                                                                        <img src="{{asset('uploads/product_images/default.png')}}" class="img-fluid float-center image-preview" alt="Wafi Admin" />
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                        <div class="row gutters">
                                                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.image')</label>
                                                                                    <input type="file" name="image" class="form-control image">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.sale_price')</label>
                                                                                    <input type="number" step="0.01" value="{{ old('sale_price')}}" name="sale_price" class="form-control">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.category_type')</label>
                                                                                    <select name="category_id" class="form-control form-control-lg">
                                                                                        @if ($categories->count() > 0)
                                                                                            @foreach ($categories as $category)
                                                                                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                                                            @endforeach
                                                                                        @else
                                                                                            <option>@lang('site.no_category_type')</option>
                                                                                        @endif
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.extra_no')</label>
                                                                                    <input type="text" name="extra_no" value="{{ old('extra_no')}}" class="form-control">
                                                                                    <input type="hidden" name="status" value="avaliable">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.item_type')</label>
                                                                                    <select name="item_type" class="form-control form-control-lg">
                                                                                        <option value="new" class=""> @lang('site.new')</option>
                                                                                        <option value="used" class="">@lang('site.used')</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="docTitle">@lang('site.supplier')</label>
                                                                                    <select name="supplier_id" class="form-control form-control-lg">
                                                                                        @if ($suppliers->count() > 0)
                                                                                            @foreach ($suppliers as $supplier)
                                                                                                <option value="{{ $supplier->id }}" {{ old('supplier_id') == $supplier->id ? 'selected' : '' }}>{{ $supplier->name }}</option>
                                                                                            @endforeach
                                                                                        @else
                                                                                            <option>@lang('site.no_supplier_found')</option>
                                                                                        @endif
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.design_no')</label>
                                                                                    <input type="text" name="design_no" value="{{ old('design_no')}}" class="form-control">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.purchase_price')</label>
                                                                                    <input type="number" step="0.01" name="purchase_price" value="{{ old('purchase_price')}}" required class="form-control">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-form-label">@lang('site.description')</label>
                                                                                    <textarea class="form-control" name="description" maxlength="140" rows="4"> {{ old('description')}}</textarea>
                                                                                    <div class="form-text text-muted"><p id="characterLeft" class="help-block ">140 characters left</p></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.gold')</label>
                                                                                    <input type="number" name="gold" step="0.01" value="{{ old('gold')}}"  class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.marquis')</label>
                                                                                    <input type="number" name="marquis" step="0.01" value="{{ old('marquis')}}" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.baguette')</label>
                                                                                    <input type="number" name="baguette" step="0.01" value="{{ old('baguette')}}"  class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.big_stone')</label>
                                                                                    <input type="number" name="big_stone" step="0.01" value="{{ old('big_stone')}}" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.princess')</label>
                                                                                    <input type="number" name="princess" step="0.01" value="{{ old('princess')}}" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.colored')</label>
                                                                                    <input type="number" name="colored" value="{{ old('colored')}}" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond_1')</label>
                                                                                    <input type="number" name="dimaond_1" step="0.01" value="{{ old('dimaond_1')}}" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond_2')</label>
                                                                                    <input type="number" name="dimaond_2" step="0.01" value="{{ old('dimaond_2')}}" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond_3')</label>
                                                                                    <input type="number" name="dimaond_3" step="0.01" value="{{ old('dimaond_3')}}" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond_4')</label>
                                                                                    <input type="number" name="dimaond_4" step="0.01" value="{{ old('dimaond_4')}}" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.dimaond_5')</label>
                                                                                    <input type="number" name="dimaond_5" step="0.01" value="{{ old('dimaond_5')}}" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.purity')</label>
                                                                                    <input type="text" name="purity"  value="{{ old('purity')}}" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>@lang('site.color')</label>
                                                                                    <input type="text" name="color"  value="{{ old('color')}}" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                                <div class="text-right">
                                                                                    <button type="button" data-dismiss="modal" class="btn btn-dark">@lang('site.close')</button>
                                                                                    <button type="submit" class="btn btn-primary mr-3">@lang('site.save')</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="text-right mb-3">
                                    <!-- Button add new sale -->
                                    <a href="#" id="deleteAllSelectedItems" class="btn btn-outline-danger">Delete Selctions Items </a>
                                    <a href="{{route('dashboard.printProducts')}}" class="btn btn-outline-success">@lang('site.print')</a>
                                    <a href="{{route('dashboard.exportProducts')}}" class="btn btn-outline-warning">@lang('site.download_excel')</a>
                                    <a href="{{route('dashboard.products.import')}}" class="btn btn-outline-primary">@lang('site.import_by_excel')</a>
                                </div>
                            </div>
                        </div>
                        <form action="{{route('dashboard.products.index')}}" method="get">
                            <div class="row gutters">

                                <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                    <div class="form-group">
                                        <label for=""> @lang('site.searchCategory') </label>
                                        <select name="category_id" class="form-control form-control-sm">
                                            <option value="">@lang('site.all_categories')</option>
                                            @foreach ($categories as $category )
                                            <option value="{{$category->id}}" {{ request()->category_id == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                    <div class="form-group">
                                        <label for="">@lang('site.search')</label>
                                        <input type="text" class="form-control" value="{{ request()->search}}" name="search" placeholder="@lang('site.search')">
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg col-md-2 col-sm-2 col-12">
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg col-md-12 col-sm-12 col-12">
                                    <p>جميع الاصناف لها حاله اما مبيعوه او محجوزه او معروضه او متوفره</p>
                                </div>
                            </div>
                        </form>
                        <div class="card">
                            <div class="card-body">
                                @if ($products->count() > 0)
                                {{ $products->appends(request()->query())->links() }}
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-light table-sm">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox" id="checkAll" class=""></th>
                                                    <th>@lang('site.item_no')</th>
                                                    <th>@lang('site.extra_no')</th>
                                                    <th>@lang('site.category_type')</th>
                                                    <th>@lang('site.description')</th>
                                                    <th> @lang('site.gold')</th>
                                                    <th> @lang('site.dimaond')</th>
                                                    <th> @lang('site.baguette')</th>
                                                    <th> @lang('site.sale_price')</th>
                                                    <th> @lang('site.profit_percent')</th>
                                                    <th> @lang('site.status')</th>
                                                    <th class="text-center">@lang('site.action')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($products as $index=>$product )
                                                    <tr id="id{{$product->id}}">
                                                        <td><input type="checkbox" name="ids" value="{{$product->id}}" class="checkboxAll"></td>
                                                        <td>{{$product->id}}</td>
                                                        <td>{{$product->extra_no}}</td>
                                                        <td>{{$product->category->name}}</td>
                                                        <td>
                                                            @if ($product->description == null )
                                                                @lang('site.no_description')
                                                            @else
                                                            {!!$product->description!!}
                                                            @endif
                                                        </td>
                                                        <td>{{$product->gold}}</td>
                                                        <td>
                                                            @if ($product->dimaond_1 == null )
                                                                0.00
                                                            @else
                                                            {{$product->dimaond_1}}
                                                            @endif
                                                            {{$product->dimaond_1}}
                                                        </td>
                                                        <td>
                                                            @if ($product->baguette == null )
                                                                0.00
                                                            @else
                                                                {{$product->baguette}}
                                                            @endif

                                                        </td>
                                                        <td>{{ number_format($product->sale_price, 2)}} @lang('site.riyal')</td>
                                                        <td>
                                                            @if ($product->sale_price == null)
                                                                0.00 %
                                                            @else
                                                                {{$product->profit_percent}} %
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($product->status == 'available')
                                                                <span class="badge badge-pill badge-success">@lang('site.available')</span>
                                                            @elseif ($product->status == 'sold')
                                                                <span class="badge badge-pill badge-danger">@lang('site.sold')</span>
                                                            @elseif ($product->status == 'shows')
                                                                <span class="badge badge-pill badge-orange">@lang('site.shows')</span>
                                                            @else
                                                                <span class="badge badge-pill badge-info">@lang('site.secure_bond')</span>
                                                            @endif
                                                            {{-- <span class="badge badge-pill badge-danger">sold</span> --}}
                                                        </td>
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
                                                                            <a href="#" class="star" data-toggle="modal" data-target=".show{{$product->id}}" title="@lang('site.show')">
                                                                                <i class="icon-eye"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" class="star" data-toggle="modal" data-target=".edit{{$product->id}}" title="@lang('site.edit')">
                                                                                <i class="icon-edit"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </td>
                                                    </tr>

                                                    {{-- modal show product --}}
                                                    <div class="modal fade show{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="showModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="showModalLabel">@lang('site.item_info')</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                </div>
                                                                <form class="" action="" method="" enctype="">

                                                                    <div class="modal-body">
                                                                        <div class="row gutters">
                                                                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                                                                <div class="account-settings">
                                                                                    <div class="user-profile">
                                                                                        <div class="user-avatar">
                                                                                            <img src="{{$product->image_path}}" class="img-fluid float-center image-preview" alt="Wafi Admin" />
                                                                                        </div>
                                                                                        <h5 class="user-name">{{$product->id}}</h5>
                                                                                        <h6 class="user-email">{{$product->supplier->name}}</h6>
                                                                                    </div>
                                                                                    <div class="setting-links">
                                                                                        <a href="#">
                                                                                            <i class="icon-chat"></i>
                                                                                            {{$product->extra_no}}
                                                                                        </a>
                                                                                        <a href="#">
                                                                                            <i class="icon-date_range"></i>
                                                                                            {{$product->item_type}}
                                                                                        </a>
                                                                                        <a href="#">
                                                                                            <i class="icon-file-text"></i>
                                                                                            {{$product->purchase_price}}
                                                                                        </a>
                                                                                        <a href="#">
                                                                                            <i class="icon-info"></i>
                                                                                            {{$product->sale_price}}
                                                                                        </a>
                                                                                        <a href="#">
                                                                                            <i class="icon-info"></i>
                                                                                            {{$product->status}}
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                                                                <div class="card h-100">
                                                                                    <div class="card-body">
                                                                                        <div class="row gutters">
                                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                <div class="form-group">
                                                                                                    <label>@lang('site.gold')</label>
                                                                                                    <input type="number" step="0.01" class="form-control" readonly value="{{$product->gold}}">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                <div class="form-group">
                                                                                                    <label>@lang('site.baguette')</label>
                                                                                                    <input type="number" step="0.01" class="form-control" readonly value="{{$product->baguette}}">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                <div class="form-group">
                                                                                                    <label>@lang('site.marquis')</label>
                                                                                                    <input type="number" step="0.01" class="form-control" readonly value="{{$product->marquis}}">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                <div class="form-group">
                                                                                                    <label>@lang('site.big_stone')</label>
                                                                                                    <input type="number" step="0.01" class="form-control" readonly value="{{$product->big_stone}}">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                <div class="form-group">
                                                                                                    <label>@lang('site.princess')</label>
                                                                                                    <input type="number" step="0.01" class="form-control" readonly value="{{$product->princess}}">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                <div class="form-group">
                                                                                                    <label>@lang('site.colored')</label>
                                                                                                    <input type="number" class="form-control" readonly value="{{$product->colored}}">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                <div class="form-group">
                                                                                                    <label>@lang('site.dimaond_1')</label>
                                                                                                    <input type="number" step="0.01" class="form-control" readonly value="{{$product->dimaond_1}}">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                <div class="form-group">
                                                                                                    <label>@lang('site.dimaond_2')</label>
                                                                                                    <input type="number" step="0.01" class="form-control" readonly value="{{$product->dimaond_2}}">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                <div class="form-group">
                                                                                                    <label>@lang('site.dimaond_3')</label>
                                                                                                    <input type="number" step="0.01" class="form-control" readonly value="{{$product->dimaond_3}}">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                <div class="form-group">
                                                                                                    <label>@lang('site.dimaond_4')</label>
                                                                                                    <input type="number" step="0.01" class="form-control" readonly value="{{$product->dimaond_4}}">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                <div class="form-group">
                                                                                                    <label>@lang('site.dimaond_5')</label>
                                                                                                    <input type="number" step="0.01" class="form-control" readonly value="{{$product->dimaond_5}}">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                                <div class="form-group">
                                                                                                    <label>@lang('site.purity')</label>
                                                                                                    <input type="text" class="form-control" readonly value="{{$product->purity}}">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                                <div class="form-group">
                                                                                                    <label>@lang('site.color')</label>
                                                                                                    <input type="text" class="form-control" readonly value="{{$product->color}}">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                                                                <div class="form-group">
                                                                                                    <label for="inputMessage" class="col-form-label">@lang('site.description')</label>
                                                                                                    <textarea class="form-control" id="message" placeholder="Message" maxlength="140" readonly rows="4"> {!!$product->description!!}</textarea>
                                                                                                    <div class="form-text text-muted"><p id="characterLeft" class="help-block ">140 characters left</p></div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                                                <div class="text-right">
                                                                                                    <button type="button" data-dismiss="modal" class="btn btn-dark">@lang('site.close')</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- modal edit product --}}
                                                    <div class="modal fade edit{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editModalLabel">@lang('site.edit_item')</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                </div>
                                                                <form class="" action="{{route('dashboard.products.update', $product->id )}}" method="post" enctype="multipart/form-data">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('put')}}

                                                                    <div class="modal-body">
                                                                        <div class="row gutters">
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                                <div class="account-settings">
                                                                                    <div class="user-profile">
                                                                                        <div class="user-avatar">
                                                                                            <img src="{{$product->image_path}}" class="img-fluid float-center image-preview" alt="Wafi Admin" />
                                                                                        </div>
                                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                                            <div class="row gutters">
                                                                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.image')</label>
                                                                                                        <input type="file" name="image" class="form-control image">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.sale_price')</label>
                                                                                                        <input type="number" step="0.01" value="{{ $product->sale_price }}" name="sale_price" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.category_type')</label>
                                                                                                        <select name="category_id" class="form-control form-control-lg">
                                                                                                            @foreach ($categories as $category)
                                                                                                                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                                                                            @endforeach
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.extra_no')</label>
                                                                                                        <input type="text" name="extra_no" value="{{ $product->extra_no}}" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.item_type')</label>
                                                                                                        <select name="item_type" class="form-control form-control-lg">
                                                                                                            @if ($product->item_type == 'مستعمل')
                                                                                                                <option value="مستعمل" selected class="">@lang('site.used')</option>
                                                                                                                <option  value="جديد" class=""> @lang('site.new')</option>
                                                                                                            @else
                                                                                                                <option  value="جديد" selected class=""> @lang('site.new')</option>
                                                                                                                <option value="مستعمل" class="">@lang('site.used')</option>
                                                                                                            @endif
                                                                                                        </select>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label for="docTitle">@lang('site.supplier')</label>
                                                                                                        <select name="supplier_id" class="form-control form-control-lg">
                                                                                                            @foreach ($suppliers as $supplier)
                                                                                                                <option value="{{ $supplier->id }}"{{ $product->supplier_id == $supplier->id ? 'selected' : '' }}>{{ $supplier->name }}</option>
                                                                                                            @endforeach
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.design_no')</label>
                                                                                                        <input type="text" name="design_no" value="{{ $product->design_no }}" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.purchase_price')</label>
                                                                                                        <input type="number" step="0.01" name="purchase_price" value="{{ $product->purchase_price }}" required class="form-control">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label class="col-form-label">@lang('site.description')</label>
                                                                                                        <textarea class="form-control" name="description" maxlength="140" rows="4"> {!! $product->description !!}</textarea>
                                                                                                        <div class="form-text text-muted"><p id="characterLeft" class="help-block ">140 characters left</p></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.gold')</label>
                                                                                                        <input type="number" name="gold" step="0.01" value="{{ $product->gold }}"  class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.marquis')</label>
                                                                                                        <input type="number" name="marquis" step="0.01" value="{{ $product->marquis}}" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.baguette')</label>
                                                                                                        <input type="number" name="baguette" step="0.01" value="{{ $product->baguette}}"  class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.big_stone')</label>
                                                                                                        <input type="number" name="big_stone" step="0.01" value="{{ $product->big_stone}}" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.princess')</label>
                                                                                                        <input type="number" name="princess" step="0.01" value="{{ $product->princess}}" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.colored')</label>
                                                                                                        <input type="number" name="colored" value="{{ $product->colored }}" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.dimaond_1')</label>
                                                                                                        <input type="number" name="dimaond_1" step="0.01" value="{{ $product->dimaond_1 }}" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.dimaond_2')</label>
                                                                                                        <input type="number" name="dimaond_2" step="0.01" value="{{ $product->dimaond_2 }}" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.dimaond_3')</label>
                                                                                                        <input type="number" name="dimaond_3" step="0.01" value="{{ $product->dimaond_3 }}" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.dimaond_4')</label>
                                                                                                        <input type="number" name="dimaond_4" step="0.01" value="{{ $product->dimaond_4 }}" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.dimaond_5')</label>
                                                                                                        <input type="number" name="dimaond_5" step="0.01" value="{{ $product->dimaond_5 }}" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.purity')</label>
                                                                                                        <input type="text" name="purity"  value="{{ $product->purity }}" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.color')</label>
                                                                                                        <input type="text" name="color"  value="{{ $product->color }}" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>@lang('site.status')</label>
                                                                                                        <select name="status" class="form-control form-control-lg">
                                                                                                            @if ($product->status == 'avaliable')
                                                                                                                <option value="avaliable" selected class="">@lang('site.available')</option>
                                                                                                                <option  value="sold" class="">@lang('site.sold')</option>
                                                                                                                <option  value="secure_bond" class="">@lang('site.secure_bond')</option>
                                                                                                                <option  value="shows" class="">@lang('site.shows')</option>
                                                                                                            @elseif ($product->status == 'sold')
                                                                                                                <option value="avaliable"  class="">@lang('site.available')</option>
                                                                                                                <option  value="sold"selected class="">@lang('site.sold')</option>
                                                                                                                <option  value="secure_bond" class="">@lang('site.secure_bond')</option>
                                                                                                                <option  value="shows" class="">@lang('site.shows')</option>
                                                                                                            @elseif ($product->status == 'secure_bond')
                                                                                                                <option value="avaliable"  class="">@lang('site.available')</option>
                                                                                                                <option  value="sold" class="">@lang('site.sold')</option>
                                                                                                                <option  value="secure_bond" selected class="">@lang('site.secure_bond')</option>
                                                                                                                <option  value="shows" class="">@lang('site.shows')</option>
                                                                                                            @else
                                                                                                                <option value="avaliable"  class="">@lang('site.available')</option>
                                                                                                                <option  value="sold" class="">@lang('site.sold')</option>
                                                                                                                <option  value="secure_bond" class="">@lang('site.secure_bond')</option>
                                                                                                                <option  value="shows" selected class="">@lang('site.shows')</option>
                                                                                                            @endif
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                                                    <div class="text-right">
                                                                                                        <button type="button" data-dismiss="modal" class="btn btn-dark">@lang('site.close')</button>
                                                                                                        <button type="submit" class="btn btn-primary mr-3">@lang('site.save')</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                    {{ $products->appends(request()->query())->links() }}
                                @else
                                    <h2>@lang('site.no_data_found')</h2>
                                @endif
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

@section('scripts')

    <script>
        $(function(e){
            $('#checkAll').click(function(){
                $('.checkboxAll').prop('checked', $(this).prop('checked'));

            });

            $('#deleteAllSelectedItems').click(function(e){
                e.preventDefault();
                var allids = [];

                $('input:checkbox[name=ids]:checked').each(function(){
                    allids.push($(this).val());
                });

                $.ajax({
                    url: "{{route('dashboard.products.deleteSelected')}}",
                    type: 'DELETE',
                    data:{
                        _token:$('input[name=_token]').val(),
                        ids:allids
                    },

                    success:function(response){
                        $.each(allids, function(key,val){
                            $('#id' + val).remove();
                        })
                    }
                });
            });
        });
    </script>

@endsection

