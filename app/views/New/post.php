<main>
    <section id="section1-new">
        <div style="background: url('../../../public/images/<?=$new[0]['img2']?>') no-repeat; background-size: cover;" class="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1><?=$new[0]['title']?></h1>
                </div>
                <div class="arrow">
                    <a href="#section2-new">
                        <img src="images/index/arrow.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="section2-new">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p><?=$new[0]['date'];?></p>
                    <p><?=$new[0]['content'];?></div>
                <div class="col-12">
                    <div class="pagination">
                        <a href="" id="prev"><img src="images/arrow.svg" alt="">назад</a>
                        <a href="" id="next">вперед<img src="images/arrow.svg" alt=""></a>
                    </div>
                </div>
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
    <a class="scroll" href="#section1-new">
        <img src="images/arrow.svg" alt="">
    </a>
</div>


<script src="vendor/jquery-3.4.1-min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>