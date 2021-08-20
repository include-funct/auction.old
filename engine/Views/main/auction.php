<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="container">
                    <div class="row">

                        <div class="col-md-8 blog-main">
                            <h3 class="pb-3 mb-4 font-italic border-bottom">
                                <?php echo $city; ?>
                            </h3>

                            <div class="blog-post">
                                <h2 class="blog-post-title"><?php echo $data['product'];?></h2>
                                <p class="blog-post-meta"><?php echo $data['create_date'];?> <a href="#"><?php echo $user; ?></a></p>
                                <p><?php echo $data['product_desc'];?></p>
                                <hr><?php echo $data['status']; ?>
                            </div><!-- /.blog-post -->
                            <h3>История ставок</h3>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Пользователь</th>
                                    <th scope="col">Ставка</th>
                                    <th scope="col">Время</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($history as $item): ?>
                                <tr>
                                    <td><?php echo $item['users_id']; ?></td>
                                    <td><?php echo $item['bid_price']; ?></td>
                                    <td><?php echo $item['time_bid']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>


                        </div><!-- /.blog-main -->

                        <aside class="col-md-4 blog-sidebar">
                            <div class="p-3 mb-3 bg-light rounded">
                                <form action="/auction/<?php echo $data['id'];?>" method="post">
                                <h4 class="font-italic"><?php echo $cat; ?></h4>
                                <p class="mb-0"><img style="height: 225px; width: 100%; display: block;background-image: url('<?php echo $img; ?>'); background-size: cover; alt="<?php echo $data['product'];?>"></p>
                                    <?php if ($data['status'] == "FINISH"): ?>
                                        <hr>
                                        <div class="alert alert-danger text-center" role="alert">
                                            <strong>АУКЦИОН ОКОНЧЕН!</strong>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($data['status'] !== "FINISH"): ?>
                                <h4>Оптимальная цена <span class="badge badge-success"><?php echo $data['optimal_price']?>  руб.</span></h4>
                                <h4>Блиц цена <span class="badge badge-danger"><?php echo $data['blitz_price']?>  руб.</span></h4>
                                <h4>Текущая цена <span class="badge badge-info"><?php echo $start ?> руб.</span></h4>
                                <hr>
                                <p>Минимальная ставка <?php echo $min?> руб.</p>
                                <div class="input-group mb-3">
                                    <input type="hidden" name="idauc" id="idauc" value="<?php echo $data['id']?>">
                                    <input type="text" class="form-control" placeholder="Ваша ставка, руб." name="custombet" id="custombet" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="submit" id="button-addon2" value="Ок">Ок</button>
                                    </div>

                                </div>
                                </form>
                                <form action="/auction/<?php echo $data['id'];?>" method="post">
                                    <input type="hidden" name="idauct" id="idauct" value="<?php echo $data['id']?>">
                                    <input type="hidden" name="blitzprice" id="blitzprice" value="<?php echo $data['blitz_price']?>">
                                    <button type="submit" name="goblitz" id="goblitz" class="btn btn-danger btn-block" value="Full">Купить сразу за <?php echo $data['blitz_price']?>  руб.</button>
                                </form>
                                <?php endif; ?>
                            </div>


                        </aside><!-- /.blog-sidebar -->

                    </div><!-- /.row -->
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

