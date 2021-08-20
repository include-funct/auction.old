
  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Регистрация</h1>
              </div>
              <form class="user" action="/account/register" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Ф.И.О">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="phone" name="phone" placeholder="+375 29 1234567">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="login" name="login" placeholder="Логин">
                    </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Пароль">
                  </div>
<!--                  <div class="col-sm-6">-->
<!--                    <input type="password" class="form-control form-control-user" name="exampleRepeatPassword" placeholder="Repeat Password">-->
<!--                  </div>-->
                </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                      Зарегистрироваться
                  </button>
                <hr>

              </form>
              <hr>
              <div class="text-center">
                  <a class="small" href="/account/recovery">Забыли пароль?</a>
              </div>
              <div class="text-center">
                  <a class="small" href="/account/login">У Вас есть аккаунт? Войти!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

