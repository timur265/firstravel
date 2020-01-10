<?php


namespace app\controllers;




class NewController extends AppController {

    public function postAction() {
        $alias = $this->route['alias'];
        $new = \R::getAll("SELECT title, content, img, img2, DATE_FORMAT(date, '%d.%m.%Y') as date, alias
                FROM news
                 WHERE alias = ?", [$alias]);

        if(!$new) {
            throw new \Exception(' не найдена', 404);
        }

        $this->set(compact('new'));
        $this->setMeta($alias);
    }
}