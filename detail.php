<?php 

    $id = $_GET['id'];
    $movie = file_get_contents('http://www.omdbapi.com/?apikey=eb690a9a&i='.$id);

    $movie = json_decode($movie);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Zeeny MOVIES</title>
  </head>
  <body>

    <!-- Image and text -->
<nav class="navbar navbar-light bg-light mb-5">
    <div class="container">
        <a class="navbar-brand" href="/">
          <img src="favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
          ZEENY - MOVIES
        </a>
    </div>
      </nav>

      <div class="container">
          <div class="row mb-5">
              <div class="col">
                  <h1 class="display-4">Movie Details</h1>
              </div>
          </div>

         <div class="row">
             <div class="col-3">
                 <img src="<?= $movie->Poster; ?>" class="img-fluid shadow rounded">
             </div>
             <div class="col-7">
                 <div class="row">
                     <div class="col-auto">
                         <h2><?= $movie->Title; ?> (<?= $movie->Year; ?>)</h2>
                     </div>
                 </div>
                 <hr>
                 <div class="row">
                     <div class="col-3">
                        <strong>Genre </strong>
                    </div>
                    <div class="col-5">
                        <p><?= $movie->Genre; ?> </p>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-3">
                     <strong >Director </strong> 
                    </div>
                    <div class="col-5">
                        <?= $movie->Director; ?>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-3">
                     <strong >Writer </strong> 
                     </div>
                     <div class="col-5">
                     <?= $movie->Writer; ?>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-3">
                     <strong >Casts </strong> 
                    </div>
                    <div class="col-5">
                        <?= $movie->Actors; ?>
                     </div>
                 </div>
                 <hr>
                 <div class="row">
                     <div class="col-auto">
                     <p class="strong">Plot : </p>  <p><?= $movie->Plot; ?></p>
                     </div>
                 </div>
             </div>
         </div>

    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <script src="/js/script.js">
    </script>


</body>
</html>