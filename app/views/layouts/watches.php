<!DOCTYPE html>
<html lang="ru">

<head>
    <base href="/">
    <?=$this->getMeta()?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The First Travel | Главная</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendor/bootstrap-grid.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/main.css">


</head>
<body>
<header>
    <nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <a class="logo" href="/"><img src="images/logo.png" alt=""></a>
                </div>
                <div class="col-lg-6 header-menu">
                    <ul>
                        <li>
                            <a href="/">ГЛАВНАЯ</a>
                        </li>
                        <li>
                            <a href="category/tours">ТУРЫ</a>
                        </li>
                        <li>
                            <a href="category/services">УСЛУГИ</a>
                        </li>
                        <li>
                            <a href="category/news">НОВОСТИ</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-1">
                    <div class="burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<?=$content?>
<script>
    var path = '<?=PATH;?>';
</script>
</body>

</html>
