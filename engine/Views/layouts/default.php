<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <?php  ?>
    <title><?php echo $title; ?></title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/">Auction</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <?php if (isset($_SESSION['account']['id'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/account/add">Добавить аукцион</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/account/profile">Профиль</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/account/logout">Выход</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="/account/register">Регистрация</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/account/login">Вход</a>
                </li>
            <?php endif; ?>
        </ul>
<!--        <form class="form-inline my-2 my-lg-0">-->
<!--            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">-->
<!--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
<!--        </form>-->
    </div>
</nav>

<?php echo $content; ?>

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/form.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    
</body>
</html>
