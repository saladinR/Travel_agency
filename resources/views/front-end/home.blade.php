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
                         {{-- <a class="dropdown-item bg-light" href=""><i class="fas fa-user-circle"></i> {{Auth::user()->email}}</a> --}}
                            {{-- <a class="dropdown-item bg-light"href=""><i class="fas fa-code-branch"></i> code : <input type="text" value="{{Auth::user()->cle_par}}"  id="code_par" disabled></a> --}}
                            <a  class="dropdown-item bg-light" data-toggle="modal" data-target="#exampleModalCenter" href=""><i class="fas fa-code-branch"></i> Code parrainage</a>
                            <a class="dropdown-item bg-light" data-toggle="modal" data-target="#exampleModalLong" href=""><i class="fas fa-user-edit"></i> modifier mon compte</a>
                            <a class="dropdown-item" href="{{ url('signout') }}"><i class="fas fa-sign-out-alt"></i> Déconnecter</a>
                          </div> 
                        @endif
                       
                      </div>
                  </li>
                </ul>
                
              </div>
            </div>
          </nav>
  
        <!-- start banner Area -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-share-alt-square"></i> Partager le Code de parrainage </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body par-body">
                    <div class="container_par">
                       
                        <div class="copy-text">
                            <input type="text" class="text" value="{{Auth::user()->cle_par}}" />
                            <button><i class="fa fa-clone"></i></button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
               
                </div>
            </div>
            </div>
        </div>
<!-- start banner Area -->
         <!-- Modal -->
         <form action = "client-show/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
                   
            {{ csrf_field() }}
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><i class="fas fa-user-edit"></i> Mon compte</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                
                        @if(session('status'))
                        <div class="alert alert-success">
                          {{ session('status') }}
                        </div> 
                        @endif	
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nom</label>
                                <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" placeholder="Nom">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Email</label>
                                <input type="email" class="form-control" name="email"  value="{{Auth::user()->email}}" placeholder="Email">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">nouveau mot de passe</label>
                                <input type="password" class="form-control" name="password"   value="" placeholder="password" >
                              </div>
                              
                         

                                <button type="submit" name="send" class="btn btn-warning  btn-block"><i class="fas fa-user-edit"></i> Modifier</button>
                              
                        </div>
                    </div>
                </div>
            </div>
        </form>
<!-- End banner Area -->

        <!-- Start hot-deal Area -->
        <section class="hot-deal-area section-gap " >
            <div class="container">
                				
                <div class="row justify-content-center">
                    <div class="col-lg-12 active-hot-deal-carusel ">
                        @foreach ($offre as $item)
                        <div class="single-carusel">
                            <div class="thumb relative">
                                <img class="img-fluid" src="data_image/{{ $item->filenames1 }}" alt="">
                            </div>
                            <div class="price-detials">
                               <div class="row">
                                <div class="col-lg-6 col-sm-6 mb-5 hovo"><a href="#" class="price-btn"><span><i class="fa fa-heart" aria-hidden="true"></i></span></a></div>
                                <div class="col-lg-6 col-sm-6 hovo"> <a href="#" class="price-btn"><span><i class="fa fa-share-alt-square" aria-hidden="true"></i></span></a></div>
                               </div>
                               
                            </div>
                            						
                        </div>
                        <div class="single-carusel">
                            <div class="thumb relative">
                                
                                <img class="img-fluid" src="data_image/{{ $item->filenames2 }}" alt="" >
                            </div>
                            <div class="price-detials">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 mb-5 hovo"><a href="#" class="price-btn"><span><i class="fa fa-heart" aria-hidden="true"></i></span></a></div>
                                    <div class="col-lg-6 col-sm-6 hovo"> <a href="#" class="price-btn"><span><i class="fa fa-share-alt-square" aria-hidden="true"></i></span></a></div>
                                   </div>
                            </div>
                           							 
                        </div>
                        <div class="single-carusel">
                            <div class="thumb relative">
                                
                                <img class="img-fluid" src="data_image/{{ $item->filenames3 }}" alt="">
                            </div>
                            <div class="price-detials">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 mb-5 hovo"><a href="#" class="price-btn"><span><i class="fa fa-heart" aria-hidden="true"></i></span></a></div>
                                    <div class="col-lg-6 col-sm-6 hovo"> <a href="#" class="price-btn"><span><i class="fa fa-share-alt-square" aria-hidden="true"></i></span></a></div>
                                   </div>
                                
                            </div>
                            </div> 
                            <div class="single-carusel">
                                <div class="thumb relative">
                                    
                                    <img class="img-fluid" src="data_image/{{ $item->filenames4 }}" alt="">
                                </div>
                                <div class="price-detials">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 mb-5 hovo"><a href="#" class="price-btn"><span><i class="fa fa-heart" aria-hidden="true"></i></span></a></div>
                                        <div class="col-lg-6 col-sm-6 hovo"> <a href="#" class="price-btn"><span><i class="fa fa-share-alt-square" aria-hidden="true"></i></span></a></div>
                                       </div>
                                    
                                </div>
                                </div> 
                                <div class="single-carusel">
                                    <div class="thumb relative">
                                        
                                        <img class="img-fluid" src="data_image/{{ $item->filenames5 }}" alt="">
                                    </div>
                                    <div class="price-detials">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 mb-5 hovo"><a href="#" class="price-btn"><span><i class="fa fa-heart" aria-hidden="true"></i></span></a></div>
                                            <div class="col-lg-6 col-sm-6 hovo"> <a href="#" class="price-btn"><span><i class="fa fa-share-alt-square" aria-hidden="true"></i></span></a></div>
                                           </div>
                                        
                                    </div>
                                    </div> 
                                    <div class="single-carusel">
                                        <div class="thumb relative">
                                            
                                            <img class="img-fluid" src="data_image/{{ $item->filenames6 }}" alt="">
                                        </div>
                                        <div class="price-detials">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 mb-5 hovo"><a href="#" class="price-btn"><span><i class="fa fa-heart" aria-hidden="true"></i></span></a></div>
                                                <div class="col-lg-6 col-sm-6 hovo"> <a href="#" class="price-btn"><span><i class="fa fa-share-alt-square" aria-hidden="true"></i></span></a></div>
                                               </div>
                                            
                                        </div>
                                        </div> 
                        @endforeach
                        
                        
                       
                </div>
            </div>
            <?php $i = 0; ?>
            @foreach ( $offre as $offres )
            <?php $i++ ?>
            @if ( $i <= 1)

            <div class="Titre-slide text-center mt-5">
                <div class="style-1">
                    {{-- <del>
                      <span class="amount">€35,00</span>
                    </del> --}}
                    
                    
                </div>
                <div class="sale-title mb-5">
                    <h2>{{ $offres->titre }}</h2>
                    <h1>{{ $offres->sous_titre }}</h1>
                    
                </div>
                
                </div>
              </div>	
        </section>
        
        <!-- End hot-deal Area -->

              
               

  <!-- Start home-about Area -->
      <section class="destinations-area section-gap pb-5">
          <div class="container">
            <div class="row ">
                <div class="col-lg-8 ">
                    <div class="row d-flex justify-content-center">
                    
                        <div class="col-lg-12 col-sm-12 mb-3 ">
                            <div class="single-destinations">
                            <div class="details">
                                <h4 class="title-bor">DESCRIPTION</h4>
                                <p>
                                    <p>{{ $offres->desc_1 }}</p>
                                    {{-- <ul class="offer-block-list">
                                        <li class="offer-block-list-item">En chambre Standard Double/Twin ou Standard Triple ou Familiale ou Supérieure</li>
                                        <li class="offer-block-list-item">En formule tout inclus&nbsp;</li>
                                        <li class="offer-block-list-item">Hébergement gratuit pour le 1er enfant de 3 à 11 ans partageant la chambre de deux adultes payants</li>
                                        <li class="offer-block-list-item">1 séance de sauna (environ 20 minutes) offerte par séjour de 3 nuits et par adulte à partir de 16 ans</li>
                                        <li class="offer-block-list-item">2 séances de sauna (environ 20 minutes) offertes par séjour de 4 ou 5 nuits et par adulte à partir de 16 ans</li>
                                        <li class="offer-block-list-item">3 séances de sauna (environ 20 minutes) offertes par séjour de 6 ou 7 nuits et par adulte à partir de 16 ans</li>
                                        <li class="offer-block-list-item">4 séances de sauna (environ 20 minutes) offertes par séjour à partir de 8 nuits et par adulte à partir de 16 ans</li>
                                    </ul> --}}
                                </p>
                                
                                    													
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <div class="single-destinations">
                            <div class="details">
                                <div class="welike">
                                    <span style="font-size: 0px;"></span>
                                    <h4 class="title-bor">Nous avons testé et aimé </h4>
                                    <p>{{ $offres->desc_2 }}</p>
                                    {{-- <ul>
                                        <li>S'installer dans un établissement 5* élégant et luxueux, bénéficiant d'un emplacement idéal pour rejoindre aisément les principaux sites d'intérêts</li>
                                        <li>Poser ses valises en chambre Exécutive, confortable et moderne</li>
                                        <li>Bénéficier du surclassement en formule demi-pension (hors boissons) pour faire voyager ses papilles</li>
                                        <li>Faire le plein de sensations et de découvertes grâce aux 4 excursions incluses </li>
                                    </ul> --}}
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
                                    <h4 class="title-bor">Présentation</h4>
                                    <iframe width="560" height="315" src="{{ $offres->video }}"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    
                                   
                                </div>
                            </div>
                            </div>
                        </div>
                       
                        <!-- end video -->
                        <!-- start  comment -->
                         <div class="col-lg-12 col-sm-12">
                            <div class="single-destinations">
                            <div class="details">
                                <div class="col-12">
                                     @if(session('success'))
                                    <div class="alert alert-success">
                                    {{ session('success') }}
                                    </div> 
                                     @endif

                                    <h2 style="font-style: italic;color: orange">Ajouter votre avis </h2>
                                    <form  action="{{url('avis')}}" enctype="multipart/form-data"  method="post">
                                    @csrf
                                    <fieldset class="rating mt-3">
                                        <input type="radio" id="star5" name="star" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                        <input type="radio" id="star4half" name="star" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                        <input type="radio" id="star4" name="star" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                        <input type="radio" id="star3half" name="star" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                        <input type="radio" id="star3" name="star" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                        <input type="radio" id="star2half" name="star" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                        <input type="radio" id="star2" name="star" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                        <input type="radio" id="star1half" name="star" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                        <input type="radio" id="star1" name="star" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                        {{-- <input type="radio" id="starhalf" name="star" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label> --}}
                                    </fieldset>
                                      <input type="text" class="form-control mb-3" name="email"  placeholder="Nom et Prénom" aria-label="Username" aria-describedby="basic-addon1">
                                    
                                   
                                    <textarea class="form-control mb-3" aria-label="With textarea" name="message" id="" cols="80px" rows="10" placeholder="votre commentaire" ></textarea>
                                    <button type="submit" class="btn btn-outline-info btn-block"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div> 
                        <!-- end comment -->
                       
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
                                        
                                        <span class="price-color"> {{ $offres->prix }} € </span>
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
                                            <h6>{{ $offres->nbr_perso }} Personnes</h6>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span>Date</span>
                                            <h6>{{ $offres->date_depart }}</h6>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span>Airport</span>
                                            <h6>{{ $offres->airport }}</h6>
                                            
                                        </li>
                                  
                                        
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span>Econnomique </span>
                                                <input id="stackedCheck1" class="form-check-input" onClick="checko()" type="checkbox" value="0" >
                                           
                                        </li>	
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span>Business <h6 >(+ 50€ )</h6></span>
                                                <input id="stackedCheck2" class="form-check-input " onClick="checko()" type="checkbox" value="50" >
                                           
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <select class="browser-default custom-select">
                                                <option selected="">Ville de départ</option>
                                                <option value="1">Paris</option>
                                                <option value="2">Bordeaux</option>
                                                <option value="3">Lille</option>
                                                <option value="3">Nante</option>
                                              </select> 
                                            
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span>Date de départ: </span> 

                                            <input type="date" value="2021-11-18" min="2005-01-01" max="2019-01-01">
                                        </li>
                                        
                                            
                                            <li class="d-flex justify-content-between align-items-center" id="night_price">
                                                <span>Nombre des nuits</span>
                                                <select class="browser-default custom-select" id="list" >
                                                    
                                                    <option value="523.96 " selected>3 nuits (523.96 €)</option>
                                                    <option value="609.96">4 nuits (609.96 €)</option>
                                                    <option value="812.96">5 nuits (812.96 €)</option>
                                                    <option value="978.96">6 nuits (978.96 €)</option>
                                                    <option value="1100.96">7 nuits (1100.96 €)</option>
                                                    <option value="1300.96">8 nuits (1300.96 €)</option>
                                                    <option value="1450.96">9 nuits (1450.96 €)</option>
                                                    <option value="1690.96">10 nuits (1690.96 €)</option>
                                                    <option value="1800.96">11 nuits (1800.96 €)</option>
                                                    <option value="1863.96">12 nuits (1863.96 €)</option>
                                                    <option value="2100.96">13 nuits (2100.96 €)</option>
                                                    <option value="2500.96">14 nuits (2500.96 €)</option>
                                                    <option value="3009.96 €">15 nuits (3009.96 €)</option>
                                                  </select> 
                                                
                                            </li>
                                            {{-- <div class="num-block skin-2">
                                                <div class="num-in">
                                                  <span class="minus dis"></span>
                                                  <input type="text" class="in-num" id="nuit" value="1" readonly="">
                                                  <span class="plus"></span>
                                                </div>
                                              </div> --}}
                                            {{-- <input type="date" value="2021-11-18" min="2005-01-01" max="2019-01-01"> --}}
                                                
                                            
                                            
                                   
                                        <li class="d-flex justify-content-between align-items-center">
                                            
                                            <h5>Enfants <h6 style="color:#96969b ">(3-11 ans)</h6></h5> 
                                            <div class="num-block skin-2">
                                                <div class="num-in">
                                                  <span class="minus dis" onchange="show()"></span>
                                                  <input type="text" class="in-num"  value="1" id="enfant" readonly="">
                                                  <span class="plus" ></span>
                                                </div>
                                              </div>
                                            
                                            
                                        </li>	
                                        <li class="d-flex justify-content-between align-items-center">
                                            
                                            <h5>Adultes</h5> 
                                            <div class="num-block skin-2">
                                                <div class="num-in">
                                                  <span class="minus dis"></span>
                                                  <input type="text" class="in-num"  value="1" id="adult" readonly="">
                                                  <span class="plus"></span>
                                                </div>
                                              </div> 
                                            
                                            
                                        </li>	
                                        <li class="text-center" >
                                            <button type="button" class="btn btn_valider btn-lg" onclick="calcul()">Calculer le prix final</button>
                                        </li>

                                        <li  class="text-center" id="prix_show" style="display: none">
                                        <h3>prix :</h3>
                                         <h1 id="prixx" style="color:#09C6AB"> </h1>
                                          <a class="btn btn-success mt-3" href="{{ url('/paiement') }}">valider ma commande <i class="fas fa-arrow-right"></i> </a>
                                            
                                            
                                        </li>			
                                        
                                            
        
                                                                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- section garantie -->
                        <div class="col-12">
                            <div class="single-destinations">
                       
                                <div class="details">
                                        <div class="col-12 mb-3 service-icon">
                                                <span><i class="fa fa-certificate" aria-hidden="true"></i></span>
                                                <h5>NOS ENGAGEMENTS</h5>
                                                <p>Une sélection haut de gamme <br>

                                                    Des réductions jusqu'à -70% <br>
                                                    
                                                    Un service de qualité</p>
                                        </div>

                                   

                                        <div class="col-12 service-icon">
                                                    <span><i class="fa fa-lock" aria-hidden="true"></i></span>
                                                    <h5>PAIEMENT SÉCURISÉ</h5>
                                                    <p>Par carte bancaire ou par chèques vacances</p>
                                        </div>
                                        <div class="col-12 mb-3 service-icon">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i></span>
                                            <h5>VOUS SOUHAITEZ RÉSERVER UN SÉJOUR ?</h5>
                                            <a class="btn btn-outline-warning mt-3" href="{{ url('/contact') }}">Contactez-nous</a>
                                           </div>
                                </div>
                            </div>
                        </div>
                        <!-- end section garantie -->
                    </div>
                </div>
            </div>
          </div>
      </section>


  <!-- end home-about Area -->
        

        


        <!-- Start testimonial Area -->
		    <section class="testimonial-area section-gap pt-3">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">AVIS CLIENTS</h1>
		                        <p>EXCELLENT (4.4 SUR 5) </p>
		                    </div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="active-testimonial">
                            @foreach ($avis as $avis)
                            <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/elements/user3.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                {{$avis->message}}		     
		                            </p>
		                            <h4>{{$avis->email}}</h4>
	                            	<div class="star">
								@if (($avis->star) === "1")
								 <span style="color: gold"><i class="fas fa-star"></i></span>
							    @elseif(($avis->star) === "1 and a half")
								 <span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>	
								 @elseif(($avis->star) === "2")
								 <span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
								 @elseif(($avis->star) === "2 and a half")
								 <span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>	
								@elseif(($avis->star) === "3 and a half")
								<span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>	
								@elseif(($avis->star) === "3")
								<span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>	
								@elseif(($avis->star) === "3 and a half")
								<span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>	
								@elseif(($avis->star) === "4")
								<span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
								@elseif(($avis->star) === "4 and a half")
								<span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>	
								@elseif(($avis->star) === "5")
								<span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
								@elseif(($avis->star) === "5 and a half")
								<span style="color: gold"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>		
								@endif			
									</div>	
		                        </div>
		                    </div>
                            @endforeach
		                    
		                                        		                    
		                </div>
		            </div>
		        </div>
		    </section>
		    <!-- End testimonial Area -->
        <!-- End home-about Area -->
        @endif
       @endforeach
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
        <script>
            /////////////////// product +/-
                    $(document).ready(function() {
                    $('.num-in span').click(function () {
                        var $input = $(this).parents('.num-block').find('input.in-num');
                        if($(this).hasClass('minus')) {
                        var count = parseFloat($input.val()) - 1;
                        count = count < 1 ? 1 : count;
                        if (count < 2) {
                            $(this).addClass('dis');
                        }
                        else {
                            $(this).removeClass('dis');
                        }
                        $input.val(count);
                        }
                        else {
                        var count = parseFloat($input.val()) + 1
                        $input.val(count);
                        if (count > 1) {
                            $(this).parents('.num-block').find(('.minus')).removeClass('dis');
                        }
                        }
                        
                        $input.change();
                        return false;
                    });
                    
                    });
                    // product +/-
        </script>
         <script>
            function checko(){
                  var eco = document.getElementById("stackedCheck1");
                      bus = document.getElementById("stackedCheck2");
              if( eco.checked ){
                  document.getElementById("stackedCheck2").checked = false;
             }
              if(bus.checked){
                  document.getElementById("stackedCheck1").checked = false;
              }
            }
       
                     
            function calcul(){
                var business = parseFloat(document.getElementById('stackedCheck2').value);
                    econnomique = parseFloat(document.getElementById('stackedCheck1').value);
                    night_p = parseFloat(document.getElementById('list').value);
                    child = parseFloat(document.getElementById('enfant').value);
                    major = parseFloat(document.getElementById('adult').value);
                    calc_final = 0 ;
                    bus = document.getElementById("stackedCheck2");



                 if(bus.checked){

                    document.getElementById("stackedCheck1").checked = false;
                    calc_final = business + night_p + child + major;
                 }else{
                   
                    calc_final = night_p + child + major;
                 }

                 
                 document.getElementById("prix_show").style.display = "";
                 document.getElementById('prixx').innerHTML = calc_final +" "+"€";
               
            }
        
        
        

        </script>

    </body>
</html>