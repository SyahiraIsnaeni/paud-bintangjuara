<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Profil</title>
        <!-- add icon link -->
        <link rel="icon" href="{{asset('front/logo1.png')}}" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
        <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    </head>
    <style>

        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .img-fluid{
            border-radius: 20px 20px 20px 20px;
        }
        .elementor-video {
            border-radius: 20px 20px 20px 20px;
        }
        .banner {
            background: url("{{asset('front/paud.jpg')}}") no-repeat center center;
            background-size: cover;
            padding-top: 20%;
            padding-bottom: 20%;
            color: #ffffff;
        }


        @font-face {
            font-family: EntezareZohoor2;
            src: url('fonts/EntezareZohoor2.eot');
            src: url('fonts/EntezareZohoor2.eot?') format('☺'),
            url('fonts/EntezareZohoor2.woff') format('woff'),
            url('fonts/EntezareZohoor2.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        /* use */
        body {
            font-family: EntezareZohoor2, Tahoma, serif;
        }




    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark p-md-2 fixed-top ">

    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{asset('front/logo1.png')}}" alt="logo" height="50"><strong>&nbsp PAUD Islam Bintang Juara</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ 'profile' }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ 'detail-waqaf' }}">Yuk Wakaf</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://ppdb.bintangjuara.sch.id/">PPDB</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ 'gallery' }}">Galeri</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('login'))
                        @auth
                            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard Admin</a>
                        @else
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        @endauth
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Akhir Navbar -->

<!-- awalan -->
<section id="awalan">
    <div class="container-fluid banner fixed-down">
        <div class="container text-start">
            >
            <a href="#">
            </a>
        </div>
    </div>

</section>

<!-- akhiran -->


<!-- awal tentang kami -->
<section id="tentangkami" style="margin-top :-200px;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#45b0f8" fill-opacity="1"
              d="M0,160L48,144C96,128,192,96,288,90.7C384,85,480,107,576,112C672,117,768,107,864,122.7C960,139,1056,181,1152,165.3C1248,149,1344,75,1392,37.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            '
        </path>
    </svg>
    <div class="container-fluid text-white " style="background-color: #45b0f8;">
        <div class="container">
            <div class="row fs-5">
                <div class="col-12 col-md-6 col-lg-6">
                    <h2><strong>Tentang kami</strong> </h2>
                    <p align="justify">PAUD Islam Bintang Juara merupakan lembaga PAUD terpadu dengan layananan pengasuhan anak
                        (daycare). PAUD Islam Bintang Juara memiliki prinsip "Pendidikan Holistik Integratif" yang
                        mengutamakan peletakan Pondasi Akidah Pembiasaan Akhlakul Karimah dan Adab Islami.
                        PAUD Islam Bintang Juara memiliki upaya optimalisasi perkembangan seluruh aspek perkembangan
                        anak dan potensi Multiple Intelligences.
                    </p>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <div style="text-align: center;">
                        <div class="video1">
                            <div class="bintangjuaravideo">
                                <div class="elementor-widget-video" data-id="8b392b9" data-element_type="widget"
                                     data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/www.youtube.com\/watch?v=1GL6RJMI0S4&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;,&quot;aspect_ratio&quot;:&quot;169&quot;}"
                                     data-widget_type="video.default">
                                    <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                        <iframe class="responsive-iframe" frameborder="1" allowfullscreen="1"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                title="Video Profile PAUD Islam Bintang Juara Semarang | Sekolah Calon Pemimpin Muslim | Sekolah Ramah Anak"
                                                width="620px" height="360px"
                                                src="https://www.youtube.com/embed/4XFlYAI_DUE?controls=1&amp;rel=0&amp;playsinline=0&amp;modestbranding=0&amp;autoplay=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fsd.bintangjuara.sch.id&amp;widgetid=1"
                                                id="widget2"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">\
        <path fill="#45b0f8" fill-opacity="1"
              d="M0,96L48,122.7C96,149,192,203,288,208C384,213,480,171,576,138.7C672,107,768,85,864,106.7C960,128,1056,192,1152,218.7C1248,245,1344,235,1392,229.3L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
</section>
<!-- Akhir tentang kami-->




<!-- ketua yayasan -->
<section id="ketuayayasan">
    <div class="container">
        <div class="row fs-5">
            <div class="col-12 col-md-6">
                <img src="{{asset('front/Buvivi.jpg')}}" class="img-fluid" alt="bg">
            </div>
            <div class="col-12 col-md-6 mt-3">
                <p align="justify">PAUD Islam Bintang Juara adalah sebuah lembaga belajar bagi anak-anak usia dini yang
                    membangun pondasi anak usia dini yang ceria, cerdas, kreatif dan berakhlak mulia.
                    sisi pendidikan islam dan metode pendekatan sesuai tahapan perkembangan anak. Sehingga anak bisa bertumbuh
                    sesuai fitrah seorang mu’min dan kemampuannya berkembang sesuai tahapan usianya. Di Bintang Juara setiap anak dipersiapkan
                    untuk menjadi pemimpin muslim yang berakhlak, berilmu, dan bermanfaat</p>
            </div>
        </div>
    </div>
</section>
<!-- akhir ketua yayasan -->

<!-- visi -->
<section id="visi">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#45b0f8" fill-opacity="1"
              d="M0,128L60,160C120,192,240,256,360,261.3C480,267,600,213,720,186.7C840,160,960,160,1080,165.3C1200,171,1320,181,1380,186.7L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
    <div class="container-fluid text-white" style="background-color: #45b0f8;">
        <div class="container ">
            <div class="row fs-5">
                <div class="col-8">
                    <br>
                    <br>
                    <br>
                    <h2><strong>VISI</strong></h2>
                    <p align="justify">Unggul dalam optimalisasi aspek perkembangan dan potensi kecerdasan dan potensi kederdasan majemuk (Multiple Intelligences)
                        serta akhlak mulia anak usia dini berbasis nilai-nilai islami</p>
                </div>

                <div class="col-4">
                    <div style="text-align: right;">
                        <img src="{{asset('front/visi.png')}}" class="img-fluid" alt="bg"></div></div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#45b0f8" fill-opacity="1"
              d="M0,192L48,202.7C96,213,192,235,288,208C384,181,480,107,576,106.7C672,107,768,181,864,224C960,267,1056,277,1152,277.3C1248,277,1344,267,1392,261.3L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
</section>
<!-- akhir visi -->

<!--  visi -->
<section id="misi">

    <div class="container">
        <div class="row fs-5">
            <div class="col-6">
                <img src="{{asset('front/misi.png')}}" class="img-fluid" alt="bg"></div>
            <div class="col mt-5">
                <h2><strong>MISI</strong></h2>
                <ol>
                    <li align="justify">Menyelenggarakan kegiatan pembelajaran dan evaluasi perkembangan siswa berbasis
                        metode sentra dan pengembangan Akhlak Mulia.</li>
                    <li align="justify">Mendidik anak usia dini menjadi pribadi cerdas, ceria dan berakhlak mulia.</li>
                    <li align="justify">Menyediakan lingkungan pendidikan dan pengasuhan yang yang berlandaskan kasih sayang dan nilai-nilai islami.</li>
                    <li align="justify">Menyelenggarakan kegiatan yang bersinergi dengan orang tua siswa, masyarakat serta pemerintah dalam rangka membangun pola pengasuhan
                        dan pendidikan yang berlandaskan kasih sayang dan nilai-nilai islami.</li>
                </ol>
            </div>
        </div>
    </div>
    </div>

</section>
<!--akhir visi  -->

<!-- program -->
<section id="rancangan">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#45b0f8" fill-opacity="1"
              d="M0,288L48,277.3C96,267,192,245,288,240C384,235,480,245,576,250.7C672,256,768,256,864,245.3C960,235,1056,213,1152,208C1248,203,1344,213,1392,218.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
    <div class="container-fluid text-white" style="background-color: #45b0f8;">
        <div class="container">
            <div class="row fs-5">
                <div class="col-12 col-md-6 mt-3">
                    <h2><strong>Program Kelas</strong> </h2>
                    <ol>
                        <li align="justify">Program kelas</li>
                        <ul>
                        <li> Ada 2 Kelompok: KB As Salam dan Al Quddus.</li>
                        <li>Siswa KB mulai dari usia 3,3 sampai dengan 4,3 tahunper bulan Juli. </li>
                        </ul>
                        <li align="justify">Taman kanak-kanak</li>
                        <ul>
                        <li align="justify">TK A ada 3 Kelompok: TK A Al Mu'min, Al Muhaimin, Al Aziz). TK B ada 3 Kelompok : TK B Al Jabbar, Al Muttakabbir, dan Al Kholiq.</li>
                        <li>Siswa TK adalah siswa usia 4,4 tahun sampai dengan 6,5 th per bulan Juli</li>
                        </ul>
                    </ol>
                </div>
                <div class="col-12 col-md-6">
                    <div style="text-align: right;">
                        <img src="{{asset('front/otak.png')}}" class="img-fluid" alt="bg"></div></div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#45b0f8" fill-opacity="1"
              d="M0,320L48,272C96,224,192,128,288,85.3C384,43,480,53,576,69.3C672,85,768,107,864,106.7C960,107,1056,85,1152,64C1248,43,1344,21,1392,10.7L1440,0L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
</section>
<!-- akhir rancangan -->

<!-- tujuan -->
<section id="tujuan">
    <div class="container">
        <div class="row fs-5">
            <div class="col-6">
                <img src="{{asset('front/tujuan.png')}}" class="img-fluid" alt="bg">
            </div>
            <div class="col mt-5">
                <h2><strong>TUJUAN</strong></h2>
                <ol>
                    <li align="justify">Memberikan pondasi bagi keimanan dan ketakwaan kepada Allah SWT serta membangun pribadi
                        anak usia dini yang berakhlak mulia.</li>
                    <li align="justify">Memberikan pendampingan dan bimbingan (pijakan) di seluruh potensi perkembangan anak
                        usia dini secara optimal (sensori motorik, afektif, kognitif).</li>
                    <li align="justify">Memberikan lingkungan pendidikan dan pengasuhan yang rahman dan rahim (kasih sayang) dengan Metode Pembelajaran Sentra serta
                        pembiasaan perilaku keagamaan dan akhlak mulia berbasis nilai-nilai Islami.</li>
                    <li align="justify">Membangun sinergi antara lembaga dan masyarakat dalam membangun pondasi akhlak
                        mulia anak usia dini</li>
                </ol>
            </div>
        </div>
    </div>

</section>

<!-- akhir tujuan -->

<!-- why -->
<section id="why">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#45b0f8" fill-opacity="1"
              d="M0,128L40,144C80,160,160,192,240,186.7C320,181,400,139,480,117.3C560,96,640,96,720,112C800,128,880,160,960,154.7C1040,149,1120,107,1200,90.7C1280,75,1360,85,1400,90.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
    </svg>
    <div class="container-fluid text-white" style="background-color: #45b0f8;">
        <div class="container">
            <div class="row fs-5">
                <div class="col-12 col-md-6 mt-3">
                    <h2><strong>mengapa kami menerapkan metode sentra?</strong> </h2>
                    <ol>
                        <li align="justify">Sentra merupakan suatu wadah yang disiapkan guru bagi kegiatan bermain
                            siapkan guru sentra sesuai tahap perkembangan anak. </li>
                        <li align="justify">Guru memfasilitasi anak bermain dengan memberi pijakan sebelum main, saat main dan sesudah
                             main untuk meningkatkan tahap perkembangan anak serta mengalirkan topik pembelajaran yang telah disusun guru dalam Lesson Plan dan
                            TFP (Term, Fact, Principles & Principles).</li>
                        <li align="justify">Setiap sentra memiliki jenis kegiata main seperti Sensormotorik atau fungsional,
                            simbolik atau peran, Konstruktif atua pembangunan dengan sistem moving class, seperti sentra bahan alam, main peran besar, main peran kecil
                        seni, balok, persiapan dan imtak dengan perputaran sentra setiap dua minggu sekali</li>
                    </ol>
                </div>
                <div class="col-12 col-md-6 mb-5">
                    <div class="row">
                        <div style="text-align: right;">
                            <img src="{{asset('front/paud.jpg')}}" class="img-fluid" alt="bg"></div></div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#45b0f8" fill-opacity="1"
              d="M0,128L40,144C80,160,160,192,240,186.7C320,181,400,139,480,117.3C560,96,640,96,720,112C800,128,880,160,960,154.7C1040,149,1120,107,1200,90.7C1280,75,1360,85,1400,90.7L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
        </path>
    </svg>
</section>
<!-- akhir why -->

<!-- team guru -->
<section id="Fakta">

    <div class="container">
        <div class="row">
            <div class="col-4">
                <!-- <div class="row"> -->
                <!-- <div class="col"> -->
                <h1><b>TEAM GURU</b></h1>
                <p align="justify">Komitmen kami menyediakan guru-guru terbaik yang telah
                    lulus program pelatihan dan pengembangan SDM Yayasan Dewi Sartika hingga siap mendampingi siswa.</p>
                <br><br>
                <p align="justify"> mengenai team guru dapat dilihat  <a href="detail-guru">selengkapnya</a></p>
            </div>

            <div class="col-8">
                <div class="row g-3">
                    @forelse ($guru as $row)
                        <div class="col-12 col-md-6 col-lg-3">
                            <img src="{{asset('uploads/'.$row->foto) }}" class="card-img-top" alt="team" style="margin-bottom: 5%;" height="250">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{$row->nama}}<br> {{$row->nip}}</h5>
                                    <p class="card-text">{{$row->jabatan}}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>

        </div>
    </div>

</section>
<!-- akhir team guru -->

<!-- Footer -->
@extends('frontend.footer')

<!-- Akhir Footer -->

<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
            nav.classList.add('bg-primary', 'shadow');
        } else {
            nav.classList.remove('bg-primary', 'shadow');
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
            nav.classList.add('bg-primary', 'shadow');
        } else {
            nav.classList.remove('bg-primary', 'shadow');
        }
    });
</script>

</html>
