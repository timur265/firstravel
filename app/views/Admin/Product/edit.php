<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Редактирование товара <?=$product->title;?>
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
                <form action="<?=ADMIN;?>/product/edit" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="title">Наименование тура</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Наименование тура" value="<?=$product->title;?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                        <div class="form-group">
                            <label for="age">Возраст</label>
                            <input type="text" name="age" class="form-control" id="age" pattern="[0-9]{1-2}" placeholder="Возраст" value="<?=$product->age ?>">
                        </div>

                        <div class="form-group">
                            <label for="tour_period">Продолжительность</label>
                            <input type="text" name="tour_period" class="form-control" id="tour_period" placeholder="3 дня 3 ночи" value="<?=$product->tour_period?>">
                        </div>

                        <div class="form-group">
                            <p>
                                <label for="season_id">Сезон :</label>
                                <select name="season_id" id="season_id">
                                    <option value="<?=$season[0]['season_id'];?>"><?=$season[0]['name'];?></option>
                                    <?php  foreach ($seasons as $season): ?>
                                        <option value="<?=$season['season_id'];?>"><?=$season['name'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </p>

                            <p>
                                <label for="city">Страна : </label>
                                <select name="city_id" id="city_id">
                                    <option value="<?=$city[0]['city_id'];?>"><?=$city[0]['name']?></option>
                                    <?php  foreach ($cities as $city): ?>
                                        <option value="<?=$city['city_id'];?>"><?=$city['name'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </p>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="tour_price">Цена</label>
                            <input type="text" name="tour_price" class="form-control" id="tour_price" placeholder="Цена" pattern="^[0-9]{1,}$" value="<?=$product->tour_price?>" required data-error="Допускаются цифры и десятичная точка">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="status"<?=$product->status ? ' checked' : null;?>> Статус
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="hit"<?=$product->hit ? ' checked' : null;?>> Хит
                            </label>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="content">Контент</label>
                            <textarea name="content" id="editor1" cols="80" rows="10"><?=$product->content ?></textarea>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4">
                                <div class="box box-danger box-solid file-upload">
                                    <div class="box-header">
                                        <h3 class="box-title">Базовое изображение</h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="single" class="btn btn-success" data-url="product/add-image" data-name="single">Выбрать файл</div>
                                        <p><small>Рекомендуемые размеры: 125х200</small></p>
                                        <div class="single">
                                            <img src="/images/<?=$product->img;?>" alt="" style="max-height: 150px;">
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
                                        <div id="single_inside"  class="btn btn-success" data-url="product/add-image" data-name="single_inside">Выбрать файл</div>
                                        <p><small>Рекомендуемые размеры: 1920х1080</small></p>
                                        <div class="single_inside">
                                            <img src="/images/<?=$product->img2;?>" alt="" style="max-height: 150px;">
                                        </div>
                                    </div>
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="box box-primary box-solid file-upload">
                                    <div class="box-header">
                                        <h3 class="box-title">Картинки галереи</h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="multi" class="btn btn-success" data-url="product/add-image" data-name="multi">Выбрать файл</div>
                                        <p><small>Рекомендуемые размеры: 700х1000</small></p>
                                        <div class="multi">
                                            <?php if(!empty($gallery)): ?>
                                                <?php foreach($gallery as $item): ?>
                                                    <img src="/images/<?=$item;?>" alt="" style="max-height: 150px; cursor: pointer;" data-id="<?=$product->id;?>" data-src="<?=$item;?>" class="del-item">
                                                <?php endforeach; ?>
                                            <?php endif; ?>
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
                        <input type="hidden" name="id" value="<?=$product->id;?>">
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->