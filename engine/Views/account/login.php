  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-12 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"><img src="/assets/images/authoriz.jpg" alt="Авторизация"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Авторизация</h1>
                  </div>
                  <form class="user" action="/account/login" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="login" id="login" aria-describedby="emailHelp" placeholder="Логин">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Пароль"</div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Запомнить меня</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Войти
                    </button>

                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="/account/recovery">Забыли пароль?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="/account/register">Регистрация</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
