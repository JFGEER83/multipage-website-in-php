<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>

 <div class="container">
         <form class="form-horizontal" action="cible.php" method="POST">
             <div class="form-group">
               <label class="col-sm-2" for="inputEmail4">Nom</label>
             <div class="col-sm-10">
               <input type="text" class="form-control" placeholder="Nom">
             </div>
               <label class="col-sm-2" for="inputEmail4">Prénom</label>
               <div class="col-sm-10">
               <input type="text" class="form-control" placeholder="Prénom">
             </div>
             </div>
    <div class="form-group">
       <label class="col-sm-2" for="exampleFormControlInput1">Email address</label>
        <div class="col-sm-10">
       <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
    </div>
    <div class="form-group">     
  <label class="col-sm-4" for="custom-select">Vous désirez des informations sur :</label>
    <div class="col-sm-10">
 <select class="custom-select">
  <option selected>sélectioner votre préference</option>
  <option value="1">ASBL</option>
  <option value="2">Bénévolat</option>
  <option value="3">Association de faits</option>
</select> 
    </div>  
    </div>        
  <div class="form-group">
    <label class="col-sm-2" for="exampleFormControlTextarea1">Message</label>
      <div class="col-sm-10">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>      
  </div>
    <div class="form-gorup">       
     <label class="col-sm-4">Format de réponse souhaitée :</label>
    <div class="form-check form-check-inline">
    <div class="col-sm-10">    
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        </div>    
    <label class="form-check-label" for="inlineCheckbox1">Html</label>
    </div>
    <div class="form-check form-check-inline">
        <div class="col-sm-10">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        </div>
    <label class="form-check-label" for="inlineCheckbox1">Txt</label>
    </div>
    </div>  
    <div class="form-group row">
    <div class="col-sm-9 text-right">
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
    </div>             
</form>
  </div>
    
</body>
</html>


