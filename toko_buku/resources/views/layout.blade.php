<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{url('assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/css/now-ui-kit.css?v=1.2.0')}}" rel="stylesheet" />

</head>

<body class="landing-page sidebar-collapse">

    <nav class="navbar navbar-expand-lg bg-primary fixed-top">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" rel="tooltip" data-placement="bottom" target="_blank">
                    Toko Buku
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar top-bar"></span>
                    <span class="navbar-toggler-bar middle-bar"></span>
                    <span class="navbar-toggler-bar bottom-bar"></span>
                </button>
            </div>

            <form class="form-inline ml-auto" data-background-color>
                <div class="form-group has-white">
                    <input type="text" class="form-control" placeholder="Cari" style="width:800px;">
                </div>
            </form>

            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <!-- <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Register</a>
                    </li>
                </ul> -->
                <div class="dropdown button-dropdown">
                    <a class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                        <img src="{{url('image/profile.jpg')}}" style="height:26px; width:26px; border-radius: 50%;" class="mr-2">
                        <!-- <span class="material-icons mb-0">
                            account_circle
                        </span> -->
                        Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @auth('user')
                        <a class="dropdown-item" href="#"><span class="material-icons-sharp mr-2" style="color: #8F9193;">notifications</span>Notifikasi</a>
                        <a class="dropdown-item" href="#"><span class="material-icons-sharp mr-2" style="color: #8F9193;">shopping_cart</span>Keranjang</a>
                        <a class="dropdown-item" href="#"><span class="material-icons-sharp mr-2" style="color: #8F9193;">shopping_bag</span>Pembelian</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><span class="material-icons-sharp mr-2" style="color: #8F9193;">settings</span>Pengaturan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('logout')}}"><span class="material-icons-sharp mr-2" style="color: #8F9193;">logout</span>Logout</a>
                        @endauth

                        @auth('admin')
                        <a class="dropdown-item" href="#"><span class="material-icons-sharp mr-2" style="color: #8F9193;">notifications</span>Notifikasi</a>
                        <a class="dropdown-item" href="#"><span class="material-icons-sharp mr-2" style="color: #8F9193;">shopping_bag</span>Penjualan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><span class="material-icons-sharp mr-2" style="color: #8F9193;">settings</span>Pengaturan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><span class="material-icons-sharp mr-2" style="color: #8F9193;">new_label</span>Kategori Buku</a>
                        <a class="dropdown-item" href="#"><span class="material-icons-sharp mr-2" style="color: #8F9193;">book</span>Buku</a>
                        <a class="dropdown-item" href="#"><span class="material-icons-sharp mr-2" style="color: #8F9193;">local_shipping</span>Kurir</a>
                        <a class="dropdown-item" href="#"><span class="material-icons-sharp mr-2" style="color: #8F9193;">sell</span>Diskon</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('adm-logout')}}"><span class="material-icons-sharp mr-2" style="color: #8F9193;">logout</span>Logout</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top:100px; min-height:779px;">
        @yield('body')
    </div>

    <footer class="footer footer-default">
        <div class=" container ">
            <nav>
                <ul>
                    <li>
                        <a>
                            Kelompok 20
                        </a>
                    </li>
                    <li>
                        <a>
                            Tentang Kami
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright" id="copyright">
                &copy;
                <script>
                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                </script>, Designed by
                <a>Kelompok 20</a>. Coded by
                <a>Kelompok 20</a>.
            </div>
        </div>
    </footer>

    <!--   Core JS Files   -->
    <script src="{{url('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>

    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{url('assets/js/plugins/bootstrap-switch.js')}}"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{url('assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>

    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="{{url('assets/js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>

    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>


    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{url('assets/js/now-ui-kit.js?v=1.2.0')}}" type="text/javascript"></script>
</body>

</html>