<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Список туров
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li class="active">Список туров</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Страна</th>
                                <th>Наименование</th>
                                <th>Цена</th>
                                <th>Удалить</th>
                                <th>Изменить тур</th>
                                <th>Добавление контента</th>
                                <th>Добавление цены</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($products as $product): ?>
                                <tr>
                                    <td><?=$product['id'];?></td>
                                    <td><?=$product['name'];?></td>
                                    <td><?=$product['title'];?></td>
                                    <td><?=$product['price'] ;?></td>
                                    <td><a class="delete" href="<?=ADMIN;?>/product/delete?id=<?=$product['id']?>"><i class="fa fa-fw fa-close text-danger"></i></a></td>
                                    <td><a href="<?= ADMIN ?>/product/edit?id=<?=$product['id']?>">Изменить </a></td>
                                    <td><a class="delete" href="<?=ADMIN;?>/product/add-content?id=<?=$product['id']?>">Добавить </a></td>
                                    <td><a class="delete" href="<?=ADMIN;?>/product/add-price?id=<?=$product['id']?>">Добавить</a></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <?php if($pagination->countPages > 1): ;?>
                            <?= $pagination?>
                        <?endif?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->