<!-- <!DOCTYPE html> -->
<!-- <main role="main" class="container"> -->
<form action="mail_send.php" method="post">
    <div class="form-group form-inline">
       <label for="name" class="col-4">Nom</label>
       <input type="text" id="name" name="name" class="form-control col-md-6" placeholder="Nom de famille">
    </div>
    <div class="form-group form-inline">    
        <label for="firstname" class="col-4">Prénom</label>
       <input type="text" id="firstname" name="firstname" class="form-control col-md-6" placeholder="Prénom">
    </div> 
    <div class="form-group form-inline">
       <label for="email" class="col-4">Email</label>
       <input type="mail" id="email" name="email" class="form-control col-md-6" placeholder="email@mail.me">
    </div>  
    <div class="form-group form-inline">  
        <label for"choix" class="col-4">Vous êtes</label>
      <select name="choix" id="choix" class="custom-select">
        <option selected>sélectioner votre préference</option>
        <option value="ASBL">ASBL</option>
        <option value="Bénévolat">Bénévolat</option>
        <option value="Association de faits">Association de faits</option>
       </select> 
    </div>
    <div class="form-group form-inline">
       <label for="message" class="col-6">Votre message</label>
       <textarea name="message" class="form-control col-md-6" id="message" placeholder="Tapez votre message ici"></textarea>
    </div>    
    <label for="check" class="col-6">Format de réponse</label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="check" id="html" value=".html">
        <label class="form-check-label" for="html">.html</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="check" id="txt" value=".txt">
        <label class="form-check-label" for="txt">.txt</label>
      </div>
    <div>
        <button type="submit" class="btn btn-light">Envoyer</button>
    </div>
</form>

   <!--  </main> -->
