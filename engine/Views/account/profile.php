

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-12 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?php echo $title; ?></h1>
                                </div>
                                <form class="user" action="/account/profile" method="post">
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>Логин:</label>
                                            <input type="text" class="form-control" value="<?php echo $_SESSION['account']['login'];?>" disabled name="login">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>

                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>E-mail:</label>
                                            <input type="text" class="form-control"  value="<?php echo $_SESSION['account']['email'];?>" name="email">
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>Номер телефона:</label>
                                            <input type="text" class="form-control"  value="<?php echo $_SESSION['account']['phone'];?>" name="phone">
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>Новый пароль для входа:</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Сохранить
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
