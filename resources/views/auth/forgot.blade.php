<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="/assets/dashboard/" data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Forgot Password</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/dashboard/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/assets/dashboard/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets/dashboard/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/dashboard/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/assets/dashboard/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="/assets/dashboard/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="/assets/>dashboard/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/assets/dashboard/js/config.js"></script>
</head>
    
<body>
    <!-- Content -->
    <!--  -->
    <div class="flash-data" data-flashdata="{{ session('success') }}"></div>
    <div class="flash-error" data-flashdata="{{ session('message') }}"></div>
    <div class="flash-info" data-flashdata="{{ session('info') }}"></div>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session()->has('status'))
                    <div class="alert alert-success">
                        {{ session()->get('status') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h4 class="mb-2">Forgot Password</h4>
                            <p class="mb-4">Silahkan masukan Email!</p>
                        </div>
                        <form id="formAuthentication" class="mb-3" action="{{route('password.email')}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Masukan Email" autofocus required/>
                                @error('email')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary d-grid w-100">Kirim Link Reset</button>
                            </div>
                            {{-- <a href="{{route('reset')}}"></a> --}}
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="/assets/dashboard/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets/>dashboard/vendor/libs/popper/popper.js"></script>
    <script src="/assets/dashboard/vendor/js/bootstrap.js"></script>
    <script src="/assets/dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/assets/dashboard/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="/assets/dashboard/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="/assets/dashboard/js/flashscripts.js"></script>

</body>

</html>
