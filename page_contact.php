<!-- <!DOCTYPE html> -->
<!-- <main role="main" class="container"> -->
<!-- <div class= "col-12">
<h2 id="ancre-asbl"class="section-title-primary">formulaire</h2>
</div> -->



 <div class="col-12 col-sm-6 my-sm-3">
<h3 class="section-title-third">A CHAQUE QUESTION SA REPONSE</h3>
<form action="cible2.php" method="post" enctype="multipart/form-data">
    <div class="form-group form-inline">
       <label for="name" class="col-12 col-sm-4">Nom</label>
       <input type="text" id="name" name="name" class="form-control col-sm-8" placeholder="Nom de famille">
    </div>
    <div class="form-group form-inline">    
        <label for="firstname" class="col-12 col-sm-4">Prénom</label>
       <input type="text" id="firstname" name="firstname" class="form-control col-sm-8" placeholder="Prénom">
    </div> 
    <div class="form-group form-inline">
       <label for="email" class="col-12 col-sm-4">Email</label>
       <input type="mail" id="email" name="email" class="form-control col-sm-8" placeholder="email@mail.me">
    </div>  
    <div class="form-group form-inline">  
        <label for"choix" class="col-12 col-sm-4">Vous êtes</label>
      <select name="choix" id="choix" class="custom-select">
        <option selected>sélectioner votre préference</option>
        <option value="ASBL">ASBL</option>
        <option value="Bénévolat">Bénévolat</option>
        <option value="Association de faits">Association de faits</option>
       </select> 
    </div>
    <div class="form-group form-inline">
       <label for="message" class="col-12 col-sm-4">Votre message</label>
       <textarea name="message" class="form-control col-sm-8" id="message" placeholder="Tapez votre message ici"></textarea>
    </div>    
    <label for="check" class="col-12 col-sm-4">Format de réponse</label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="check" id="html" value=".html">
        <label class="form-check-label" for="html">.html</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="check" id="txt" value=".txt">
        <label class="form-check-label" for="txt">.txt</label>
      </div>
     <label class=" my-2 custom-file" id="customFile">
         <input type="file" size="32" name="image_field" value="">
     </label>
    <div>
        <button type="submit" class="mt-2 btn btn-light">Envoyer</button>
    </div>
</form>









<!-- <form class="col-12" action="mail_send.php" method="post">
    <div class="col-12 form-group form-inline">
       <label for="name" class="col-12 col-sm-4">Nom</label>
       <input type="text" id="name" name="name" class="form-control col-12 col-sm-8" placeholder="Nom de famille">
    </div>
    <div class="col-12 form-group form-inline">    
        <label for="firstname" class="col-12 col-sm-4">Prénom</label>
       <input type="text" id="firstname" name="firstname" class="form-control col-12 col-sm-8" placeholder="Prénom">
    </div> 
    <div class="col-12 form-group form-inline">
       <label for="email" class="col-12 col-sm-4">Email</label>
       <input type="mail" id="email" name="email" class="form-control col-12 col-sm-8" placeholder="email@mail.me">
    </div>  
    <div class="col-12 form-group form-inline">  
        <label for"choix" class="col-12 col-sm-4">Vous êtes</label>
        <select name="choix" id="choix" class=" col-12 col-sm-8 custom-select">
        <option selected>sélectioner votre préference</option>
        <option value="ASBL">ASBL</option>
        <option value="Bénévolat">Bénévolat</option>
        <option value="Association de faits">Association de faits</option>
       </select> 
    </div>
    <div class="col-12 form-group form-inline">
       <label for="message" class="col-12 col-sm-4">Votre message</label>
       <textarea name="message" class="form-control col-12 col-sm-8" id="message" placeholder="Tapez votre message ici"></textarea>
    </div>    
    <label for="col-12 check" class="col-12 col-sm-4">Format de réponse</label>
      <div class="col-12 col-sm-3 form-check form-check-inline">
        <input class="form-check-input" type="radio" name="check" id="html" value=".html">
        <label class="form-check-label" for="html">.html</label>
      </div>
      <div class="col-12 col-sm-3 form-check form-check-inline">
        <input class="form-check-input" type="radio" name="check" id="txt" value=".txt">
        <label class="form-check-label" for="txt">.txt</label>
      </div>
    <div>
        <button type="submit" class=" offset-4 col-4 col-sm-2 btn btn-secondary">Envoyer</button>
    </div>
</form> -->
 </div>

   <!--  </main> -->
