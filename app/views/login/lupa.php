<!-- about -->
<div class="about">
  <div class="container w-50">
    <div class="card" style="border-radius: 1rem;">
      <div class="row">
        <div class="col-md-6 col-lg-12 d-flex align-items-center">
          <div class="card-body p-5 text-black">
            <form action="<?= BASEURL ?>/login/gantiPassword" method="POST">
              <?php Flasher::flash(); ?>
              <div class="d-flex align-items-center mb-3 pb-1">
                <span class="h1 fw-bold mb-0" style="color: #ff56a8;">Lupa Password</span>
              </div>

              <div class="form-outline mb-4">
                <input type="text" name="username" class="form-control form-control-lg" />
                <label class="form-label" for="form2Example17">Username</label>
              </div>

              <div class="form-outline mb-4">
                <input type="password" name="password" class="form-control form-control-lg" />
                <label class="form-label" for="form2Example27">Password</label>
              </div>

              <div class="form-outline mb-4">
                <input type="password" name="passwordBaru" class="form-control form-control-lg" />
                <label class="form-label" for="form2Example27">Password</label>
              </div>

              <div class="pt-1 mb-4">
                <button class="btn btn-lg btn-block" style="background-color: #FFA8D3;" type="submit">Confirm</button>
              </div>

              <a class="text-dark" href="<?= BASEURL ?>/login">Login</a>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>