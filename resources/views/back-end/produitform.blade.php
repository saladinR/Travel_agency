<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-5">

        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <form method="POST" action="{{ url('/product_Form')}}">

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="container">
                
                <div class="row">
                    
                        <h1 class="text-center"> PRODUCT </h1><br>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>image 1</label>
                                <input type="file" class="form-control" name="image" id="image" value="">
                            </div>
                        </div>
                       
                         
                         
                         <div class="col-lg-6">
                            <div class="form-group">
                                <label>Titre </label>
                                <input type="text" class="form-control" name="titre_h1" id="titre_h1" value="">
                            </div>
                         </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <label>Sous Titre </label>
                                <input type="text" class="form-control" name="titre_h2" id="titre_h2" value="">
                            </div>
                         </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <label>Description </label>
                                <textarea class="form-control" name="desc1" id="desc1" rows="4" value=""></textarea>
                            </div>
                         </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <label>Description 2 </label>
                                <textarea class="form-control" name="desc2" id="desc2" rows="4" value=""></textarea>
                            </div>
                         </div>
                         

                         <div class="col-lg-6">
                            <div class="form-group">
                                <label>Prix </label>
                                <input type="text" class="form-control" name="prix" id="prix" value="">
                            </div>
                         </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <label>Nombre des places</label>
                                <input type="text" class="form-control" name="nbr_place" id="nbr_place" value="">
                            </div>
                         </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <label>La date de debut</label>
                                <input type="date" class="form-control" name="date_debut" id="date_debut" value="">
                            </div>
                         </div>
                    
                   
                
            </div>

            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block  mt-3">
         
            
            

            

            
            


            
            
        </form>
       
        

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>







