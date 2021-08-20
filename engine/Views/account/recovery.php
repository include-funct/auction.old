
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Забыли пароль?</h1>
                    <p class="mb-4">Мы это понимаем, всякое случается. Просто введите свой адрес электронной почты ниже, и мы вышлем вам ссылку для сброса пароля!</p>
                  </div>
                  <form class="user" action="/account/recovery" method="post">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Введите E-mail">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Сбросить пароль
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="/account/register">Create an Account!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="/account/login">Already have an account? Login!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
