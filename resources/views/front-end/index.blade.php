<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>VOYANEO</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/jquery-ui.css">				
        <link rel="stylesheet" href="css/nice-select.css">							
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">				
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>	
        <header id="header">
            <div class="header-top">
                <div class="container">
                  <div class="row align-items-center">
                      
                      
                  </div>			  					
                </div>
            </div>
            <div class="container main-menu">
                <div class="row align-items-center justify-content-between d-flex">
                  <div id="logo">
                    <a href="index.html" style="font-size: 25px;font-weight: bold;color: aliceblue"><img src="" alt="" title="" />VOYANEO <i class="fa fa-map-marker fa-2x" aria-hidden="true" style="color:#09C6AB "></i></a>
                  </div>
                  <nav id="nav-menu-container">
                    {{-- <ul class="nav-menu">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="about.html">About</a></li>
                      <li><a href="packages.html">Packages</a></li>
                      <li><a href="hotels.html">Hotels</a></li>
                      <li><a href="insurance.html">Insurence</a></li>
                      <li class="menu-has-children"><a href="">Blog</a>
                        <ul>
                          <li><a href="blog-home.html">Blog Home</a></li>
                          <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                      </li>	
                      <li class="menu-has-children"><a href="">Pages</a>
                        <ul>
                              <li><a href="elements.html">Elements</a></li>
                              <li class="menu-has-children"><a href="">Level 2 </a>
                                <ul>
                                  <li><a href="#">Item One</a></li>
                                  <li><a href="#">Item Two</a></li>
                                </ul>
                              </li>					                		
                        </ul>
                      </li>					          					          		          
                      <li><a href="contact.html">Contact</a></li>
                    </ul> --}}
                  </nav><!-- #nav-menu-container -->					      		  
                </div>
            </div>
        </header><!-- #header -->
        
        <!-- start banner Area -->
        <section class="banner-area relative">
            <div class="overlay overlay-bg"></div>				
            <div class="container">
                <div class="row fullscreen align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-6 banner-left">
                        <h6 class="text-white">Loin de la vie monotone</h6>
                        <h1 class="text-white">VOYAGE MAGIQUE</h1>
                        <p class="text-white">
                            FLORENCE Escapade romantique en boutique hôtel 5* JUSQU’À-70%
                        </p>
                        
                    </div>
                    <div class="col-lg-4 col-md-6 banner-right">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">Se connecter</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">Devenir Membre</a>
                          </li>
                          
                        </ul>
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                            <form class="form-wrap " method="POST" action="{{ route('login.custom') }}">

                                @if(Session::has('success'))
                                <div class="alert alert-success">
                                     {{Session::get('success')}} 
                                </div>
                               @endif
                               @if(Session::has('danger'))
                               <div class="alert alert-danger">
                                    {{Session::get('danger')}} 
                               </div>
                              @endif
                               <!-- end message d'error -->
                                @csrf
                                {{ csrf_field() }}
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Addresse email" id="email" class="form-control" name="email" required
                                        autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                 
                                <div class="form-group">
                                    <input type="password" placeholder="Mot de passe" id="password" class="form-control" name="password" required>
                                    <p><a href="" class="form-inline"style="color:#cb0c9f;font-weight: bold;a:hover{color:blue;}">Mot de passe oublié </a></p>
                                    
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-check form-inline">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1"> Mémoriser mon compte</label>
                                  </div>

                                  
                                  
                                  <hr/>	
                                  						
                                
                                <button type="submit" class="primary-btn text-uppercase">Se connecter</button>								
                            </form>
                          </div>
                          <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                            <form class="form-wrap" action="{{ route('register.custom') }}" method="POST" class="requires-validation" novalidate>
                                
                         @csrf
                         {{ csrf_field() }}
                                <div class="form-group mb-3">
                                  <input type="text" placeholder="Nom" id="name" class="form-control" name="name"
                                      required autofocus>
                                  @if ($errors->has('name'))
                                  <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                                  <div class="valid-feedback">Le champ du nom est valide !!</div>
                                   <div class="invalid-feedback">Le champ du nom est  non valide !!</div>
                              </div>
      
                              <div class="form-group mb-3">
                                  <input type="text" placeholder="Address email" id="email_address" class="form-control"
                                      name="email" required autofocus>
                                  @if ($errors->has('email'))
                                  <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                                  <div class="valid-feedback">Le champ du Email est valide !</div>
                                   <div class="invalid-feedback">Le champ du Email est non valide !!</div>
                              </div>
      
                              <div class="form-group mb-3">
                                  <input type="password" placeholder="Mot de passe" id="password" class="form-control"
                                      name="password" required>
                                  @if ($errors->has('password'))
                                  <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                                  <div class="valid-feedback">Le champ du mot de passe est valide !</div>
                                   <div class="invalid-feedback">Le champ du mot de passe est valide !</div>
                              </div>

                              <div class="form-group mb-3">
                                <input type="text" placeholder="code parrainage" id="parrainage" class="form-control"
                                    name="cle_paro" required>
                                @if ($errors->has('warning'))
                                <span class="text-danger">{{ $errors->first('warning') }}</span>
                                @endif
                                <div class="valid-feedback">Le champ du mot de passe est valide !</div>
                                 <div class="invalid-feedback">Le champ du mot de passe est valide !</div>
                            </div>
                              
                                  {{-- <input type="parrainage" placeholder="Code de parrainage"/> --}}
                                  
                                  <p>Clicking <strong>create account</strong> means that you are agree to our <a href="javascript:void(0)">terms of services</a>.</p>
                                  <hr/>	
                                  <button type="submit" class="primary-btn text-uppercase">Inscription</button>				
                                									
                            </form>							  	
                          </div>
                          
                        </div>
                    </div>
                </div>
            </div>					
        </section>
        <!-- End banner Area -->

        
        

        <!-- Start other-issue Area -->
        

        <!-- End other-issue Area -->
        

        <!-- Start testimonial Area -->
       
        <!-- End testimonial Area -->

        

        <!-- start footer Area -->		
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row mb-5 border-bottom">
                    <div class="col-lg-4 text-center">
                        
                         <h3 class="text-light"><i class="fa fa-handshake-o" aria-hidden="true"></i> Des voyages d’exception</h3>
                         <p>Des offres de voyage haut de gamme
                            rigoureusement sélectionnées</p>
                    </div>
                    <div class="col-lg-4  text-center">
                         <h3 class="text-light"><i class="fa fa-gift" aria-hidden="true"></i> Les meilleures réductions</h3> 
                         <p>Des prix exclusifs et des réductions exceptionnelles jusqu’à-70%</p>
                    </div>
                    <div class="col-lg-4  text-center">
                         <h3 class="text-light"><i class="fa fa-users" aria-hidden="true"></i> Nos experts à votre service</h3>
                         <p>Consultez notre rubrique d'aide 24h/24 et 7j/7</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>About Agency</h6>
                            <p>
                                The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Navigation Links</h6>
                            <div class="row">
                                <div class="col">
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Feature</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul>
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>										
                            </div>							
                        </div>
                    </div>							
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Newsletter</h6>
                            <p>
                                For business professionals caught between high OEM price and mediocre print and graphic output.									
                            </p>								
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget mail-chimp">
                            <h6 class="mb-20">InstaFeed</h6>
                            <ul class="instafeed d-flex flex-wrap">
                                <li><img src="img/i1.jpg" alt=""></li>
                                <li><img src="img/i2.jpg" alt=""></li>
                                <li><img src="img/i3.jpg" alt=""></li>
                                <li><img src="img/i4.jpg" alt=""></li>
                                <li><img src="img/i5.jpg" alt=""></li>
                                <li><img src="img/i6.jpg" alt=""></li>
                                <li><img src="img/i7.jpg" alt=""></li>
                                <li><img src="img/i8.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>						
                </div>

                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->	

        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>			
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
         <script src="js/jquery-ui.js"></script>					
          <script src="js/easing.min.js"></script>			
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.min.js"></script>	
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>						
        <script src="js/jquery.nice-select.min.js"></script>					
        <script src="js/owl.carousel.min.js"></script>							
        <script src="js/mail-script.js"></script>	
        <script src="js/main.js"></script>	
    </body>
</html>