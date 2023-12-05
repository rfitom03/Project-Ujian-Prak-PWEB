@php 
$site_name = get_setting_value('_site_name');
$jumbotron = get_section_data('JUMBOTRON');
$location = get_setting_value('_location');
$site_description = get_setting_value('_site_description');

$youtube = get_setting_value('_youtube');
$instagram = get_setting_value('_instagram');
$twitter = get_setting_value('_twitter');
$facebook = get_setting_value('_facebook');

$about = get_section_data('ABOUT');
@endphp
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{$site_name}}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top">{{$site_name}}</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#partner">Member</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#music">Music</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#media">Media</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
      <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="{{ Storage::url($jumbotron->thumbnail) }}" alt="..." />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">{{$jumbotron->title}}</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">{!! strip_tags($jumbotron->content) !!}</p>
      </div>
    </header>
    <!-- Partner Section-->
    <section class="page-section portfolio" id="partner">
      <div class="container">
        <!-- Partner Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Partner</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- Partner Grid Items-->
        <div class="row justify-content-center">
          <!-- Partner Item 1-->
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
              <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
              </div>
              <img class="img-fluid" src="assets/img/partner/ador.jpeg" alt="..." />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
      <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">{{$about->title}}</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
          <div class="col-lg-6 ms-auto text-center"><img src="{{ Storage::url($about->thumbnail) }}" class="w-75" /></div>
          <div class="col-lg-5 me-auto lead">
            {!! $about->content !!}
          </div>
        </div>
      </div>
    </section>

    <!-- Music Section -->
    <!-- Music Section-->
<section class="page-section" id="music">
  <div class="container">
    <!-- Music Section Heading-->
    <h2 class="page-section-heading text-center text-uppercase mb-0">Music</h2>
    <!-- Icon Divider-->
    <div class="divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon"><i class="fas fa-music"></i></div>
      <div class="divider-custom-line"></div>
    </div>
    <!-- Music Section Content-->
    <div class="row">
      <div class="col-lg-12 mx-auto text-center">
        <p>Check out our latest music video:</p>
        <!-- Embedded Video -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/jOTfBlKSQYY" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>

    <!-- Footer-->
    <footer class="footer text-center" id="media">
      <div class="container">
        <div class="row">
          <!-- Footer Location-->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">
              {{$location}}
            </p>
          </div>
          <!-- Footer Social Icons-->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            @if ($youtube)
            <a class="btn btn-outline-light btn-social mx-1" href="{{$youtube}}" target="blank"><i class="fab fa-fw fa-youtube"></i></a>
            @endif

            @if ($youtube)
            <a class="btn btn-outline-light btn-social mx-1" href="{{$instagram}}" target="blank"><i class="fab fa-fw fa-instagram"></i></a>
            @endif

            @if ($twitter)
            <a class="btn btn-outline-light btn-social mx-1" href="{{$twitter}}" target="blank"><i class="fab fa-fw fa-twitter"></i></a>
            @endif
            
            @if ($facebook)
            <a class="btn btn-outline-light btn-social mx-1" href="{{$facebook}}" target="blank"><i class="fab fa-fw fa-facebook"></i></a>
            @endif
            
          </div>
          
          <!-- Footer About Text-->
          <div class="col-lg-4">
            <h4 class="text-uppercase mb-4">About Newjeans</h4>
            <p class="lead mb-0">
              {!! strip_tags($site_description) !!}
              .
            </p>
          </div>
        </div>
      </div>
    
    
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
      <div class="container"><small>Copyright &copy; {{$site_name}} 2023</small></div>
    </div>
    <!-- Partner Modals-->
    <!-- Partner Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
          <div class="modal-body text-center pb-5">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Partner Modal - Title-->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Member</h2>
                  <!-- Icon Divider-->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Partner Modal - Image-->
                  <img class="img-fluid rounded mb-5" src="assets/img/partner/minji.webp" alt="..." />
                  <!-- Partner Modal - Text-->
                  <p>Nama panggung: Minji (민지)</p>
                  <p>Nama lahir: Kim Minji (김민지)</p> 
                  <p>Tanggal lahir: 7 Mei 2004</p> 
                  <p>Zodiak: Taurus</p>
                  <p>Tingi badan: 169 cm</p>
                  <p>Kebangsaan: Korea</p> 
                  <p>Representatif Emoji: 🐻</p>
                  <p> Minji dikenal dengan bakat vokalnya yang kuat dan kemampuan menari yang energik.
                    Dia memiliki penampilan yang menawan dan kepribadian yang ramah.
                    Minji sering kali menjadi sorotan karena gaya panggungnya yang menarik dan karismanya yang memikat.
                    Dia telah berkontribusi dalam kesuksesan New Jeans dengan lagu-lagu populer mereka.</p>
                  <img class="img-fluid rounded mb-5" src="assets/img/partner/hanni.webp" alt="..." />
                  <!-- Partner Modal - Text-->
                  <p>Nama panggung: Hanni (하니)</p>
                  <p>Nama lahir: Phạm Ngọc Hân / Hanni Pham</p> 
                  <p>Tanggal lahir: 6 Oktober 2004</p> 
                  <p>Zodiak: Libra</p>
                  <p>Tingi badan: 161.7 cm</p>
                  <p>Kebangsaan: Vietnam-Australia</p>
                  <p>Representatif Emoji: 🐰</p>
                  <p> Hanni telah menunjukkan minat yang besar dalam dunia musik dan seni pertunjukan.
                    Dia mengambil kelas vokal dan menari sejak usia dini, mengasah bakatnya dan mempersiapkan dirinya untuk karir di industri hiburan.
                    Pada tahun 2020, Hanni mengikuti audisi untuk menjadi anggota dari girl grup yang sedang dibentuk, New Jeans.</p>
                  <img class="img-fluid rounded mb-5" src="assets/img/partner/daniel.webp" alt="..." />
                  <p>Nama panggung: Danielle (다니엘)</p>
                  <p>Nama lahir: Danielle Marsh / Mo Jihye (모지혜)</p> 
                  <p>Tanggal lahir: 11 April 2005</p> 
                  <p>Zodiak: Aries</p>
                  <p>Tingi badan: 165 cm</p>
                  <p>Kebangsaan: Korea-Australia</p>
                  <p>Representatif Emoji: 🐶</p>
                  <p> Danielle memiliki suara indah dan penampilan yang cantik dengan campuran darah Korea dan Australia
                    Bakatnya sudah terlihat sejak dia kecil.                   
                    Dia sering tampil di acara TV ketika masih kecil seperti Rainbow Kindergarten, Jesse's Play Kitchen, My Heart's Crayon, dan lain-lain.
                    Selain itu, Danielle New Jeans juga memiliki darah Korea dari ibunya dan ayahnya orang Australia. Jadi, tak heran jika dia lancar berbahasa Inggris.</p>
                  <img class="img-fluid rounded mb-5" src="assets/img/partner/haerin.webp" alt="..." />
                  <p>Nama panggung: Haerin (해린)</p>
                  <p>Nama lahir: Kang Haerin (강해린)</p> 
                  <p>Tanggal lahir: 15 Mei 2006</p> 
                  <p>Zodiak: Taurus</p>
                  <p>Tingi badan: 164.5 cm</p>
                  <p>Kebangsaan: Korea</p>
                  <p>Representatif Emoji: 🐹</p>
                  <p> Meskipun masih sangat muda, Haerin New Jeans sudah sangat sukses dalam karirnya sebagai idol K-Pop.
                      Haerin juga merupakan brand ambassador dari merek mewah ternama yaitu Dior.                      
                      Keberhasilan Haerin tidak lepas dari penampilannya yang memukau dan suara bagusnya.                      
                      Dia sering dipanggil dengan nama Kitty Kang karena wajahnya yang mirip dengan kucing.</p>
                  <img class="img-fluid rounded mb-5" src="assets/img/partner/hyein.webp" alt="..." />
                  <p>Nama panggung: Hyein (혜인))</p>
                  <p>Nama lahir: Lee Hyein (이혜인)</p> 
                  <p>Tanggal lahir: 21 April 2008</p> 
                  <p>Zodiak: Taurus</p>
                  <p>Tingi badan: 170 cm</p>
                  <p>Kebangsaan: Korea</p>
                  <p>Representatif Emoji: 🐣</p>
                  <p> Hyein menjadi member termuda di grup NewJeans. Ia debut pada tanggal 1 Agustus 2022 lalu di usia 14 tahun.
                    Sejak umur 8 tahun, Hyein telah terjun ke dunia hiburan. Ia berkarier sebagai model cilik dan tampil di sejumlah majalah.                    
                    Hyein pernah muncul di majalah Lemon Tree Magazine, Style Magazine Mallow, dan berperan dalam Jumbo Kids Model Selection pada tahun 2014.</p>
                    <button class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="fas fa-xmark fa-fw"></i>
                    Close Window
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>
