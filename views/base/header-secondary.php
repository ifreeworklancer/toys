<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>
    <link rel="stylesheet" href="../../dist/app.css">
</head>

<body>

<?php require_once(__DIR__ . '/../../partials/svgs.php');?>

<!-- App-header -->
<header id="app-header" class="app-header-secondary">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <a href="/" class="logo">
                    Logo
                </a>
            </div>
            <div class="col-auto">
                <div class="d-flex align-items-center">
                    <nav class="nav d-none d-md-block">
                        <ul class="nav-list">
                            <li>
                                <a href="../../page/page-about.php">
                                    О нас
                                </a>
                            </li>
                            <li>
                                <a href="../../page/page-reviews.php">
                                    Отзывы
                                </a>
                            </li>
                            <li>
                                <a href="../../page/page-contacts.php">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="favorites d-none d-md-block">
                        <a href="../../page/page-favorites.php">
                            <svg width="20" height="20">
                                <use xlink:href="#favorite-icon"></use>
                            </svg>
                        </a>
                    </div>
                    <ul class="languages-menu d-none d-md-block">
                        <li class="active"><a href="#">UA</a></li>
                        <li><a href="#">RU</a></li>
                    </ul>
                    <div class="burger-menu">
                        <div class="line line--top"></div>
                        <div class="line line--middle"></div>
                        <div class="line line--bottom"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <nav class="menu-nav">
            <ul class="nav-list mr-0 d-block">
                <li>
                    <a href="../../page/page-about.php">
                        О нас
                    </a>
                </li>
                <li>
                    <a href="../../page/page-reviews.php">
                        Отзывы
                    </a>
                </li>
                <li>
                    <a href="../../page/page-contacts.php">
                        Контакты
                    </a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <div class="favorites">
                    <a href="../../page/page-favorites.php">
                        <svg width="20" height="20">
                            <use xlink:href="#favorite-icon"></use>
                        </svg>
                    </a>
                </div>
                <ul class="languages-menu mr-0">
                    <li class="active"><a href="#">UA</a></li>
                    <li><a href="#">RU</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<!-- Modal -->
<?php include(__DIR__ . '/../modules/modal.php'); ?>

<!-- Main -->
<main>