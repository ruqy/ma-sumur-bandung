<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/logo.png" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;600&family=Oswald:wght@600&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/c715851aee.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('css/cover.css')}}">
    <title>MA-P3SB | Home</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#header">MAS Sumur Bandung</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#header"
                            data-bs-target=".navbar-collapse.show">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#program">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonial">Testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#daftar">Pendaftaran</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <div class="text-light fs-5">
                        <i class="fas fa-mobile-alt"></i>
                        0897-1276-858
                    </div>
                </span>
            </div>
        </div>
    </nav>
    {{-- hero section --}}
    <section id="header" class="hero-image">
        <div class="hero-text">
            <h1>Membentuk Siswa Dengan Kepribadian S-A-N-T-R-I</h1>
            <p class="fs-4">Santun Amanah Niat-lillah Taat Rajin Indah</p>
            <a href="#daftar" class="btn btn-dark btn-lg mt-3 js-scroll-trigger">Daftar Sekarang</a>
            <p class="text-sm"><small>Dapatkan potongan harga 50k</small></p>
        </div>
    </section>

    <section id="about" class="py-5 warna">
        <div class="container">
            <div class="row pb-5">
                <h1 class="text-center mb-5">Tentang Sekolah</h1>
                <div class="col-lg mb-3">
                    <h2>Geografis</h2>
                    <p>
                        Merupakan madrasah aliyah terbesar terbesar dan terluas di daerah Cililin. Seiring dengan
                        kekuatan dan kelemahan sekolah, kami percaya dengan kondisi sekolah kami yang kondusif untuk
                        belajar. Salah satunya dengan membatasi siswa dalam menggunakan gadget.
                    </p>
                </div>
                <div class="col-lg mb-3">
                    <h2>Pengurus</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit possimus nihil odit,
                        expedita
                        molestiae voluptatem dicta aliquid esse distinctio reprehenderit doloribus tenetur, officia
                        mollitia doloremque est sapiente optio consectetur voluptatibus.</p>
                </div>
                <div class="col-lg mb-3">
                    <h2>Pendiri</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto assumenda aut molestias, quo
                        enim
                        voluptatem impedit corporis inventore totam ut, corrupti ipsa unde vitae aliquid! Dolorum
                        debitis labore voluptatibus minima?</p>
                </div>
            </div>
        </div>
    </section>

    <section id="program" class="py-5">
        <div class="container">
            <h1 class="text-center pb-5">Program Sekolah</h1>
            <div class="row">
                <div class="col-lg mb-5">
                    <div class="card h-100">
                        <div class="card-header">
                            <h3>Sekolah</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>IPA <small class="text-muted">Ilmu Pengetahuan Alam</small></li>
                                <li>IPS <small class="text-muted">Ilmu Pengetahuan Sosial</small></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg mb-5">
                    <div class="card h-100">
                        <div class="card-header">
                            <h3>Pesantren</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>Tahfizh (30 Juz) <small class="text-muted">(jurusan tahfizh)</small></li>
                                <li>Kitab Salfi <small class="text-muted">(Terutama Alat Bahasa jurusan kitab)</small></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg mb-5">
                    <div class="card h-100">
                        <div class="card-header">
                            <h3>Asrama</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>Pembiasaan Kegiatan Harian <small class="text-muted">(jurusan tahfizh)</small></li>
                                <li>Pembiasaan Pengaturan Waktu <small class="text-muted">(Terutama Alat Bahasa jurusan kitab)</small></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial" class="text-center warna py-5">
        <h1 class="pb-5">Komentar Mereka</h1>
        <div class="row">
            <h3 class="mb-5">"MAS Sumur Bandung Keren Luar Biasa"</h3>

            <h5>M. Sirojudin</h5>
            <p>Psikologi - UGM - Yogyakarta </p>
        </div>
    </section>

    <section id="daftar" class="py-5">
        <h1 class="text-center pb-5">Lengkapi Data Berikut Untuk Daftar</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="#" method="post">
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Alamat Email">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Nama Lengkap">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="kontak" placeholder="Nomor Kontak">
                            <div id="kontakHelp" class="form-text">Diutamakan nomor kontak dengan akun Whatsapp
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark">Daftar</button>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </section>
    <footer id="footer" class="warna text-light pb-5">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg">
                    <h2>Alamat</h2>
                    <ul class="list-unstyled text-left">
                        <li class="list-item">Jl Raya Cililin No 52</li>
                        <li class="list-item">Kab Bandung Barat</li>
                    </ul>
                </div>
                <div class="col-lg">
                    <h2>Asrama</h2>
                    <ul class="list-unstyled text-left">
                        <li class="list-item">Jl Raya Cililin No 52</li>
                        <li class="list-item">Kab Bandung Barat</li>
                    </ul>
                </div>
                <div class="col-lg">
                    <h2>Sosial Media</h2>
                    <ul class="list-unstyled text-left">
                        <li class="list-item">Facebook</li>
                        <li class="list-item">Instagram</li>
                        <li class="list-item">Youtube</li>
                    </ul>
                </div>
                <div class="col-lg">
                    <h2>Kontak Informasi</h2>
                </div>
            </div>
        </div>
        <div class="small text-center text-light py-5">
            Copyright &copy;
            <!-- This script automatically adds the current year to your website footer-->
            <!-- (credit: https://updateyourfooter.com/)-->
            <script>
                document.write(new Date().getFullYear());

            </script>
            - MAS P3 Sumur Bandung
    </footer>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('a').click(function () {
                $('a').removeClass('selected');
                $(this).addClass('selected');
            })
        });

        $('.nav-link').on('click', function () {
            $('.navbar-collapse').collapse('hide');
        });

        // let menuSection = document.querySelectorAll(' .nav-link');

        // // for window scrolldown event

        // window.onscroll = (() => {
        //     let mainSection = document.querySelectorAll('section');

        //     mainSection.forEach((v, i) => {
        //         let rect = v.getBoundingClientRect().y
        //         if (rect < window.innerHeight - 500) {
        //             menuSection.forEach(v => v.classList.remove('selected'))
        //             menuSection[i].classList.add('selected')
        //         }
        //     })
        // })

    </script>
</body>

</html>
