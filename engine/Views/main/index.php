<main role="main">
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <?php foreach ($main as $item): ?>
                    <div class="col-md-4">

                        <a href="/auction/<?php echo $item['id']; ?>">
                        <div class="card mb-4 box-shadow">
                            <span class="card-img-top " style="height: 225px; width: 100%; display: block;background-image: url('<?php echo SITEURL.$item['path'] ?>'); background-size: cover;"></span>
                            <div class="card-body">
                                <p class="card-text"><?php echo $item['product'] ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mb-1">
                                        <span class="badge badge-warning">Блиц цена: <br><?php echo $item['blitz_price']?> руб.</span>
                                        <span class="badge badge-success">Текущая цена: <br><?php echo $item['bet']?>  руб.</span>
                                    </div>
                                    <small class="text-muted"><?php echo date('d/m', strtotime($item['create_date']))?></small>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php echo $pagination; ?>

        </div>
    </div>
</main>

