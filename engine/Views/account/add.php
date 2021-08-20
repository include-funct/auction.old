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
                                    <h1 class="h4 text-gray-900 mb-4">Добавление аукциона</h1>
                                </div>
                                    <form enctype="multipart/form-data" method="post" action="/account/add">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="product">Название аукциона</label>
                                                <input type="text" class="form-control border border-success" name="product" id="product" required>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="categories">Категория</label>

                                                <select class="form-control" name="categories" id="categories">
                                                    <?php foreach ($cat as $key => $item): ?>
                                                        <option value="<?php echo $item['id']; ?>"><?php echo $item['cat']; ?> > <?php echo $item['sub_cat']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="countries">Город</label>
                                                <select class="form-control" name="countries" id="countries">
                                                    <?php foreach ($city as $key => $item): ?>
                                                        <option value="<?php echo $item['id']; ?>"><?php echo $item['city']; ?>, <?php echo $item['country']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="enddate">Дата окончания аукциона:</label>
                                                <input type="date" class="form-control border border-success" name="enddate" id="enddate" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6 ">
                                                <label for="productdesc">Описание</label>
                                                <textarea type="text" class="form-control border border-success" name="productdesc" id="productdesc" placeholder="Описание" required></textarea>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="loadfile">Изображение</label><br>
                                                <input type="file" class="btn btn btn-default" name="loadfile" id="loadfile" value="Отправка файла">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="minprice">Стартовая цена</label>
                                                <input type="text" class="form-control border border-success" name="minprice" id="minprice" placeholder="Оптимальная цена" required>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="optimalprice">Оптимальная цена продажи</label>
                                                <input type="text" class="form-control border border-success" name="optimalprice" id="optimalprice" placeholder="Оптимальная цена" required>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="blitzprice">Блиц цена</label>
                                                <input type="text" class="form-control border border-success" name="blitzprice" id="blitzprice" placeholder="Оптимальная цена" required>
                                            </div>

                                        </div>
                                        <button type="submit" name="sendfile" class="btn btn-primary" value="Отправка файла">Оставить заявку</button>
                                        <button type="reset" class="btn btn-default">Очистить форму</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
