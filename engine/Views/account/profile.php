

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-12 col-lg-12 col-md-12">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg-7">
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
                        <div class="col-lg-5">
                            <div class="p-3">
                                <div class="text-center">
                                    <h2 class="h4 text-gray-900 mb-4">Победы</h2>
                                </div>
                                <?php foreach ($product as $item): ?>
                                <div class="card shadow mb-3">
                                    <!-- Card Header - Accordion -->
                                    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                        <h6 class="m-0 font-weight-bold text-primary"><?php echo $item['product']; ?></h6>
                                    </a>
                                    <!-- Card Content - Collapse -->
                                    <div class="collapse show" id="collapseCardExample" style="">
                                        <div class="card-body">
                                            Аукцион окончен <?php echo $item['end_date']; ?>, Вы победили со ставкой <strong><?php echo $item['bet']; ?></strong> рублей!
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>



    </div>

</div>
