<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Добавить контент
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/product">Список туров</a></li>
        <li class="active">Добавить цену</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?=ADMIN;?>/product/add-price" method="post" data-toggle="validator" id="add">
                        <div class="form-group has-feedback">
                            <label for="single_price">Цена</label>
                            <input type="text" name="single_price" class="form-control" id="single_price" placeholder="Цена" pattern="^[0-9]{1,}$" value="<?php isset($_SESSION['form_data']['single_price']) ? h($_SESSION['form_data']['single_price']) : null; ?>" required data-error="Допускаются цифры и десятичная точка">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="title_price">Наименовние для цен</label>
                            <input type="text" name="title_price" class="form-control" id="title_price" placeholder="Наименовние для цен" value="<?php isset($_SESSION['form_data']['title_price']) ? h($_SESSION['form_data']['title_price']) : null; ?>">
                        </div>
                        <input type="hidden" name="id" value="<?=$_GET['id']?>">

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