<?php


namespace app\controllers;


use travel\libs\Pagination;
use travel\App;

class CategoryController extends AppController {

    public function toursAction() {
        $cities = \R::getAll("SELECT * FROM city");
        if(!$cities) {
            throw new \Exception('Страница не найдена', 404);
        }
            $query = "SELECT *
                FROM product p
                LEFT JOIN  city USING (city_id)
                /*LEFT JOIN  tour_program_content tpc on p.id = tpc.product_id*/
                LEFT JOIN price p2 on p.id = p2.product_id";
            $tours = \R::getAll($query);
            $this->set(compact('cities'));


        $this->setMeta('The First Travel | Туры');
    }

    public function fetchAction() {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = App::$app->getProperty('pagination');
        $total = \R::count('product' );
        $pagination = new Pagination($page, $perpage, $total);
        $start = $pagination->getStart();

        if($_POST['query'] != '') {
            $search_query = $_POST['query'];
            $query = "SELECT *
                FROM product p
                LEFT JOIN  city USING (city_id)
                WHERE name LIKE '%$search_query'
                ORDER BY id DESC ";
            $tours = \R::getAll($query);
            $output = '';
        } else{
            $search_query = $_POST['query'];
            $query = "SELECT *
                FROM product p
                LEFT JOIN  city USING (city_id)
                ORDER BY id DESC ";
            $tours = \R::getAll($query);
            $output = '';
        }
        foreach ($tours as $tour) {
            $output .=
                '<div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-head">
                        <img src="images/'.$tour['img'].'" alt="">
                    </div>
                    <div class="card-body">
                        <h3>'.$tour['title'].'</h3>
                        '. $tour['content'].'
                        <span>'.$tour['tour_price'].' uzs</span>
                    </div>
                    <div class="card-footer">
                        <span><img src="images/index/card-tour-calendar.svg" alt="">'.$tour['tour_period'].'</span>
                        <a href="tour/'.$tour['alias'].'">Далее</a>
                    </div>
                </div>
            </div>';
        }
        echo $output  ;
    }

    public function servicesAction() {
        $this->setMeta('The First Travel | Услуги');
    }

    public function newsAction() {

        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = App::$app->getProperty('pagination_new');
        $total = \R::count('news' );
        $pagination = new Pagination($page, $perpage, $total);
        $start = $pagination->getStart();

        $news = \R::getAll("SELECT title,
                                content, 
                                img,
                                DATE_FORMAT(date, '%d.%m.%Y') as date, 
                                alias
                                FROM news
                                ORDER BY id DESC
                 LIMIT $start, $perpage
                  ");

        $this->set(compact('news','pagination'));
        $this->setMeta('The First Travel | Новости');
    }




}