<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Редактирование товара <?=$news->title;?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/product">Список туров</a></li>
        <li class="active">Редактирование</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?=ADMIN;?>/news/edit" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="title">Наименование поста</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Наименование поста" value="<?=$news->title?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="content">Контент</label>
                            <textarea name="content" id="editor1" cols="80" rows="10"><?=$news->content?></textarea>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4">
                                <div class="box box-danger box-solid file-upload">
                                    <div class="box-header">
                                        <h3 class="box-title">Базовое изображение</h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="single" class="btn btn-success" data-url="news/add-image" data-name="single">Выбрать файл</div>
                                        <p><small>Рекомендуемые размеры: 330х250</small></p>
                                        <div class="single">
                                            <img src="/images/<?=$news->img;?>" alt="" style="max-height: 150px;">
                                        </div>
                                    </div>
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box box-danger box-solid file-upload">
                                    <div class="box-header">
                                        <h3 class="box-title">Изображение карточки(высшее качество)</h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="single_inside" class="btn btn-success" data-url="news/add-image" data-name="single_inside">Выбрать файл</div>
                                        <p><small>Рекомендуемые размеры: 1920х1080</small></p>
                                        <div class="single_inside">
                                            <img src="/images/<?=$news->img2;?>" alt="" style="max-height: 150px;">
                                        </div>
                                    </div>
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="box-footer">
                        <input type="hidden" name="id" value="<?=$news->id;?>">
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->