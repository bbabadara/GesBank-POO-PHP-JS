<!-- Section: Design Block -->

  <div class="card mb-3 mt-5 shadow-lg ">
    <div class="row g-0 d-flex align-items-center ">
      <div class="col-lg-4 d-none d-lg-flex">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-8 ">
        <div class="card-body py-5 px-md-5">

          <form action="<?php WEBROOT ?>" method="post">
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Email </label>
              <input type="email" id="form2Example1" class="form-control" name="email"/>
              <div class="error"></div>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Mot de passe</label>
              <input type="password" id="form2Example2" class="form-control" name="pwd" />
              <div class="error"></div>
            </div>

            <div class="row mb-4">
              <div class="col">
                <a href="#!">Mot de passe oublié? </a>
              </div>
            </div>
                <input type="hidden" name="ressource" value="html">
                <input type="hidden" name="controller" value="security">
                <!-- <input type="hidden" name="action" value="login"> -->
            <button  type="submit" name="action" value="login"  data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Se connecter</button>

          </form>

        </div>
      </div>
    </div>
  </div>

