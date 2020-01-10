<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Добавить контент
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/product">Список туров</a></li>
        <li class="active">Добавить контент</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?=ADMIN;?>/product/add-content" method="post" data-toggle="validator" id="add">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="sub_title">Наименование подзаголовка программы</label>
                            <input type="text" name="sub_title" class="form-control" id="sub_title" placeholder="Наименование подзаголовка программы" value="<?php isset($_SESSION['form_data']['sub_title']) ? $_SESSION['form_data']['sub_title'] : null; ?>" required>
                        </div>
                        <input type="hidden" name="id" value="<?=$_GET['id']?>">

                        <div class="form-group has-feedback">
                            <label for="sub_content">Контент программы</label>
                            <textarea name="sub_content" id="editor2" cols="80" rows="10"><?php isset($_SESSION['form_data']['sub_content']) ? $_SESSION['form_data']['sub_content'] : null; ?></textarea>
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