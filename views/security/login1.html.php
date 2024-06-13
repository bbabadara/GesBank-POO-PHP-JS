<!-- Section: Design Block -->

<div class="card mb-3 mt-5 shadow-lg ">
  <div class="row g-0 d-flex align-items-center ">
    <div class="col-lg-4 d-none d-lg-flex">
      <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes" class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
    </div>
    <div class="col-lg-8 ">
      <div class="card-body py-5 px-md-5">

        <form action="<?php WEBROOT ?>" method="post">
          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="inputmail">Email </label>
            <input type="email" id="inputmail" class="form-control tovalidate" name="email" />
            <div class="error"></div>
          </div>

          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="inputpwd">Mot de passe</label>
            <input type="password" id="inputpwd" class="form-control tovalidate" name="pwd" />
            <div class="error"></div>
          </div>
          <div class="form-check mb-2">
            <input type="checkbox" class="form-check-input" onkeypress="" id="affichepwd">
            <label class="form-check-label" for="exampleCheck1">Afficher mot de passe</label>
          </div>


          <div class="row mb-4">
            <div class="col">
              <a href="#!">Mot de passe oublié? </a>
            </div>
          </div>
          <input type="hidden" name="ressource" value="html">
          <input type="hidden" name="controller" value="security">
          <button id="loginbtn" type="submit" name="action" value="login" class="btn btn-primary btn-block mb-4">Se connecter</button>

        </form>

      </div>
    </div>
  </div>
</div>

<script src="<?= WEBROOT ?>/js/controllers/security.js" type="module"></script>