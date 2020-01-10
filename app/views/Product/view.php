<main>

    <section id="section1-tour-single">
        <div style="background: url('../../../public/images/<?=$product[0]['img2']?>') no-repeat; background-size: cover;"
             class="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1><?=$product[0]['title']?></h1>
                </div>
                <div class="arrow">
                    <a href="#section2-tour-single">
                        <img src="images/index/arrow.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="section2-tour-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <img src="images/tour-single/calendar.svg" alt="">
                    <p><?= $product[0]['tour_period']?>
                        <span>Продолжительность</span>
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <img src="images/tour-single/season.svg" alt="">
                    <p><?=$product[0]['name']?>
                        <span>Сезон</span>
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <img src="images/tour-single/age.svg" alt="">
                    <p><?=$product[0]['age']?>+
                        <span>Возвраст</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="section3-tour-single">
        <div class="container">
            <h2>О ДАННОМ ТУРЕ</h2>
            <div class="row">
                <div class="col-lg-6">
                    <p>
                        <?=$product[0]['content']?>
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="owl-carousel owl-theme">
                        <?php foreach($galleries as $gallery):?>
                            <div> <img src="images/<?=$gallery['img']?>" alt=""> </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section4-tour-single">
        <div class="container">
            <h2>ПРОГРАММА</h2>
            <div class="row">
                <?php $i=1; foreach ($tour_programs as $tour_program):?>
                <div class="col-12">
                    <div class="item">
                        <div class="item-head">
                            <div class="round"><?=$i;?></div>
                            <h3><?=$tour_program['sub_title'];?></h3>
                        </div>
                        <div class="item-body">
                            <p>
                                <?=$tour_program['sub_content']?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php $i++; endforeach;?>
            </div>
        </div>
    </section>
    <section id="section5-tour-single">
        <div class="container">
            <h2>ЦЕНЫ</h2>
            <div class="row">
                <div class="col-12">
                    <ul>
                        <?php foreach ($prices as $price):?>
                        <li><?=$price['title_price']?>- <span><?=$price['single_price']?>uzs</span></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="section6-tour-single">
        <div class="container">
            <h2>ЗАКАЗАТЬ ТУР</h2>
            <p>Оставьте заявку и мы вам перезвоним</p>
            <div class="row">

                <form method="post" action="<?=$_SERVER['QUERY_STRING']?>">
                    <div class="col-12">
                        <input type="text" name="firstName" class="col-12" placeholder="Имя">
                    </div>
                    <div class="col-12">
                        <input type="text" name="lastName" class="col-12" placeholder="Фамилия">
                    </div>
                    <div class="col-12">
                        <textarea name="message" id="" class="col-12" placeholder="Ваше сообщение..."></textarea>
                    </div>
                    <div class="col-12">
                        <input type="number" name="number" class="col-12 phone" placeholder="Номер телефона">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="col-12 sendData" name="send" >ОТПРАВИТЬ</button>
                    </div>
                </form>
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
<div class="scrollAndCall">
    <a class="call" href="tel:+998712310014">
        <img src="images/phone.svg" alt="">
    </a>
    <a class="scroll" href="#section1-tour-single">
        <img src="images/arrow.svg" alt="">
    </a>
</div>


<script src="vendor/jquery-3.4.1-min.js" type="text/javascript"></script>
<script src="vendor/owl.carousel.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
<script>$(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            autoplay: true,
            smartSpeed: 1000,
            autoPlayTimeout: 2000,
            nav: true,
            navigation: true,
            pagination: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    });
</script>
