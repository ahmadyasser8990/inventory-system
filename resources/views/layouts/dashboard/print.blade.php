<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        @media print {

            /* @page {
                margin: 10px 10px 0 10px;
                padding: 0 0 50px 0;
                size: 210mm 297mm;
            } */
            .nav.nav-tabs li:not(.active) {
                display: none;
            }

            .print-area {
                padding: 10px 20px;

            }

            .print-area {
                background-position: center center;
                background-repeat: no-repeat;

            }
        }
        @page {
                size: 5cm 7cm portrait;
                margin: 10px 10px 0 10px;
                margin-bottom: 24%;
            }



    </style>
</head>
<body>

    <div id="app">
        <form action="{{route('dashboard.printProducts')}}" method="get">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label for="">@lang('site.searchCategory')</label>
                                <select name="category_id" class="form-control form-control-sm">
                                    <option value="">@lang('site.all_categories')</option>
                                    @foreach ($categories as $category )
                                    <option value="{{$category->id}}" {{ request()->category_id == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Right Side Of Navbar -->
                        <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label for="">@lang('site.search')</label>
                                <input type="text" class="form-control" value="{{ request()->search}}" name="search" placeholder="@lang('site.search')">
                            </div>
                        </div>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="btn btn-dark print-btn" id="print-btn" href="" onclick="printDiv" >@lang('site.print')</a>
                            </li>
                            <li class="nav-item px-2">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-danger" href="{{route('dashboard.products.index')}}">@lang('site.back')</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </form>
        <main class="py-4">
            <div class="container">

                @yield('content')


            </div>
        </main>
    </div>

     <!-- Scripts -->
     {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}


    <!-- Main JS -->
    <script src="{{asset('dashboard_files/js/main.js')}}"></script>

    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{asset('dashboard_files/js/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard_files/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard_files/js/moment.js')}}"></script>

    @yield('scripts')

    <script>

            function printDiv(){

            }
        $(document).ready(function() {

            $('.print-btn').click(function() {
                var printContents = document.getElementById('print-area').innerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = printContents;
                window.print();
                document.body.innerHTML = originalContents;
                location.reload();

                // $('#print-area').print();

            }); //end of click function

        });
        //print Items


    </script>

</body>
</html>
