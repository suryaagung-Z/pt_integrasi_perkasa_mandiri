<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | Minia - Minimal Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- preloader css -->
    <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- <body data-layout="horizontal"> -->
    <div class="auth-page">
        <div class="p-0 container-fluid">
            <div class="row g-0">
                <div class="col-xxl-3 col-lg-4 col-md-5">
                    <div class="p-4 auth-full-page-content d-flex p-sm-5">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 text-center mb-md-5">
                                    <a href="index.html" class="d-block auth-logo">
                                        <img src="assets/images/logo-sm.svg" alt="" height="28"> <span
                                            class="logo-txt">Minia</span>
                                    </a>
                                </div>
                                <div class="my-auto auth-content">
                                    <div class="text-center">
                                        <h5 class="mb-0">Welcome Back !</h5>
                                        <p class="mt-2 text-muted">Sign in to continue to Minia.</p>
                                    </div>
                                    <form class="pt-2 mt-4" action="index.html">
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username"
                                                placeholder="Enter username">
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <label class="form-label">Password</label>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="">
                                                        <a href="auth-recoverpw.html" class="text-muted">Forgot
                                                            password?</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" class="form-control" placeholder="Enter password"
                                                    aria-label="Password" aria-describedby="password-addon">
                                                <button class="shadow-none btn btn-light ms-0" type="button"
                                                    id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                        </div>
                                        <div class="mb-4 row">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="remember-check">
                                                    <label class="form-check-label" for="remember-check">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit">Log In</button>
                                        </div>
                                    </form>

                                    <div class="pt-2 mt-4 text-center">
                                        <div class="signin-other-title">
                                            <h5 class="mb-3 font-size-14 text-muted fw-medium">- Sign in with -</h5>
                                        </div>

                                        <ul class="mb-0 list-inline">
                                            <li class="list-inline-item">
                                                <a href="javascript:void()"
                                                    class="text-white social-list-item bg-primary border-primary">
                                                    <i class="mdi mdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()"
                                                    class="text-white social-list-item bg-info border-info">
                                                    <i class="mdi mdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()"
                                                    class="text-white social-list-item bg-danger border-danger">
                                                    <i class="mdi mdi-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mt-5 text-center">
                                        <p class="mb-0 text-muted">Don't have an account ? <a href="auth-register.html"
                                                class="text-primary fw-semibold"> Signup now </a> </p>
                                    </div>
                                </div>
                                <div class="mt-4 text-center mt-md-5">
                                    <p class="mb-0">© <script>
                                            document.write(new Date().getFullYear())
                                        </script> Minia . Crafted with <i class="mdi mdi-heart text-danger"></i> by
                                        Themesbrand</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>
                <!-- end col -->
                <div class="col-xxl-9 col-lg-8 col-md-7">
                    <div class="p-4 auth-bg pt-md-5 d-flex">
                        <div class="bg-overlay bg-primary"></div>
                        <ul class="bg-bubbles">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <!-- end bubble effect -->
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xl-7">
                                <div class="p-0 p-sm-4 px-xl-0">
                                    <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div
                                            class="mb-0 carousel-indicators carousel-indicators-rounded justify-content-start ms-0">
                                            <button type="button" data-bs-target="#reviewcarouselIndicators"
                                                data-bs-slide-to="0" class="active" aria-current="true"
                                                aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#reviewcarouselIndicators"
                                                data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#reviewcarouselIndicators"
                                                data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <!-- end carouselIndicators -->
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="text-white testi-contain">
                                                    <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                    <h4 class="mt-4 text-white fw-medium lh-base">“I feel confident
                                                        imposing change
                                                        on myself. It's a lot more progressing fun than looking back.
                                                        That's why
                                                        I ultricies enim
                                                        at malesuada nibh diam on tortor neaded to throw curve balls.”
                                                    </h4>
                                                    <div class="pt-3 pb-5 mt-4">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-1.jpg"
                                                                    class="avatar-md img-fluid rounded-circle"
                                                                    alt="...">
                                                            </div>
                                                            <div class="mb-4 flex-grow-1 ms-3">
                                                                <h5 class="text-white font-size-18">Richard Drews
                                                                </h5>
                                                                <p class="mb-0 text-white-50">Web Designer</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="text-white testi-contain">
                                                    <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                    <h4 class="mt-4 text-white fw-medium lh-base">“Our task must be to
                                                        free ourselves by widening our circle of compassion to embrace
                                                        all living
                                                        creatures and
                                                        the whole of quis consectetur nunc sit amet semper justo. nature
                                                        and its beauty.”</h4>
                                                    <div class="pt-3 pb-5 mt-4">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-2.jpg"
                                                                    class="avatar-md img-fluid rounded-circle"
                                                                    alt="...">
                                                            </div>
                                                            <div class="mb-4 flex-grow-1 ms-3">
                                                                <h5 class="text-white font-size-18">Rosanna French
                                                                </h5>
                                                                <p class="mb-0 text-white-50">Web Developer</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="text-white testi-contain">
                                                    <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                    <h4 class="mt-4 text-white fw-medium lh-base">“I've learned that
                                                        people will forget what you said, people will forget what you
                                                        did,
                                                        but people will never forget
                                                        how donec in efficitur lectus, nec lobortis metus you made them
                                                        feel.”</h4>
                                                    <div class="pt-3 pb-5 mt-4">
                                                        <div class="d-flex align-items-start">
                                                            <img src="assets/images/users/avatar-3.jpg"
                                                                class="avatar-md img-fluid rounded-circle" alt="...">
                                                            <div class="flex-1 mb-4 ms-3">
                                                                <h5 class="text-white font-size-18">Ilse R. Eaton</h5>
                                                                <p class="mb-0 text-white-50">Manager
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end carousel-inner -->
                                    </div>
                                    <!-- end review carousel -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>


    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <!-- pace js -->
    <script src="assets/libs/pace-js/pace.min.js"></script>
    <!-- password addon init -->
    <script src="assets/js/pages/pass-addon.init.js"></script>

</body>

</html>