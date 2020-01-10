<main>
    <section id="section1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm 12">
                    <div class="card">
                        <div class="card-head">
                            <h1>LOREM IPSUM</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. In est ante in nibh mauris cursus
                                mattis molestie a. Ornare lectus sit amet est placerat in egestas erat imperdiet.
                            </p>
                        </div>
                        <div class="card-footer">
                            <a id="scroll-btn" href="#section2">УЗНАТЬ БОЛЬШЕ</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="phone-content">
                        <div>
                            <h3>Где провести отпуск?</h3>
                            <a href="category/tours">ПЕРЕЙТИ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrow">
            <a href="#section2">
                <img src="images/index/arrow.svg" alt="">
            </a>
        </div>
    </section>
    <section id="section2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>ГЛАВНАЯ ИНФОРМАЦИЯ</h2>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Mauris ultrices eros in cursus turpis massa tincidunt dui. Et
                        tortor consequat id porta nibh venenatis cras sed. Odio euismod lacinia at quis. Gravida cum
                        sociis natoque penatibus et. Dictumst vestibulum rhoncus est pellentesque elit. Pulvinar
                        pellentesque habitant morbi tristique senectus et. Egestas quis ipsum suspendisse ultrices
                        gravida dictum fusce. At in tellus integer feugiat. Fermentum dui faucibus in ornare quam
                        viverra.</p>
                </div>
                <div class="col-6 image">
                    <img src="images/index/question.svg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-6 image">
                    <img src="images/index/like.svg" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Mauris ultrices eros in cursus turpis massa tincidunt dui. Et
                        tortor consequat id porta nibh venenatis cras sed. Odio euismod lacinia at quis. Gravida cum
                        sociis natoque penatibus et. Dictumst vestibulum rhoncus est pellentesque elit. Pulvinar
                        pellentesque habitant morbi tristique senectus et. Egestas quis ipsum suspendisse ultrices
                        gravida dictum fusce. At in tellus integer feugiat. Fermentum dui faucibus in ornare quam
                        viverra.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="section3">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <a class="circle" href="category/tours">
                        <img src="images/index/world-icon.svg" alt="">
                    </a>
                    <p>ТУРЫ</p>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <a class="circle" href="category/services#section7-services">
                        <img src="images/index/visa.svg" alt="">
                    </a>
                    <p>ВИЗОВАЯ ПОДДЕРЖКА</p>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <a class="circle" href="category/services#section10-services">
                        <img src="images/index/vip.svg" alt="">
                    </a>
                    <p>VIP УСЛУГИ</p>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <a class="circle" href="category/services#section9-services">
                        <img src="images/index/mice.svg" alt="">
                    </a>
                    <p>ОРГАНИЗАЦИЯ MICE</p>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <a class="circle" href="category/services#section5-services">
                        <img src="images/index/hotel.svg" alt="">
                    </a>
                    <p>ОТЕЛИ</p>
                </div>
            </div>
        </div>
    </section>
    <section id="section4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>НАШИ ПРЕИМУЩЕСТВА</h2>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="images/index/advantage1.jpg" alt="">
                    <h2>ПРЕИМУЩЕСТВО 1</h2>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="images/index/advantage2.jpg" alt="">
                    <h2>ПРЕИМУЩЕСТВО 2</h2>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="images/index/advantage3.jpg" alt="">
                    <h2>ПРЕИМУЩЕСТВО 3</h2>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="images/index/advantage4.jpg" alt="">
                    <h2>ПРЕИМУЩЕСТВО 4</h2>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="images/index/advantage5.jpg" alt="">
                    <h2>ПРЕИМУЩЕСТВО 5</h2>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="images/index/advantage6.jpg" alt="">
                    <h2>ПРЕИМУЩЕСТВО 5</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="section5">
        <div class="container">
            <h2>ГОРЯЧИЕ ТУРЫ</h2>
            <div class="slider owl-carousel owl-theme owl-loaded row">
                <?php foreach($hits as $hit):?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="card-head">
                            <img src="images/<?=$hit['img']?>" alt="">
                        </div>
                        <div class="card-body">
                            <h3><?=$hit['title']?></h3>
                            <p><?=$hit['content']?></p>
                            <span><?=$hit['tour_price']?> uzs</span>
                        </div>
                        <div class="card-footer">
                                <span><img src="images/index/card-tour-calendar.svg" alt=""><?= $hit['tour_period']?></span>
                            <a href="tour/<?=$hit['alias']?>">Далее</a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>
    <section id="section6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>КОНТАКТЫ</h2>
                </div>
                <div class="col-lg-6">
                    <ul>
                        <li><img src="images/index/contact-geo.svg" alt=""> Адресс...</li>
                        <li><img src="images/index/contact-phone.svg" alt=""><a href="tel:+998712310014">+998 71-231-00-14</a></li>
                        <li><img src="images/index/contact-smartphone.svg" alt=""><a href="tel:+998712310084">+998 71-231-00-84</a></li>
                        <li><img src="images/index/contact-mail.svg" alt=""><a href="mailto:manager@firsttravel.uz">manager@firsttravel.uz</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4299.717454726398!2d69.30547674470199!3d41.31385856920546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef5c3cb2ddc4f%3A0x4a212da45d2c46d9!2sThe%20First%20Travel!5e0!3m2!1sru!2s!4v1574704945665!5m2!1sru!2s"
                            frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
<div class="scrollAndCall">
    <a class="call" href="tel:+998712310014">
        <img src="images/phone.svg" alt="">
    </a>
    <a class="scroll" href="#section1">
        <img src="images/arrow.svg" alt="">
    </a>
</div>


<script src="vendor/jquery-3.4.1-min.js" type="text/javascript"></script>
<script src="vendor/owl.carousel.min.js"></script>
<script src="js/main.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            margin: 0,
            loop: false,
            autoplay: false,
            smartSpeed: 1000,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });
    });
</script>