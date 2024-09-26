<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="icon" href="./assets/img/smki.png">
    <title>SMKI</title>
    <meta
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
      name="viewport"
    />
    <!-- CSS Files -->
    <link rel="stylesheet" href="./assets/css/container.css" />
    <link rel="stylesheet" href="./assets/css/card.css" />
    <link rel="stylesheet" href="./assets/css/berita.css" />
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Link to the external CSS file -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./node_modules/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="./node_modules/slick-carousel/slick/slick-theme.css">    
    <script src="./node_modules/slick-carousel/slick/slick.min.js"></script>
    <script src="./assets/js/slider.js" defer></script>
  </head>
  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-4 px-3">
      <div class="container-fluid px-0">
        <a class="navbar-brand" href="../index.php">
          <img src="./assets/img/smki.png" alt="SMKI Logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-default">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Informasi Jurusan</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="jurusan.php">Akutansi & Keuangan Lembaga</a></li>
                <li><a class="dropdown-item" href="jurusan.php">Pemasaran</a></li>
                <li><a class="dropdown-item" href="jurusan.php">Perbankan Syari'ah</a></li>
                <li><a class="dropdown-item" href="jurusan.php">Teknik Komputer & Jaringan</a></li>
                <li><a class="dropdown-item" href="jurusan.php">Pengembangan Perangkat Lunak & Gim</a></li>
                <li><a class="dropdown-item" href="jurusan.php">Desain Komunikasi Visual</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Berita</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                <li><a class="dropdown-item" href="berita.php">Prestasi</a></li>
                <li><a class="dropdown-item" href="berita.php">Kegiatan Sekolah</a></li>
                <li><a class="dropdown-item" href="berita.php">Kegiatan Organisasi</a></li>
                <li><a class="dropdown-item" href="berita.php">Ekstrakulikuler</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">Fasilitas</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                <li><a class="dropdown-item" href="sarana.php">Sarana</a></li>
                <li><a class="dropdown-item" href="fasilitas.php">Prasarana</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false">Layanan</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
                <li><a class="dropdown-item" href="#">SIAKAD</a></li>
                <li><a class="dropdown-item" href="#">Penelusuran Alumni</a></li>
                <li><a class="dropdown-item" href="#">TEFA Kami</a></li>
                <li><a class="dropdown-item" href="#">Ruang Praktek Siswa</a></li>
                <li><a class="dropdown-item" href="#">Kerjasama DUDI</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown5" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pendaftaran Siswa Baru</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown5">
                <li><a class="dropdown-item" href="#">Daftar</a></li>
                <li><a class="dropdown-item" href="#">Cek Nama Kamu</a></li>
              </ul>
            </li>
          </ul>
          <div class="d-flex justify-content-end justify-content-lg-end w-100">
            <div class="d-flex align-items-center flex-column flex-lg-row">
              <a href="https://smkislambatu.sch.id/pages/sign-in.php" class="btn btn-primary ml-2 d-block">Masuk</a>
            </div>
          </div>
        </div>
      </div>
    </nav>






 
  
  <!-- ISIBERITA -->
  <section class="">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-7">
                <div class="lc-block mb-5">
                    <div editable="rich">
                      <h2 class="display-4 fw-bold d-inline-block">JUDUL</h2>
                      <span class="d-inline-block ms-2"><h6 class="text-muted ml-2"><cite title="Source Title">27 August 2024</cite></h6></span>                      
                        <figure>
                            <blockquote class="blockquote">
                              <small>Penulis Berita</small>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                By <cite title="Source Title">smkinghotvrgn</cite>
                            </figcaption>
                          </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a lacus est. Etiam diam metus, lobortis non augue at, placerat viverra risus. Cras ornare faucibus laoreet. Aenean vel nisi in ipsum congue fermentum et ut arcu. Proin leo diam,
                            vulputate eu tellus ac, mattis cursus nunc. In aliquet erat ac eros congue maximus. Fusce cursus leo at elit tincidunt, consequat ultrices ante pretium. Vivamus ut dapibus nisl, nec condimentum purus.</p>
                    </div>
                </div><!-- /lc-block -->
                <div class="bd-example  ">
                  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                      <ol class="carousel-indicators">
                          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner rounded">
                          <div class="carousel-item active position-relative">
                              <img src="./assets/img/bg3.jpg" class="d-block w-100" alt="..." />
                              <div class="carousel-caption d-none d-md-block txt-carousel">
                              </div>
                          </div>
                          <div class="carousel-item position-relative">
                              <img src="./assets/img/bg4.jpg" class="d-block w-100" alt="..." />
                              <div class="carousel-caption d-none d-md-block txt-carousel">
                              </div>
                          </div>
                          <div class="carousel-item position-relative">
                              <img src="./assets/img/bg5.jpg" class="d-block w-100" alt="..." />
                              <div class="carousel-caption d-none d-md-block txt-carousel">
                              </div>
                          </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      </a>
                  </div>
              </div>
            </div><!-- /col -->
            <div class="col-md-5">
                <div class="lc-block card card-body border-0 px-lg-5">
                    <div class="lc-block">
                        <div class="d-inline-flex">
                        </div>
                    </div>
                    <div class="lc-block mt-5 py-5">
                        <div editable="rich">
                            <p class="rfs-7"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et metus id
                                 ligula malesuada placerat sit amet quis enim. Aliquam erat volutpat. In pellentesque 
                                 scelerisque auctor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores sequi
                                  quod rem cupiditate sapiente magni quo eligendi obcaecati eaque
                                  laboriosam dolorem unde numquam, modi dolorum illum ullam incidunt facilis quidem?</p>
                        </div>
                    </div><!-- /lc-block -->
                </div>
                <!-- /lc-block -->
            </div><!-- /col -->
            <div class="col-12 mt-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque minima expedita porro odio dignissimos quidem doloribus, deserunt consequuntur voluptates quos totam tempore possimus. Velit maxime quaerat numquam facere sequi hic?</p>
            </div>
        </div>
    </div>
</section>












    <!-- MORE -->
    <section class="py-4 py-md-6">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="lc-block text-center text-lg-start">
              <div editable="rich">
                <h1 class="display-4"> Berita Terkait</h1>
              </div>
            </div>
          </div>
        </div>
    
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
          <div class="col-12 col-lg-4 mb-4">
            <div class="lc-block card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg overlay-card" style="background-image: url('./assets/img/bg1.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <div class="lc-block mt-5 mb-5">
                  <div editable="rich">
                    <h2 class="display-7 lh-1 fw-bold">Short title, long jacket</h2>
                    <p>Quickly design and customize responsive mobile-first sites with Bootstrap.</p>
                  </div>
                </div>
                <ul class="lc-block d-flex list-unstyled mt-auto ms-auto">
                  <a class="btn btn-link btn-lg text-white" href="isiberita.php" role="button" lc-helper="button">Baca Sekarang</a>
                </ul>                             
              </div>
            </div>
          </div>
    
          <div class="col-12 col-lg-4 mb-4">
            <div class="lc-block card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg overlay-card" style="background-image: url('./assets/img/bg3.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <div class="lc-block mt-5 mb-5">
                  <div editable="rich">
                    <h2 class="display-7 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
                    <p>Quickly design and customize responsive mobile-first sites with Bootstrap.</p>
                  </div>
                </div>
                <ul class="lc-block d-flex list-unstyled mt-auto ms-auto">
                  <a class="btn btn-link btn-lg text-white" href="isiberita.php" role="button" lc-helper="button">Baca Sekarang</a>
                </ul>  
              </div>
            </div>
          </div>
    
          <div class="col-12 col-lg-4 mb-4">
            <div class="lc-block card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg overlay-card" style="background-image: url('./assets/img/bg3.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <div class="lc-block mt-5 mb-5">
                  <div editable="rich">
                    <h2 class="display-7 lh-1 fw-bold">Another longer title belongs here</h2>
                    <p>Quickly design and customize responsive mobile-first sites with Bootstrap.</p>
                  </div>
                </div>
                <ul class="lc-block d-flex list-unstyled mt-auto ms-auto">
                  <a class="btn btn-link btn-lg text-white" href="isiberita.php" role="button" lc-helper="button">Baca Sekarang</a>
                </ul>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  
      
    
















      <!-- FOOTER -->
      <footer class="pt-lg-5 pt-3 footer bg-light">
        <div class="container">
          <div class="row">
            <!-- Company Info -->
            <div class="col-12 col-md-6 col-lg-3 mb-4">
              <div class="text-center">
                <img src="./assets/img/smki.png" alt="School Image" class="img-fluid mt-4" style="max-width: 170px;" />
              </div>
            </div>            
            <!-- Informasi Jurusan -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
              <div class="d-flex align-items-center mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="blue" class="mr-2">
                  <path d="M431.52-271.52h96.96V-520h-96.96v248.48ZM480-588.7q21.8 0 36.55-14.75Q531.3-618.2 531.3-640q0-21.8-14.75-36.55Q501.8-691.3 480-691.3q-21.8 0-36.55 14.75Q428.7-661.8 428.7-640q0 21.8 14.75 36.55Q458.2-588.7 480-588.7Zm0 527.92q-87.52 0-163.91-32.96-76.38-32.96-132.88-89.47-56.51-56.5-89.47-132.88Q60.78-392.48 60.78-480t32.96-163.91q32.96-76.38 89.47-132.88 56.5-56.51 132.88-89.47 76.39-32.96 163.91-32.96t163.91 32.96q76.38 32.96 132.88 89.47 56.51 56.5 89.47 132.88 32.96 76.39 32.96 163.91t-32.96 163.91q-32.96 76.38-89.47 132.88-56.5 56.51-132.88 89.47Q567.52-60.78 480-60.78Zm0-106q131.74 0 222.48-90.74 90.74-90.74 90.74-222.48t-90.74-222.48Q611.74-793.22 480-793.22t-222.48 90.74Q166.78-611.74 166.78-480t90.74 222.48q90.74 90.74 222.48 90.74ZM480-480Z"/>
                </svg>
                <h4 class="fw-bold text-dark mb-0 border-bottom">Informasi Jurusan</h4>
              </div>
              <ul class="list-unstyled">
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Akutansi & Keuangan Lembaga</a></li>
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Pemasaran</a></li>
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Perbankan Syar'ah</a></li>
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Teknik Komputer & Jaringan</a></li>
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Pengembangan Perangkat Lunak & Gim</a></li>
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Desain Komunikasi Visual</a></li>
              </ul>
            </div>
        
            <!-- Berita -->
            <div class="col-12 col-md-6 col-lg-2 mb-4">
              <div class="d-flex align-items-center mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" class="mr-2" width="30px" fill="red">
                  <path d="M45.52-147v-106h868.96v106H45.52Zm67-173v-346h106v346h-106Zm176.96 0v-506h106v506h-106ZM467-320v-506h106v506H467Zm313.91 0-173-303.18 93.18-53 173 303.18-93.18 53Z"/>
                </svg>
                <h4 class="fw-bold text-dark mb-0 border-bottom">Berita</h4>
              </div>
              <ul class="list-unstyled">
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Prestasi</a></li>
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Kegiatan Sekolah</a></li>
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Kegiatan Organisasi</a></li>
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Ekstrakulikuler</a></li>
              </ul>
            </div>
        
            <!-- Contact Info -->
            <div class="col-12 col-md-6 col-lg-3 mb-4">
              <div class="d-flex align-items-center mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="green" class="bi bi-telephone-inbound-fill mr-2" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0"/>
                </svg>
                <h4 class="fw-bold text-dark mb-0 border-bottom">Kontak Kami</h4>
              </div>
              <p class="mb-0">JL. Barat Stadion Brantas Batu</p>
              <p class="mb-0">Kode Pos : 65314</p>
              <p>Email : <a href="" class="text-dark">smkislambatu@gmail.com</a></p>
              <p>Phone: <span class="fw-semibold">(000) 123 456 789</span></p>
            </div>
          <div class="row align-items-center g-0 py-2 mt-4">
            <div class="rounded">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
            </a>
          </div>
          </div>
        </div>
      </footer>  
  </body>
</html>