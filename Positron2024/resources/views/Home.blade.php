@extends('layouts.app')

@section('title', 'Home Page')

@section('content')







<!-- section home -->
<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 mb-5 pb-5 pb-lg-0 mb-lg-0">
                <h4 id="positron" class="text-white mb-4 reveal-text" data-text="POSITRON 2024">POSITRON 2024</h4>
            </div>

            <div class="hero-image-wrap col-lg-6 col-12 mt-3 mt-lg-0 mb-5">
                <img src="images/positron copy.png" class="hero-image img-fluid" alt="education online books" />
            </div>
        </div>
    </div>
</section>

<section class="featured-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
            </div>
        </div>
    </div>
    </div>
    </div>
</section>

<!-- header akhir -->

<!-- video slider -->
<div style="height: 100%; overflow-x: hidden; text-align: center">
    <div class="csslider infinity" id="slider1">
        <input type="radio" name="slides" checked="checked" id="slides_1" />
        <input type="radio" name="slides" id="slides_2" />
        <input type="radio" name="slides" id="slides_3" />
        <input type="radio" name="slides" id="slides_4" />
        <input type="radio" name="slides" id="slides_5" />
        <input type="radio" name="slides" id="slides_6" />
        <input type="radio" name="slides" id="slides_7" />
        <input type="radio" name="slides" id="slides_8" />
        <input type="radio" name="slides" id="slides_9" />
        <input type="radio" name="slides" id="slides_10" />
        <ul>
            <li>
                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/p6auJJ2nwhA?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                
            </li>
            <li>
                
                    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/zAUalRzKFDk?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                
            </li>
            <li>
                
                    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/DNweVuwPOWE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                
            </li>
            <li>
                
                    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/2HtzSQAZhPI?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                
            </li>
            <li>
            
                    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/m6vjf8YyhTA?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            
            </li>
            <li>
              
                    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/_PZargVQ0A8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
           
            </li>
            <li>
          
                    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/IMBHiRmRnfc?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
   
            </li>
            <li>
            
                    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/9ibsHRq3CWI?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
             
            </li>
            <li>
            
                    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/0AerErHz9fA?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              
            </li>
            <li>
            
                    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/8yNVISc-B0k?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
             
            </li>
            <li>
           
                    <video controls preload>
                        <source src="" />
                    </video>
      
            </li>
            <li>
         
                    <video controls preload>
                        <source src="" />
                    </video>
   
            </li>
        </ul>
        <div class="arrows">
            <label for="slides_1"></label>
            <label for="slides_2"></label>
            <label for="slides_3"></label>
            <label for="slides_4"></label>
            <label for="slides_5"></label>
            <label for="slides_6"></label>
            <label for="slides_7"></label>
            <label for="slides_8"></label>
            <label for="slides_9"></label>
            <label for="slides_10"></label>
            <label class="goto-first" for="slides_1"></label>
            <label class="goto-last" for="slides_10"></label>
        </div>
        <div class="navigation">
            <div>
                <label for="slides_1"></label>
                <label for="slides_2"></label>
                <label for="slides_3"></label>
                <label for="slides_4"></label>
                <label for="slides_5"></label>
                <label for="slides_6"></label>
                <label for="slides_7"></label>
                <label for="slides_8"></label>
                <label for="slides_9"></label>
                <label for="slides_10"></label>
            </div>
        </div>
    </div>
</div>
<!-- akhir -->
<!-- Section Filosofi -->
<section class="py-lg-5">
    <section class="book-section section-padding" id="section_2">
        <div class="container">
            <div class="row">
                <section class="filosofi">
                    <div id="tsparticles"></div>
                    <section class="filsof">
                        <div class="content">
                            <!-- Logo dan penjelasan -->
                            <img src="{{ asset('images/positron.png') }}" alt="Logo" class="logo-img" />
                            <p>
                                Logo kami mewakili semangat kebersamaan dan petualangan. Setiap elemen di dalam logo memiliki makna tersendiri yang mencerminkan nilai-nilai utama yang kami pegang.
                            </p>
                        </div>

                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/slide 3.png') }}" alt="Slide 3" />
                                    <div class="cost"></div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/slide 4.png') }}" alt="Slide 2" />
                                    <div class="cost"></div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/slide 5.png') }}" alt="Slide 5" />
                                    <div class="cost dark-text"></div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/slide 6.png') }}" alt="Slide 6" />
                                    <div class="cost dark-text"></div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/slide 7.png') }}" alt="Slide 7" />
                                    <div class="cost dark-text"></div>
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('images/slide terakhir.png') }}" alt="Slide 7" />
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
        </div>
    </section>
</section>


<!--section akhir filosofi  -->



<!-- section guide -->

<section class="manual-book-section py-5" id="section_3">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo Manual Book -->
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/Group (2).png') }}" alt="Manual Book Logo" class="img-guide" style="max-width: 300px;">
            </div>
            <!-- Keterangan Manual Book -->
            <div class="col-md-8">
                <h2 class="mb-3">Panduan Pelaksanaan Ospek 2024</h2>
                <p class="mb-4">Selamat datang di Departemen Teknik Elektro dan Informatika! Manual book ini dirancang khusus untuk membantu Anda memahami seluruh rangkaian kegiatan ospek, mulai dari persiapan hingga penutupan. Dengan panduan ini, Anda akan memperoleh informasi lengkap mengenai jadwal kegiatan, peraturan, serta tips-tips penting yang akan memudahkan perjalanan Anda sebagai mahasiswa baru.</p>
                <ul class="list-unstyled mb-4">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Panduan langkah demi langkah</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Tips dan trik untuk sukses menjalani ospek</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Informasi kontak penting dan dukungan</li>
                </ul>
                <!-- Button -->
                <div class="d-flex flex-column flex-sm-row gap-2">
                <!-- Button 1: Manual Book -->
                <a href="https://bit.ly/ManualBookPOSITRON2024" class="btn btn-primary mb-2 mb-sm-0" target="_blank">
                 <i class="bi bi-book"></i> Download Manual Book
                </a>
                <!-- Button 2: Twibbon -->
                <a href="https://bit.ly/TwibbonPOSITRON2024" class="btn btn-secondary mb-2 mb-sm-0">
                <i class="bi bi-download"></i> Downlaod Twibbon
                </a>
                <!-- Button 3: ID Card -->
                <a href="https://bit.ly/IDCardPOSITRON2024" class="btn btn-primary mb-2 mb-sm-0">
                <i class="bi bi-book"></i> Download ID Card
                 </a>
                </div>  
                </div>
            </div>
        </div>
    </div>
</section>



<!--Section guide  -->

<!-- section time line -->

<section id="section_4">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center">

                <h2 class="mb-5">TIMELINE POSITRON</h2>
            </div>

            <div class="col-lg-4 col-12">
                <nav id="navbar-example3" class="h-100 flex-column align-items-stretch">
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link smoothscroll" href="#item-1">Positron</a>

                        <a class="nav-link smoothscroll" href="#item-2">Forum Maba</a>

                        <a class="nav-link smoothscroll" href="#item-3">Latihan Dasar Kepemimpinan</a>

                        <a class="nav-link smoothscroll" href="#item-4">Introduction Of Himpunan</a>

                        <a class="nav-link smoothscroll" href="#item-5">NAKO</a>
                    </nav>
                </nav>
            </div>



            <div class="col-lg-8 col-12">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
                    <div class="scrollspy-example-item" id="item-1">
                        <h5>POSITRON</h5>

                        <p>POSITRON (Program Orientasi Mahasiswa Baru Teknik Elektro dan Informatika) merupakan kegiatan orientasi dan pengenalan kampus di lingkup Departemen Teknik Elektro dan Informatika bagi mahasiswa baru yang dapat mendukung terbentuknya kekompakkan dan kekeluargaan antar mahasiswa serta memberikan pembekalan dasar dalam mengenal dan beradaptasi sebagai civitas akademika yang berkepribadian baik dan berbudi pekerti luhur. </p>

                        <img src="images/positron1.jpg" class="scrollspy-example-item-image img-fluid mb-3" alt="" />

                    </div>

                    <div class="scrollspy-example-item" id="item-2">
                        <h5>Forum Maba</h5>

                        <p>Forum Maba ialah kegiatan pembuka serangkaian kegiatan POSITRON 2024. Kegiatan ini dilaksanakan pada 26-27 Agustus 2024.  Pelaksanaan upacara pembuka masa orientasi mahasiswa baru Departemen Teknik Elektro dan Informatika yang akan disampaikan oleh Ketua Departemen Teknik Elektro dan Informatika. Pada kegiatan ini mahasiswa baru akan mengenal para dosen, kakak mentor, lingkungan, dan fasilitas Departemen Teknik Elektro dan Informatika. </p>

                        <img src="images/forum.jpg" class="scrollspy-example-item-image img-fluid mb-3" alt="" />
                    </div>

                    <div class="scrollspy-example-item" id="item-3">
                        <h5>Latihan Dasar Kepemimpinan</h5>

                        <p>LDK adalah singkatan dari “Latihan Dasar Kepemimpinan”. LDK biasanya dilaksanakan di berbagai organisasi seperti sekolah, perguruan tinggi, ataupun lembaga lainnya. LDK merupakan kegiatan yang dirancang untuk mengembangkan keterampilan untuk menjadi seorang pemimpin yang efektif. LDK ini akan dilaksanakan pada tanggal 28 September2024. </p>

                        <img src="images/ldk.jpg" class="scrollspy-example-item-image img-fluid mb-3" alt="" />

                    </div>

                    <div class="scrollspy-example-item" id="item-4">
                        <h5>Introduction Of Himpunan</h5>

                        <p>Introduction of Himpunan merupakan kegiatan yang bertujuan untuk memperkenalkan mahasiswa baru dengan organisasi di lingkup Departemen Teknik Elektro dan Informatika serta program kerja selama masa jabatan pengurus. Kegiatan ini akan dilaksanakn pada 19 Oktober 2024. </p>

                        <img src="images/ioh.jpg" class="scrollspy-example-item-image img-fluid mb-3" alt="" />

                    </div>

                    <div class="scrollspy-example-item" id="item-5">
                        <h5>NAKO</h5>

                        <p>NAKO 8.0 merupakan acara puncak pengenalan departemen mahasiswa baru untuk peresmian menjadi mahasiswa Departemen Teknik Elektro Dan Informatika seutuhnya. Acara ini juga meniadi wadah mahasiswa baru untuk menyalurkan bakatnya di bidang seni. Selain itu, kegiatan ini dapat meniadikan Mahasiswa Baru Teknik Elektro Dan Informatika menjadi kompak dan merasa saling memiliki satu sama lain atau disebut juga dengan UNITY. Kegiatan ini akan dilaksanakn pada 29 November 2024</p>

                        <img src="images/nako.jpg" class="scrollspy-example-item-image img-fluid mb-3" alt="" />

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<section class="contact-section section-padding" id="section_5">
    <footer>
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-12">
                <p class="mb-3">Website ini dibuat oleh Himpunan Teknik Elektro dan Informatika. </p>
                <p> Lest join us:</p>

                <h6 class="site-footer-title mb-3">Follow Us</h6>

                <ul class="social-icon mb-4 list-unstyled">
                    <li class="social-icon-item">
                        <a href="https://open.spotify.com/show/3yTKDSrkkGVseamzlN6x9I?si=7b06ca9fd74c47e6" class="social-icon-link bi-spotify" target="_blank" title="Spotify"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="https://facebook.com/hmdteium" class="social-icon-link bi-facebook" target="_blank" title="Facebook"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="https://twitter.com/hmdteium" class="social-icon-link bi-twitter" target="_blank" title="Twitter"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="https://instagram.com/hmdteium" class="social-icon-link bi-instagram" target="_blank" title="Instagram"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="https://tiktok.com/@hmdteium" class="social-icon-link bi-tiktok" target="_blank" title="TikTok"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="https://youtube.com/@hmdteium" class="social-icon-link bi-youtube" target="_blank" title="YouTube"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </footer>
</section>

</main>

<!-- section time line -->
@endsection