<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Новый товар
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/product">Список туров</a></li>
        <li class="active">Новый тур</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?=ADMIN;?>/product/add" method="post" data-toggle="validator" id="add">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="title">Наименование тура</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Наименование тура" value="<?php isset($_SESSION['form_data']['title']) ? $_SESSION['form_data']['title'] : null; ?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                        <div class="form-group">
                            <label for="age">Возраст</label>
                            <input type="text" name="age" class="form-control" id="age" pattern="^[0-9]{1,}$" placeholder="Возраст" value="<?php isset($_SESSION['form_data']['age']) ? h($_SESSION['form_data']['age']) : null; ?>">
                        </div>

                        <div class="form-group">
                            <label for="tour_period">Продолжительность</label>
                            <input type="text" name="tour_period" class="form-control" id="tour_period" placeholder="3 дня 3 ночи" value="<?php isset($_SESSION['form_data']['tour_period']) ? h($_SESSION['form_data']['tour_period']) : null; ?>">
                        </div>

                        <div class="form-group">
                            <p>
                                <label for="season_id">Сезон :</label>
                                <select name="season_id" id="season_id">
                                    <option value="">Выбрать сезон</option>
                                    <?php  foreach ($seasons as $season): ?>
                                        <option value="<?=$season['season_id'];?>"><?=$season['name'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </p>

                            <p>
                                <label for="city">Страна : </label>
                                <select name="city_id" id="city_id">
                                    <option value="">Выбрать страну</option>
                                    <?php  foreach ($cities as $city): ?>
                                        <option value="<?=$city['city_id'];?>"><?=$city['name'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </p>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="tour_price">Цена</label>
                            <input type="text" name="tour_price" class="form-control" id="tour_price" placeholder="Цена" pattern="^[0-9]{1,}$" value="<?php isset($_SESSION['form_data']['tour_price']) ? h($_SESSION['form_data']['tour_price']) : null; ?>" required data-error="Допускаются цифры и десятичная точка">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="content">Контент</label>
                            <textarea name="content" id="editor1" cols="80" rows="10"><?php isset($_SESSION['form_data']['content']) ? $_SESSION['form_data']['content'] : null; ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="status" checked> Статус
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="hit"> Хит
                            </label>
                        </div>

                    <div class="form-group">
                            <div class="col-md-4">
                                <div class="box box-danger box-solid file-upload">
                                    <div class="box-header">
                                        <h3 class="box-title">Базовое изображение</h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="single" class="btn btn-success" data-url="product/add-image" data-name="single">Выбрать файл</div>
                                        <p><small>Рекомендуемые размеры: 330х250</small></p>
                                        <div class="single"></div>
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
                                        <div id="single_inside" class="btn btn-success" data-url="product/add-image" data-name="single_inside">Выбрать файл</div>
                                        <p><small>Рекомендуемые размеры: 1920х1080</small></p>
                                        <div class="single_inside"></div>
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
                                        <p><small>Рекомендуемые размеры: 700х230</small></p>
                                        <div class="multi"></div>
                                    </div>
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">Добавить</button>
                    </div>
                </form>
                <?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->