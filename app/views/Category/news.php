<main>
    <section id="section1-news">
        <div class="container">
            <div class="row">
               <?php foreach ($news as $new):?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="card-head">
                           <img src="images/<?=$new['img']?>" alt="">
                        </div>
                        <div class="card-body">
                            <h3><?=$new['title']?></h3>
                                <?=$new['content']?>
                        </div>
                        <div class="card-footer">
                            <a href="new/<?=$new['alias']?>">далее</a>
                            <p><?=$new['date']?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <div>
            <div  class="text-center">
                <?php if($pagination->countPages > 1): ;?>
                    <?= $pagination?>
                <?endif?>
            </div>
        </div>
    </section>
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>© ООО «The First Travel», 20xx-2019</p>
            </div>
        </div>
    </div>
</footer>
<div class="load">
    <div class="loading">
        <div class="lds-grid">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<div class="callback-form">
    <div class="container">
        <h2>ЕСТЬ ВОПРОСЫ?</h2>
        <p>Оставьте заявку и мы вам перезвоним</p>
        <div class="row">
            <div class="col-12">
                <input type="text" class="col-12" placeholder="Имя">
            </div>
            <div class="col-12">
                <input type="text" class="col-12" placeholder="Фамилия">
            </div>
            <div class="col-12">
                <textarea name="" id="" class="col-12" placeholder="Ваше сообщение..."></textarea>
            </div>
            <div class="col-12">
                <input type="text" class="col-12 phone" placeholder="Номер телефона">
            </div>
            <div class="col-12">
                <button class="col-12 sendData">ОТПРАВИТЬ</button>
            </div>
        </div>
        <div class="col-1 closeBtn">
            <img src="images/close.svg" alt="">
        </div>
    </div>
</div>
<div class="scrollAndCall">
    <a class="call" href="tel:+998712310014">
        <img src="images/phone.svg" alt="">
    </a>
    <a class="scroll" href="#section1-news">
        <img src="images/arrow.svg" alt="">
    </a>
</div>


<script src="vendor/jquery-3.4.1-min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
