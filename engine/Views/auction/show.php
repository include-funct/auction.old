<div class="row mb-2">
<?php foreach ($main as $item): ?>
<div class="col-md-6">
    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary"><?php echo $item['cat']. ' > ' . $item['sub_cat'] ?></strong>
            <div class="mb-1">
                <span class="badge badge-warning">Блиц цена: <?php echo $item['blitz_price']?> руб.</span>
                <span class="badge badge-success">Текущая цена: <?php echo $item['bid_price']?>  руб.</span>
            </div>
            <h3 class="mb-0"><?php echo $item['product'] ?></h3>
            <div class="mb-1 text-muted"><?php echo $item['product'] ?></div>
            <p class="card-text mb-auto"><?php echo substr($item['product_desc'],0,200); ?>...</p>
            <a href="view.php?id=<?php echo $item['id'] ?>" class="stretched-link">Подробнее</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="auto" height="250" src="<?php echo SITEURL.$item['path'] ?>" >
        </div>
    </div>
</div>
<?php endforeach; ?>
</div>


