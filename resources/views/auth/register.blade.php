<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from tixia.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jul 2021 10:26:31 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Laundry Lafisha</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16"
        href="https://1.bp.blogspot.com/-xZu9tFXeIbY/YQAiXMzCLlI/AAAAAAAABsg/-FKm_H-MruwmDeFTOGe4fwiMt8vmfkocwCLcBGAsYHQ/s640/logo%2Blaundry.png">

    <link href="{{ asset('base/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">

    {{-- daterangepicker --}}
    <link href="{{ asset('base/vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('base/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('base/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('base/css/style.css') }}" rel="stylesheet">

    <!-- Summernote -->
    <link href="{{ asset('base/vendor/summernote/summernote.css') }}" rel="stylesheet">

    {{-- Leafleet JS --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css" />
    <script src="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.umd.js"></script>
    <style>
        #leafletMap-registration {
            height: 400px;
            /* The height is 400 pixels */
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">REGISTER</h4>
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success solid alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" class="mr-2">
                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                </path>
                                            </svg>
                                            {{ $message }}
                                            <button type="button" class="close h-100" data-dismiss="alert"
                                                aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>
                                    @endif
                                    @if ($message = Session::get('error'))
                                        <div class="alert alert-danger solid alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" class="mr-2">
                                                <polygon
                                                    points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                                </polygon>
                                                <line x1="15" y1="9" x2="9" y2="15">
                                                </line>
                                                <line x1="9" y1="9" x2="15" y2="15">
                                                </line>
                                            </svg>
                                            {{ $message }}
                                            <button type="button" class="close h-100" data-dismiss="alert"
                                                aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="name"
                                                class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    name="name" value="{{ old('name') }}" required
                                                    autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="email"
                                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required
                                                    autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password"
                                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password-confirm"
                                                class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Required vendors -->
    <script src="{{ asset('base/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('base/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

    <script src="{{ asset('base/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
    <script src="{{ asset('base/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

    {{-- daterangepicker --}}
    <script src="{{ asset('base/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('base/js/plugins-init/bs-daterange-picker-init.js') }}"></script>


    <!-- Apex Chart -->
    <script src="{{ asset('base/vendor/apexchart/apexchart.js') }}"></script>

    <!-- Chart ChartJS plugin files -->
    <script src="{{ asset('base/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('base/js/plugins-init/chartjs-init.js') }}"></script>

    <!-- Datatable -->
    <script src="{{ asset('base/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('base/js/plugins-init/datatables.init.js') }}"></script>

    <script src="{{ asset('base/js/custom.min.js') }}"></script>
    <script src="{{ asset('base/js/deznav-init.js') }}"></script>
    <script src="{{ asset('base/js/demo.js') }}"></script>
    <script src="{{ asset('base/js/styleSwitcher.js') }}"></script>

    {{-- My Js --}}
    <script src="{{ asset('base/js/apps.js') }}"></script>

    {{-- Bootbox --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.3/bootbox.min.js"
        integrity="sha512-U3Q2T60uOxOgtAmm9VEtC3SKGt9ucRbvZ+U3ac/wtvNC+K21Id2dNHzRUC7Z4Rs6dzqgXKr+pCRxx5CyOsnUzg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Summernote -->
    <script src="{{ asset('base/vendor/summernote/js/summernote.min.js') }}"></script>
    <!-- Summernote init -->
    <script src="{{ asset('base/js/plugins-init/summernote-init.js') }}"></script>
    {{-- select2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



</body>


<!-- Mirrored from tixia.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jul 2021 10:26:31 GMT -->

</html>
