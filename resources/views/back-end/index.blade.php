<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="back-office/img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>VOYANEO</title>

	<link href="back-office/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle"><strong>VOYANEO</strong> <i class="fas fa-map-marker-alt fa-2x" style="color: aqua"></i></span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="https://voyaneo.herokuapp.com/admin">
							<i class="align-middle" data-feather="map"></i>  <span class="align-middle">Offre</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="product">
							<i class="fas fa-shopping-cart"></i> <span class="align-middle">Commande</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="https://voyaneo.herokuapp.com/avis/show">
							<i class="fas fa-star"></i> <span class="align-middle">Avis</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="https://voyaneo.herokuapp.com/contact-show">
							<i class="fas fa-comments"></i> <span class="align-middle">Contact</span>
            </a>
					</li>
						
					<li class="sidebar-item">
						<a class="sidebar-link" href="https://voyaneo.herokuapp.com/client-show">
							<i class="fas fa-user"></i> <span class="align-middle">client</span>
            </a>
					</li>


					{{-- <li class="sidebar-header">
						Tools & Components
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-typography.html">
              <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="icons-feather.html">
              <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
            </a>
					</li> --}}

					{{-- <li class="sidebar-header">
						Compte & Profile
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-in.html">
              <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{ url('signout') }}">
              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
            </a>
					</li> --}}

				
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								
								
							
							</div>
						</li>
						<li class="nav-item dropdown">
							
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									
								</div>
								
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<i class="fas fa-user-tie fa-2x"></i> <span class="text-dark font-weight-bold"></span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								{{-- <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div> --}}
								<a class="dropdown-item" href="{{ url('signout') }}">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
  <!-- start form -->
			<main class="content">
				<div class="container-fluid p-0" id="product">
                   <!-- message success -->
				   @if (count($errors) > 0)
				   <div class="alert alert-danger">
					   <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
					   <ul>
						 @foreach ($errors->all() as $error)
							 <li>{{ $error }}</li>
						 @endforeach
					   </ul>
				   </div>
				   @endif
					 
				   @if(session('success'))
				   <div class="alert alert-success">
					 {{ session('success') }}
				   </div> 
				   @endif
				   <!-- end message -->
					<h1 class="h3 mb-3">Welcome Admin <i class="far fa-grin-alt"></i> <strong style="color: rgb(62, 186, 207)"></strong></h1>
                     <hr >
					<form method="POST" action="{{url('admin/create')}}" enctype="multipart/form-data" class="mt-5">
						@csrf
						
						<div class="container">
							<div class="row">
								<div class="col-lg-6 mb-2">
									<div class="input-group hdtuto control-group lst increment" >
										<input type="file" name="filenames1" class="myfrm form-control">
										{{-- <div class="input-group-btn"> 
										  <button class="btn btn-add btn-success" type="button"><i class="fas fa-layer-plus"></i> Add</button>
										</div> --}}
									  </div>
								</div>
								<div class="col-lg-6">
									<div class="input-group hdtuto control-group lst increment" >
										<input type="file" name="filenames2" class="myfrm form-control">
										{{-- <div class="input-group-btn"> 
										  <button class="btn btn-add btn-success" type="button"><i class="fas fa-layer-plus"></i> Add</button>
										</div> --}}
									  </div>
								</div>
								<div class="col-lg-6">
									<div class="input-group hdtuto control-group lst increment" >
										<input type="file" name="filenames3" class="myfrm form-control">
										{{-- <div class="input-group-btn"> 
										  <button class="btn btn-add btn-success" type="button"><i class="fas fa-layer-plus"></i> Add</button>
										</div> --}}
									  </div>
								</div>
								<div class="col-lg-6 mb-2">
									<div class="input-group hdtuto control-group lst increment" >
										<input type="file" name="filenames4" class="myfrm form-control">
										{{-- <div class="input-group-btn"> 
										  <button class="btn btn-add btn-success" type="button"><i class="fas fa-layer-plus"></i> Add</button>
										</div> --}}
									  </div>
								</div>
								<div class="col-lg-6">
									<div class="input-group hdtuto control-group lst increment" >
										<input type="file" name="filenames5" class="myfrm form-control">
										{{-- <div class="input-group-btn"> 
										  <button class="btn btn-add btn-success" type="button"><i class="fas fa-layer-plus"></i> Add</button>
										</div> --}}
									  </div>
								</div>
								<div class="col-lg-6">
									<div class="input-group hdtuto control-group lst increment" >
										<input type="file" name="filenames6" class="myfrm form-control">
										  {{-- <div class="input-group-btn"> 
											<button class="btn btn_delete btn-danger" type="button"><i class="far fa-trash-alt"></i> Remove</button>
										  </div> --}}
										</div>
									  </div>
								</div>
							</div>
						</div>
						
						  
						<!--start row -->
						<div class="container">
									
							<div class="row bg-light">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Titre </label>
								<input type="text" class="form-control" name="titre" id="titre" value="">
							</div>
						 </div>
					
						 <div class="col-lg-6">
							<div class="form-group">
								<label>Sous Titre </label>
								<input type="text" class="form-control" name="sous_titre" id="sous_titre" value="">
							</div>
						 </div>
					
						 <div class="col-lg-6">
							<div class="form-group">
								<label>Description </label>
								<textarea class="form-control" name="desc_1" id="desc_1" rows="4" value=""></textarea>
							</div>
						 </div>
					
						 <div class="col-lg-6">
							<div class="form-group">
								<label>Description 2 </label>
								<textarea class="form-control" name="desc_2" id="desc_2" rows="4" value=""></textarea>
							</div>
						 </div>
						 
					
						 <div class="col-lg-12">
							<div class="form-group">
								<label>Video youtube</label>
								<input type="text" class="form-control" name="video" id="video" value=""  action="" placeholder="https://www.youtube-nocookie.com/embed/fEESYqItI">
								
							</div>
						 </div>
					
						 <div class="col-lg-6">
							<div class="form-group">
								<label>Prix</label>
								<input type="text" class="form-control" name="prix" id="prix" value="">
							</div>
						 </div>
						 <div class="col-lg-6">
							<div class="form-group">
								<label>Nombre personnes</label>
								<input type="text" class="form-control" name="nbr_perso" id="nbr_perso" value="">
							</div>
						 </div>
						 <div class="col-lg-6">
							<div class="form-group">
								<label>Airport</label>
								<input type="text" class="form-control" name="airport" id="airport" value="" placeholder="Paris..">
								{{-- <select class="browser-default custom-select" id="list" >
                                                    
									<option value="paris" selected>PARIS</option>
									<option value="bordeaux">BORDEAUX</option>
									<option value="lille">LILLE</option>
									<option value="nante">NANTE</option>
									<option value="toulouse">TOULOUSE</option>
									<option value="marseille">MARSEILLE</option>
									<option value="nice">NICE</option>
								
								  </select>  --}}
							</div>
						 </div>
						 <div class="col-lg-6">
							<div class="form-group">
								<label>date_depart</label>
								<input type="date" class="form-control" name="date_depart" id="date_depart" value="">
							</div>
						 </div>
					
					    
						<div class="col-12 text-center">
							<button type="submit" class="btn btn-success " style="margin-top:20px;width:200px"><i class="fas fa-plus-circle"></i> Ajouter</button>
							<a type="button" href="{{ url('home') }}" class="btn btn-primary " style="margin-top:20px;width:200px;color: white" target="blank"><i class="far fa-eye" style="color: white"></i> Voir le produit </a>
							<a type="button" href="{{ url('admin/edit')}}" class="btn btn-warning " style="margin-top:20px;width:200px;color: white" target="blank"><i class="fas fa-edit" style="color: white"></i> Modifier  </a>
						</div>
						<!-- end row -->
							</div>
						</div>
					
					</form> 

				</div>
			</main>
<!--  end form -->
			{{-- <footer class="footer fixed-bottom">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer> --}}
		</div>
	</div>

	<script src="back-office/js/app.js"></script>
	{{-- <script >
		$(document).ready(function() {
		  $(".btn-add").click(function(){ 
			  var lsthmtl = $(".clone").html();
			  $(".increment").after(lsthmtl);
		  });
		  $("body").on("click",".btn_delete",function(){ 
			  $(this).parents(".hdtuto").remove();
		  });
		});
	</script> --}}
	

</body>

</html>