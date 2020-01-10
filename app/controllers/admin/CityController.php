<?php


namespace app\controllers\admin;


use app\models\AppModel;
use travel\libs\Pagination;
use travel\App;
use app\models\admin\Product;

class CityController extends AppController {

    public function indexAction() {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 10;
        $count = \R::count('product' );
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $cities = \R::getAll("SELECT * 
                FROM city
                LIMIT $start, $perpage");
        $this->setMeta('Список стран');
        $this->set(compact('cities', 'pagination', 'count'));
    }



    public function addAction() {
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            debug($name);
            $result = \R::exec("INSERT INTO city(name) VALUE('$name')");
            if ($result) {
                $_SESSION['success'] = 'Товар добавлен';
            }
        }

        $this->set(compact('cities'));
        $this->setMeta('Новая страна');
    }

    public function deleteAction(){
        \R::exec("DELETE FROM city WHERE city_id = ?", [$_GET['id']]);
        $_SESSION['success'] = 'Страна удалена';
        redirect(ADMIN . '/city');

    }

}