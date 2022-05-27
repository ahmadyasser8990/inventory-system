<?php

use App\Http\Controllers\Dashboard\ProductController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function(){

    //dashboard
    Route::get('/index', 'DashboardController@index')->name('index');

//documents
    //Clients routes
    Route::resource('clients', 'ClintController')->except(['show']);
    //ExpenseImport routes
    Route::resource('expensesimports',  'ExpensesImportsController')->except(['show']);
    //categories
    Route::resource('categories',  'CategoryController')->except(['show']);
    //Users routes
    Route::resource('users', 'UserController')->except(['show']);
    //taxes routes
    Route::resource('taxes', 'TaxController')->except(['show']);
    //suppliers routes
    Route::resource('suppliers', 'SupplierController')->except(['show']);


    //products routes
        Route::resource('products', 'ProductController')->except(['show']);

        Route::delete('/deleted-items', 'ProductController@deleteCheckedItem')->name('products.deleteSelected');
        //export products list
        Route::get('/export-excel-products','ProductController@exportIntoExcel')->name('exportProducts');
        // print Products
        Route::get('/products/print','ProductController@printProduct')->name('printProducts');
        //Inquiry About Item
        Route::get('/products/Inquiry','ProductController@inquiryProduct')->name('inquiryProducts');
        // import page
        Route::get('/products/import','ProductController@import')->name('products.import');
        Route::post('/products/import/proceed','ProductController@importProceed')->name('products.import.proceed');

    // invoices
        // Sales Invoice
        Route::resource('sales', 'SaleController');
        Route::post('/update/sale-price','SaleController@updateSalePrice')->name('update.sale_price');
        Route::post('/reload/products','SaleController@showProducts')->name('show.products');
        Route::post('/update/color-purity','SaleController@updateColorAndPurity')->name('update.color_purity');
        Route::post('/summary/invoice','SaleController@summaryInvoice')->name('summary.invoice');
        //Return Sales
        Route::resource('return-sales', 'ReturnSaleController');

        //Purchase Invoices
        Route::resource('purchase', 'PurchaseController');

        //Secure Bond Invoices
        Route::resource('secure-bonds', 'SecureBondController');
        //Return Secure Bond Invoices
        Route::resource('return-secure-bonds', 'ReturnSecureBondController');


    //Sales Summary
    Route::resource('salesSummary', 'SalesSummaryController');

    //Messages
    Route::resource('messages', 'MessageController');


    //Authorities
        //Exchange Documents
        Route::resource('exchange-doc', 'ExchangeController');

        //Customer Exchange Documents
        Route::resource('customer-exchange', 'CustomerExchangeController');
            //show invoice
            Route::get('/customer-exchnage/show', 'CustomerExchangeController@show1')->name('customer-exchange.show');;

        //Catch Receipt
        Route::resource('catch-receipt', 'CatchReceiptController');

        //Deposit Documents
        Route::resource('deposit-doc', 'DepositDocumentController');

        //Maintenance Documents
        Route::resource('maintenance-doc', 'MaintenanceDocumentController');

        //Adding Amount to Capital
        Route::resource('adding-money-to-capital', 'AddingMoneyToCapitalController');

        //Withdraw Amount of Capital
        Route::resource('withdraw-money-of-capital', 'WithdrawMoneyOfCapitalController');

        //Payments And Amounts Due
        Route::resource('payment-and-amount-due', 'PaymentAndAmountDueController');


    //Reports
        //Items Report
        Route::resource('items-report', 'ItemsReportController');

        //Customer Statment
        Route::resource('customer-statment', 'CustomerStatmentController');

        //delegates_commissions_reports
        Route::resource('delegates-commissions-report', 'DelegatesCommissionsReportController');

        //Sale Reports
        Route::resource('sales-report', 'SalesReportController');

        //Return Sale Reports
        Route::resource('return-sale-report', 'ReturnSaleReportController');

        //Security Bond Reports
        Route::resource('security-bond-report', 'SecurityBondReportController');

        //Return Security Bond Reports
        Route::resource('return-security-bond-report', 'ReturnSecurityBondReportController');

        //Purchase Reports
        Route::resource('purchase-report', 'PurchaseReportController');




    });
});

