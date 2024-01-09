<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>e-Library Admin paneli</title>

    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('css/codebase.css')}}">

</head>

<body>

    <div id="page-container" class="main-content-boxed">

        <main id="main-container">
            <div class="bg-body-dark">
                <div class="row mx-0 justify-content-center">
                    <div class="hero-static col-lg-6 col-xl-4">
                        <div class="content content-full overflow-hidden">
                            <!-- Header -->
                            <div class="py-4 text-center">
                                <a class="link-fx fw-bold" href="index.html">
                                    <i class="fa fa-fire"></i>
                                    <span class="fs-4 text-body-color">E-</span><span class="fs-4">Library</span>
                                </a>
                                <h1 class="h3 fw-bold mt-4 mb-2">Boshqaruv paneli</h1>
                                <h2 class="h5 fw-medium text-muted mb-0">Bugun ajoyib kun!</h2>
                            </div>
                            <!-- END Header -->


                            <form class="js-validation-signin" action="{{route('auth')}}" method="POST">
                                @csrf
                                <div class="block block-themed block-rounded block-fx-shadow">
                                    <div class="block-header bg-gd-dusk">
                                        <h3 class="block-title">Tizimga kirish</h3>
                                    </div>
                                    <div class="block-content">
                                        <div class="form-floating mb-4">
                                            <input type="text" class="form-control" id="login-username" name="username" placeholder=" ">
                                            <label class="form-label" for="login-username">Login</label>
                                        </div>
                                        <div class="form-floating mb-4">
                                            <input type="password" class="form-control" id="login-password" name="password" placeholder=" ">
                                            <label class="form-label" for="login-password">Parol</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 d-sm-flex align-items-center push">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="login-remember-me" name="login-remember-me">
                                                    <label class="form-check-label" for="login-remember-me">Remember Me</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-sm-end push">
                                                <button type="submit" class="btn btn-lg btn-alt-primary fw-medium">
                                                    Kirish
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <!-- END Sign In Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>


</body>

</html>