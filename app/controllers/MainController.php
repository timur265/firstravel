<?php


namespace app\controllers;
use travel\Cache;


class MainController extends AppController {

    public function indexAction() {

        $hits = \R::getAll("SELECT title, content, tour_price, img, alias, tour_period 
                FROM product p
                  LEFT JOIN  city USING (city_id)
                  /*LEFT JOIN  content USING (content_id)*/
                  LEFT JOIN seasons USING(season_id)
WHERE p.hit = '1'
ORDER BY id DESC");
        $this->setMeta('The First Travel | Главная');
        $this->set(compact( 'hits'));
    }
}