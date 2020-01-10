<?php


namespace app\controllers;

use app\models\Breadcrumbs;
use app\models\Product;

class ProductController extends AppController {

    public function viewAction() {
        $alias = $this->route['alias'];
        $product = \R::getAll("SELECT *
                FROM product p
                  LEFT JOIN  city USING (city_id)
                  LEFT JOIN seasons USING(season_id)    
                  WHERE p.alias = ? AND status = '1'", [$alias]);

        $galleries = \R::getAll("SELECT * 
                   FROM gallery
                   WHERE product_id = ?", [$product[0]['id']]);

        $tour_programs = \R::getAll("SELECT * 
                    FROM tour_program_content
                    WHERE product_id = ?", [$product[0]['id']]);


        $prices = \R::getAll("SELECT *
                  FROM price
                  WHERE product_id = ?", [$product[0]['id']]);

        if(!$product) {
            throw new \Exception('Страница не найдена', 404);
        }


        $this->setMeta($alias);
        $this->set(compact('product', 'galleries', 'tour_programs', 'prices'));
    }
}