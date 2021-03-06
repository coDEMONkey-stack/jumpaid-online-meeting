<html lang="en">
<!-- VIEW FRONTEND JUMPA ID-->
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=no" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <meta property="og:image" content="https://jumpa.id/assets/images/logo/jumpa_id.png" />
  <meta property="og:title" content="Jumpa.ID - Telekonferensi Video, Rapat Online" />
  <meta property="og:description" content="Jumpa.id adalah platform Konferensi video daring & sedaring / webinar dengan hemat bandwidth / Kuota internet dari pengembang aplikasi local Indonesia." />
  <meta name="thumbnailUrl" content="https://jumpa.id/assets/images/logo/jumpa_id.png" itemprop="thumbnailUrl" />

  <title><?= $global['nama_perusahaan'] ?> - Jumpa.ID, PT. Jumpa Daring Indonesia, Telekonferensi, Telekonferensi Video, Server Lokal Indonesia, Rapat Online, Meeting Online, Video Conferencing, Web Conferencing, Webinars, Screen Sharing, Pengembang Aplikasi Indonesia</title>
  <meta content="Jumpa.id adalah platform Konferensi video daring & sedaring / webinar dengan hemat bandwidth / Kuota internet dari pengembang aplikasi local Indonesia." itemprop="headline"> 
  <meta content="Jumpa.ID, PT. Jumpa Daring Indonesia, Telekonferensi, Telekonferensi Video, Server Lokal Indonesia, Rapat Online, meeting Online, Video Conferencing, Web COnferencing, Webinars, Screen Sharing, Pengembang Aplikasi Indonesia" name="keywords">  

  <meta content="Jumpa.ID" name="marisa 081316389771">
  
  <!-- Favicons -->
  <!-- <link href="<?= base_url('assets/home/') ?>img/favicon.png" rel="icon"> -->
  <link href="<?= base_url('assets/') ?>images/logo/<?= $global['logo']?>" rel="icon">  
  <link href="https://jumpa.id/assets/images/logo/jumpa_id.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="<?= base_url('assets/home/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/home/') ?>vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/home/') ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/home/') ?>vendor/venobox/venobox.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/home/') ?>vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/home/') ?>vendor/aos/aos.min.css" rel="stylesheet">
  <!-- fancybox https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css -->
  <link rel="stylesheet" href="<?= base_url('assets/home/') ?>vendor/fancyapps/jquery.fancybox.min.css" />

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/home/') ?>css/style.min.css" rel="stylesheet">
</head>
<body>
    


<script type="text/javascript">
/***********************************************
* Disable Text & Image Selection - Dynamic DHTML
***********************************************/
function disableSelection(target){
if (typeof target.onselectstart!="undefined") //IE route
 target.onselectstart=function(){return false}
else if (typeof target.style.MozUserSelect!="undefined") //Firefox route
 target.style.MozUserSelect="none"
else //All other route (ie: Opera)
 target.onmousedown=function(){return false}
target.style.cursor = "default"
}
disableSelection(document.body)
</script>

<script language=javascript>
function clickIE4(){
if (event.button==2){
return false;
}
}
function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
return false;
}
}
}
if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}
document.oncontextmenu=new Function("return false")
</script>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">
    <nav class="nav-menu">
      <ul>
        <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#validasi"><i class="bx bx-check-circle"></i> <span>Validasi</span></a></li>
        <li><a href="#event"><i class="bx bx-calendar-event bx-burst"></i> <span>Event Terkini</span></a></li>
        <li><a href="#fitur"><i class="bx bx-book-content"></i> <span>Fitur</span></a></li>
        <li><a href="#keunggulan"><i class="bx bx-server"></i> <span>Keungulan</span></a></li>
        <li><a href="#price"><i class='bx bx-purchase-tag-alt'></i> <span>Daftar Harga</span></a></li>  
        <li><a href="#contact"><i class="bx bx-envelope"></i> <span>Kontak</span></a></li>
      </nav><!-- .nav-menu -->
    </header><!-- End Header -->
    
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="home"> <!-- class="d-flex flex-column justify-content-center"> -->
      <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
       <div class=   col-6 justify-content-center d-flex >
         <!-- <div class="col-lg-5 col-xs-10 align-items-center"> -->
            <h1 class="text-center"> <img src="<?= base_url('assets/') ?>images/logo/<?= $global['logo'] ?>" style="max-width: 135px; "></h1>
          <!--  <p class="text-center"> /** < ?= $global['fixed_content'] */?> </p> -->
            <p class="text-center"> <p style="font-size: 15px;"><b>Jumpa.id</b> adalah platform Konferensi video daring & sedaring / webinar dari pengembang lokal dengan kecepatan internet minimum 32kbps untuk video dan 16kbps untuk audio dengan kualitas baik dan JELAS, sehingga hemat bandwidth / kuota data internet hingga 93% dibandingkan dengan platform konferensi video non-lokal. 
                <div class="social-links text-center">
            <div class="row">
              <!-- <div class="col-4"> -->
              <div class="col-4">
             
             <!--  <img  src=" <?=base_url('assets/images/download-jumpa-on-playstore.png')?>" title="Download JUMPA on Google Playstore" style="max-width: 200px; max-height: 200px" onClick="window.open('https://play.google.com/store/apps/developer?id=Jumpa+Daring+Indonesia')"> -->
             <div class="col-xs-6 col-sm-4">
                 <div class="d-none d-md-block"> <!-- Hide dari layar xs, sm dan md. Visibile only layar lg -->
                 <img src="<?=base_url('assets/images/new_all_icons-header-jumpa_id_minified.png')?>" title="Keunggulan Platform Jumpa.id"  class="img-intro" onClick="window.location.href='#keunggulan'">
                 
                <!--<img src="</?=base_url('assets/images/new_all_icons-header-jumpa_id_minified.png')?>" title="Keunggulan Platform Jumpa.id"  style="max-width:350px; max-height:220px;" onClick="window.location.href='#keunggulan'"> -->
                </div>
            </div>
                <br>
               <!-- <img src="<?=base_url('assets/')?>images/icon-mobil.png" style="width:75px; height:40px;"><br>
                  <span><small>Trafik internet lebih cepat</small></span><br><br>
                </div>
                <div class="col-4"><img src="<?=base_url('assets/')?>images/icon-rupiah.png" style="width:75px; height:40px;"></a><br>
                  <span><small>Hemat Bandwidth atau kuota data hingga 80% dibanding aplikasi non-lokal </small></span><br><br>
                </div><div class="col-4"><img src="<?=base_url('assets/')?>images/icon-batre.png" style="width:auto; height:40px;"><br>
                  <span style="font-size:auto">Meningkatkan pertumbuhan ekonomi digital dalam negeri secara konkret</small></span><br><br> -->
                </div>
              </div>
              </div>
            </div>
            <br>
            <br>
          <!--  <div class="col-md-6 col-xs-12 ">  w-auto p-3 -->
            <div class="col-6 align-items-stretch" >
            <br>
            <br><div class="info">
              <img src="<?= base_url('assets/') ?>images/icon-login_minified.png" style="max-width: 100%; height=auto;"></div>
              <div class="social-links">
               <div class="col-12 align-items-center">
               <center><div  class="btn btn-danger btn-rounded text-center" onClick="window.open('https://dinda.jumpa.id/rtc/dispatch')">Join Meeting</button></div></center>
               <br> 
               <center><div  class="btn btn-primary btn-rounded text-center" onClick="window.open('https://dinda.jumpa.id/login')">Log In</button></div></center>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Hero -->
<br>
<br>
<br>
      </div>
    </section><!-- End Contact Section -->
    
        <!-- ======= VALIDASI Section ======= -->
        <section id="validasi" class="services portfolio section-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Validasi</h2>
              <p>Informasi Legalitas dan Validasi Kami</p>
            </div>

        <!--<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <!--  <div class="col-lg-6 col-md-6 portfolio-item ">
                  <div class="portfolio-wrap">
                    <img src="<//?= base_url('assets/images/keunggulan_jumpa_cloud.jpg') ?>" class="img-fluid" alt="" style=" width:900px; height:250px">
                    <div class="portfolio-info">
                      <h4></h4>
                      <div class="portfolio-links">
                        <a href="<//?=  base_url('assets/images/keunggulan_jumpa_cloud.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="Aplikasi Jumpa.id"><i class="bx bx-plus"></i></a>
                      </div>
                    </div>
                  </div>
           </div> 
            <!--    <div class="col-lg-6 col-md-6 portfolio-item ">
                  <div class="portfolio-wrap">
                    <img src="<//?= base_url('assets/images/graph-new.jpg') ?>" class="img-fluid" alt="" style="width:900px; height:250px">
                    <div class="portfolio-info">
                      <h4></h4>
                      <div class="portfolio-links">
                        <a href="<//?=  base_url('assets/images/graph-new.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="Grafik Penggunaan Bandwidth / Kuota Data Internet"><i class="bx bx-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>      
        </div>-->
            <div class=" portofolio-container" data-aos="fade-up" data-aos-delay="200ms">
            <div class="col-sm-12 align-items-center d-flex justify-content-center">
              
              <div class="col-sm-12">
                <div class="row">
                  <?php foreach ($validasi as $row) : ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                      <div class="icon-box iconbox-blue col-sm-12 d-flex align-items-center">
                        <center>
                        <img class="img-fluid col-sm-12 align-items-center" style="max-width:350px" src="<?= base_url('assets/images/validasi/' . $row->gambar) ?>">
                        <br>
                      <h6><b><i><?= $row->judul ?></i></b></h6>
                      <p><?= $row->deskripsi ?></p>
                      </center>
                    </div>
                  </div>
                <?php endforeach ?>
              </div>
            </div>
          </div>

        </div>
      </section><!-- End VALIDASI Section -->
      
      <!-- SINGLE BANNER (untuk banner event yang akan berlangsung) SECTION -->
      <section id="event" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Event Terkini</h2>
          <p>Informasi event terkini yang akan berlangsung.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php foreach ($banner as $row) : ?>
            <div class="col-lg-12 col-md-12 portfolio-item">
            <center>
              <div class="portfolio-wrap" style="max-width:72%">
                <img src="<?= base_url('assets/images/single_banner/' . $row->gambar) ?>" class="img-fluid" alt="" style="text-align:center;max-width:100%; max-height:auto%">
                <div class="portfolio-info">
                  <h4><?= $row->judul ?></h4>
                  <div class="portfolio-links">
                    <a href="<?= base_url('assets/images/single_banner/' . $row->gambar) ?>" data-gall="portfolioGallery" class="venobox" title="<?= $row->judul ?>"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
              </div>
             </center>
            </div>
          <?php endforeach ?>
        </div>

      </div>
    </section><!-- END SINGLE BANNER SECTION -->
        
        <!-- ======= FITUR Section ======= -->
        <section id="fitur" class="services portfolio section-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Fitur</h2>
              <p>Informasi Fitur Kami</p>
            </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-6 col-md-6 portfolio-item ">
                  <div class="portfolio-wrap">
                    <img src="<?= base_url('assets/images/keunggulan_jumpa_cloud.jpg') ?>" class="img-fluid" alt="" style=" width:900px; height:250px">
                    <div class="portfolio-info">
                      <h4></h4>
                      <div class="portfolio-links">
                        <a href="<?=  base_url('assets/images/keunggulan_jumpa_cloud.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="Aplikasi Jumpa.id"><i class="bx bx-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>   
                <div class="col-lg-6 col-md-6 portfolio-item ">
                  <div class="portfolio-wrap">
                    <img src="<?= base_url('assets/images/graph-new.jpg') ?>" class="img-fluid" alt="" style="width:900px; height:250px">
                    <div class="portfolio-info">
                      <h4></h4>
                      <div class="portfolio-links">
                        <a href="<?=  base_url('assets/images/graph-new.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="Grafik Penggunaan Bandwidth / Kuota Data Internet"><i class="bx bx-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>      
        </div>
            <div class=" portofolio-container" data-aos="fade-up" data-aos-delay="200ms">
            <div class="col-sm-12 align-items-center">
              
              <div class="col-sm-12">
                <div class="row">
                  <?php foreach ($fitur as $row) : ?>
                    <div class="col-lg-6 col-md-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                      <div class="icon-box iconbox-blue">
                        <img class="img-fluid" style="max-width:73px" src="<?= base_url('assets/images/fitur/' . $row->gambar) ?>">
                        <br>
                      <h6><b><i><?= $row->judul ?></i></b></h6>
                      <p><?= $row->deskripsi ?></p>
                    </div>
                  </div>
                <?php endforeach ?>
              </div>
            </div>
          </div>

        </div>
      </section><!-- End FITUR Section -->

      <!-- ======= KEUNGGULAN Section ======= -->
      <section id="keunggulan" class="services">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Keunggulan</h2>
            <p>Informasi Keunggulan Kami</p>
          </div>

          <div class="row">
            <?php foreach ($keunggulan as $row) : ?>
              <div class="col-lg-3 col-md-6 d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box iconbox-blue">
                  <img class="img-fluid" style="max-width:200px" src="<?= base_url('assets/images/keunggulan/' . $row->gambar) ?>">

                  <h4><?= $row->judul ?></h4>
              </div>
            </div>
            
          <?php endforeach ?>
        </div>
    <p style="text-align:right"><b>*Note: Sedang dalam pengembangan.</b></p>
      </div>
    </section><!-- End KEUNGGULAN Section -->
<main>
    <!-- ======= PRICE LIST Section ======= -->
    <section id="price" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Price List</h2>
          <p>KONTAK KAMI UNTUK DETAIL HARGA</p>
        </div>

        <div class="row">
          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="<?= base_url('home/post_message') ?>" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Name Anda</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Anda" data-rule="minlen:4" data-msg="Mohon masukkan setidaknya minimal 4 karakter" required />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email Anda</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email Anda" data-rule="email" data-msg="Mohon masukkan email valid" required />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Judul Pesan</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Pesan" data-rule="minlen:4" data-msg="Judul Pesan setidaknya minimal 8 karakter" required />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Isi Pesan</label>
                <textarea class="form-control" name="isi" rows="5" data-rule="required" data-msg="Silahkan tanyakan detail harga ke Kami" placeholder="Silahkan tanyakan detail harga ke Kami" required></textarea>
                <div class="validate"></div>
              </div>
              <div class="form-group text-center">
                <?php if($this->session->flashdata('message')): ?>
                 <?php if($this->session->flashdata('message') == TRUE): ?>
                       <div class="mb-3">
                            <div>Your message has been sent. Thank you!</div>
                        </div>
                 <?php elseif($this->session->flashdata('message') == FALSE): ?>
                      
                 <?php endif; ?>
            <?php endif; ?>
          </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div><!-- ======= END PRICE LIST Section ======= -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <p>Silahkan hubungi Kami untuk info terkini, kritik, dan saran.</p>
        </div>

        <div class="row">
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <!--<div class="address">
                <i class="icofont-certificate"></i>
                <h4>Nomor Keanggotaan <a href="https://idnic.id" target="_blank">IDNIC</a>-<a href="https://apjii.or.id" target="_blank">APJII</a>:</h4>
                <p>S1740</p>
              </div>-->    
                
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Kantor:</h4>
                <p><?= $global['lokasi'] ?></p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p><?= mailto($global['email']) ?></p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Telepon/WhatsApp:</h4>
                <p>
                  <a href="https://wa.me/6281316389771" target="_blank"><?= $global['telepon'] ?></a>
                </p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1982.9879947784216!2d106.775045!3d-6.266888!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1ac4818ae33%3A0x9c9d63f0a3677f86!2sJl.%20Ciputat%20Raya%20No.4b%2C%20RT.6%2FRW.2%2C%20Pd.%20Pinang%2C%20Kec.%20Kby.%20Lama%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012310!5e0!3m2!1sid!2sid!4v1597940014877!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="<?= base_url('home/post_kontak') ?>"  method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Nama Anda</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Anda" data-rule="minlen:4" data-msg="Masukkan setidaknya minimal 4 karakter" required />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email Anda</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email Anda" data-rule="email" data-msg="Mohon masukkan email valid" required />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Judul Pesan</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Pesan" data-rule="minlen:4" data-msg="Judul Pesan setidaknya minimal 8 karakter" required />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Pesan</label>
                <textarea class="form-control" name="isi" rows="5" data-rule="required" data-msg="Silahkan kirim sesuatu kepada Kami" placeholder="Silahkan kirim sesuatu kepada Kami" required></textarea>
                <div class="validate"></div>
              </div>
              <div class="form-group text-center">
            <?php if($this->session->flashdata('kontak')): ?>
                 <?php if($this->session->flashdata('kontak') == TRUE): ?>
                       <div class="mb-3">
                            <div>Your message has been sent. Thank you!</div>
                        </div>
                 <?php elseif($this->session->flashdata('kontak') == FALSE): ?>
                      
                 <?php endif; ?>
            <?php endif; ?>
          </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
           </form>
          </div>
        </div>
<div class="fixed-action-btn smooth-scroll" style="bottom: 45px; right: 24px;">
  <a href="#top-section" class="btn-floating btn-large red">
    <i class="fas fa-arrow-up"></i>
  </a>
</div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3><?= $global['nama_perusahaan'] ?></h3>
      <p> <?= $global['deskripsi_perusahaan']?> </p>
   <!--   <div class="social-links">
        <a href="<?= $global['sosmed_1'] ?>" class="globe"><i class="bx bx-globe"></i></a>
        <a href="<?= $global['sosmed_2'] ?>" class="youtube"><i class="bx bxl-youtube"></i></a>
        <a href="<?= $global['sosmed_3'] ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="<?= $global['sosmed_4'] ?>" class="instagram"><i class="bx bxl-skype"></i></a>
        <a href="<?= $global['sosmed_5'] ?>" class="soundcloud"><i class="bx bxl-linkedin"></i></a>
      </div> -->
      <div class="copyright">
        &copy; Copyright 2020 <strong><span><?= $global['nama_perusahaan']  ?></span></strong>.
      </div>
    </div>
  </footer><!-- End Footer -->
      


  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/home/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/home/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/home/') ?>vendor/jquery.easing/jquery.easing.min.js"></script>
  <!--<script src="<?= base_url('assets/home/') ?>vendor/php-email-form/validate.js"></script>-->
  <script src="<?= base_url('assets/home/') ?>vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url('assets/home/') ?>vendor/counterup/counterup.min.js"></script>
  <script src="<?= base_url('assets/home/') ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('assets/home/') ?>vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url('assets/home/') ?>vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url('assets/home/') ?>vendor/typed.js/typed.min.js"></script>
  <script src="<?= base_url('assets/home/') ?>vendor/aos/aos.min.js"></script>

  <!--<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>-->
  <!-- Main JS File -->
  <script src="<?= base_url('assets/home/') ?>js/main.min.js"></script>
  
<!-- Flyer Mengambang by ilham 087784873757  
    <body>
    <link type="text/css" rel="stylesheet" href="/assets/home/css/style-2.css">
    <div class="kartu">
		<input type="checkbox" id="inputCheck" hidden>
	  <div id="closed"></div>
		<label><a href="#popup"  for="inputCheck" class="fab-btn" title="Lihat Event"><span>+</span></a>
			<span class="popup-link" ></span>
		</label>
		<div class="popup-wrapper" id="popup">
        	<div class="popup-container ">
		        <center>
			       <h2>Event Jumpa.id</h2> <br/><br/>
			      <p>
			              <img src ="https://jumpa.id/assets/images/banner/BANNER-TALKSHOW-24-FEB-2021-landscape.jpg" class="responsive zoom"  alt="" /><br><br><br>
			              <b>Register Now : <a href="https://cyberthreat.id/readiklan/148/Banner-Talkshow-Cybercorner-Membedah-Bahaya-Ancaman-Siber" target="_blank">https://cyberthreat.id/readiklan/148/Banner-Talkshow-Cybercorner-Membedah-Bahaya-Ancaman-Siber</b></a>
			       </p>
   			       <h6>Desktop User : Arahkan mouse ke gambar untuk memperbesar <br/>
   			           Mobile User  : Tap 1x pada gambar untuk memperbesar
   			       </h6> 
		        </center>
	        </div>
	   <a class="popup-close" href="#" title="Tutup" >X</a>
	   <span href="#closed"></span>
	   </div>
    </div> 
    </body>
// END Flyer Mengambang by ilham 087784873757 -->

</body>
</html>