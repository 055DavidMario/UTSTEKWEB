<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/1.png" type="image/x-icon">
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>
    <title>Welcome To ATK-EzShop Landing Page</title>
<!--

ART FACTORY

https://templatemo.com/tm-537-art-factory

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/templatemo-art-factory.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">ATK-EzShop</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#barang">Barang</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Contact Us</a></li>
                            @if (Auth::check())
                                <li class="scroll-to-section">
                                    <a href="{{ url('keranjang') }}">
                                        Keranjang
                                    </a>
                                </li>
                                <li class="scroll-to-section">
                                    <a data-toggle="modal" data-target="#exampleModal2">
                                        Logout
                                    </a>
                                </li>
                            @else
                                <li class="scroll-to-section">
                                    <a data-toggle="modal" data-target="#exampleModal">
                                        Sign In
                                    </a>
                                </li>
                                <li class="scroll-to-section">
                                    <a data-toggle="modal" data-target="#exampleModal1">
                                        Sign Up
                                    </a>
                                </li>
                            @endif
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>ATK-EzShop <strong>The Best !</strong></h1>
                        <p>This Landing Page Is Avaible For You.</p>
                        <a href="#about" class="main-button-slider">Find Out More</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="assets/images/slider-icon.png" class="rounded-full img-fluid d-block mx-auto" alt="First Vector Graphic">
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->


    <!-- ***** Features Small Start ***** -->
    <section class="section" id="barang">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme">
                    @foreach($item as $i)
                        <div class="item service-item">
                            <div class="icon">
                                <i><img src="assets/images/service-icon-01.png" alt=""></i>
                            </div>
                            <h5 class="service-title">{{$i->nama_item}}</h5>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus omnis, consequatur sed impedit dolores eius nostrum voluptates, vitae quam quis deserunt distinctio, culpa harum reprehenderit ullam et excepturi pariatur eum.</p>
                            <form action="{{ route('kstorejj') }}" method="POST">
                            @csrf
                                <input type="hidden" name="id_item" value="{{ $i->id }}">
                                <button type="submit" name="simpan" class="main-button">Simpan</button>
                            </form>
                        </div>
                    @endforeach
                    <!-- <div class="item service-item">
                        <div class="icon">
                            <i><img src="assets/images/service-icon-02.png" alt=""></i>
                        </div>
                        <h5 class="service-title">Second Box Title</h5>
                        <p>Pellentesque vitae urna ut nisi viverra tristique quis at dolor. In non sodales dolor, id egestas quam. Aliquam erat volutpat. </p>
                        <a href="#" class="main-button">Discover More</a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="assets/images/service-icon-03.png" alt=""></i>
                        </div>
                        <h5 class="service-title">Third Title Box</h5>
                        <p>Quisque finibus libero augue, in ultrices quam dictum id. Aliquam quis tellus sit amet urna tincidunt bibendum.</p>
                        <a href="#" class="main-button">More Detail</a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="assets/images/service-icon-02.png" alt=""></i>
                        </div>
                        <h5 class="service-title">Fourth Service Box</h5>
                        <p>Fusce sollicitudin feugiat risus, tempus faucibus arcu blandit nec. Duis auctor dolor eu scelerisque vestibulum.</p>
                        <a href="#" class="main-button">Read More</a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="assets/images/service-icon-01.png" alt=""></i>
                        </div>
                        <h5 class="service-title">Fifth Service Title</h5>
                        <p>Curabitur aliquam eget tellus id porta. Proin justo sapien, posuere suscipit tortor in, fermentum mattis elit.</p>
                        <a href="#" class="main-button">Discover</a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="assets/images/service-icon-03.png" alt=""></i>
                        </div>
                        <h5 class="service-title">Sixth Box Title</h5>
                        <p>Ut nibh velit, aliquam vitae pellentesque nec, convallis vitae lacus. Aliquam porttitor urna ut pellentesque.</p>
                        <a href="#" class="main-button">Detail</a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="assets/images/service-icon-01.png" alt=""></i>
                        </div>
                        <h5 class="service-title">Seventh Title Box</h5>
                        <p>Sed a consequat velit. Morbi lectus sapien, vestibulum et sapien sit amet, ultrices malesuada odio. Donec non quam.</p>
                        <a href="#" class="main-button">Read More</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->


    <!-- ***** Frequently Question Start ***** -->
    <section class="section" id="frequently-question">
        <div id="about" class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Ingin tahu lebih lanjut dengan ATK-EzShop!?</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="section-heading">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vitae voluptates repudiandae, eum ex et saepe fuga voluptate incidunt atque modi libero aperiam. Ad molestiae maiores, harum quis eaque temporibus.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <div class="left-text col-lg-6 col-md-6 col-sm-12">
                    <h5>ATK-EzShop</h5>
                    <div class="accordion-text">
                        <p>Menyediakan Perlengkapan Alat Tulis Kerja</p>
                        <p>Tersedia beragam pilihan</p>
                        <span>Email: <a href="#">email@company.com</a><br></span>
                        <a href="#contact-us" class="main-button">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="accordions is-first-expanded">
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Apa itu ATK</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates similique sit natus possimus quia recusandae quos reiciendis porro eaque eos, distinctio est tenetur corporis maxime odit, obcaecati at odio. Obcaecati.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Mengapa perlu web atk ini</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime suscipit, aliquam impedit officia quibusdam doloribus a quod, ducimus aperiam maiores, similique architecto voluptatum praesentium ad molestias exercitationem repellat tenetur. Officiis.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Frequently Question End ***** -->


    <!-- ***** Contact Us Start ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <!-- ***** Contact Map Start ***** -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div id="map">
                      <!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- ***** Contact Map End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Full Name" required="" class="contact-field">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" placeholder="E-mail" required="" class="contact-field">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Your Message" required="" class="contact-field"></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send It</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('login') }}" method="post">
      <div class="modal-body">
                @csrf
                <p><input type="text" class="form-control" name="email" placeholder="123@gmail.com"></p>
                <br>
                <p><input type="password" class="form-control" name="password" placeholder="123"></p>
                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Sign In !</button>
      </div>
    </form>
    </div>
  </div>
</div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('regist') }}" method="post">
      <div class="modal-body">
                @csrf
                <p><input type="text" class="form-control" name="name" placeholder="Name"></p>
                <br>
                <p><input type="text" class="form-control" name="email" placeholder="123@gmail.com"></p>
                <br>
                <p><input type="password" class="form-control" name="password" placeholder="123"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Sign Up !</button>
      </div>
    </form>
    </div>
  </div>
</div>
    <!-- Modal End -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <p class="copyright">Copyright &copy; 2022 ARK-EzShop Landing Page
                
                . Design: <a rel="nofollow" href="https://github.com/055DavidMario" target="_blank">ATK-EzShop</a></p>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{ route('hh') }}" method="post">
            {{ csrf_field() }}
            <div class="modal-body">
                    <div class="alert alert-danger" role="alert">
                       Yakin Akan Keluar ? 
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Logout !</button>
            </div>
        </form>
    </div>
  </div>
</div>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>