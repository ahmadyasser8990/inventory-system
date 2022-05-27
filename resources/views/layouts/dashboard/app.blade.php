<!doctype html>
<html lang="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png" />

    <!-- Title -->
    <title>نظام الادارة</title>

    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('dashboard_files/css/bootstrap.min.css')}}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{asset('dashboard_files/fonts/style.css')}}">


    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('dashboard_files/css/main.css')}}">

    {{--noty--}}
    <link rel="stylesheet" href="{{ asset('dashboard_files/plugins/noty/noty.css') }}">
    <script src="{{ asset('dashboard_files/plugins/noty/noty.min.js') }}"></script>


    <!-- *************
			************ Vendor Css Files *************
		************ -->
    <!-- DateRange css -->
    <link rel="stylesheet" href="{{asset('dashboard_files/vendor/daterange/daterange.css')}}" />

    <!-- Chartist css -->
    <link rel="stylesheet" href="{{asset('dashboard_files/vendor/chartist/css/chartist.min.css')}}" />
    <link rel="stylesheet" href="{{asset('dashboard_files/vendor/chartist/css/chartist-custom.css')}}" />

    @if (app()->getLocale() == 'ar')

        <link rel="stylesheet" href="{{asset('dashboard_files/css/arabic_font.css')}}" />

    @endif



    @yield('links')

</head>

<body class="fixed-layout">

    <!-- Loading starts -->
    <!-- <div id="loading-wrapper">
        <div class="spinner-border" role="status">
            <span class="sr-only">تحميل...</span>
        </div>
    </div> -->
    <!-- Loading ends -->


    <!-- Page wrapper start -->

        @yield('content')

        @include('partials._session')
    <!-- Page wrapper end -->

    <!--**************************
			**************************
				**************************
							Required JavaScript Files
				**************************
			**************************
		**************************-->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{asset('dashboard_files/js/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard_files/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard_files/js/moment.js')}}"></script>

    {{--jquery number--}}
    <script src="{{ asset('dashboard_files/js/jquery.number.min.js') }}"></script>



    <!-- *************
			************ Vendor Js Files *************
		************* -->
    <!-- Slimscroll JS -->
    <script src="{{asset('dashboard_files/vendor/slimscroll/slimscroll.min.js')}}"></script>
    <script src="{{asset('dashboard_files/vendor/slimscroll/custom-scrollbar.js')}}"></script>

    <!-- Daterange -->
    <script src="{{asset('dashboard_files/vendor/daterange/daterange.js')}}"></script>
    <script src="{{asset('dashboard_files/vendor/daterange/custom-daterange.js')}}"></script>

    <!-- Chartist JS -->
    <script src="{{asset('dashboard_files/vendor/chartist/js/chartist.min.js')}}"></script>
    <script src="{{asset('dashboard_files/vendor/chartist/js/chartist-tooltip.js')}}"></script>
    <script src="{{asset('dashboard_files/vendor/chartist/js/custom/threshold/threshold.js')}}"></script>
    <script src="{{asset('dashboard_files/vendor/chartist/js/custom/bar/bar-chart-orders.js')}}"></script>

    <!-- jVector Maps -->
    <script src="{{asset('dashboard_files/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{asset('dashboard_files/vendor/jvectormap/world-mill-en.js')}}"></script>
    <script src="{{asset('dashboard_files/vendor/jvectormap/gdp-data.js')}}"></script>
    <script src="{{asset('dashboard_files/vendor/jvectormap/custom/world-map-markers2.js')}}"></script>

    <!-- Rating JS -->
    <script src="{{asset('dashboard_files/vendor/rating/raty.js')}}"></script>
    <script src="{{asset('dashboard_files/vendor/rating/raty-custom.js')}}"></script>


    <!-- Main JS -->
    <script src="{{asset('dashboard_files/js/main.js')}}"></script>

    {{--custom js--}}
    <script src="{{ asset('js/custom/myjs.js') }}"></script>


    {{-- print js --}}
    <script type="text/javascript" src="{{ asset('dashboard_files/js/jquery.printPage.js') }}"></script>


    <script>
        $(document).ready(function () {

            //delete
            $('.delete').click(function (e) {

                var that = $(this)

                e.preventDefault();

                var n = new Noty({
                    text: "@lang('site.confirm_delete')",
                    type: "success",
                    killer: true,
                    buttons: [
                        Noty.button("@lang('site.yes')", 'btn btn-primary mr-2', function () {
                            that.closest('form').submit();
                        }),

                        Noty.button("@lang('site.no')", 'btn btn-danger mr-2', function () {
                            n.close();
                        })
                    ]
                });

                n.show();

            });//end of delete


            CKEDITOR.config.language =  "{{ app()->getLocale() }}";

        });//end of ready

    </script>

    @yield('scripts')

</body>

</html>
