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
                        <a href="chat.html">
                            <i class="icon-message-circle"></i>
                            <span class="menu-text">@lang('site.messages')</span>
                        </a>
                    </li>
                    <li class="active">
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
                                            <img src="img/user21.png" alt="User">
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
                                            <img src="img/user10.png" alt="User">
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
                                            <img src="img/user6.png" alt="User">
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
                <li class="breadcrumb-item active">@lang('site.folders')</li>
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
                            <div class="documents-section">
                                <!-- Row start -->
                                <div class="row no-gutters">
                                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-4">
                                        <div class="docs-type-container">
                                            <div class="mt-5"></div>
                                            <div class="docTypeContainerScroll">
                                                <div class="docs-block">
                                                    <h5>@lang('site.folders')</h5>
                                                    <div class="doc-labels">
                                                        <a href="{{route('dashboard.clients.index')}}">
                                                            <i class="icon-receipt"></i> @lang('site.clients_folder')
                                                        </a>
                                                        <a href="{{route('dashboard.expensesimports.index')}}" >
                                                            <i class="icon-package"></i> @lang('site.expenses_and_imports_folder')
                                                        </a>
                                                        <a href="{{route('dashboard.categories.index')}}" class="active">
                                                            <i class="icon-pie-chart1"></i> @lang('site.categories_folder')
                                                        </a>
                                                        <a href="{{route('dashboard.users.index')}}" >
                                                            <i class="icon-layers2"></i> @lang('site.users_folder')
                                                        </a>
                                                        <a href="{{route('dashboard.taxes.index')}}">
                                                            <i class="icon-slack"></i> @lang('site.taxes_folder')
                                                        </a>
                                                        <a href="{{route('dashboard.suppliers.index')}}">
                                                            <i class="icon-user"></i> @lang('site.suppliers_folder')
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-10 col-lg-10 col-md-9 col-sm-9 col-8">
                                        <div class="documents-container">

                                            {{-- modal add category --}}
                                            <div class="modal fade" id="addNewDocument" tabindex="-1" role="dialog" aria-labelledby="addNewDocumentLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="addNewDocumentLabel">@lang('site.add_new_category')</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form class="" action="{{route('dashboard.categories.store')}}" method="post">
                                                            {{ csrf_field() }}
                                                            {{ method_field('post')}}

                                                            <div class="modal-body row gutters">
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="docTitle">@lang('site.category_no')</label>
                                                                        <input type="number" name="category_no" class="form-control" id="docTitle" placeholder="@lang('site.category_no')">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="addedDate">@lang('site.category_name')</label>
                                                                        <div class="custom-date-input">
                                                                            <input type="text" name="name" class="form-control datepicker" id="addedDate" placeholder="@lang('site.category_name')">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer custom">
                                                                <div class="left-side">
                                                                    <button type="button" class="btn btn-link danger btn-block" data-dismiss="modal">@lang('site.close')</button>
                                                                </div>
                                                                <div class="divider"></div>
                                                                <div class="right-side">
                                                                    <button type="submit" class="btn btn-link success btn-block">@lang('site.add')</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="documents-header">
                                                <h3>@lang('site.categories_folder') <span class="date" id="todays-date-arabic"></span></h3>
                                                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addNewDocument">@lang('site.add_new_category')</button>
                                            </div>
                                            <div class="documentsContainerScroll">
                                                <div class="documents-body">

                                                    @include('partials._errors')
                                                        <form action="{{route('dashboard.categories.index')}}" method="get">
                                                            <div class="row gutters">
                                                                <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                                                    <div class="form-group">
                                                                        <label>@lang('site.search')</label>
                                                                        <input type="text" id="filter" class="form-control" value="{{ request()->search}}" name="search" placeholder="@lang('site.search')">
                                                                        <span id="filter-count"> مجموع الاقسام = {{$categories->count()}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>

                                                    <!-- Row start -->
                                                    <div class="row gutters">
                                                        @if ($categories->count() > 0)
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <div class="table-responsive">
                                                                    <table class="table projects-table">
                                                                        <thead id='userTable'>
                                                                            <tr>
                                                                                <th>@lang('site.category_id')</th>
                                                                                <th>@lang('site.category_name')</th>
                                                                                <th>@lang('site.related_products')</th>
                                                                                <th class="text-center">@lang('site.action')</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($categories as $category)
                                                                            <tr class="search">
                                                                                <td>{{$category->id}}</td>
                                                                                <td>{{$category->name}}</td>
                                                                                <td>{{$category->products->count()}} @lang('site.item')</td>
                                                                                <td>
                                                                                    <div class="custom-btn-group">
                                                                                        <a href="javascript:void(0)" id="show-category"
                                                                                            data-id="{{ $category->id }}"
                                                                                            data-name="{{ $category->name }}"
                                                                                            data-no="{{ $category->category_no }}"
                                                                                            class="btn btn-warning btn-rounded">@lang('site.show')
                                                                                        </a>
                                                                                        <a href="{{route('dashboard.products.index', ['category_id' => $category->id])}}" class="btn btn-info btn-rounded">@lang('site.related_products')</a>
                                                                                        <button type="button" data-toggle="modal" data-target="#editDocument{{$category->id}}" title="تعديل" class="btn btn-success btn-rounded">  @lang('site.edit') <span class="icon-pencil" ></span></button>
                                                                                        <form action="{{route('dashboard.categories.destroy',$category->id)}}" method="post" style="display: inline-block">
                                                                                            {{csrf_field()}}
                                                                                            {{ method_field('delete')}}
                                                                                            <button type="submit" title="@lang('site.delete')" class="btn delete btn-danger btn-rounded">@lang('site.delete') <span class="icon-delete"></span></button>
                                                                                        </form>

                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                            {{-- show data  --}}
                                                                            <div class="modal fade" id="ajax-modal" aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                  <div class="modal-content">
                                                                                      <div class="modal-header">
                                                                                          <h4 class="modal-title" id="categoryShowModal"></h4>
                                                                                      </div>
                                                                                      <div class="modal-body">
                                                                                          <form id="userForm" name="userForm" class="form-horizontal">
                                                                                             <input type="hidden" name="id" id="id">
                                                                                              <div class="form-group">
                                                                                                  <label for="name" class="col-sm-2 control-label">Name</label>
                                                                                                  <div class="col-sm-12">
                                                                                                      <input type="text" class="form-control" id="name" name="name" placeholder="" value="" maxlength="50" required="">
                                                                                                  </div>
                                                                                              </div>

                                                                                              <div class="form-group">
                                                                                                  <label class="col-sm-2 control-label">Category No</label>
                                                                                                  <div class="col-sm-12">
                                                                                                      <input type="text" class="form-control" id="category_no" name="category_no" placeholder="" value="" required="">
                                                                                                  </div>
                                                                                              </div>
                                                                                          </form>
                                                                                      </div>
                                                                                  </div>
                                                                                </div>
                                                                              </div>
                                                                            {{-- modal edit category --}}
                                                                            <div class="modal fade" id="editDocument{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="editDocumentLabel" aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="editDocumentLabel">@lang('site.edit')</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <form class="" action="{{route('dashboard.categories.update', $category->id)}}" method="post">
                                                                                            {{ csrf_field() }}
                                                                                            {{ method_field('put')}}

                                                                                            <div class="modal-body row gutters">
                                                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label for="docTitle">@lang('site.category_no')</label>
                                                                                                        <input type="text" name="category_no" class="form-control" id="docTitle"  value="{{$category->category_no}}" placeholder="@lang('site.category_no')">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label for="addedDate">@lang('site.category_name')</label>
                                                                                                        <div class="custom-date-input">
                                                                                                            <input type="text" name="name" class="form-control" id="addedDate" value="{{$category->name}}" placeholder="@lang('site.category_name')">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="modal-footer custom">
                                                                                                <div class="left-side">
                                                                                                    <button type="button" class="btn btn-link danger btn-block" data-dismiss="modal">@lang('site.close')</button>
                                                                                                </div>
                                                                                                <div class="divider"></div>
                                                                                                <div class="right-side">
                                                                                                    <button type="submit" class="btn btn-link success btn-block">@lang('site.edit')</button>
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

                                                            </div>
                                                        @else
                                                            <h2 id="filter-result">@lang('site.no_data_found')</h2>
                                                        @endif
                                                    </div>
                                                    <!-- Row end -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->

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
    // test show data in ajax
  $(document).ready(function () {


   /* When click show category */
    $('body').on('click', '#show-category', function () {

      var id = $(this).data('id');
      var name = $(this).data('name');
      var category_no = $(this).data('no');

        // alert(id + name + category_no);
         $('#categoryShowModal').html("category Details js testing ");
          $('#ajax-modal').modal('show');
          $('#id').val(id);
          $('#name').val(name);
          $('#category_no').val(category_no);
    });

  });



    $(document).ready(function(){
    $("#filter").keyup(function(){

        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;

        // Loop through the comment list
        $(".search").each(function(){

            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {

                $(this).fadeOut();
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        });


        // Update the count
        var numberItems = count;
        $("#filter-count").text("مجموع الاقسام = "+count);

    });
});
</script>

@endsection
