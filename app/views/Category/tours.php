<main>
    <section id="section1-tours">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>ТУРЫ</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit, accusantium...</p>
                </div>
                <div class="arrow">
                    <a href="#section2-tours">
                        <img src="images/index/arrow.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="section2-tours">
        <div class="container">
            <h2>ВСЕ ТУРЫ</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="tour-search">
                        <h2>Поиск тура</h2>
                        <select name="single_search_filter" id="single_search_filter">
                            <option value="" >Все туры</option>
                            <?php foreach ($cities as $city): ?>
                                <option value="<?=$city['name']?>"><?=$city['name'];?></option>
                            <?php endforeach;?>
                        </select>
                        <input type="hidden" name="hidden_country" id="hidden_country" />
                    </div>
                </div>
                <?/*if(!$cities) :*/?><!--
                 /* foreach ($tours as $tour): */?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-head">
                            <img src="images/<?/*=$tour['img']*/?>" alt="">
                        </div>
                        <div class="card-body">
                            <h3><?/*=$tour['title']*/?></h3>
                            <?/*=$tour['content']*/?>
                            <span><?/*=$tour['tour_price']*/?> uzs</span>
                        </div>
                        <div class="card-footer">
                            <span><img src="images/index/card-tour-calendar.svg" alt=""><?/*=$tour['tour_period']*/?></span>
                            <a href="tour/<?/*=$tour['alias']*/?>">Далее</a>
                        </div>
                    </div>
                </div>
                <?php /*endforeach;*/?>
                --><?php /*endif*/?>
                <div id="ajax"></div><!--как адаптировать-->
                <!-- Пагинация-->
            </div>
        </div>
        <div>
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
    <a class="scroll" href="#section1-tours">
        <img src="images/arrow.svg" alt="">
    </a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="vendor/jquery-3.4.1-min.js" type="text/javascript"></script>
<script src="vendor/owl.carousel.min.js"></script>
<script src="js/main.js" type="text/javascript"></script>

<script>
    $(document).ready(function(){

        load_data();

        function load_data(query='')
        {
            $.ajax({
                url:"category/fetch",
                method:"POST",
                data:{query:query},
                success:function(data)
                {
                    $('#ajax').html(data);
                }
            })
        }

        $('#single_search_filter').change(function(){
            $('#hidden_country').val($('#single_search_filter').val());
            var query = $('#hidden_country').val();
            load_data(query);
        });

    });
</script>
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
