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

					<li class="sidebar-item ">
						<a class="sidebar-link" href="http://127.0.0.1:8000/admin">
							<i class="align-middle" data-feather="map"></i>  <span class="align-middle">Offre</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="product">
							<i class="fas fa-shopping-cart"></i> <span class="align-middle">Commande</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="http://127.0.0.1:8000/avis/show">
							<i class="fas fa-star"></i> <span class="align-middle">Avis</span>
            </a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="http://127.0.0.1:8000/contact-show">
							<i class="fas fa-comments"></i> <span class="align-middle">Contact</span>
            </a>
					</li>
						
					<li class="sidebar-item active">
						<a class="sidebar-link" href="http://127.0.0.1:8000/client-show">
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
				  
				   @if(session('success'))
				   <div class="alert alert-success">
					 {{ session('success') }}
				   </div> 
				   @endif

				   @if(session('status'))
				   <div class="alert alert-success">
					 {{ session('status') }}
				   </div> 
				   @endif
				   <!-- end message -->
					<h1 class="h3 mb-3"><strong>Admin</strong> Dashboard</h1>
                     
					<div class="row">
						<div class="d-flex bd-highlight mb-3">
							<button class="btn btn-warning" data-bs-toggle="modal" href="" data-bs-target="#ModalAdd"><i class="fas fa-user-plus"></i> ajouter un client</button>
						</div>
					</div>
					
                    <table class="table table-dark table-striped table-bordered border-dark">
                        <thead class="table-primary">
                          <tr>
                            
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                           
							<th scope="col">code parrainage</th>
                            <th scope="col">role</th>
							<th colspan="3">Action</th>
							
                            
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                 {{-- @if ($user->role !='admin')  --}}
                                 <tr class=" ">
                                    
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                  
									<td>{{ $user->cle_par }}</td>
									
									@if ( $user->role !='admin')
									  <td style="font-weight: bold"><i class="fas fa-user-lock"></i> {{ $user->role}}</td>
									@else
									<td style="font-weight: bold;"><span style="color: gold"><i class="fas fa-user-shield"></i></span> {{ $user->role }}</td>
									@endif
                                    <td>
										<a  class="btn btn-primary" data-bs-toggle="modal" href="" data-bs-target="#ModalEdit{{ $user->id }}"><i class="fas fa-user-edit"></i> Modifier</a>
									</td>
									<td>
										<a  data-bs-toggle="modal" href="" data-bs-target="#ModalDelete{{ $user->id }}" class="btn btn-danger" ><i class="fas fa-user-minus"></i> supprimer</a>
									</td>
                                     <td>
										 <a href="" class="btn btn-success" data-bs-toggle="modal" href="" data-bs-target="#ModalShow{{$user->id}}"><i class="fas fa-eye"></i></a>
									 </td>
                                  </tr>                                    
                                 {{-- @endif --}}
                          

                    <!-- edit user modal -->
								 <form action = "client-show/{{ $user->id }}" method="post" enctype="multipart/form-data">
						
									{{ csrf_field() }}
									<div id="ModalEdit{{ $user->id }}" role="dialog" aria-modal="true" class="fade modal" tabindex="-1">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title">edit modal</h4>
													<button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal">
														
													</button>
												</div>
												<div class="modal-body">
													<div class="form-group">
														<label for="exampleFormControlInput1">Nom</label>
														<input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Nom">
													  </div>
													  <div class="form-group">
														<label for="exampleFormControlInput1">Email</label>
														<input type="email" class="form-control" name="email"  value="{{ $user->email }}" placeholder="Email">
													  </div>
													 
													  <div class="form-group">
														<label for="exampleFormControlInput1">password</label>
														<input type="text" class="form-control" name="password"   value="{{ $user->password }}" placeholder="password" >
													  </div>
													  <div class="form-check mb-3">
														<input class="form-check-input" type="radio" name="role"  value="admin">
														<label class="form-check-label" for="flexRadioDefault1">
														  Admin
														</label>
													  </div>
													  <div class="form-check">
														<input class="form-check-input" type="radio" name="role" value="user" checked>
														<label class="form-check-label" for="flexRadioDefault2">
														  Client
														</label>
													  </div>
													  <div class="form-group">
														<label for="exampleFormControlInput1">code de parrainage</label>
														<input type="text" class="form-control" name="cle_par" value="{{ $user->cle_par }}" placeholder="code de parrainage" >
													  </div>
				  
														<button type="submit" name="send" class="btn btn-success  btn-block">Modifier</button>
													  
												</div>
											</div>
										</div>
									</div>
								</form>
                              
								<!-- modal ajouter -->
								<form action = "{{ url('client-show/create') }}" method="post" enctype="multipart/form-data">
						
									{{ csrf_field() }}
									<div id="ModalAdd" role="dialog" aria-modal="true" class="fade modal" tabindex="-1">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title">ajouter un client</h4>
													<button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal">
														
													</button>
												</div>
												<div class="modal-body">
													<div class="container">
														<div class="form-group">
															<label for="exampleFormControlInput1">Nom</label>
															<input type="text" class="form-control" name="name"  value="" placeholder="Nom">
														  </div>
														  <div class="form-group">
															<label for="exampleFormControlInput1">Email</label>
															<input type="email" class="form-control" name="email"  value="" placeholder="Email">
														  </div>
														 
														  <div class="form-group">
															<label for="exampleFormControlInput1">password</label>
															<input type="password" class="form-control" name="password"   value="" placeholder="password" >
														  </div>
														  <hr>
														  <div class="form-check mb-3">
															<input class="form-check-input" type="radio" name="role"  value="admin">
															<label class="form-check-label" for="flexRadioDefault1">
															  Admin
															</label>
														  </div>
														  <div class="form-check">
															<input class="form-check-input" type="radio" name="role" value="user" checked>
															<label class="form-check-label" for="flexRadioDefault2">
															  Client
															</label>
														  </div>
														  <hr>
														  
														  
					  
															<button type="submit" name="send" class="btn btn-success  btn-block">Ajouter</button>
													</div>
													  
												</div>
											</div>
										</div>
									</div>
								</form>
                      <!-- show user -->
					 
						
						{{ csrf_field() }}
						<div id="ModalShow{{$user->id}}" role="dialog" aria-modal="true" class="fade modal" tabindex="-1">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">afficher tout les informations un client</h4>
										<button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal">
											
										</button>
									</div>
									<div class="modal-body">
										<div class="container">
                                        
											<div class="form-group">
												<label for="exampleFormControlInput1">Id</label>
												<input type="text" class="form-control"  value="{{$user->id}}" placeholder="Nom" disabled>
											  </div>
											<div class="form-group">
												<label for="exampleFormControlInput1">Nom</label>
												<input type="text" class="form-control" name="name"  value="{{$user->name}}" placeholder="Nom" disabled>
											  </div>
											  <div class="form-group">
												<label for="exampleFormControlInput1">Email</label>
												<input type="email" class="form-control" name="email"  value="{{$user->email}}" placeholder="Email" disabled>
											  </div>
											 
											  <div class="form-group">
												<label for="exampleFormControlInput1">password</label>
												<input type="text" class="form-control" name="password"   value="{{$user->password}}" placeholder="password" disabled>
											  </div>
											  <div class="form-group">
												<label for="exampleFormControlInput1">Role</label>
												<input type="text" class="form-control" name="role"   value="{{$user->role}}" placeholder="role" disabled>
											  </div>
											  <div class="form-group">
												<label for="exampleFormControlInput1">code de parrainage</label>
												<input type="text" class="form-control" name="cle_par"   value="{{$user->cle_par}}" placeholder="code de parrainage" disabled>
											  </div>
											  <div class="form-group">
												<label for="exampleFormControlInput1">le dernier mise à jour</label>
												<input type="text" class="form-control" name="cle_par"   value="{{$user->updated_at}}" disabled>
											  </div>
											  <div class="form-group">
												<label for="exampleFormControlInput1">la date de création</label>
												<input type="text" class="form-control" name="cle_par"   value="{{$user->created_at}}"  disabled>
											  </div>
											  
											  
		  
												
										</div>
										  
									</div>
								</div>
							</div>
						</div>
					</form>
					<!-- delete modal dialog -->
					
						
						{{ csrf_field() }}
						<div id="ModalDelete{{ $user->id }}" role="dialog" aria-modal="true" class="fade modal" tabindex="-1">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">voulez vous vraiment continuer cette action ?</h4>
										<button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal">
											
										</button>
									</div>
									<div class="modal-body">
										     <div class="container">
												 <div class="row">
													 <div class="col-lg-6">
														<a  name="send" class="btn btn-success  btn-block" href="avis-show/delete/{{ $user->id }}">Confirmer</a>
													 </div>
													 <div class="col-lg-6">
														<button type="button" class="btn btn-danger btn-block"  data-bs-dismiss="modal" > Annuler</button>
													 </div>
												 </div>
											 </div> 
	  
											
										  
									</div>
								</div>
							</div>
						</div>
					{{-- </form> --}}
				  
                          @endforeach
                        </tbody>
                      </table>
					  <!-- modal start -->
					  {{-- <div id="buttonModal" role="dialog" aria-modal="true" class="fade modal" tabindex="-1">
						<div class="modal-dialog">
						  <div class="modal-content">
							<div class="modal-header">
							  <div class="modal-title h4">Modification client</div> <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal"></button>
							</div>
							<div class="modal-body">
							  <form method="post" >

								  @if(Session::has('status'))
							  <div class="alert alert-success">
								   {{Session::get('status')}} 
							  </div>
							 @endif
							 @csrf
								  
									
								</form>
							</div>
							
						  </div>
						</div>
					  </div> --}}

					  <!--    Model form                    -->
					  
					  
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
	
	

</body>

</html>