<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GPIB SANGKAKALA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <link href="fontawesome_v5/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style_ori.css" rel="stylesheet">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <script src="http://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js">
  </script>
    <style>
        iframe,
        object,
        embed {
            max-width: 100%;
            max-height: 100%;
        }

        .section-padding {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        ::selection {
            background-color: var(--secondary-color);
            color: var(--white-color);
        }


        #canvas_container {
          width: 800px;
          height: 450px;
          overflow: auto;
        }
        #canvas_container {
            background: #333;
            text-align: center;
            border: solid 3px;
        }

    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-church me-3"></i>SKKL</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <!-- <div class="navbar-nav ms-auto p-4 p-lg-0">
                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
        </div> -->
            <ul class="navbar-nav ms-auto p-4 p-lg-0">
                <li class="nav-item">
                    <a class="nav-item nav-link click-scroll" href="#">Home</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-item nav-link click-scroll" href="#section_2">Jadwal Ibadah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link click-scroll" href="#section_3">Live Stream</a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link click-scroll" href="#section_4">Kegiatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link click-scroll" href="#section_5">PHMJ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link click-scroll" href="#section_6">Pelkata</a>
                </li> -->
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Presbiter</a>
                    <ul class="dropdown-menu fade-down m-0 dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="diaken">Diaken</a></li>
                        <li><a class="dropdown-item" href="majelis">Majelis</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pelkat</a>
                    <ul class="dropdown-menu fade-down m-0 dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">PA</a></li>
                        <li><a class="dropdown-item" href="pelkat-pt">PT</a></li>
                        <li><a class="dropdown-item" href="#">GP</a></li>
                        <li><a class="dropdown-item" href="#">PKP</a></li>
                        <li><a class="dropdown-item" href="#">PKB</a></li>
                        <li><a class="dropdown-item" href="#">PKLU</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Komisi</a>
                    <ul class="dropdown-menu fade-down m-0 dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Theologi</a></li>
                        <li><a class="dropdown-item" href="#">Germasa</a></li>
                        <li><a class="dropdown-item" href="#">PPSDI</a></li>
                        <li><a class="dropdown-item" href="#">PEG</a></li>
                        <li><a class="dropdown-item" href="#">IL</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link click-scroll" href="https://sabda.gpib.or.id" target="_blank">Sabda Digital</a>
                </li>
            </ul>
                <a href="https://jemaat.gpibskkl.com" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Member Area<i class="fa fa-arrow-right ms-3"></i></a>
            
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 section-padding" id="section_1">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/gpib-sangkakala-setelah-renovasi.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Gereja Protestan Indonesia di Bagian Barat
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown">GPIB Sangkakala
                                </h1>
                                <p class="fs-5 text-white mb-4 pb-2 animated slideInUp">Ibadah Pagi Jam 09.00 wib <br/> Ibadah Sore Jam 18.00 wib</p>
                                
                                <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/gpib-sangkakala-setelah-renovasi.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Visi GPIB
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown">Vero elitr justo clita lorem
                                </h1>
                                <p class="fs-5 text-white mb-4 pb-2">GPIB menjadi gereja yang mewujudkan damai sejahtera bagi seluruh ciptaanNya.</p>
                                <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/gpib-sangkakala-setelah-renovasi.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Tentang Sangkakala</h6>
                    <h1 class="mb-4">Welcome to GPIB Sangkakala</h1>
                    <p class="">34 TAHUN PERJALANAN IMAN
                    GEREJA PROTESTAN DI INDONESIA BAGIAN BARAT
                    (GPIB) JEMAAT SANGKAKALA KEBON JERUK</p>
                    <p>GPIB (Gereja Protestan di Indonesia bagian Barat) adalah bagian dari GPI (Gereja Protestan Indonesia) yang dulunya bernama Indische Kerk.
                    Teologi Gereja ini didasarkan pada ajaran Reformasi dari Yohanes Calvin, seorang Reformator Prancis yang belakangan pindah ke Jenewa dan memimpin gereja di sana.
                    GPIB didirikan pada 31 Oktober 1948 yang pada waktu itu bernama De Protestantse Kerk in Westelijk Indonesia berdasarkan Tata-Gereja dan Peraturan-Gereja yang dipersembahkan oleh proto-Sinode kepada Badan Pekerja Am (Algemene Moderamen) Gereja Protestan Indonesia.
                    </p>
                    <p class="mb-4">Berawal dari diresmikannya Perumahan Sederhana Komplek Kodam V/ Jaya di Kebon Jeruk dengan Surat Keputusan Pangdam V/ Jaya dengan nomor Skep/124-4/V/1972 tanggal 24 Mei 1972.</p>
                    <!-- <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- jadwal Start -->
    <div class="container-xxl section-padding" id="section_2"> <!-- class py-5 -->
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Ibadah</h6>
                <h1 class="mb-5">Jadwal Ibadah Sepekan</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-child text-primary mb-4"></i>
                            <h5 class="mb-3">IHMPA</h5>
                            <!-- <ul class="list-group list-group-flush">
                                <li class="list-group-item">An item</li>
                                <li class="list-group-item">A second item</li>
                                <li class="list-group-item">A third item</li>
                              </ul> -->
                            <p>Ibadah Hari Minggu Pelayanan Anak di Gedung Serba Guna lt 1, pada pukul 09.00 wib.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user-friends text-primary mb-4"></i>
                            <h5 class="mb-3">IHMPT</h5>
                            <p>Ibadah Hari Minggu Pelayanan Anak di Gedung Serba Guna lt 2, pada pukul 09.00 wib.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInDown" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-church text-primary mb-4"></i>
                            <h5 class="mb-3">Ibadah Pagi</h5>
                            <p>Ibadah Hari Minggu (Dewasa) di Gedung Gereja diadakan pada pukul 09.00 wib.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInDown" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-church text-primary mb-4"></i>
                            <h5 class="mb-3">Ibadah Sore</h5>
                            <p>Ibadah Hari Minggu (Dewasa) di Gedung Gereja diadakan pada pukul 18.00 wib.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-users text-primary mb-4"></i>
                            <h5 class="mb-3">Ibadah Keluarga</h5>
                            <p>Ibadah Keluarga diadakan setiap Hari Rabu di Gedung Gereja pada pukul 19.30 wib.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInDown" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-users-cog text-primary mb-4"></i>
                            <h5 class="mb-3">Gerakan Pemuda</h5>
                            <p>Ibadah Setiap Hari Jumat di Gedung Serba Guna lt 1, pada pukul 20.00 wib.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInDown" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h5 class="mb-3">Persekutuan Kaum Bapak</h5>
                            <p>Ibadah Setiap hari Jumat di Gedung Gereja pada pukul 19.00 wib.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-female text-primary mb-4"></i>
                            <h5 class="mb-3">Persekutuan Kaum Perempuan</h5>
                            <p>Ibadah Setiap Hari Sabtu di GSG Lt 2 pada pukul 11.00 wib.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user-plus text-primary mb-4"></i>
                            <h5 class="mb-3">Persekutuan Kaum Lanjut Usia</h5>
                            <p>Ibadah Setiap Hari Sabtu di Gedung Gereja pada pukul 11.00 wib.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jadwal End -->

    <!-- Livestream Start -->
    <!-- <div class="container-xxl section-padding py-5" > --> <!-- hilangkan py-5 -->
    <div class="container-xxl section-padding" id="section_3">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <!-- <div class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="1.6s"> -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="640" height="360" src="https://www.youtube.com/embed/XDPwXQjAlB0" allowfullscreen></iframe>
                        </div>
                        <!-- </div> -->
                        <!-- <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;"> -->
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Live Stream</h6>
                    <h1 class="mb-4">Ibadah Hari Minggu</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit.</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <!-- <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                    </div> -->
                    <a class="btn btn-primary py-3 px-5 mt-2" href=""><i class="fa fa-file-pdf" style="color:white"></i> Tata Ibadah</a>
                    <a class="btn btn-primary py-3 px-5 mt-2" href=""><i class="fa fa-file-pdf" style="color:white"></i> Warta Jemaat</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Livestream End -->

    <!-- TimeTable Start -->
    <div class="container-xxl schedule section-padding" id="section_4">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Timetable</h6>
                <h1 class="mb-5">Jadwal Kegiatan Sepekan</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-12 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="table-responsive-sm">
                        <table class="table table-bordered align-middle">
                            <thead class="thead-light table-primary">
                                <th><i class="fa fa-calendar-week"></i></th>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                                <th>Sun</th>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="table-primary"><small>11.00</small></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="table-primary"><small>13.00</small></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="table-primary"><small>19.00</small></td>
                                    <td>
                                        <!-- <strong>Cardio</strong>
                                        <span>7:00 am - 9:00 am</span> -->
                                    </td>
                                    <td>
                                        <strong>Rapat PHMJ</strong>

                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>

                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <!-- <tr>
                                    <td class="table-primary"><small>9:00</small></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <strong>Boxing</strong>
                                        <span>8:00 am - 9:00 am</span>
                                    </td>
                                    <td>
                                        <strong>Areobic</strong>
                                        <span>8:00 am - 9:00 am</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <strong>Cardio</strong>
                                        <span>8:00 am - 9:00 am</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-primary" <small>11:00</small></td>
                                    <td></td>
                                    <td>
                                        <strong>Boxing</strong>
                                        <span>11:00 am - 2:00 pm</span>
                                    </td>
                                    <td>
                                        <strong>Areobic</strong>
                                        <span>11:30 am - 3:30 pm</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <strong>Body work</strong>
                                        <span>11:50 am - 5:20 pm</span>
                                    </td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td class="table-primary"><small>2:00</small></td>
                                    <td>
                                        <strong>Boxing</strong>
                                        <span>2:00 pm - 4:00 pm</span>
                                    </td>
                                    <td>
                                        <strong>Power lifting</strong>
                                        <span>3:00 pm - 6:00 pm</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <strong>Cardio</strong>
                                        <span>6:00 pm - 9:00 pm</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <strong>Crossfit</strong>
                                        <span>5:00 pm - 7:00 pm</span>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TimeTable End -->

    <!-- phm Start -->
    <div class="container-xxl section-padding" id="section_5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">PHMJ</h6>
                <h1 class="mb-5">Pelaksana Harian Majelis Jemaat</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <!-- <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a> -->
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>KMJ</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Sekretaris I</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Sekretaris II</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Ketua I</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInDown" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <!-- <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a> -->
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>KMJ</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInDown" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Sekretaris I</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInDown" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Sekretaris II</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInDown" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Ketua I</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- phm End -->

    <!-- pelkat Start -->
    <div class="container-xxl section-padding" id="section_6">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">PELKATA</h6>
                <h1 class="mb-5">Pelayanan Kategorial</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                
                <div class="testimonial-item text-center">
                    <img class="rounded p-2 mx-auto" src="img/pelkat_pt.png" style="width: 140px; height: 140px;">
                </div>
                <div class="testimonial-item text-center">
                    <img class="rounded p-2 mx-auto" src="img/pelkat_gp.png" style="width: 140px; height: 140px;">
                </div>
                <div class="testimonial-item text-center">
                    <img class="rounded p-2 mx-auto" src="img/pelkat_pkp.png" style="width: 140px; height: 140px;">
                </div>
                <div class="testimonial-item text-center">
                    <img class="rounded p-2 mx-auto" src="img/pelkat_pkb.png" style="width: 140px; height: 140px;">
                </div>
                <div class="testimonial-item text-center">
                    <img class="rounded p-2 mx-auto" src="img/pelkat_pklu.png" style="width: 140px; height: 140px;">
                </div>
                <div class="testimonial-item text-center">
                    <img class="rounded p-2 mx-auto" src="img/pelkat_pa.png" style="width: 140px; height: 140px;">
                </div>
            </div>
        </div>
    </div>
    
    <!-- pelkat End -->
    <div class="container-xxl section-padding" id="section_6">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">PELKAT</h6>
                <h1 class="mb-5">Pelayanan Kategorial</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative h-100">
    <div id="my_pdf_viewer">
        <div id="canvas_container">
            <canvas id="pdf_renderer"></canvas>
        </div>
        <div id="navigation_controls">
            <button id="go_previous">Previous</button>
            <input id="current_page" value="1" type="number"/>
            <button id="go_next">Next</button>
        </div>
        <div id="zoom_controls">  
            <button id="zoom_in">+</button>
            <button id="zoom_out">-</button>
        </div>
    </div>
        </div></div></div>
    </div></div>
    <script>
        var myState = {
            pdf: null,
            currentPage: 1,
            zoom: 1
        }
     
        pdfjsLib.getDocument('./img/1.pdf').then((pdf) => {
     
            myState.pdf = pdf;
            render();
        });
        function render() {
            myState.pdf.getPage(myState.currentPage).then((page) => {
         
                var canvas = document.getElementById("pdf_renderer");
                var ctx = canvas.getContext('2d');
     
                var viewport = page.getViewport(myState.zoom);
                canvas.width = viewport.width;
                canvas.height = viewport.height;
         
                page.render({
                    canvasContext: ctx,
                    viewport: viewport
                });
            });
        }
        document.getElementById('go_previous').addEventListener('click', (e) => {
            if(myState.pdf == null || myState.currentPage == 1) 
              return;
            myState.currentPage -= 1;
            document.getElementById("current_page").value = myState.currentPage;
            render();
        });
        document.getElementById('go_next').addEventListener('click', (e) => {
            if(myState.pdf == null || myState.currentPage > myState.pdf._pdfInfo.numPages) 
               return;
            myState.currentPage += 1;
            document.getElementById("current_page").value = myState.currentPage;
            render();
        });
        document.getElementById('current_page').addEventListener('keypress', (e) => {
            if(myState.pdf == null) return;
         
            // Get key code 
            var code = (e.keyCode ? e.keyCode : e.which);
         
            // If key code matches that of the Enter key 
            if(code == 13) {
                var desiredPage = 
                document.getElementById('current_page').valueAsNumber;
                                 
                if(desiredPage >= 1 && desiredPage <= myState.pdf._pdfInfo.numPages) {
                    myState.currentPage = desiredPage;
                    document.getElementById("current_page").value = desiredPage;
                    render();
                }
            }
        });
        document.getElementById('zoom_in').addEventListener('click', (e) => {
            if(myState.pdf == null) return;
            myState.zoom += 0.5;
            render();
        });
        document.getElementById('zoom_out').addEventListener('click', (e) => {
            if(myState.pdf == null) return;
            myState.zoom -= 0.5;
            render();
        });
    </script>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="#">About Us</a>
                    <a class="btn btn-link" href="#">Contact Us</a>
                    <!-- <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a> -->
                    <a class="btn btn-link" href="#">Radio Stream GPIB</a>
                    <audio id="player" autoplay controls><source src="https://a1.siar.us/listen/gpibvoice/radio.mp3" type="audio/mp3"></audio>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Teratai Ujung No. 155 A, Komplek Kodam Kebon Jeruk Jakarta Barat 11530</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>021 549xx</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>sekretariat@gpibskkl.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h4 class="text-white mb-3">Office Hours</h4>
                    <p class="mb-2"><i class="fa fa-calendar-alt me-3"></i>Selasa - Sabtu</p>
                    <p class="mb-2"><i class="fa fa-clock me-3"></i>09:00 - 17:00 wib</p>
                </div>
              
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; 2023<?= (date('Y') > 2021 ? ' - ' . date('Y') : '') ?> <a class="" href="https://gpibskkl.com">GPIB Sangkakala Jakarta Barat</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="#">Home</a>
                            <a href="#">Cookies</a>
                            <a href="#">Sabda Digital</a>
                            <a href="http://jemaat.gpibskkl.com" target="_blank">Member</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <!-- <script src="js/click-scroll.js"></script> -->
    <!-- <script src="js/custom.js"></script> -->

</body>

</html>