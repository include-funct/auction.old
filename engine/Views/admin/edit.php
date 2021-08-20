<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Редактирование аукциона</h4>
                                    <p class="text-muted mb-4 font-14">
                                        Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-2">
                                                <form enctype="multipart/form-data" method="post" action="actionnew.php">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="product">Название аукциона</label>
                                                            <input type="text" class="form-control border border-success" name="product" required>
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="categories">Категория</label>
                                                            <select class="form-control" name="categories" id="categories">

                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="countries">Город</label>
                                                            <select class="form-control" name="countries" id="countries">

                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="enddate">Дата окончания аукциона:</label>
                                                            <input type="date" class="form-control border border-success" name="enddate" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6 ">
                                                            <label for="productdesc">Описание</label>
                                                            <textarea type="text" class="form-control border border-success" name="productdesc" placeholder="Описание" required></textarea>
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="loadfile">Изображение</label><br>
                                                            <input type="file" class="btn btn btn-default" name="loadfile" value="Отправка файла">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-3">
                                                            <label for="minprice">Стартовая цена</label>
                                                            <input type="text" class="form-control border border-success" name="minprice" placeholder="Оптимальная цена" required>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="optimalprice">Оптимальная цена продажи</label>
                                                            <input type="text" class="form-control border border-success" name="optimalprice" placeholder="Оптимальная цена" required>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="blitzprice">Блиц цена</label>
                                                            <input type="text" class="form-control border border-success" name="blitzprice" placeholder="Оптимальная цена" required>
                                                        </div>

                                                    </div>
                                                    <button type="submit" name="sendfile" class="btn btn-primary" value="Отправка файла">Оставить заявку</button>
                                                    <button type="reset" class="btn btn-default">Очистить форму</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


                        <!-- end row -->        
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                               2016 - 2019 © Adminto theme by <a href="">Coderthemes</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>