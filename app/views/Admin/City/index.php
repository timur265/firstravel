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
                                <th>Удалить</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($cities as $city): ?>
                                <tr>
                                    <td><?=$city['city_id'];?></td>
                                    <td><?=$city['name'];?></td>
                                    <td><a class="delete" href="<?=ADMIN;?>/city/delete?id=<?=$city['city_id']?>"><i class="fa fa-fw fa-close text-danger"></i></a></td>
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