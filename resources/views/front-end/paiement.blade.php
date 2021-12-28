<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="">
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
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
            <div class="container">
              <a class="navbar-brand" href="#">VOYANEO <i class="fa fa-map-marker fa-2x" aria-hidden="true" style="color:#09C6AB "></i></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarText">
                <ul class="navbar-nav ml-auto mb-2 ">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/home"><i class="fa fa-home fa-2x" aria-hidden="true"></i> HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="fa fa-suitcase fa-2x" aria-hidden="true"></i> COMMANDE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/contact') }}"><i class="fa fa-comments fa-2x" aria-hidden="true"></i> CONTACT</a>
                  </li>
                  <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btnnav dropdown-toggle mt-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user-circle fa-4x" aria-hidden="true"></i> {{Auth::user()->name}}
                        </button>
                        @if (isset(Auth::user()->email))
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item bg-light" ></a>
                            <a class="dropdown-item" href="#">Modifier mon compte</a>
                            <a class="dropdown-item" href="{{ url('signout') }}">Déconnecter</a>
                          </div> 
                        @endif
                       
                      </div>
                  </li>
                </ul>
                
              </div>
            </div>
          </nav>
  
        <!-- start banner Area -->
        
        <!-- End banner Area -->

 <div class="navigation text-center">
       <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg12">
                <h1>Devise <i class="fas fa-arrow-right"></i> Participants & paiement <i class="fas fa-arrow-right"></i> Confirmation</h1>
            </div>
        </div>
       </div>

 </div>

              
               

  <!-- Start home-about Area -->
      <section class="destinations-area section-gap pb-5">
          <div class="container">
            <div class="row ">
                <div class="col-lg-8 ">
                    <div class="row d-flex justify-content-center">
                    
                        <div class="col-lg-12 col-sm-12 mb-3 ">
                            <div class="single-destinations">
                                  <div class="details">
                                    <h4 class="title-bor">Vos coordonnées</h4>
                                    <h6>Contact</h6>
                                    <form>
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Nom</label>
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="" value="{{Auth::user()->name}}">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputPassword4">Prenom</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder=""  value="">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Telephone</label>
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="" value="">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputPassword4">address mail</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder=""  value="{{Auth::user()->email}}">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="inputAddress">Addresse</label>
                                          <input type="text" class="form-control" id="inputAddress" placeholder="">
                                        </div>
                                        
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="inputCity">Ville</label>
                                            <input type="text" class="form-control" id="inputCity">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="inputState">pays</label>
                                            <select id="inputState" class="form-control">
                                              <option selected>France</option>
                                              <option>...</option>
                                            </select>
                                          </div>
                                          <div class="form-group col-md-2">
                                            <label for="inputZip">code postal</label>
                                            <input type="text" class="form-control" id="inputZip">
                                          </div>
                                        </div>
                                        
                                       
                                      </form>
                                  </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <div class="single-destinations">
                            <div class="details">
                                <div class="welike">
                                    <span style="font-size: 0px;"></span>
                                    <h4 class="title-bor">Informations voyageurs </h4>
                                    <form class="mt-5">
                                        <div class="form-row">
                                          <div class="col">
                                            <select id="inputState" class="form-control">
                                                <option selected>Titre</option>
                                                <option>...</option>
                                              </select>
                                          </div>
                                          <div class="col">
                                            <input type="text" class="form-control" placeholder="Last name">
                                          </div>
                                          <div class="col">
                                            <input type="text" class="form-control" placeholder="First name">
                                          </div>
                                        </div>
                                        <hr>
                                        <div class="form-row">
                                            <div class="col">
                                                <select id="inputState" class="form-control">
                                                    <option selected>Titre</option>
                                                    <option>...</option>
                                                  </select>
                                            </div>
                                            <div class="col">
                                              <input type="text" class="form-control" placeholder="Last name">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="First name">
                                              </div>
                                          </div>
                                      </form>
                                </div>
                            </div>
                            </div>
                        </div>
                       

                        <!-- section video -->
                        <div class="col-lg-12 col-sm-12">
                            <div class="single-destinations">
                            <div class="details">
                                <div class="welike">
                                    <span style="font-size: 0px;"></span>
                                    <h4 class="title-bor">Vos informations de paiement</h4>
                                    <form class="mt-5">
                                        <div class="form-row">
                                          <div class="col-md-12 mb-3">
                                            <label for="validationDefault01">Numéro de carte de crédit </label>
                                            <input type="text" class="form-control" id="validationDefault01" placeholder="Numéro de carte de crédit " value="" required>
                                          </div>
                                         
                                         
                                        </div>
                                        <div class="form-row">
                                          <div class="col-md-6 mb-3">
                                            <label for="validationDefault03">Nom et prénom</label>
                                            <input type="text" class="form-control" id="validationDefault03" placeholder="Nom et prénom" required>
                                          </div>
                                          <div class="col-md-3 mb-3">
                                            <label for="validationDefault04">code de sécurité</label>
                                            <input type="text" class="form-control" id="validationDefault04" placeholder="code de sécurité" required>
                                          </div>
                                          <div class="col-md-3 mb-3">
                                            <label for="validationDefault05">Date d'expiration  </label>
                                            <input type="text" class="form-control" id="validationDefault05" placeholder="Date d'expiration " required>
                                          </div>
                                        </div>
                                        <div class="form-check mt-5">
                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                          </label>
                                        </div>
                                       
                                      </form>   
                                </div>
                            </div>
                            </div>
                        </div>
                       
                      
                      
                       
                    </div>
                </div>


                
         
                <div class="col-lg-4 col-sm-12" >
                    <div class="row d-flex">
                        <div class="col-12">
                            <div class="single-destinations">
                       
                                <div class="details ">
                                   <dir class="price text-center">
                                    <h4>A partir de <span style="color: royalblue"><i class="fa fa-tag" aria-hidden="true"></i></span> </h4>
                                    <ins>
                                        
                                        <span class="price-color"> 1036.96 € </span>
                                      </ins> 
                                   </dir>
                                    


                                    <div class="sale-time-price">
                                        
                                        <div class="sale-time-remaining">
                                            
                                            <i class="fa fa-calendar fa-2x" aria-hidden="true"></i>
                                            <span class="">
                                                <span class="time">Reste 11 h 48 m</span><br>
                                                <span class="time-notice">Sous réserve de prolongation</span>
                                            </span>
                                            </div>
                                            
                                        </div>
                                    <ul class="package-list">
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span>Nombre des places </span>
                                            <h6>23 Personnes</h6>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span>Date</span>
                                            <h6>30/11/2021</h6>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span>Airport</span>
                                            <h6>Paris</h6>
                                            
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span>Airport</span>
                                            <h6>Paris</h6>
                                            
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span>Airport</span>
                                            <h6>Paris</h6>
                                            
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span>Airport</span>
                                            <h6>Paris</h6>
                                            
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                           <button class="btn btn-danger btn-block">Paiement</button>
                                            
                                        </li>
                                  
                                        
                                        		
                                        
                                            
        
                                                                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
          </div>
      </section>


  <!-- end home-about Area -->
        

        


        <!-- Start testimonial Area -->
		  
		    <!-- End testimonial Area -->
        <!-- End home-about Area -->

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
            <div class="container">

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
        <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
        <!-- script input -->
       
        

    </body>
</html>