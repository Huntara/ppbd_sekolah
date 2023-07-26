<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPDB</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('script.js')}}">
    <link rel="stylesheet" href="{{'assets/lib/font-awesome/css/font-awesome.min.css'}}" >
    <link rel="stylesheet" href="{{'assets/lib/animate/animate.min.css'}}">
    <link rel="stylesheet" href="{{'assets/lib/ionicons/css/ionicons.min.css'}}" >
    <link rel="stylesheet" href="{{'assets/lib/owlcarousel/assets/owl.carousel.min.css'}}" >
    <link rel="stylesheet" href="{{'assets/lib/lightbox/css/lightbox.min.css'}}" >
  
</head>
{{-- navbar --}}
<body>
    <div class="bg">
    <header class="headernav">
        <a href="/" class="logo d-flex align-items-center">
            <img src="{{asset('assets/img/logowik.png')}}" width="50px" alt="">
            <p style="margin-left: 20px; margin-top: 15px" >
            SMK WIKRAMA BOGOR
            </p>
        </a>
        <nav class="navbar">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#tentang">Tentang Kami</a></li>
                <li><a href="#jurusan">Jurusan</a></li>
                <li><a href="#hubungi">Hubungi Kami</a></li>
                <li><a href="/">LOGIN</a></li>

            </ul>
        </nav>
    </header>
    {{-- beranda --}}
    <div class="container mt-5 text" id="beranda" style="margin-top:50px;">
        <div class="row align-items-center">
            <div class="col-12 order-2 order-md-1 text-center text-md-left">
                <h2 class="text-white font-weight-bold mb-3">PPDB TP 2023-2024<br>SMK Wikrama Bogor</h2>
                <p class="text-white mb-5">Ayo! segera daftarkan dirimu ke SMK Wikrama dengan cara klik <b>PENDAFTARAN PPDB</b> dibawah ini! <br><strong>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.</strong></p>
                <a href="/" class="btn btn-main-md shadow-md bordered font-weight-bold button">Pendaftaran PPDB</a>
            </div>
        </div>
        <div class="d-flex" style="margin-left: 30px">
            <div class="card text-center" style="width: 30%">
                <div class="card-body d-flex justify-content-end" >
                    <span class="text-dark"><b>MOTTO</b><br>
                        <p>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
                    </span>
                </div>
            </div>
            <div class="card text-center" style="width: 30%">
                <div class="card-body d-flex justify-content-end" >
                    <span class="text-dark"><b>AFIRMASI</b><br>
                        <p>Padamu negeri - kami berjanji - lulus Wikrama siap membangun negeri</p>
                    </span>
                </div>
        
            </div>
            <div class="card text-center" style="width: 30%">
                <div class="card-body d-flex justify-content-center" >
                    <span class="text-dark"><b>ATITUDE</b><br>
                        <p>Aku ada lingkunganku bahagia</p>
                    </span>
                </div>
            </div>  
        </div>
        </div>
    </section>

<section class="section video" data-section="section5" id="tentang">
    <div class="container" style="display: flex">
      <div class="row">
        <div class="col-md-6 align-self-center" data-aos="fade-right" data-aos-duration="1000">
          <div class="left-content">
            <span>our presentation is for you</span>
            <h4>Watch the video to learn more <em>about SMK Wikrama Bogor</em></h4>
            <p>SMK Wikrama Bogor didirikan oleh Ir. Itasia Dina Sulvianti dan Dr. H. RP Agus Lelana pada tahun 1996. Kami pernah secara langsung mendengar kisah pendiriannya yang berawal dari bekas gudang KUD dengan siswa awal 34. 
            <br><br>SMK Wikrama Bogor merupakan salah satu sekolah menengah kejuruan ternama bahkan tingkat Jawa Barat dan Nasional. Prestasinya memang luar biasa dari tingkat nasional hingga internasional. Ini memang lembaga pendidikan unggulan.</p>
            <a href="https://www.youtube.com/" class="btn btn-main-md shadow-md bordered font-weight-bold button">Youtube Channel Wikrama</a>
          </div>
        </div>
        <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000">
          <article class="video-item">
            <div class="video-caption">
              <h4>Profile TEFA Wikrama Bogor</h4>
            </div>
            <figure>
              <a href="https://www.youtube.com/watch?v=Wag6WcgKO6o" class="play"><img src="{{ asset('assets/img/thumbyt.webp') }}"></a>
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>
</section>

    <div class="container mt-5 text" id="jurusan" style="margin-top:50px;">
        <div class="row align-items-center">
            <div class="col-12 order-2 order-md-1 text-center text-md-left">
                <h2 class="text-dark font-weight-bold mb-3">Jurusan</h2>
            </div>
        </div>
    </div>

    <section>
        <div id="carouselExampleControls" class="carousel slide d-flex" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://smkwikrama.sch.id/storage/1684129330-post.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="text-white">Perhotelan</h4>
                    
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://smkwikrama.sch.id/storage/1684128837-post.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="text-white">Kuliner</h4>
                    
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://smkwikrama.sch.id/storage/1684130576-post.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="text-white">Pemasaran</h4>
                    
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://smkwikrama.sch.id/storage/1684133319-post.jpg" alt="Four slide">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="text-white">Desain Komunikasi Visual</h4>
                    
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://smkwikrama.sch.id/storage/1684134023-post.jpg" alt="Five slide">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="text-white">Pengembangan Perangkat Lunak & Gim </h4>
                    
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://smkwikrama.sch.id/storage/1684480346-post.jpg" alt="Six slide">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="text-white">Teknik Jaringan Komputer dan Telekomunikasi</h4>
                    
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://smkwikrama.sch.id/storage/1684134948-post.jpg" alt="Seven slide">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="text-white">Manajemen Perkantoran dan Layanan Bisnis</h4>
                    
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>

    <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="contact-mf">
                <div id="contact" class="box-shadow-full">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="title-box-2">
                        <h5 class="title-left" id="hubungi">
                          Send Message To Us
                        </h5>
                      </div>
                      <div>
                          <form action="" method="post" role="form" class="contactForm">
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                              </div>
                            </div>
                            <div class="col-md-12 mb-3">
                              <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                              </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                  <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                              <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="title-box-2 pt-4 pt-md-0">
                        <h5 class="title-left">
                          Us Address & Social Media
                        </h5>
                      </div>
                      <div class="more-info">
                        <ul class="list-ico text-dark">
                          <li><span class="ion-ios-location"></span> Jl. Raya Wangun Kelurahan Sindangsari Bogor Timur 16720</li>
                          <li><span class="ion-ios-telephone"></span> 0251-8242411  /  082221718035</li>
                        </ul>
                      </div>
                      <div class="socials">
                        <ul>
                          <li><a href="https://www.facebook.com/smkwikrama/"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                          <li><a href="https://www.instagram.com/smkwikrama/"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                          <li><a href="https://www.youtube.com/@multimediawikrama7482"><span class="ico-circle"><i class="ion-social-youtube"></i></span></a></li>
                          <li><a href="https://smkwikrama.sch.id/"><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="copyright-box">
                  <p class="copyright">&copy; Copyright <strong>Huntara Fabian Suba</strong>. All Rights Reserved</p>
              </div>
            </div>
          </div>
        </footer>
      </section>

 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>