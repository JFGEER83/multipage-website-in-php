<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Formulaire Assoc.be</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style type="text/css">
        body {
            padding-top: 5rem;
        }

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>
</head>

    
<body>


    <main role="main" class="container">
<form action="cible.php" method="post" enctype="multipart/form-data">
    <div class="form-group form-inline">
       <label for="name" class="col-2">Nom</label>
       <input type="text" id="name" name="name" class="form-control col-md-6" placeholder="Nom de famille">
    </div>
    <div class="form-group form-inline">    
        <label for="firstname" class="col-2">Prénom</label>
       <input type="text" id="firstname" name="firstname" class="form-control col-md-6" placeholder="Prénom">
    </div> 
    <div class="form-group form-inline">
       <label for="email" class="col-2">Email</label>
       <input type="mail" id="email" name="email" class="form-control col-md-6" placeholder="email@mail.me">
    </div>  
    <div class="form-group form-inline">  
        <label for"choix" class="col-2">Vous êtes</label>
      <select name="choix" id="choix" class="custom-select">
        <option selected>sélectioner votre préference</option>
        <option value="ASBL">ASBL</option>
        <option value="Bénévolat">Bénévolat</option>
        <option value="Association de faits">Association de faits</option>
       </select> 
    </div>
    <div class="form-group form-inline">
       <label for="message" class="col-2">Votre message</label>
       <textarea name="message" class="form-control col-md-6" id="message" placeholder="Tapez votre message ici"></textarea>
    </div>    
    <label for="check" class="col-2">Format de réponse</label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="check" id="html" value=".html">
        <label class="form-check-label" for="html">.html</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="check" id="txt" value=".txt">
        <label class="form-check-label" for="txt">.txt</label>
      </div>
     <label class="custom-file" id="customFile">
         <input type="file" size="32" name="image_field" value="">
     </label>
    <div>
        <button type="submit" class="btn btn-light">Envoyer</button>
    </div>
</form>

    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>